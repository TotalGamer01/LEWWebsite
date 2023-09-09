<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Check if the user-agent string contains keywords commonly found in mobile devices
$isMobile = (
    stripos($userAgent, 'Mobile') !== false ||
    stripos($userAgent, 'Android') !== false ||
    stripos($userAgent, 'iPhone') !== false ||
    stripos($userAgent, 'iPad') !== false ||
    stripos($userAgent, 'Windows Phone') !== false
);

if ($isMobile) {
    // Redirect mobile users to the mobile version of the site
    header('Location: mobile.html'); // Replace with the actual URL of your mobile version
    exit;
} else {
    // Display content for desktop users
    // You can include your desktop content here
}
?>
