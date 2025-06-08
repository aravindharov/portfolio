<?php
$skills = [
    [
        'icon' => 'fas fa-code',
        'title' => 'Frontend',
        'description' => 'HTML5, CSS3, JavaScript, Bootstrap, Responsive Design'
    ],
    [
        'icon' => 'fas fa-database',
        'title' => 'Backend',
        'description' => 'PHP, MySQL, RESTful APIs, API Integration'
    ],
    [
        'icon' => 'fas fa-tools',
        'title' => 'Development Tools',
        'description' => 'Git, VS Code, Docker, Postman, Jira, Trello, Slack'
    ],
    [
        'icon' => 'fas fa-server',
        'title' => 'DevOps & Deployment',
        'description' => 'AWS, DigitalOcean, Nginx, Apache, CI/CD, Jenkins'
    ],
    [
        'icon' => 'fas fa-robot',
        'title' => 'AI & LLM',
        'description' => 'OpenAI API, LangChain, Vector Databases, Prompt Engineering'
    ],
    [
        'icon' => 'fas fa-check-circle',
        'title' => 'Best Practices',
        'description' => 'Clean Code, SOLID Principles, Design Patterns, Code Review'
    ]
];
?>

<section id="skills">
    <div class="container">
        <div class="section-header">
            <h2>Skills</h2>
            <div class="section-line"></div>
        </div>
        <div class="skills-grid">
            <?php foreach ($skills as $skill): ?>
                <div class="skill-card">
                    <i class="<?php echo $skill['icon']; ?>"></i>
                    <h3><?php echo $skill['title']; ?></h3>
                    <p><?php echo $skill['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>