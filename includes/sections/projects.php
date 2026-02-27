<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>

<section id="projects">
    <div class="container">
        <div class="section-header">
            <h2>Client Projects</h2>
            <div class="section-line"></div>
        </div>

        <div class="projects-grid">
            <?php foreach ($clientProjects as $project): ?>
                <article class="project-card">
                    <div class="project-image-wrapper">
                        <a href="<?php echo $project['url']; ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo htmlspecialchars(getProjectImageUrl($project)); ?>"
                                 alt="Screenshot of <?php echo htmlspecialchars($project['title']); ?> website">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                        <?php if (!empty($project['description'])): ?>
                            <p><?php echo htmlspecialchars($project['description']); ?></p>
                        <?php endif; ?>
                        <a href="<?php echo $project['url']; ?>" target="_blank" rel="noopener noreferrer" class="project-link">
                            <span>View Live Site</span>
                            <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

