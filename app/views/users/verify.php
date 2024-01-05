<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Verify Email</h2>
<p>An email with a verification code has been sent to your email address.</p>
<form action="<?php echo URLROOT; ?>/users/verify" method="post">
    <label for="verificationCode">Enter Verification Code:</label>
    <input type="text" id="verificationCode" name="verificationCode" required>
    <input type="submit" value="Verify">
</form>
</body>
</html>