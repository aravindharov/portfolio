<?php
// Site configuration
define('SITE_NAME', 'Aravindhan Radhakrishnan - Portfolio');
define('SITE_URL', 'https://portfolio-ysn2.onrender.com');

// Contact information
define('WHATSAPP_NUMBER', '918072396968');
define('EMAIL', 'balaaravindh96@gmail.com');

// Social media links
define('LINKEDIN_URL', 'https://www.linkedin.com/in/aravindhan-radhakrishnan/');
define('RESUME_URL', SITE_URL . '/assets/resume.pdf');

// Client projects
$clientProjects = [
    [
        'title' => 'Archer Review',
        'url' => 'https://www.archerreview.com/',
        'image' => SITE_URL . '/assets/images/archerreview.jpg',
        'description' => 'Review and learning platform with a focus on high performance and user-friendly navigation.'
    ],
    [
        'title' => 'Nexus Assurance',
        'url' => 'https://app.nexusassurance.com/',
        'image' => SITE_URL . '/assets/images/nexusassurance.png',
        'description' => 'Insurance and assurance services site with clear service breakdowns and lead capture forms.'
    ],
    [
        'title' => 'Shop Humm (Canada)',
        'url' => 'https://www.shophumm.com/en-ca/',
        'image' => SITE_URL . '/assets/images/shophumm.png',
        'description' => 'Flexible payment solution platform focused on a smooth ecommerce and onboarding experience.'
    ],
    [
        'title' => 'Isshinryu India',
        'url' => 'https://www.isshinryuindia.in/',
        'image' => SITE_URL . '/assets/images/isshinryuindia.jpg',
        'description' => 'Martial arts academy website built for Isshinryu India, featuring class schedules and contact options.'
    ]
];

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
