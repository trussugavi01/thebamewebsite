#!/bin/sh
set -e

# Create supervisor log directory
mkdir -p /var/log/supervisor

# Wait for database to be ready (if DB_HOST is set)
db_ready=false
if [ -n "$DB_HOST" ]; then
    echo "Waiting for database connection..."
    max_attempts=15
    attempt=0
    while [ $attempt -lt $max_attempts ]; do
        if php -r "try { new PDO('pgsql:host=' . getenv('DB_HOST') . ';port=' . (getenv('DB_PORT') ?: '5432') . ';dbname=' . getenv('DB_DATABASE'), getenv('DB_USERNAME'), getenv('DB_PASSWORD')); echo 'connected'; exit(0); } catch (Exception \$e) { echo \$e->getMessage(); exit(1); }" 2>&1; then
            echo "Database is ready!"
            db_ready=true
            break
        fi
        attempt=$((attempt + 1))
        echo "Waiting for database... attempt $attempt/$max_attempts"
        sleep 3
    done
    if [ "$db_ready" = false ]; then
        echo "WARNING: Could not connect to database after $max_attempts attempts. Starting anyway..."
    fi
fi

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    echo "Generating application key..."
    php artisan key:generate --force || echo "Key generation failed, continuing..."
fi

# Run database migrations (only if database is ready)
if [ "$db_ready" = true ]; then
    echo "Running database migrations..."
    php artisan migrate --force || echo "Migration failed, continuing..."
else
    echo "Skipping migrations - database not available"
fi

# Create storage link if it doesn't exist
if [ ! -L "/var/www/html/public/storage" ]; then
    echo "Creating storage link..."
    php artisan storage:link
fi

# Cache configuration for production
if [ "$APP_ENV" = "production" ]; then
    echo "Caching configuration..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    php artisan event:cache
fi

# Clear any stale cache
php artisan cache:clear 2>/dev/null || true

echo "Starting application..."
exec /usr/bin/supervisord -c /etc/supervisord.conf
