<?php
// Start session if needed
session_start();

// Include configuration and functions
require_once 'includes/config.php';
require_once 'includes/functions.php';

$formErrors = $formErrors ?? ['name' => '', 'email' => '', 'message' => ''];
$storedData = $storedData ?? ['name' => '', 'email' => '', 'message' => ''];

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aravindhan Radhakrishnan - Portfolio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <?php
        include 'includes/sections/hero.php';
        include 'includes/sections/about.php';
        include 'includes/sections/experience.php';
        include 'includes/sections/skills.php';
        include 'includes/sections/contact.php';
        ?>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/script.js"></script>
</body>

</html>