<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dbadmin.css') }}">
    <link rel="icon" href="{{ asset('./imgs/icon0.jpg') }}">
    <title>takmil Dashboard</title>
</head>

<body>
    <div>
        @extends('layouts.app')

        @section('content')
            <div class="container">
                <div class="text-center my-4">
                    <h1>منصة تكميل العقارية</h1>
                    @if (count($contents) == 0)
                        <a href="addForm" class="mt-3 btn btn-primary">اضافة محتوي</a>
                    @endif
                </div>
                <div class="table-responsive">
                    <table class="table table-sm align-middle table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">من نحن</th>
                                <th scope="col">الرؤية</th>
                                <th scope="col">دور المنصة</th>
                                <th scope="col">نموذج الاعمال</th>
                                <th scope="col">شركاءنا</th>
                                <th scope="col">تواصل معنا</th>
                                <th scope="col">رقم الهاتف</th>
                                <th scope="col">البريد الالكتروني</th>
                                <th scope="col">وقت الاضافة</th>
                                <th scope="col">تعديل</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents as $content)
                                <tr>
                                    <td>{{ $content['whous'] }}</td>
                                    <td>{{ $content['vision'] }}</td>
                                    <td>{{ $content['role'] }}</td>
                                    <td>{{ $content['model'] }}</td>
                                    <td>{{ $content['partners'] }}</td>
                                    <td>{{ $content['contact'] }}</td>
                                    <td>{{ $content['phone'] }}</td>
                                    <td>{{ $content['email'] }}</td>
                                    <td>{{ $content['created_at'] }}</td>
                                    <td><a href="{{ route('edit', ['id' => $content['id']]) }}"
                                            class="btn btn-warning">تعديل</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endsection



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
