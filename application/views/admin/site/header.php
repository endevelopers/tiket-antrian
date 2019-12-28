<!DOCTYPE html>

<html lang=en>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head> 
    <meta charset=utf-8> 
    <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name=description content="Quick Website UI Kit is an innovative HTML template solution which combines beautiful design and flawless functionality."> 
    <meta name=author content=Webpixels>
    <title>Quick – Website UI Kit</title>


    <style>@keyframes hidePreloader{0%{width:100%;height:100%}100%{width:0;height:0}}body>div.preloader{position:fixed;background:#fff;width:100%;height:100%;z-index:1071;opacity:0;transition:opacity .5s ease;overflow:hidden;pointer-events:none;display:flex;align-items:center;justify-content:center}body:not(.loaded)>div.preloader{opacity:1}body:not(.loaded){overflow:hidden}body.loaded>div.preloader{animation:hidePreloader .5s linear .5s forwards}</style>
    <script>window.addEventListener("load",function(){setTimeout(function(){document.querySelector("body").classList.add("loaded")},300)})</script>
    <link rel=icon href="<?= base_url() ?>asset/assets/img/brand/favicon.png" type=image/png>
    <link rel=stylesheet href="<?= base_url() ?>asset/assets/libs/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel=stylesheet href="<?= base_url() ?>asset/assets/css/quick-website.css" id=stylesheet>
    <link rel=stylesheet href="<?= base_url() ?>asset/assets/css/docs.css">
</head>


<body class=docs>
    <header class=header id=header-main>
        <nav class="navbar navbar-main navbar-expand-lg fixed-top navbar-shadow navbar-light bg-white border-bottom" id=navbar-main>
            <div class="container-fluid justify-content-between">
                <div class="navbar-user d-lg-none">
                    <ul class="navbar-nav flex-row align-items-center">
                        <li class=nav-item>
                            <a href=# class="nav-link nav-link-icon sidenav-toggler" data-action=sidenav-pin data-target=#sidenav-main>
                                <i data-feather=menu></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <a class=navbar-brand href=../index.html>
                    <img alt="Image placeholder" src="<?= base_url() ?>asset/assets/img/brand/dark.svg" id=navbar-logo> <sup class="text-muted text-xs text-uppercase">Docs</sup>
                </a>

                <ul class="navbar-nav flex-row align-items-center d-lg-none">
                    <li class=nav-item>
                        <a href=../../index-2.html class="nav-link nav-link-icon">
                            <i data-feather=eye></i>
                        </a>
                    </li>
                </ul>

                <!-- <div class="collapse navbar-collapse" id=navbar-main-collapse>
                    <ul class="navbar-nav align-items-center mx-auto">

                        <li class=nav-item>
                            <a class=nav-link href=quick-start.html>Antrian</a>
                        </li>

                    </ul>
                </div> -->

                <a href="<?= base_url() ?>main/logout" class="btn btn-sm btn-primary ml-4 btn-icon d-none d-lg-inline-flex">
                    <span class=btn-inner--icon>
                        <i data-feather=chevron-left></i>
                    </span>
                    <span class=btn-inner--text>Logout</span>
                </a>

            </div>
        </nav>
    </header>
    
    <div class="container-fluid container-docs">
       