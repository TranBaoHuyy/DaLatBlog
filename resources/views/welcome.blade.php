<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    @vite('resources/scss/app.scss')
    @vite(['resources/js/app.js'])
    <title>ĐÀ LẠT - THÀNH PHỐ MỘNG MƠ</title>
</head>
<body class="{{ request()->routeIs('travelTrip') ? 'style-total-page' : '' }}
            {{ request()->routeIs('home') ? 'home-page' : '' }}
            {{ request()->routeIs('travelTour') ? 'style-tour-page' : '' }}
            {{ request()->routeIs('cuisine') ? 'style-cuisine-page' : '' }}
            {{ request()->routeIs('gallery') ? 'style-gallery-page' : '' }}
            {{ request()->routeIs('thacDatanla') ? 'style-thacDatanla-page' : '' }}
            {{ request()->routeIs('quangTruongLamVien') ? 'style-quangTruongLamVien-page' : '' }}
            {{ request()->routeIs('hoTuyenLam') ? 'style-hoTuyenLam-page' : '' }}
            {{ request()->routeIs('dinhLangBiang') ? 'style-dinhLangBiang-page' : '' }}
            {{ request()->routeIs('phongCachSong') ? 'style-phongCachSong-page' : '' }}
    ">
    <div class="container-parent">
        <div class="header" id="header">
            @yield('header',View::make('gui.header'))
        </div>
        <div class="body-content">
            <div class="content">
                  @yield('content')
            </div>
        </div>
        <div class="footer">
            @yield('footer',View::make('gui.footer'))
        </div>
    </div>
</body>
</html>