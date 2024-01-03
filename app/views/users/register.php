<?php require APPROOT . '/views/inc/header.php'; ?>

<style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 50px;
    }

    .card {
        border: 1px solid #17a2b8;
    }

    .card-header {
        background-color: #17a2b8;
        color: #fff;
    }

    .card-body {
        padding: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        color: #17a2b8;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"] {
        background-color: #e9f5f7;
        border: 1px solid #17a2b8;
        color: #495057;
        padding: 10px;
        border-radius: 5px;
        transition: border-color 0.3s ease-in-out;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus,
    input[type="date"]:focus {
        background-color: #fff;
        border: 1px solid #28a745;
    }

    .btn-success {
        background-color: #28a745;
        color: #fff;
        border: none;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-light {
        background-color: #f8f9fa;
        border: 1px solid #17a2b8;
        color: #17a2b8;
    }

    .btn-light:hover {
        background-color: #e2e6ea;
    }

    .invalid-feedback {
        color: #dc3545;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputFields = document.querySelectorAll('.form-control');
        inputFields.forEach(function (input) {
            input.addEventListener('focus', function () {
                this.style.borderColor = '#28a745';
            });
            input.addEventListener('blur', function () {
                this.style.borderColor = '#17a2b8';
            });
        });

        const form = document.querySelector('form');
        form.addEventListener('submit', function (event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });

        function validateForm() {
            const firstName = document.querySelector('[name="FirstName"]').value;
            const lastName = document.querySelector('[name="LastName"]').value;
            const dateOfBirth = document.querySelector('[name="DateOfBirth"]').value;
            const email = document.querySelector('[name="Email"]').value;
            const password = document.querySelector('[name="password"]').value;

            if (firstName.trim() === '' || lastName.trim() === '' || dateOfBirth.trim() === '' || email.trim() === '' || password.trim() === '') {
                alert('All fields are required');
                return false;
            }

            // Add more complex validation logic as needed

            return true;
        }
    });
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Register</h2>
                </div>
                <div class="card-body">
                    <form action="<?php echo URLROOT; ?>/users/register" method="post">

                        <!-- First Name -->
                        <div class="form-group">
                            <label for="FirstName">First Name: <sup>*</sup></label>
                            <input type="text" name="FirstName" class="form-control <?php echo (!empty($data['FirstName_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['FirstName']; ?>">
                            <span class="invalid-feedback"><?php echo $data['FirstName_err']; ?></span>
                        </div>

                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="LastName">Last Name: <sup>*</sup></label>
                            <input type="text" name="LastName" class="form-control <?php echo (!empty($data['LastName_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['LastName']; ?>">
                            <span class="invalid-feedback"><?php echo $data['LastName_err']; ?></span>
                        </div>

                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="DateOfBirth">Date of Birth: <sup>*</sup></label>
                            <input type="date" name="DateOfBirth" class="form-control <?php echo (!empty($data['DateOfBirth_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['DateOfBirth']; ?>">
                            <span class="invalid-feedback"><?php echo $data['DateOfBirth_err']; ?></span>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="Email">Email: <sup>*</sup></label>
                            <input type="email" name="Email" class="form-control <?php echo (!empty($data['Email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['Email']; ?>">
                            <span class="invalid-feedback"><?php echo $data['Email_err']; ?></span>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password: <sup>*</sup></label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-row">
                            <div class="col">
                                <input type="submit" value="Register" class="btn btn-success btn-block">
                            </div>
                            <div class="col">
                                <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
