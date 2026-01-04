<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use Carbon\Carbon;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Breaking Barriers: The Journey to Inclusive Healthcare Leadership',
                'slug' => 'breaking-barriers-inclusive-healthcare-leadership',
                'excerpt' => 'Exploring how diverse leadership is transforming healthcare delivery and creating more equitable systems for all communities.',
                'content' => '<p>The healthcare sector is experiencing a pivotal transformation as diverse leaders step into roles that were historically inaccessible. This shift is not just about representation—it\'s about fundamentally changing how healthcare is delivered and experienced by all communities.</p>

<p>Research consistently shows that diverse leadership teams make better decisions, are more innovative, and better understand the needs of diverse patient populations. When healthcare leaders reflect the communities they serve, trust increases, health outcomes improve, and systemic barriers begin to crumble.</p>

<h2>The Impact of Representation</h2>

<p>Having Black, Asian, and Minority Ethnic professionals in leadership positions creates a ripple effect throughout healthcare organizations. It sends a powerful message to staff and patients alike that excellence knows no boundaries and that every voice matters in shaping the future of healthcare.</p>

<p>These leaders bring unique perspectives shaped by their lived experiences, enabling them to identify blind spots in care delivery, challenge outdated practices, and champion policies that promote equity. Their presence in boardrooms and executive suites is not just symbolic—it\'s transformative.</p>

<h2>Overcoming Systemic Challenges</h2>

<p>Despite progress, significant barriers remain. Many talented professionals face unconscious bias, lack of mentorship opportunities, and systemic obstacles that slow their career progression. Breaking through these barriers requires intentional action from organizations, including:</p>

<ul>
<li>Implementing transparent promotion processes</li>
<li>Creating mentorship and sponsorship programs</li>
<li>Addressing pay gaps and ensuring equitable compensation</li>
<li>Fostering inclusive workplace cultures</li>
<li>Providing leadership development opportunities</li>
</ul>

<h2>The Path Forward</h2>

<p>The journey to truly inclusive healthcare leadership is ongoing. It requires commitment from all levels of healthcare organizations—from frontline staff to board members. By celebrating the achievements of diverse leaders through initiatives like the National B.A.M.E Health & Care Awards, we not only recognize excellence but also inspire the next generation of healthcare leaders.</p>

