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

/**
 * Get a project's image URL, preferring the site's own meta image.
 * Falls back to the configured 'image' key, then to a generic local image.
 */
function getProjectImageUrl(array $project)
{
    static $cache = [];

    if (isset($project['url'], $cache[$project['url']])) {
        return $cache[$project['url']];
    }

    $imageUrl = $project['image'] ?? '';

    if (!empty($project['url'])) {
        $metaImage = null;
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'timeout' => 3,
                'header' => "User-Agent: PortfolioBot/1.0\r\n",
            ],
            'ssl' => [
                'verify_peer' => true,
                'verify_peer_name' => true,
            ],
        ]);

        $html = @file_get_contents($project['url'], false, $context);

        if ($html !== false) {
            if (preg_match('/<meta[^>]+property=["\']og:image["\'][^>]*content=["\']([^"\']+)["\']/i', $html, $matches) ||
                preg_match('/<meta[^>]+name=["\']twitter:image["\'][^>]*content=["\']([^"\']+)["\']/i', $html, $matches)
            ) {
                $metaImage = $matches[1];
            }
        }

        if (!empty($metaImage)) {
            $parsedUrl = parse_url($project['url']);
            $origin = '';

            if ($parsedUrl && isset($parsedUrl['scheme'], $parsedUrl['host'])) {
                $origin = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
                if (isset($parsedUrl['port'])) {
                    $origin .= ':' . $parsedUrl['port'];
                }
            }

            if (strpos($metaImage, '//') === 0) {
                $metaImage = 'https:' . $metaImage;
            } elseif (!empty($origin) && isset($metaImage[0]) && $metaImage[0] === '/') {
                $metaImage = $origin . $metaImage;
            }

            $imageUrl = $metaImage;
        }
    }

    // Final hard fallback if nothing was resolved
    if ($imageUrl === '' || $imageUrl === null) {
        $imageUrl = SITE_URL . '/assets/images/profile.jpg';
    }

    $cacheKey = $project['url'] ?? (string)json_encode($project);
    $cache[$cacheKey] = $imageUrl;

    return $imageUrl;
}
