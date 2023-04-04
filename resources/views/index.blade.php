<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="civil engineering">
    <meta name="description" content="civil engineering">
    <meta name="author" content="Nabil">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="icon" href="{{ asset('./imgs/icon0.jpg') }}">
    <title>منصة تكميل العقارية</title>
</head>

@if (count($contents) > 0)

    <body>
        <div class="conIcons">
            <a class="me-3 whatsappicon" href="https://api.whatsapp.com/send/?phone=%2B{{ $contents[0]['phone'] }}&text&type=phone_number&app_absent=0" target="_blank"><i
                    class="fa-brands fa-square-whatsapp"></i></a>
            <a class="me-2 emailicon" href="mailto:{{ $contents[0]['email'] }}" target="_blank"><i
                    class="fa-solid fa-envelope"></i></a>
        </div>
        <!-- start nav -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid ltr">
                <a class="navbar-brand" href="#">منصة تكميل العقارية</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#whoUsId">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#visionId" href="#">الرؤية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#roleId">دور المنصة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#modelId">نموذج الاعمال</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#partnersId">شركاءنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactId">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end nav -->

        <!-- start section من نحن-->
        <section class="whoUs" id="whoUsId">
            <div class="container">
                <!-- <h2 class="whoUsheading mb-4">اهلا بكم</h2> -->
                <div class="whoUsparag text-center">
                    <p>{{ $contents[0]['whous'] }}</p>
                </div>
            </div>
        </section>
        <!-- end section -->

        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section الرؤية-->
        <section class="vision" id="visionId">
            <div class="container conView">
                <div class="wid">
                    <h3 class="mb-4">الرؤية</h3>
                    <p>{{ $contents[0]['vision'] }}</p>
                </div>
                <div id="mycup">
                    <div class="steam" id="steam1"> </div>
                    <div class="steam" id="steam2"> </div>
                    <div class="steam" id="steam3"> </div>
                    <div class="steam" id="steam4"> </div>

                    <div id="cup">
                        <div id="cup-body">
                            <div id="cup-shade"></div>
                        </div>
                        <div id="cup-handle"></div>
                    </div>

                    <div id="saucer"></div>

                    <div id="shadow"></div>
                </div>

            </div>
        </section>
        <!-- end section -->
        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section دور المنصة-->
        <section class="role" id="roleId">
            <div class="text-center">
                <h3 class="mb-4">دور المنصة</h3>
                <p>{{ $contents[0]['role'] }}</p>
            </div>
        </section>
        <!-- end section -->
        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section نموذج الاعمال-->
        <section class="model" id="modelId">
            <div class="conView container">
                <div class="wid">
                    <h3 class="mb-4">نموذج الاعمال</h3>
                    <p>{{ $contents[0]['model'] }}</p>
                </div>
                <div>
                    <svg class="ha-logo loading" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                        <path class="house"
                            d="M1.9 8.5V5.3h-1l4-4.3 2.2 
                     2.1v-.6h1v1.7l1 1.1H7.9v3.2z" />
                        <path class="circut"
                            d="M5 8.5V4m0 3.5l1.6-1.6V4.3M5 
                     6.3L3.5 4.9v-.6m2.7.7l.4.4L7 
                     5M5.9 6.1v.5h.5M4.2 5v.5h-.8m1 
                     1.5v.6h-.6m1.2.8L3.6 6.7M5 
                     8.4l1-.9h.7M4.6 3.6L5 4l.4-.4" />
                        <g>
                            <circle cx="5.5" cy="3.4" r="0.21" />
                            <circle cx="4.5" cy="3.4" r="0.21" />
                            <circle cx="6.6" cy="4.1" r="0.21" />
                            <circle cx="3.5" cy="4.1" r="0.21" />
                            <circle cx="4.2" cy="4.8" r="0.21" />
                            <circle cx="6.1" cy="4.8" r="0.21" />
                            <circle cx="7.1" cy="4.8" r="0.21" />
                            <circle cx="6.6" cy="6.6" r="0.21" />
                            <circle cx="5.9" cy="5.9" r="0.21" />
                            <circle cx="3.2" cy="5.5" r="0.21" />
                            <circle cx="3.5" cy="6.5" r="0.21" />
                            <circle cx="4.4" cy="6.8" r="0.21" />
                            <circle cx="3.6" cy="7.6" r="0.21" />
                            <circle cx="6.9" cy="7.5" r="0.21" />
                        </g>
                    </svg>
                </div>
        </section>
        <!-- end section -->
        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section شركاءنا-->
        <section class="partners" id="partnersId">
            <div class="conView container">
                <div>
                    <svg class="mypartner" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120">
                        <defs>

                        </defs>
                        <circle class="background" class="go" cx="60" cy="60" r="70"
                            style="fill:#1b4d6e;" />
                        <g class="eins">
                            <g class="all">
                                <mask id="Mask">
                                    <circle class="xmask" cx="60" cy="60" r="100"
                                        fill="#fff" />
                                    <circle class="xmask" cx="60" cy="60" r="50"
                                        fill="#000" />
                                </mask>
                                <g class="group" mask="url(#Mask)">
                                    <circle class="go" cx="60" cy="65" r="48"
                                        style="fill:#fff;" />
                                    <circle class="go" cx="60" cy="55" r="48"
                                        style="fill:#fff;" />
                                </g>
                            </g>
                        </g>

                        <g class="zwei">
                            <g class="all">
                                <mask id="Mask2">
                                    <circle class="xmask" cx="60" cy="60" r="100"
                                        fill="#fff" />
                                    <circle class="xmask" cx="60" cy="60" r="50"
                                        fill="#000" />
                                </mask>
                                <g class="group" style="animation-delay: -0.33s" mask="url(#Mask2)">
                                    <circle class="go" cx="60" cy="65" r="48"
                                        style="fill:#fff;" />
                                    <circle class="go" cx="60" cy="55" r="48"
                                        style="fill:#fff;" />
                                </g>
                            </g>
                        </g>

                        <g class="drei">
                            <g class="all">
                                <mask id="Mask3">
                                    <circle class="xmask" cx="60" cy="60" r="100"
                                        fill="#fff" />
                                    <circle class="xmask" cx="60" cy="60" r="50"
                                        fill="#000" />
                                </mask>
                                <g class="group" style="animation-delay: -0.66s" mask="url(#Mask3)">
                                    <circle class="go" cx="60" cy="65" r="48"
                                        style="fill:#fff;" />
                                    <circle class="go" cx="60" cy="55" r="48"
                                        style="fill:#fff;" />
                                </g>
                            </g>
                        </g>

                        <circle class="go" cx="60" cy="60" r="2" style="fill:#fff;" />

                    </svg>
                </div>
                <div class="wid">
                    <h3 class="mb-4">شركاءنا</h3>
                    <p>{{ $contents[0]['partners'] }}</p>
                </div>
            </div>
        </section>
        <!-- end section -->
        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section تواصل معنا-->
        <section class="contact" id="contactId">
            <div class="container">
                <div class="text-center">
                    <h2 class="mb-4">{{ $contents[0]['contact'] }}</h2>
                    <p>رقم الهاتف : ( {{ $contents[0]['phone'] }} )</p>
                    <p>البريد الالكتروني : {{ $contents[0]['email'] }}</p>
                    <div class="icons">
                        <a href="https://api.whatsapp.com/send/?phone=%2B{{ $contents[0]['phone'] }}&text&type=phone_number&app_absent=0" target="_blank"><i
                                class="fa-brands fa-whatsapp"></i></a>
                        <a href="mailto:{{ $contents[0]['email'] }}" target="_blank"><i
                                class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script src="./js/all.min.js"></script>
    </body>