<p>As we continue to break down barriers, we move closer to a healthcare system that truly serves everyone with dignity, respect, and excellence.</p>',
                'author_name' => 'Editorial Team',
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(5),
                'meta_title' => 'Breaking Barriers in Healthcare Leadership | B.A.M.E Awards',
                'meta_description' => 'Discover how diverse leadership is transforming healthcare delivery and creating more equitable systems for all communities.',
                'views' => 245,
            ],
            [
                'title' => 'The Power of Mentorship in Healthcare Career Advancement',
                'slug' => 'power-of-mentorship-healthcare-career-advancement',
                'excerpt' => 'How mentorship programs are opening doors and accelerating career growth for minority ethnic professionals in health and social care.',
                'content' => '<p>Mentorship has emerged as one of the most powerful tools for career advancement in healthcare, particularly for Black, Asian, and Minority Ethnic professionals navigating complex organizational structures and overcoming systemic barriers.</p>

<p>A strong mentor-mentee relationship can be transformative, providing guidance, opening doors to opportunities, and offering the support needed to navigate challenging situations. For many professionals from underrepresented backgrounds, having a mentor who understands their unique challenges can make the difference between stagnation and success.</p>

<h2>Why Mentorship Matters</h2>

<p>Mentorship provides several critical benefits:</p>

<ul>
<li><strong>Career Guidance:</strong> Mentors help mentees navigate career paths, identify opportunities, and make strategic decisions about their professional development.</li>
<li><strong>Skill Development:</strong> Through regular interactions, mentees develop both technical and soft skills essential for leadership roles.</li>
<li><strong>Network Expansion:</strong> Mentors introduce mentees to valuable professional networks and connections.</li>
<li><strong>Confidence Building:</strong> Having someone believe in your potential and advocate for you builds confidence and resilience.</li>
<li><strong>Cultural Navigation:</strong> Mentors help mentees understand organizational culture and politics.</li>
</ul>

<h2>Creating Effective Mentorship Programs</h2>

<p>Healthcare organizations looking to support diverse talent should consider implementing structured mentorship programs that:</p>

<ul>
<li>Match mentors and mentees thoughtfully based on goals and compatibility</li>
<li>Provide training for mentors on effective mentorship practices</li>
<li>Set clear expectations and goals for the relationship</li>
<li>Create opportunities for regular interaction and feedback</li>
<li>Measure outcomes and continuously improve the program</li>
</ul>

<h2>Beyond Traditional Mentorship</h2>

<p>While one-on-one mentorship is valuable, organizations should also consider:</p>

<ul>
<li><strong>Sponsorship:</strong> Senior leaders actively advocating for and creating opportunities for talented professionals</li>
<li><strong>Peer Mentoring:</strong> Colleagues at similar career stages supporting each other</li>
<li><strong>Reverse Mentoring:</strong> Junior staff mentoring senior leaders on topics like technology or diversity</li>
<li><strong>Group Mentoring:</strong> Multiple mentees learning from one or more mentors</li>
</ul>

<h2>Success Stories</h2>

<p>The impact of mentorship is evident in the success stories of many award winners and nominees. Time and again, they credit mentors with helping them overcome obstacles, seize opportunities, and achieve their career goals.</p>

<p>As we work toward a more equitable healthcare system, investing in mentorship programs is not just good practice—it\'s essential for developing the diverse leadership our healthcare system needs.</p>',
                'author_name' => 'Dr. Sarah Johnson',
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(12),
                'meta_title' => 'Healthcare Mentorship Programs | Career Advancement',
                'meta_description' => 'Learn how mentorship programs are accelerating career growth for minority ethnic professionals in health and social care.',
                'views' => 189,
            ],
            [
                'title' => 'Addressing Health Inequalities: A Call to Action for Healthcare Professionals',
                'slug' => 'addressing-health-inequalities-call-to-action',
                'excerpt' => 'Understanding and tackling the persistent health inequalities affecting minority ethnic communities across the UK.',
                'content' => '<p>Health inequalities remain one of the most pressing challenges facing the UK healthcare system. Despite significant advances in medical science and healthcare delivery, stark disparities persist in health outcomes between different ethnic groups.</p>

<p>The COVID-19 pandemic brought these inequalities into sharp focus, revealing how systemic factors—from housing conditions to employment patterns—intersect to create disproportionate health risks for minority ethnic communities.</p>

<h2>Understanding the Root Causes</h2>

<p>Health inequalities are not simply about access to healthcare services. They are the result of complex, interconnected factors including:</p>

<ul>
<li><strong>Social Determinants:</strong> Housing quality, employment status, education, and income levels all significantly impact health outcomes.</li>
<li><strong>Systemic Barriers:</strong> Language barriers, cultural insensitivity, and lack of culturally appropriate services can prevent people from accessing care.</li>
<li><strong>Discrimination:</strong> Both overt and unconscious bias in healthcare settings can lead to differential treatment and poorer outcomes.</li>
<li><strong>Health Literacy:</strong> Variations in health literacy and awareness of available services affect how people engage with healthcare.</li>
<li><strong>Trust Issues:</strong> Historical and ongoing experiences of discrimination can erode trust in healthcare institutions.</li>
</ul>

<h2>The Role of Healthcare Professionals</h2>

<p>Healthcare professionals are uniquely positioned to address these inequalities. This requires:</p>

<h3>1. Cultural Competence</h3>
<p>Developing understanding of different cultural backgrounds, beliefs, and practices that influence health behaviors and healthcare engagement.</p>

<h3>2. Advocacy</h3>
<p>Speaking up about inequalities, challenging discriminatory practices, and advocating for policy changes that promote equity.</p>

<h3>3. Community Engagement</h3>
<p>Building relationships with community organizations and leaders to better understand and address local health needs.</p>

<h3>4. Data Collection and Analysis</h3>
<p>Ensuring health data is collected and analyzed by ethnicity to identify and monitor inequalities.</p>

<h3>5. Service Design</h3>
<p>Involving diverse communities in designing and delivering healthcare services that meet their needs.</p>

<h2>Success Stories and Best Practices</h2>

<p>Across the UK, innovative programs are making a difference:</p>

<ul>
<li>Community health worker programs that bridge cultural and linguistic gaps</li>
<li>Culturally tailored health education initiatives</li>
<li>Partnerships between healthcare providers and community organizations</li>
<li>Targeted screening programs for conditions that disproportionately affect certain ethnic groups</li>
<li>Diversity training programs for healthcare staff</li>
</ul>

<h2>Moving Forward</h2>

<p>Addressing health inequalities requires sustained commitment and action at all levels—from individual practitioners to national policymakers. It requires us to:</p>

<ul>
<li>Acknowledge that inequalities exist and understand their root causes</li>
<li>Collect and use data to identify and monitor disparities</li>
<li>Engage with affected communities to understand their needs and experiences</li>
<li>Implement evidence-based interventions</li>
<li>Measure outcomes and continuously improve</li>
<li>Hold ourselves and our organizations accountable</li>
</ul>

<p>The B.I.D.E Summit provides a platform for healthcare professionals to come together, share best practices, and commit to action. By working collaboratively and maintaining focus on equity, we can create a healthcare system that truly serves everyone.</p>

<p>The time for action is now. Every healthcare professional has a role to play in creating a more equitable system. Together, we can make a difference.</p>',
                'author_name' => 'Prof. Michael Chen',
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(20),
                'meta_title' => 'Addressing Health Inequalities in the UK | B.A.M.E Health',
                'meta_description' => 'Understanding and tackling persistent health inequalities affecting minority ethnic communities across the UK healthcare system.',
                'views' => 312,
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
