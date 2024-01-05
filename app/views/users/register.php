<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">

</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h2 class="text-2xl font-bold mb-4 text-center">Register</h2>
                    <form action="<?php echo URLROOT; ?>/users/register" method="post" class="space-y-4">

                        <!-- First Name -->
                        <div>
                            <label for="FirstName" class="block text-gray-700 text-sm font-bold mb-2">First Name:
                                <sup>*</sup></label>
                            <input type="text" name="FirstName"
                                class="w-full px-3 py-2 border rounded border-gray-300 focus:outline-none focus:border-green-500 <?php echo (!empty($data['FirstName_err'])) ? 'border-red-500' : ''; ?>"
                                value="<?php echo $data['FirstName']; ?>">
                            <span class="text-red-500 text-sm">
                                <?php echo $data['FirstName_err']; ?>
                            </span>
                        </div>

                        <!-- Last Name -->
                        <div>
                            <label for="LastName" class="block text-gray-700 text-sm font-bold mb-2">Last Name:
                                <sup>*</sup></label>
                            <input type="text" name="LastName"
                                class="w-full px-3 py-2 border rounded border-gray-300 focus:outline-none focus:border-green-500 <?php echo (!empty($data['LastName_err'])) ? 'border-red-500' : ''; ?>"
                                value="<?php echo $data['LastName']; ?>">
                            <span class="text-red-500 text-sm">
                                <?php echo $data['LastName_err']; ?>
                            </span>
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label for="DateOfBirth" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth:
                                <sup>*</sup></label>
                            <input type="date" name="DateOfBirth"
                                class="w-full px-3 py-2 border rounded border-gray-300 focus:outline-none focus:border-green-500 <?php echo (isset($data['DateOfBirth_err']) && !empty($data['DateOfBirth_err'])) ? 'border-red-500' : ''; ?>"
                                value="<?php echo isset($data['DateOfBirth']) ? $data['DateOfBirth'] : ''; ?>">
                            <span class="text-red-500 text-sm">
                                <?php echo isset($data['DateOfBirth_err']) ? $data['DateOfBirth_err'] : ''; ?>
                            </span>
                        </div>


                        <!-- Email -->
                        <div>
                            <label for="Email" class="block text-gray-700 text-sm font-bold mb-2">Email:
                                <sup>*</sup></label>
                            <input type="email" name="Email"
                                class="w-full px-3 py-2 border rounded border-gray-300 focus:outline-none focus:border-green-500 <?php echo (!empty($data['Email_err'])) ? 'border-red-500' : ''; ?>"
                                value="<?php echo $data['Email']; ?>">
                            <span class="text-red-500 text-sm">
                                <?php echo $data['Email_err']; ?>
                            </span>
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:
                                <sup>*</sup></label>
                            <input type="password" name="password"
                                class="w-full px-3 py-2 border rounded border-gray-300 focus:outline-none focus:border-green-500 <?php echo (!empty($data['password_err'])) ? 'border-red-500' : ''; ?>"
                                value="<?php echo $data['password']; ?>">
                            <span class="text-red-500 text-sm">
                                <?php echo $data['password_err']; ?>
                            </span>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-green-500 text-white px-4 py-2 rounded focus:outline-none focus:shadow-outline-green hover:bg-green-600">
                                Register
                            </button>
                            <a href="<?php echo URLROOT; ?>/users/login" class="text-gray-600 hover:text-gray-800">Have
                                an account? Login</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>

</html>