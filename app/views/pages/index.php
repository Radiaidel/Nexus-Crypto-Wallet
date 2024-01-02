<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-screen md:flex">
        <div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">JiraWare</h1>
                <p class="text-white mt-1">Dataware Planification Tool</p>
                <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2" id="changeform">Log In</button>
            </div>
            <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white hidden" id="loginform">
            <form class="bg-white" method="post" action="<?php echo URLROOT;?>users/login">
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="logmail" id="" placeholder="Email Address" />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="password" name="logpass" id="" placeholder="Password" />
                </div>
                <input type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2 cursor-pointer" value="Log In" name="login">
            </form>
        </div>
        <!-- sign up -->
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white" id="signform">
            <form class="bg-white" method="post" action="<?php echo URLROOT;?>users/register">
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Welcome</h1>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="fullname" id="fullname" placeholder="Full name" />
                    <span id="regname"></span>
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="email" id="email" placeholder="Email Address" />
                    <span id="regemail"></span>
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="password" name="pass" id="pass" placeholder="Password" />
                </div><br>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="password" name="" id="rpass" placeholder="Confirm Password" />
                    <span id="fullname"></span>
                </div>
                <input type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2 cursor-pointer" value="Sign Up" name="signup">
            </form>
        </div>
    </div>
</body>

</html>

<script>
    let changeform = document.getElementById('changeform');
    let loginform = document.getElementById('loginform');
    let signform = document.getElementById('signform');
    changeform.addEventListener('click', change);

    let toggle = false;

    function change() {

        if (!toggle) {
            console.log('hello');
            signform.classList.add('hidden');
            loginform.classList.remove('hidden');
            toggle = true;
            changeform.innerText = 'Sign up';

        } else {
            console.log('hi');
            signform.classList.remove('hidden');
            loginform.classList.add('hidden');
            toggle = false;
            changeform.innerText = 'Log In';
        }
    }



    /***************************************************** */
    const fullname = document.getElementById('fullname');
    const regname = document.getElementById('regname');
    const email = document.getElementById('email');
    const regemail = document.getElementById('regemail');
    const password = document.getElementById('pass');
    const rpassword = document.getElementById('rpass');
    const emaillog = document.getElementById('emaillog');
    const validname = /^[a-zA-Z]{3,}\s[a-zA-Z]{3,}$/;
    const validemail = /^(([a-zA-Z]{1,})\d{1,}@[a-z]{1,}\.[a-z]{1,3}|[a-z]+@[a-z]+\.[a-z]{1,3})$/;

    fullname.addEventListener('input', e => {
        const inputValue = fullname.value;
        if (validname.test(inputValue)) {
            regname.innerText = 'Name is Valid';
            regname.style.color = 'green';
            regname.style.display = 'block';
        } else {
            regname.innerText = 'Name is Invalid';
            regname.style.color = 'red';
            regname.style.display = 'block';
            e.preventDefault(e);
        }
    });

    email.addEventListener('input', e => {
        const emailValue = email.value;
        if (validemail.test(emailValue)) {
            regemail.innerText = 'email is Valid';
            regemail.style.color = 'green';
            regemail.style.display = 'block';
        } else {
            regemail.innerText = 'email is Invalid';
            regemail.style.color = 'red';
            regemail.style.display = 'block';
            e.preventDefault(e);
        }
    });
    emaillog.addEventListener('input', e => {
        const emailValue = emaillog.value;
        if (validemail.test(emailValue)) {
            regnamex.innerText = 'email is Valid';
            regnamex.style.color = 'green';
            regnamex.style.display = 'block';
        } else {
            regnamex.innerText = 'email is Invalid';
            regnamex.style.color = 'red';
            regnamex.style.display = 'block';
            e.preventDefault(e);
        }
    });

    rpass.addEventListener('input', e => {
        const pass = password.value;
        const rpass = rpassword.value;
        if (pass !== rpass) {
            rpassword.style.border = '1px solid red';
        } else {
            rpassword.style.border = '1px solid #ccc';
        }
    });
</script>
