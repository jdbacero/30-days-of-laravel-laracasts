<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            <div>
                @auth
                    <div class="space-x-6 font-bold flex">
                        <a href="jobs/create">
                            Post a Job
                        </a>

                        <form action="/logout">
                            @csrf
                            @method('DELETE')
                            <button>Log Out</button>
                        </form>
                    </div>
                @endauth
                @guest()
                    <div class="space-x-6 font-bold">
                        <a href="/register">Signup</a>
                        <a href="/login">Login</a>
                    </div>    
                @endguest
            </div>
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>