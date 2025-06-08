<?php

/**
 * Format WhatsApp message
 */
function formatWhatsAppMessage($name, $email, $message)
{
    return "Name: {$name}%0AEmail: {$email}%0AMessage: {$message}";
}

/**
 * Get WhatsApp URL
 */
function getWhatsAppUrl($message)
{
    return "https://wa.me/" . WHATSAPP_NUMBER . "?text=" . $message;
}

/**
 * Sanitize input
 */
function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Validate email
 */
function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
