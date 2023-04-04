<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <link rel="icon" href="{{ asset('./imgs/icon0.jpg') }}">
    <title>اضافة محتوي</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        @if (count($contents) == 0)
            <div class="text-center mt-4">
                <h1>اضافة محتوي</h1>
            </div>
            <div class="addform-page">
                <div class="form">
                    <form class="addform-form" method="POST" action="{{ route('store') }}">
                        @csrf
                        <div class="container d-flex flex-wrap justify-content-between">
                            <div class="my-4">
                                <label for="whous" class="mb-2">من نحن</label>
                                <textarea class="form-control" name="whous" id="whous" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="my-4">
                                <label for="vision" class="mb-2">الرؤية</label>
                                <textarea class="form-control" name="vision" id="vision" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="my-4">
                                <label for="role" class="mb-2">دور المنصة</label>
                                <textarea class="form-control" name="role" id="role" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="my-4">
                                <label for="model" class="mb-2">نموذج الاعمال</label>
                                <textarea class="form-control" name="model" id="model" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="my-4">
                                <label for="partners" class="mb-2">شركاءنا</label>
                                <textarea class="form-control" name="partners" id="partners" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="my-4">
                                <label for="contact" class="mb-2">تواصل معنا</label>
                                <textarea class="form-control" name="contact" id="contact" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="my-4">
                                <label for="phone" class="mb-2">رقم الهاتف</label>
                                <input class="form-control forInput" name="phone" id="phone" type="text" required>
                            </div>
                            <div class="my-4">
                                <label for="email" class="mb-2">البريد الالكتروني</label>
                                <input class="form-control forInput" name="email" id="email" type="email" required>
                            </div>
                        </div>
                        <button>اضافة</button>
                    </form>
                    <p class="message"><a href="/dashboard">الرجوع للصفحة الرئيسية</a></p>
                </div>
            </div>
        @else
            <div class="text-center mt-5">
                <h1>عفوآ لقد اضفت محتوي بالفعل</h1>
                <p class="message"><a href="/dashboard">الرجوع للصفحة الرئيسية</a></p>
            </div>
        @endif
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
