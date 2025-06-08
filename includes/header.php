<?php
$navItems = [
    'hero' => 'Home',
    'about' => 'About',
    'experience' => 'Experience',
    'skills' => 'Skills',
    'contact' => 'Contact'
];
?>
<header>
    <nav>
        <div class="nav-container">
            <div class="logo">AR</div>
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <?php foreach ($navItems as $id => $label): ?>
                    <li><a href="#<?php echo $id; ?>"><?php echo $label; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</header>