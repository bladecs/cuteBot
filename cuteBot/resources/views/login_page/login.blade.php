<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .fadeIn {
            animation: fadeIn 0.7s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .input-name,
        .input {
            animation: slideIn 0.7s ease-out forwards;
        }

        .card-bg {
            animation: slideIn 1s ease-out forwards;
        }

        #submit-btn,
        #toggle-btn {
            animation: fadeIn 0.7s ease-out forwards;
        }

        .span-group span {
            animation: fadeIn 0.7s ease-out forwards;
        }

        .input-name {
            opacity: 0;
            transform: translateX(100%);
        }

        .card-bg {
            opacity: 0;
            transform: translateX(-100%);
        }

        #submit-btn,
        #toggle-btn {
            opacity: 0;
        }

        .span-group span {
            opacity: 0;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-screen flex flex-row overflow-hidden p-5 items-center justify-center">
        <div class="flex-[1] h-full flex flex-col items-center justify-center">
            <h2 class="text-black title-form font-bold mt-5 mb-10">Welcome to CuteBot</h2>
            <form action="#" method="post">
                <div id="input-name" class="input-name w-full hidden flex-col">
                    <label id="label-name" for="name" class="text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name"
                        class="mt-1 input px-4 py-2 border border-gray-300 shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter Your Name Here">
                </div>
                <div class="input w-full flex flex-col">
                    <label id="label-input" for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="block input px-4 py-4 border border-gray-300 shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter Email Here">
                </div>
                <div class="input w-full flex flex-col mt-6">
                    <label id="label-input" for="password"
                        class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password"
                        class="block input px-4 py-4 border border-gray-300 shadow-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter Password Here">
                </div>
                <div class="w-full flex flex-row justify-between mt-8">
                    <div class="chk-box flex flex-row justify-start items-center space-x-4">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me?</label>
                    </div>
                    <a href="#" class="text-blue-700">Forgot Password?</a>
                </div>
                <div class="w-full flex flex-col items-center justify-center mt-10">
                    <button type="submit" id="submit-btn"
                        class="btn-sub bg-black text-white text-lg font-bold py-3 px-4">Login</button>
                    <h3 class="text-gray-700 mt-4 font-medium">
                        <span id="account-text">Don't have an account?</span>
                        <span id="toggle-btn" class="ml-1 font-medium text-blue-700 cursor-pointer">Signup</span>
                    </h3>
                </div>
            </form>
        </div>
        <div class="flex-[1] h-full flex flex-col items-center justify-center card-bg rounded-2xl">
            <img src="{{ asset('img/logo.jpg') }}" alt="logo" class="w-52 h-52 logo-rounded">
            <h2 class="text-white title font-bold mt-5">CuteBot</h2>
            <h3 class="text-white">Selesaikan semua kebingunganmu disini</h3>
            <h3 class="text-white">Pasti akan kami bantu!</h3>
            <div class="span-group flex mt-24">
                <span id="spn1_wht" class="w-16 h-2 mx-1 rounded-full"></span>
                <span id="spn2_wht" class="w-2 h-2 bg-gray-300 rounded-full mx-1"></span>
                <span id="spn3_wht" class="w-2 h-2 bg-gray-300 rounded-full mx-1"></span>
            </div>
        </div>
    </div>
    <script>
        function switchFormAndToggleText() {
            const toggleButton = document.getElementById('toggle-btn');
            const inputName = document.getElementById('input-name');
            const submitButton = document.getElementById('submit-btn');
            const accountText = document.getElementById('account-text');

            toggleButton.addEventListener('click', () => {
                if (submitButton.innerText === "Login") {
                    // Ubah menjadi Register
                    submitButton.innerText = "Register";
                    accountText.innerText = "Already have an account?";
                    toggleButton.innerText = "Login";
                    if (inputName.classList.contains('hidden')) {
                        inputName.classList.remove('hidden');
                        inputName.style.display = 'flex';
                        inputName.style.animation = "slideIn 0.7s ease forwards";
                    }
                } else {
                    // Ubah kembali menjadi Login
                    submitButton.innerText = "Login";
                    accountText.innerText = "Don't have an account?";
                    toggleButton.innerText = "Signup";
                    inputName.style.animation = "none";
                    inputName.offsetHeight;
                    inputName.style.animation = "slideOut 0.7s ease forwards";
                    setTimeout(() => {
                        inputName.classList.add('hidden');
                        inputName.style.display = 'none';
                    }, 200);
                }
            });
        }

        switchFormAndToggleText();
    </script>
</body>

</html>
