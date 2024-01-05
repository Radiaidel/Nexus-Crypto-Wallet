<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <!-- Inclure le CDN de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-4 text-center">Verify Email</h2>
        <p class="text-gray-600 text-center mb-6">An email with a verification code has been sent to your email address.</p>
        <form action="<?php echo URLROOT; ?>/users/verify" method="post">
            <div class="mb-4">
                <label for="verificationCode" class="block text-gray-700 text-sm font-bold mb-2">Enter Verification Code:</label>
                <input type="text" id="verificationCode" name="verificationCode" required
                    class="w-full px-3 py-2 border rounded border-gray-300 focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex items-center justify-center">
                <input type="submit" value="Verify"
                    class="bg-blue-500 text-white px-4 py-2 rounded focus:outline-none focus:shadow-outline-blue hover:bg-blue-600">
            </div>
        </form>
    </div>

</body>

</html>
