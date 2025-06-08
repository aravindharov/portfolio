<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-info">
                <h3>Aravindhan Radhakrishnan</h3>
                <p class="footer-email"><?php echo EMAIL; ?></p>
            </div>
            <div class="footer-links">
                <div class="footer-nav">
                    <?php foreach ($navItems as $id => $label): ?>
                        <a href="#<?php echo $id; ?>"><?php echo $label; ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="social-links">
                    <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="mailto:<?php echo EMAIL; ?>" aria-label="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Aravindhan Radhakrishnan. All rights reserved.</p>
        </div>
    </div>
</footer>