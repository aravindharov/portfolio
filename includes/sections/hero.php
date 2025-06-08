<?php
$heroData = [
    'name' => 'Aravindhan Radhakrishnan',
    'title' => 'Full Stack Developer',
    'description' => 'I craft robust web applications with a focus on clean code and user experience. Specializing in PHP, Laravel, and modern web technologies.'
];
?>

<section id="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Hi, I'm <span class="highlight"><?php echo $heroData['name']; ?></span></h1>
                <p class="subtitle"><?php echo $heroData['title']; ?></p>
                <p class="description"><?php echo $heroData['description']; ?></p>
                <div class="hero-buttons">
                    <a href="#contact" class="primary-btn">Get in Touch</a>
                    <a href="<?php echo RESUME_URL; ?>" target="_blank" class="resume-btn">
                        <i class="fas fa-file-alt"></i> Resume
                    </a>
                    <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" class="secondary-btn">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-container">
                    <img src="assets/images/profile.jpg" alt="<?php echo $heroData['name']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>