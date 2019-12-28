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
        <link rel=icon href=assets/img/brand/favicon.png type=image/png> 
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
                <div class=container><a class=navbar-brand href="#">
                    <!-- <img alt="Image placeholder" src="<?= base_url() ?>asset/assets/img/brand/light-mono.svg" id=navbar-logo>  -->
                
                </a>
                    <div class="collapse navbar-collapse navbar-collapse-overlay" id=navbar-main-collapse>
                        <div class="collapse-header align-items-center">
                            <div class=col-6><a class=navbar-brand href="#"><img alt="Image placeholder" src="<?= base_url() ?>asset/assets/img/brand/light-mono.svg"> </a> </div> <div class="col-6 text-right"><button class=navbar-toggler type=button data-toggle=collapse
                                        data-target=#navbar-main-collapse aria-controls=navbar-main-collapse aria-expanded=false aria-label="Toggle navigation"><i data-feather=x></i></button></div>
                        </div>

                        <ul class="navbar-nav ml-auto">
                            <!-- <li class=nav-item><a class=nav-link href=index.html>Overview</a></li> -->
                        </ul>
                        <!-- <a class="btn btn-sm d-none d-lg-inline-block btn-warning ml-auto"  href="#">Purchase now</a> -->
                        <!-- <div class="d-lg-none p-4 text-center"><a href="#" class="btn btn-block btn-sm btn-neutral rounded-pill" target=_blank>Purchase now</a></div> -->
                    </div>
                </div>
            </nav>
        </header>
        <div id="omnisearch" class="omnisearch">
            <div class="container">
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
            <div data-offset-top="#navbar-main">
                <div class="container d-flex align-items-center text-center text-lg-left pt-4">
                    <div class="col px-0">
                        <div class="row row-grid align-items-center">
                            <div class="col-lg-6 pr-lg-5">
                                <h1 class="display-4 text-white mb-4"> <b>Loket </b> <strong class="text-warning" id="loket_no">  </strong></h1>

                                <h1 class="display-4 text-white mb-4"> <b>Tiket </b> <br> <strong class="text-warning" id="tiket_no">  </strong></h1>
                                <div style="width:40%;">
                                    
                                    <h3><strong class="text-danger" id="stopWatchDisplay">  </strong></h3>
                                  
                                    <!-- <div id="controls">
                                      <button class="btn btn-danger" id="startPause" onClick="startPause()"><i class="glyphicon glyphicon-play"></i> Start</button>
                                        <button class="btn btn-warning" onClick="reset()"><i class="glyphicon glyphicon-refresh"></i> Reset</button>
                                    </div> -->


                                </div>
                                <div class="mt-5">
                                  <!-- <a href="#" class="btn btn-white my-2" data-scroll-to data-scroll-to-offset="85" id="startPause" onClick="startPause()">Start</a> 
                                  <a href="#" class="btn btn-outline-white my-2" onClick="reset()">Reset</a> -->
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="row">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/0wysCoAm2Yo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        


        <!-- ------------------ -->


        <audio id="nommor-urut">
            <source src="https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/nommor-urut.wav" type="audio/wav">
        </audio>

        <audio id="sepuluh">
            <source src="https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/sepuluh.wav" type="audio/wav">
        </audio>


        <!-- ------------------ -->

        <audio id="sepuluh">
            <source src="https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/sepuluh.wav" type="audio/wav">
        </audio>
        <audio id="sebelas">
            <source src="https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/sebelas.wav" type="audio/wav">
        </audio>

        <audio id="belas">
            <source src="https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/belas.wav" type="audio/wav">
        </audio>
        <audio id="puluh">
            <source src="https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/puluh.wav" type="audio/wav">
        </audio>
        <audio id="seratus">
            <source src="https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/seratus.wav" type="audio/wav">
        </audio>


        <!-- <button onclick="playAudio('30', 2)" type="button">Play Audio</button> -->

        
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

        <script>

            var tiket = [];
            
            function checkAvailability() {

                jQuery.ajax({
                url: "<?= base_url() ?>api/board",
                    // data:'username='+$("#username").val(),
                    type: "POST",
                    success:function(data){

                        // console.log(data)
                        // run_audio(tiket_no)

                        var loket_no = data.loket_no ;
                        var tiket_no = data.tiket_no ;

                        if(tiket[0] != data.tiket_no){
                            // console.log( data.tiket_no)

                            playAudio(String(data.tiket_no), data.loket_no)

                        }

                        tiket[0] = data.tiket_no ;
                        
                
                        $('#loket_no').text(loket_no)
                        $('#tiket_no').text(tiket_no)
                    },
                    
                    error:function () {

                    }

                });
                
                freshAtrian()

            }
            

            function freshAtrian(){

                setTimeout(function(){ checkAvailability() }, 1000);
            }

            $( document ).ready( checkAvailability() ,function() {

            })
            
        </script>


        <script>

            function playAudio(tiket_no, loket_no) { 

                // if(tiket_no > 10 ){

                //     var x = document.getElementById(tiket_no); 

                // } else {

                //     var x = document.getElementById(tiket_no); 

                // }

                // x.play();

                var nomor_urut = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/nomor-urut.wav'); 
                var loket = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/loket.wav'); 

                var loket_no = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/'+loket_no+'.wav'); 
                

                var belas = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/belas.wav'); 
                var puluh = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/puluh.wav'); 
                var seratus = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/seratus.wav'); 




                var audio = function() {

                    if(tiket_no < 10){

                        var tiket = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/'+tiket_no+'.wav'); 

                        setTimeout(function(){ nomor_urut.play(); }, 1000);
                        setTimeout(function(){ tiket.play(); }, 2000);
                        setTimeout(function(){ loket.play(); }, 3000);
                        setTimeout(function(){ loket_no.play(); }, 4000);

                    }

                    if(tiket_no == 10){
                                
                        var sepuluh = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/sepuluh.wav'); 

                        setTimeout(function(){ nomor_urut.play(); }, 1000);
                        setTimeout(function(){ sepuluh.play(); }, 2000);
                        setTimeout(function(){ loket.play(); }, 3000);
                        setTimeout(function(){ loket_no.play(); }, 4000);

                    }

                     if(tiket_no == 11){

                        var sebelas = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/sebelas.wav'); 

                        setTimeout(function(){ nomor_urut.play(); }, 1000);
                        setTimeout(function(){ sebelas.play(); }, 2000);
                        setTimeout(function(){ loket.play(); }, 3000);
                        setTimeout(function(){ loket_no.play(); }, 4000);

                    }

                    if(tiket_no > 11 && tiket_no < 20 ){

                        var last = tiket_no.substring(2,1)
                        console.log(last)

                        var tiket_last = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/'+last+'.wav'); 

                        setTimeout(function(){ nomor_urut.play(); }, 1000);

                        setTimeout(function(){ tiket_last.play(); }, 2000);
                        setTimeout(function(){ belas.play(); }, 2400);

                        setTimeout(function(){ loket.play(); }, 4000);
                        setTimeout(function(){ loket_no.play(); }, 5000);

                    }

                    if (tiket_no > 19 && tiket_no < 100){

                        var last = tiket_no.substring(2,1)
                        var one = tiket_no.substring(1,0)
                        console.log(last)
                        console.log(one)

                        var tiket_last = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/'+last+'.wav'); 
                        var tiket_one = new Audio('https://raw.githubusercontent.com/endevelopers/tiket-antrian/master/asset/rekaman/'+one+'.wav'); 

                        setTimeout(function(){ nomor_urut.play(); }, 1000);

                        setTimeout(function(){ tiket_one.play(); }, 2000);
                        setTimeout(function(){ puluh.play(); }, 2400);
                        if(last > 0 ){

                            setTimeout(function(){ tiket_last.play(); }, 2700);
                        }

                        setTimeout(function(){ loket.play(); }, 4000);
                        setTimeout(function(){ loket_no.play(); }, 5000);

                    }



                }
                audio();
            } 

        </script>

       
        
    </body>


</html>
