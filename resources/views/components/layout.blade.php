<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div>
        <nav>
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div>
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            <div>
                <a href="#">Post a job</a>
            </div>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
