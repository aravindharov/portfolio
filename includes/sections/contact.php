<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Initialize variables
$formErrors = [
    'name' => '',
    'email' => '',
    'message' => ''
];
$storedData = [
    'name' => '',
    'email' => '',
    'message' => ''
];

// Handle contact form POST before any output
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $storedData['name'] = sanitizeInput($_POST['name']);
    $storedData['email'] = sanitizeInput($_POST['email']);
    $storedData['message'] = sanitizeInput($_POST['message']);

    $formErrors['name'] = empty($storedData['name']) ? 'Name is required' : '';
    $formErrors['email'] = empty($storedData['email']) ? 'Email is required' : (!validateEmail($storedData['email']) ? 'Please enter a valid email address' : '');
    $formErrors['message'] = empty($storedData['message']) ? 'Message is required' : '';

    if (empty($formErrors['name']) && empty($formErrors['email']) && empty($formErrors['message'])) {
        $formattedMessage = formatWhatsAppMessage($storedData['name'], $storedData['email'], $storedData['message']);
        $whatsappUrl = getWhatsAppUrl($formattedMessage);
        header("Location: $whatsappUrl");
        exit;
    }
}
?>

<section id="contact">
    <div class="container">
        <div class="section-header">
            <h2>Get in Touch</h2>
            <div class="section-line"></div>
        </div>
        <div class="contact-content">
            <?php if (isset($formErrors['general'])): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php echo $formErrors['general']; ?>
                </div>
            <?php endif; ?>

            <form id="contact-form" method="POST" action="#contact" novalidate>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required
                        value="<?php echo htmlspecialchars($storedData['name']); ?>"
                        placeholder="Your name"
                        class="<?php echo !empty($formErrors['name']) ? 'error' : ''; ?>">
                    <?php if (!empty($formErrors['name'])): ?>
                        <div class="field-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <?php echo $formErrors['name']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required
                        value="<?php echo htmlspecialchars($storedData['email']); ?>"
                        placeholder="your.email@example.com"
                        class="<?php echo !empty($formErrors['email']) ? 'error' : ''; ?>">
                    <?php if (!empty($formErrors['email'])): ?>
                        <div class="field-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <?php echo $formErrors['email']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required
                        placeholder="Your message here..."
                        class="<?php echo !empty($formErrors['message']) ? 'error' : ''; ?>"><?php echo htmlspecialchars($storedData['message']); ?></textarea>
                    <?php if (!empty($formErrors['message'])): ?>
                        <div class="field-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <?php echo $formErrors['message']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <button type="submit">
                    <i class="fab fa-whatsapp"></i>
                    Send Message via WhatsApp
                </button>
            </form>

            <div class="contact-info">
                <h3>Other Ways to Connect</h3>
                <p>Feel free to reach out through any of these channels:</p>
                <ul>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a>
                    </li>
                    <li>
                        <i class="fab fa-linkedin"></i>
                        <a href="<?php echo LINKEDIN_URL; ?>" target="_blank">LinkedIn Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>