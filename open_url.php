<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    // Validate the URL (optional)
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Use header() to redirect to the entered URL
        header("Location: $url");
        exit();
    } else {
        echo "Invalid URL. Please enter a valid URL.";
    }
}
?>
