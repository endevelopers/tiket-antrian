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

    <body>


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
                <div class=container><a class=navbar-brand href=index-2.html>
                    <img alt="Image placeholder" src="<?= base_url() ?>asset/assets/img/brand/light-mono.svg" id=navbar-logo> </a>

                    <a class="btn btn-sm d-none d-lg-inline-block btn-warning ml-auto" href="<?= base_url()?>main/logout">Logout</a>
                        <div class="d-lg-none p-4 text-center"><a  href="<?= base_url()?>main/logout" class="btn btn-block btn-sm btn-neutral rounded-pill" >Logout</a></div>

                    <div class="collapse navbar-collapse navbar-collapse-overlay" id=navbar-main-collapse>
                        <div class="collapse-header align-items-center">
                            <div class="col-6"><a class="navbar-brand" href="#"><img alt="Image placeholder" src=assets/img/brand/light-mono.svg> </a> </div> <div class="col-6 text-right"><button class=navbar-toggler type=button data-toggle=collapse data-target="#navbar-main-collapse" aria-controls=navbar-main-collapse aria-expanded=false aria-label="Toggle navigation"><i data-feather=x></i></button></div>
                        </div>

                        <!-- <ul class="navbar-nav ml-auto">
                            <li class=nav-item><a class=nav-link href=index.html>Overview</a></li>
                        </ul> -->

                    </div>
                </div>
            </nav>
        </header>
        <div id=omnisearch class=omnisearch>
            <div class=container>
                <div class=omnisearch-container>
                    <form class=omnisearch-form>
                        <div class=form-group>
                            <div class="input-group input-group-merge input-group-flush">
                                <div class=input-group-prepend><span class=input-group-text><i data-feather=search></i></span></div><input type=text class=form-control placeholder="Type and hit enter ...">
                            </div>
                        </div>
                    </form>
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
            <div data-offset-top=#navbar-main>
                <div class="container d-flex align-items-center text-center text-lg-left pt-4">
                    <div class="col px-0">
                        <div class="row row-grid align-items-center">
                            <div class="col-lg-6 pr-lg-5">

                                <img alt="Image placeholder" src="<?= base_url() ?>asset/assets/img/brand/light-mono.svg" id="navbar-logo"> 
                                <h1 class="display-4 text-white mb-4">Tiket <strong class="text-warning"> <?= $tiket_no ?> </strong></h1>
                                <h1 class="display-4 text-white mb-4">Loket <strong class="text-warning"> <?= $loket_no ?> </strong></h1>

                                <a href="<?= base_url()?>kasir/member_in" class="btn btn-outline-white my-2 float-left" >Masuk</a>

                            </div>
                            
                            <div class="col-lg-6 pr-lg-5">
                                
                                <?= !$this->session->flashdata('alert') ? '' : '<div class="alert alert-warning" role="alert">'.$this->session->flashdata('alert').'</div>' ?>

                                <div class="mt-5">
                                    <h5 class="text-white">List Antrian </h5>
                                    <table class="table ">
                                        <thead>

                                            <tr class="bg-warning text-dark">

                                                <th scope="col"> <b>Tiket No</b> </th>
                                                <th scope="col"> <b>Loket No</b> </th>
                                                <th scope="col"> <b>Tools</b> </th>

                                            </tr>
                                        </thead>
                                        
                                        <tbody class="text-white"> 

                                        <?
                                            foreach ($antrian->result() as $value) {
                                                # code...
                                        ?>

                                            <tr>
                                                <td><?= $value->tiket_no ?></td>
                                                <td><?= $value->loket_no ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>kasir/antrian_delete/<?= $value->tiket_id ?>" class="text-white"> <i class="fa fa-trash"></i> </a>
                                                </td>
                                            </tr>

                                        <? } ?>

                                        </tbody>
                                    </table>

                                    
                                    <a href="<?= base_url() ?>kasir/next" class="btn btn-warning my-2 float-right" >Next</a>
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
