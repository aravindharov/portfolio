<?php
$experiences = [
    [
        'title' => 'Web Developer',
        'company' => 'Tart Labs',
        'duration' => 'Dec 2022 - Present',
        'responsibilities' => [
            'Working with multiple databases (MySQL, PostgreSQL, MongoDB) to design and implement complex data models',
            'Developing robust applications using Laravel and Symfony frameworks',
            'Implementing unit testing and continuous integration practices',
            'Integrating various APIs and third-party services',
            'Collaborating with cross-functional teams in an Agile environment'
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'company' => 'App Innovation Technology',
        'duration' => 'Jul 2021 - Dec 2022',
        'responsibilities' => [
            'Designed and implemented complex database schemas for large-scale applications',
            'Developed user management systems with role-based access control',
            'Implemented group management features and real-time notifications',
            'Optimized application performance and database queries',
            'Mentored junior developers and conducted code reviews'
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'company' => 'Byzero Technologies',
        'duration' => 'May 2019 - Jul 2021',
        'responsibilities' => [
            'Implemented real-time lead prioritization system using WebSocket',
            'Developed modern user interfaces using React and Vue.js',
            'Built RESTful APIs for mobile and web applications',
            'Led a team of 3 developers in delivering multiple projects',
            'Implemented CI/CD pipelines for automated testing and deployment'
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'company' => 'Freelance',
        'duration' => '2023 - Present',
        'responsibilities' => [
            'Developed and maintained websites for various clients across different industries',
            'Created custom e-commerce solutions using PHP and Laravel',
            'Implemented responsive designs and optimized website performance',
            'Provided technical consultation and project management services',
            'Built and maintained client relationships while delivering projects on time'
        ]
    ]
];
?>

<section id="experience">
    <div class="container">
        <div class="section-header">
            <h2>Experience</h2>
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