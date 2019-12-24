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
        <link rel=stylesheet href="<?= base_url() ?>asset/assets/libs/swiper/dist/css/swiper.min.css" > 
        <link rel=stylesheet href="<?= base_url() ?>asset/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css" > 
        <link rel=stylesheet href="<?= base_url() ?>asset/assets/libs/%40fortawesome/fontawesome-free/css/all.min.css" > 
        <link rel=stylesheet href="<?= base_url() ?>asset/assets/css/quick-website.css " id=stylesheet>
    </head>

    <body class="slice slice-lg  bg-gradient-primary">


        <!-- <div class="alert alert-danger bg-dark-dark text-white fixed-top alert-flush alert-dismissible border-0 shadow-lg fade show mb-0" style="z-index: 2000;" role="alert">
            <div class="container text-center">
                <h5 class="text-white mb-1">⚡️ Black and Cyber Week <strong>40% Off</strong></h5>
                <p class="mb-0">
                    Use the <strong>BLACKANDCYBER19</strong> code until Dec 3rd and get started with this UI Kit to build your next amazing website.
                </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span class="text-white opacity-10" aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> -->
        <!-- <div class=preloader>
            <div class="spinner-border text-primary" role=status><span class=sr-only>Loading...</span></div>
        </div> -->


        <header class=header-transparent id=header-main>
            
            <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-dark bg-dark" id=navbar-main>
                <div class=container>

                    <div class="collapse navbar-collapse navbar-collapse-overlay" id=navbar-main-collapse>
                        <div class="collapse-header align-items-center">
                            <div class="col-6"><a class="navbar-brand" href="#"><img alt="Image placeholder" src=assets/img/brand/light-mono.svg> </a> </div> <div class="col-6 text-right"><button class=navbar-toggler type=button data-toggle=collapse data-target="#navbar-main-collapse" aria-controls=navbar-main-collapse aria-expanded=false aria-label="Toggle navigation"><i data-feather=x></i></button></div>
                        </div>

                        <!-- <ul class="navbar-nav ml-auto">
                            <li class=nav-item><a class=nav-link href=index.html>Overview</a></li>
                        </ul> -->

                        <a class="btn btn-sm d-none d-lg-inline-block btn-warning ml-auto"  href="<?= base_url() ?>main/logout">Logout</a>
                        <!-- <div class="d-lg-none p-4 text-center"><a href="#" class="btn btn-block btn-sm btn-neutral rounded-pill" target=_blank>Purchase now</a></div> -->
                    </div>
                </div>
            </nav>
        </header>
        <div id=omnisearch class=omnisearch>
            <div class=container>
                <div class=omnisearch-container>
                   
                    <!-- <div class=omnisearch-suggestions>
                        <h6 class=heading>Search Suggestions</h6>
                        <div class=row>
                            <div class=col-sm-6>
                                <ul class="list-unstyled mb-0">
                                    <li><a class=list-link href=#><i data-feather=clock></i> <span>macbook pro</span> in Laptops</a></li>
                                    <li><a class=list-link href=#><i data-feather=clock></i> <span>iphone 8</span> in Smartphones</a></li>
                                    <li><a class=list-link href=#><i data-feather=clock></i> <span>macbook pro</span> in Laptops</a></li>
                                    <li><a class=list-link href=#><i data-feather=clock></i> <span>beats pro solo 3</span> in Headphones</a></li>
                                    <li><a class=list-link href=#><i data-feather=clock></i> <span>smasung galaxy 10</span> in Phones</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <section class="slice slice-lg bg-gradient-primary">
            <div data-offset-top="#navbar-main">
                <div class="container d-flex align-items-center text-center text-lg-left pt-4">
                    <div class="col px-0">
                        <div class="row row-grid align-items-center">
                            <div class="col-lg-6 pr-lg-5">

                                <img alt="Image placeholder" src="<?= base_url() ?>asset/assets/img/brand/light-mono.svg" id="navbar-logo"> 
                                <h1 class="display-4 text-white mb-4">Mulai Untuk  <strong class="text-warning">Question</strong></h1>
                            
                            </div>
                            
                            <div class="col-lg-6 pr-lg-5">
                                
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <!-- <h1 class=" font-weight-bold text-center" style="font-size: 100px" ><?= $customer_number ?></h1> -->
                                        <h4><?= $this->session->flashdata('alert') ?></h4>
                                        <form action="<?= base_url() ?>kasir/question" method="post">

                                            <div class="form-group">
                                                <label class="form-control-label text-dark">Nomor Loket</label>
                                                <select name="loket_no"  class="form-control"  id="" >
                                                    <? 
                                                        foreach ($loket_off->result() as $key => $value) {
                                                            # code...
                                                            ?>
                                                            <option value="<?= $value->loket_no ?>"><?= $value->loket_no ?></option>
                                                            <?
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="text-sm mb-2 text-center">
                                                <button type="submit" class=" btn btn-sm d-lg-inline-block btn-warning ml-auto ">Start Question</button>
                                                <!-- <div class="d-lg-none p-4 text-center"><a href="<?= base_url() ?>" class="btn btn-block btn-sm btn-neutral bg-warning btn-warning rounded-pill">Ambil Nomor Antrian</a></div> -->
                                       
                                            </div>


                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>

        <script src="<?= base_url() ?>asset/assets/libs/jquery/dist/jquery.min.js"> </script> 
        <script src="<?= base_url() ?>asset/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"> </script> 
        <script src="<?= base_url() ?>asset/assets/libs/in-view/dist/in-view.min.js"> </script> 
        <script src="<?= base_url() ?>asset/assets/libs/sticky-kit/dist/sticky-kit.min.js"> </script> 
        <script src="<?= base_url() ?>asset/assets/libs/svg-injector/dist/svg-injector.min.js"> </script> 
        <script src="<?= base_url() ?>asset/assets/libs/feather-icons/dist/feather.min.js"> </script> 
        <script src="<?= base_url() ?>asset/assets/libs/imagesloaded/imagesloaded.pkgd.min.js"> </script> 
        <script src="<?= base_url() ?>asset/assets/libs/jquery.scrollbar/jquery.scrollbar.min.js"></script> 
        <script src="<?= base_url() ?>asset/assets/libs/jquery-scroll-lock/dist/jquery-scrollLock.min.js"> </script> 
        <script src="<?= base_url() ?>asset/assets/libs/swiper/dist/js/swiper.min.js"> </script> 
        <script src="<?= base_url() ?>asset/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"> </script>
        <script src="<?= base_url() ?>asset/assets/js/quick-website.js"> </script> 
            
        <script>
            feather.replace({
                width: "1em",
                height: "1em"
            })
        </script>
        
        <script type="text/javascript" src="<?= base_url() ?>asset/js/timer.js"></script>
    </body>


</html>
