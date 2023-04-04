<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- <link rel="stylesheet" href="./css/custom.css"> --}}
    <link rel="stylesheet" href="{{ asset('./css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="icon" href="{{ asset('./imgs/icon0.jpg') }}">
    <title>takmil Dashboard</title>
</head>
{{-- href="https://api.whatsapp.com/send/?phone=%2B966502777186&text&type=phone_number&app_absent=0" --}}
<body>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-3 text-right bg-warning w-100">
                <div class="container">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-decoration-none m-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">الصفحة الرئيسية</a>
                @else
                    <a href="{{ route('login') }}"
                        class="text-decoration-none m-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">تسجيل
                        دخول</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="text-decoration-none m-4 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">مستخدم
                            جديد</a>
                    @endif
                @endauth
            </div></div>
        @endif

        <div class="container">
            <h1>اهلا بك في منصة تكميل العقارية <i class="fa-solid fa-house"></i></h1>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="./js/all.min.js"></script>
</body>

</html>