@else

    <body>
        <div class="conIcons">
            <a class="me-3 whatsappicon" href="https://api.whatsapp.com/send/?phone=%2B966505315012&text&type=phone_number&app_absent=0" target="_blank"><i
                    class="fa-brands fa-square-whatsapp"></i></a>
            <a class="me-2 emailicon" href="mailto:mrnabeel346@gmail.com" target="_blank"><i
                    class="fa-solid fa-envelope"></i></a>
        </div>
        <!-- start nav -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid ltr">
                <a class="navbar-brand" href="#">منصة تكميل العقارية</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#whoUsId">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#visionId" href="#">الرؤية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#roleId">دور المنصة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#modelId">نموذج الاعمال</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#partnersId">شركاءنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactId">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end nav -->

        <!-- start section من نحن-->
        <section class="whoUs" id="whoUsId">
            <div class="container">
                <!-- <h2 class="whoUsheading mb-4">اهلا بكم</h2> -->
                <div class="whoUsparag text-center">
                    <p>منصة تكميل العقارية</p>
                </div>
            </div>
        </section>
        <!-- end section -->

        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section الرؤية-->
        <section class="vision" id="visionId">
            <div class="container conView">
                <div class="w-50">
                    <h3 class="mb-4">الرؤية</h3>
                    <p>نعمل لخدمة الأفراد والجهات في أن نكون المنظمة الرائــــدة في إدارة مواقع العقارات بحــلول عــام
                        2025
                        على
                        مستوى الخليج، عن طريق التميز والإبداع في
                        خدماتنا
                    </p>
                </div>
                <div id="mycup">
                    <div class="steam" id="steam1"> </div>
                    <div class="steam" id="steam2"> </div>
                    <div class="steam" id="steam3"> </div>
                    <div class="steam" id="steam4"> </div>

                    <div id="cup">
                        <div id="cup-body">
                            <div id="cup-shade"></div>
                        </div>
                        <div id="cup-handle"></div>
                    </div>

                    <div id="saucer"></div>

                    <div id="shadow"></div>
                </div>

            </div>
        </section>
        <!-- end section -->
        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section دور المنصة-->
        <section class="role" id="roleId">
            <div class="text-center">
                <h3 class="mb-4">دور المنصة</h3>
                <p>إيجاد حل للمشكلة لتأهيل مواقع العقار مقابل جزء من العائد من تشغيل او بيع هذا العقار</p>
            </div>
        </section>
        <!-- end section -->
        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section نموذج الاعمال-->
        <section class="model" id="modelId">
            <div class="conView container">
                <div class="w-50">
                    <h3 class="mb-4">نموذج الاعمال</h3>
                    <p>عملنا مع شركائنا يلحقك بالركب لكونهم مصرين في سعيهم لعمل موقع متكامل لشتى العقارات على عاتقهم .
                        يتكفل الفريق العامل على عرض الوحدات السكنية والتجارية بخبره احترافيه للقيام بما يلزم بعد دراسة
                        كل
                        عرض
                        اوطلب</p>
                </div>
                <div>
                    <svg class="ha-logo loading" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                        <path class="house"
                            d="M1.9 8.5V5.3h-1l4-4.3 2.2 
                     2.1v-.6h1v1.7l1 1.1H7.9v3.2z" />
                        <path class="circut"
                            d="M5 8.5V4m0 3.5l1.6-1.6V4.3M5 
                     6.3L3.5 4.9v-.6m2.7.7l.4.4L7 
                     5M5.9 6.1v.5h.5M4.2 5v.5h-.8m1 
                     1.5v.6h-.6m1.2.8L3.6 6.7M5 
                     8.4l1-.9h.7M4.6 3.6L5 4l.4-.4" />
                        <g>
                            <circle cx="5.5" cy="3.4" r="0.21" />
                            <circle cx="4.5" cy="3.4" r="0.21" />
                            <circle cx="6.6" cy="4.1" r="0.21" />
                            <circle cx="3.5" cy="4.1" r="0.21" />
                            <circle cx="4.2" cy="4.8" r="0.21" />
                            <circle cx="6.1" cy="4.8" r="0.21" />
                            <circle cx="7.1" cy="4.8" r="0.21" />
                            <circle cx="6.6" cy="6.6" r="0.21" />
                            <circle cx="5.9" cy="5.9" r="0.21" />
                            <circle cx="3.2" cy="5.5" r="0.21" />
                            <circle cx="3.5" cy="6.5" r="0.21" />
                            <circle cx="4.4" cy="6.8" r="0.21" />
                            <circle cx="3.6" cy="7.6" r="0.21" />
                            <circle cx="6.9" cy="7.5" r="0.21" />
                        </g>
                    </svg>
                </div>
        </section>
        <!-- end section -->
        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section شركاءنا-->
        <section class="partners" id="partnersId">
            <div class="conView container">
                <div>
                    <svg class="mypartner" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120">
                        <defs>

                        </defs>
                        <circle class="background" class="go" cx="60" cy="60" r="70"
                            style="fill:#1b4d6e;" />
                        <g class="eins">
                            <g class="all">
                                <mask id="Mask">
                                    <circle class="xmask" cx="60" cy="60" r="100"
                                        fill="#fff" />
                                    <circle class="xmask" cx="60" cy="60" r="50"
                                        fill="#000" />
                                </mask>
                                <g class="group" mask="url(#Mask)">
                                    <circle class="go" cx="60" cy="65" r="48"
                                        style="fill:#fff;" />
                                    <circle class="go" cx="60" cy="55" r="48"
                                        style="fill:#fff;" />
                                </g>
                            </g>
                        </g>

                        <g class="zwei">
                            <g class="all">
                                <mask id="Mask2">
                                    <circle class="xmask" cx="60" cy="60" r="100"
                                        fill="#fff" />
                                    <circle class="xmask" cx="60" cy="60" r="50"
                                        fill="#000" />
                                </mask>
                                <g class="group" style="animation-delay: -0.33s" mask="url(#Mask2)">
                                    <circle class="go" cx="60" cy="65" r="48"
                                        style="fill:#fff;" />
                                    <circle class="go" cx="60" cy="55" r="48"
                                        style="fill:#fff;" />
                                </g>
                            </g>
                        </g>

                        <g class="drei">
                            <g class="all">
                                <mask id="Mask3">
                                    <circle class="xmask" cx="60" cy="60" r="100"
                                        fill="#fff" />
                                    <circle class="xmask" cx="60" cy="60" r="50"
                                        fill="#000" />
                                </mask>
                                <g class="group" style="animation-delay: -0.66s" mask="url(#Mask3)">
                                    <circle class="go" cx="60" cy="65" r="48"
                                        style="fill:#fff;" />
                                    <circle class="go" cx="60" cy="55" r="48"
                                        style="fill:#fff;" />
                                </g>
                            </g>
                        </g>

                        <circle class="go" cx="60" cy="60" r="2" style="fill:#fff;" />

                    </svg>
                </div>
                <div class="w-50">
                    <h3 class="mb-4">شركاءنا</h3>
                    <p>كل موقع عقارى يرغب في إصدار تراخيص للأنشطة العقارية، التي تساهم في تنمية وتنظيم القطاع العقاري
                        وتحفز
                        الاستثمار وتزيد من موثوقية التعامل فيه.</p>
                </div>
            </div>
        </section>
        <!-- end section -->
        <div class="cut container">
            <img src="./assets/imgs/Line.png" alt="">
        </div>
        <!-- start section تواصل معنا-->
        <section class="contact" id="contactId">
            <div class="container">
                <div class="text-center">
                    <h2 class="mb-4">نسعد بالتواصل معنا</h2>
                    <p>رقم الهاتف : ( 00966505315012 )</p>
                    <p>البريد الالكتروني : mrnabeel346@gmail.com</p>
                    <div class="icons">
                        <a href="https://api.whatsapp.com/send/?phone=%2B966505315012&text&type=phone_number&app_absent=0" target="_blank"><i
                                class="fa-brands fa-whatsapp"></i></a>
                        <a href="mailto:mrnabeel346@gmail.com" target="_blank"><i
                                class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script src="./assets/js/all.min.js"></script>
    </body>
@endif

</html>
