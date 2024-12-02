<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-screen flex flex-col overflow-hidden">
        <span class="flex-[1] wlc-dash slide-left"></span>
        <div class="flex-[3] flex flex-row items-center justify-center bg-white">
            <img src="{{ asset('img/logo.jpg') }}" alt="logo" class=" w-56 h-56 justify-end mr-32 animate-bounce">
            <div class="flex flex-col items-center justify-center animate-pulse">
                <h2 class="font-bold title">CuteBot</h2>
                <h3 class="w-50 text-center descrip">Asisten teknologi yang baik</h3>
                <h3 class="w-50 text-center descrip">Siap membantumu dalam permasalahan UI/UX</h3>
                <h3 class="w-50 text-center descrip">Kamu bertanya aku siap menjawab!</h3>
                <button class="w-48 mt-4 px-4 py-2 bg-black text-white rounded-xl transition-all duration-300 hover:bg-gray-800">
                    <a href="{{ url('/login')}}">Get Started</a>
                </button>
                <div class="span-group flex mt-4">
                    <span id="spn1" class="w-16 h-2 bg-gray-300 mx-1 rounded-full"></span>
                    <span id="spn2" class="w-2 h-2 bg-gray-300 rounded-full mx-1"></span>
                    <span id="spn3" class="w-2 h-2 bg-gray-300 rounded-full mx-1"></span>
                </div>
            </div>
        </div>
        <span class="flex-[1] wlc-dash slide-right"></span>
    </div>
</body>

</html>
