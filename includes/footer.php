<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-info">
                <h3>Aravindhan Radhakrishnan</h3>
                <p class="footer-description">Full Stack Developer specializing in PHP, Laravel, and modern web technologies.</p>
                <div class="contact-info">
                    <a href="mailto:<?php echo EMAIL; ?>" class="contact-link">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo EMAIL; ?></span>
                    </a>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" class="contact-link">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                    </a>
                </div>
            </div>
            
            <div class="footer-links">
                <div class="footer-nav">
                    <h4>Quick Links</h4>
                    <?php foreach ($navItems as $id => $label): ?>
                        <a href="#<?php echo $id; ?>"><?php echo $label; ?></a>
                    <?php endforeach; ?>
                </div>
                
                <div class="footer-resources">
                    <h4>Resources</h4>
                    <a href="<?php echo RESUME_URL; ?>" target="_blank">
                        <i class="fas fa-file-alt"></i>
                        <span>Resume</span>
                    </a>
                    <a href="<?php echo LINKEDIN_URL; ?>" target="_blank">
                        <i class="fab fa-linkedin"></i>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Aravindhan Radhakrishnan. All rights reserved.</p>
            <div class="social-links">
                <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/yourusername" target="_blank" aria-label="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://twitter.com/yourusername" target="_blank" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</footer>