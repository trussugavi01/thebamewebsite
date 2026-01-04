# Deployment Guide

This guide explains how to deploy The Bame Website to various hosting platforms.

---

# Option 1: Coolify with Docker (Recommended)

## Prerequisites

- Coolify instance (self-hosted or cloud)
- Git repository connected to Coolify
- PostgreSQL database (can be created in Coolify)

## Step 1: Create PostgreSQL Database in Coolify

1. In Coolify dashboard, go to **Resources** → **New** → **Database**
2. Select **PostgreSQL**
3. Configure the database name (e.g., `bame_db`)
4. Note the connection details provided by Coolify

## Step 2: Deploy the Application

1. In Coolify, go to **Resources** → **New** → **Application**
2. Select your Git provider and repository
3. Choose **Dockerfile** as the build pack
4. Coolify will automatically detect the `Dockerfile` in the project root

## Step 3: Configure Environment Variables

In the application settings, add these environment variables:

```env
APP_NAME="The BAME Website"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

# Database - Link to your PostgreSQL resource or set manually
DB_CONNECTION=pgsql
DB_HOST=<postgresql-host>
DB_PORT=5432
DB_DATABASE=<database-name>
DB_USERNAME=<username>
DB_PASSWORD=<password>

# Session & Cache
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database

# Mail (configure with your provider)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="${APP_NAME}"
```

> **Tip:** If you link the PostgreSQL database resource to your application in Coolify, it will automatically inject the `POSTGRESQL_*` environment variables.

## Step 4: Configure Persistent Storage (Optional)

For file uploads to persist across deployments:

1. Go to application **Settings** → **Storages**
2. Add a volume mount:
   - **Source:** `/data/bame-storage`
   - **Destination:** `/var/www/html/storage/app/public`

## Step 5: Deploy

1. Click **Deploy** in Coolify
2. The entrypoint script will automatically:
   - Wait for database connection
   - Run migrations
   - Create storage link
   - Cache configuration
3. Monitor the deployment logs for any issues

## Step 6: Set Up Domain & SSL

1. Go to application **Settings** → **Domains**
2. Add your domain
3. Enable **HTTPS** (Coolify handles Let's Encrypt automatically)

## Updating the Application

Simply push to your Git repository. Coolify will automatically rebuild and redeploy.

## Troubleshooting Coolify Deployment

### Container won't start
- Check deployment logs in Coolify
- Verify all environment variables are set
- Ensure PostgreSQL database is running

### Database connection failed
- Verify DB_HOST points to the correct PostgreSQL container/service
- Check if the database exists
- Verify credentials

### Assets not loading
- Ensure APP_URL matches your domain
- Check that the build step completed successfully

---

# Option 2: Hostinger Shared Hosting

This section explains how to deploy to Hostinger shared hosting.

## Prerequisites

- Hostinger shared hosting account with PHP 8.2+
- MySQL database created via Hostinger hPanel
- FTP access or File Manager access
- SSH access (optional but recommended)

## Step 1: Prepare Your Local Environment

### Build Frontend Assets
```bash
npm install
npm run build
```

### Install Production Dependencies
```bash
composer install --optimize-autoloader --no-dev
```

## Step 2: Configure Environment

1. Copy `.env.production` to `.env` on your server
2. Update the following values in `.env`:

```env
APP_KEY=        # Generate with: php artisan key:generate --show
APP_URL=https://yourdomain.com

DB_DATABASE=your_hostinger_database_name
DB_USERNAME=your_hostinger_database_user
DB_PASSWORD=your_hostinger_database_password

MAIL_USERNAME=your_email@yourdomain.com
MAIL_PASSWORD=your_email_password
MAIL_FROM_ADDRESS=noreply@yourdomain.com
```

## Step 3: Upload Files to Hostinger

### Option A: Upload to public_html (Recommended)

Upload the **entire project** to `public_html/`:

```
public_html/
├── .htaccess          (root htaccess - redirects to public/)
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
│   ├── .htaccess      (Laravel's htaccess)
│   ├── index.php
│   └── build/
├── resources/
├── routes/
├── storage/
├── vendor/
├── .env
└── ...
```

### Option B: Upload to a Subdirectory

If deploying to a subdirectory (e.g., `public_html/thebame/`):
1. Upload all files to that directory
2. Update `APP_URL` accordingly

## Step 4: Set Directory Permissions

Via SSH or File Manager, set these permissions:

```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

Or via File Manager:
- `storage/` → 755 (recursive)
- `bootstrap/cache/` → 755

## Step 5: Database Setup

### If Using MySQL (Recommended for Production)

1. Create a MySQL database in Hostinger hPanel
2. Update `.env` with database credentials
3. Run migrations via SSH:

```bash
cd public_html
php artisan migrate --force
```

Or via Hostinger's PHP terminal:
```bash
php artisan migrate --force
```

### If Continuing with SQLite

1. Ensure `database/database.sqlite` is uploaded
2. Set permissions: `chmod 664 database/database.sqlite`
3. Set directory permissions: `chmod 775 database/`

## Step 6: Optimize for Production

Run these commands via SSH:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
```

Or use the composer script:
```bash
composer production:optimize
```

## Step 7: Create Storage Link

```bash
php artisan storage:link
```

If this fails on shared hosting, manually create a symbolic link:
1. Delete `public/storage` if it exists
2. In File Manager, create a symbolic link from `public/storage` → `../storage/app/public`

## Step 8: Final Checks

1. Visit your domain to verify the site loads
2. Check `storage/logs/laravel.log` for any errors
3. Test all major functionality

## Troubleshooting

### 500 Internal Server Error
- Check `storage/logs/laravel.log`
- Verify `.env` file exists and has correct values
- Ensure `APP_KEY` is set
- Check directory permissions

### Blank Page
- Enable debug temporarily: `APP_DEBUG=true`
- Check PHP error logs in hPanel

### CSS/JS Not Loading
- Verify `npm run build` was executed
- Check `public/build/` directory exists
- Ensure `APP_URL` is correct

### Database Connection Failed
- Verify database credentials in `.env`
- Check if database exists in hPanel
- Hostinger MySQL host is usually `localhost`

### Storage/Uploads Not Working
- Run `php artisan storage:link`
- Check `storage/` permissions

## Updating the Site

1. Upload changed files via FTP/File Manager
2. If dependencies changed: `composer install --no-dev`
3. If frontend changed: `npm run build` locally, upload `public/build/`
4. Clear caches:
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```
5. Re-optimize:
```bash
composer production:optimize
```

## Security Recommendations

1. **Never set `APP_DEBUG=true` in production**
2. **Keep `.env` secure** - it should not be accessible via browser
3. **Regularly update dependencies**
4. **Enable HTTPS** via Hostinger hPanel (free SSL)
5. **Set strong database passwords**

## File Structure Reference

```
your-domain.com (public_html/)
├── .htaccess              ← Redirects to public/
├── .env                   ← Production environment
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
│   ├── .htaccess          ← Laravel routing
│   ├── index.php          ← Entry point
│   ├── build/             ← Compiled assets
│   ├── images/
│   └── fonts/
├── resources/
├── routes/
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
└── vendor/
```
