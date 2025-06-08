<?php
$aboutData = [
    'description' => "I'm a passionate Full Stack Developer with 6+ years of experience in building robust web applications. Currently working at Tart Labs, I specialize in PHP, Laravel, and modern web technologies.",
    'expertise' => [
        'Designing and implementing complex database schemas',
        'Developing RESTful APIs and microservices',
        'Building modern, responsive user interfaces',
        'Implementing real-time features and WebSocket applications',
        'Leading development teams and mentoring junior developers'
    ],
    'closing' => "I'm always eager to learn new technologies and best practices to deliver high-quality solutions."
];
?>

<section id="about">
    <div class="container">
        <div class="section-header">
            <h2>About Me</h2>
            <div class="section-line"></div>
        </div>
        <div class="about-content">
            <p><?php echo $aboutData['description']; ?></p>
            <p>My expertise includes:</p>
            <ul>
                <?php foreach ($aboutData['expertise'] as $item): ?>
                    <li><?php echo $item; ?></li>
                <?php endforeach; ?>
            </ul>
            <p><?php echo $aboutData['closing']; ?></p>
        </div>
    </div>
</section>