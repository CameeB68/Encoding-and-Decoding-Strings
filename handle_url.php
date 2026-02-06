<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>URL Encode Results</title>
</head>
<body>

<h1>URL Encoding Results</h1>

<?php
// Step 1: Get the original message
$message = $_GET['message'];

// Step 2: Encode the message
$encoded_message = urlencode($message);

// Step 3: Decode the message
$decoded_message = urldecode($encoded_message);

// Step 4: Display results
echo "<p><strong>Original Message:</strong> $message</p>";
echo "<p><strong>Encoded Message:</strong> $encoded_message</p>";
echo "<p><strong>Decoded Message:</strong> $decoded_message</p>";
?>

</body>
</html>
