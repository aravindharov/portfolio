<?php
$experiences = [
    [
        'title' => 'Freelance Full Stack Developer',
        'company' => 'Independent Consultant',
        'duration' => '2023 - Present',
        'responsibilities' => [
            'Delivered 15+ custom web solutions for clients across various industries',
            'Developed scalable e-commerce platforms using Laravel, handling 10,000+ daily transactions',
            'Implemented responsive designs and performance optimizations, achieving 90+ Google PageSpeed scores',
            'Provided technical consultation and project management, maintaining 100% client satisfaction',
            'Built and maintained client relationships while consistently delivering projects ahead of schedule'
        ]
    ],
    [
        'title' => 'Senior Backend Developer',
        'company' => 'Tart Labs',
        'duration' => 'Dec 2022 - Present',
        'responsibilities' => [
            'Architected and implemented scalable database solutions using MySQL and PostgreSQL, resulting in 40% improved query performance',
            'Led the development of enterprise-grade applications using Laravel, implementing SOLID principles and design patterns',
            'Established comprehensive CI/CD pipelines with automated testing, reducing deployment time by 60%',
            'Spearheaded the integration of third-party APIs and services, enhancing application functionality and user experience',
            'Mentored a team of 4 developers, conducting code reviews and implementing best practices',
            'Optimized application performance through code refactoring and database query optimization',
            'Implemented robust security measures and data encryption protocols'
        ]
    ],
    [
        'title' => 'PHP Developer',
        'company' => 'App Innovation Technology',
        'duration' => 'Jul 2021 - Dec 2022',
        'responsibilities' => [
            'Designed and implemented a scalable user management system with role-based access control, serving 50,000+ users',
            'Developed real-time notification system using WebSocket, reducing message delivery time by 80%',
            'Created RESTful APIs supporting mobile and web applications with 99.9% uptime',
            'Optimized database queries and implemented caching strategies, improving application response time by 45%',
            'Led the implementation of automated testing, achieving 85% code coverage'
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'company' => 'Byzero Technologies',
        'duration' => 'May 2019 - Jul 2021',
        'responsibilities' => [
            'Developed a real-time lead management system using WebSocket, increasing conversion rates by 35%',
            'Built responsive web applications using React and Vue.js, improving user engagement by 50%',
            'Architected and implemented RESTful APIs supporting multiple client applications',
            'Led a team of 3 developers, delivering 12+ projects on time and within budget',
            'Implemented automated deployment pipelines, reducing deployment time by 70%'
        ]
    ]
];
?>

<section id="experience">
    <div class="container">
        <div class="section-header">
            <h2>Professional Experience</h2>
            <div class="section-line"></div>
        </div>
        <div class="experience-grid">
            <?php foreach ($experiences as $experience): ?>
                <div class="experience-card">
                    <div class="experience-header">
                        <div class="company-info">
                            <h3><?php echo $experience['title']; ?></h3>
                            <p class="company"><?php echo $experience['company']; ?></p>
                        </div>
                        <p class="duration"><?php echo $experience['duration']; ?></p>
                    </div>
                    <ul>
                        <?php foreach ($experience['responsibilities'] as $responsibility): ?>
                            <li><?php echo $responsibility; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>