<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title><?php echo SITENAME; ?></title>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 py-8 bg-white shadow-md rounded-lg">

        <h2 class="text-3xl font-semibold mb-6 text-center">Login</h2>
        <p class="text-gray-600 mb-6 text-center">Please fill in your credentials to log in</p>

        <form action="<?php echo URLROOT; ?>/users/login" method="post">

            <div class="mb-4">
                <label for="Email" class="block text-gray-700 text-sm font-medium mb-2">Email: <sup>*</sup></label>
                <input type="email" name="Email"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-500 <?php echo (!empty($data['Email_err'])) ? 'border-red-500' : ''; ?>"
                    value="<?php echo $data['Email']; ?>">
                <p class="text-red-500 text-xs italic"><?php echo $data['Email_err']; ?></p>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password: <sup>*</sup></label>
                <input type="password" name="password"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-500 <?php echo (!empty($data['password_err'])) ? 'border-red-500' : ''; ?>"
                    value="<?php echo $data['password']; ?>">
                <p class="text-red-500 text-xs italic"><?php echo $data['password_err']; ?></p>
            </div>

            <div class="flex justify-between items-center mb-6">
                <button type="submit"
                    class="w-full bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none hover:bg-green-700">
                    Login
                </button>
            </div>

            <div class="text-center">
                <a href="<?php echo URLROOT; ?>/users/register"
                    class="text-gray-600 text-sm hover:underline">No account? Register</a>
            </div>

        </form>

    </div>

    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>

</html>