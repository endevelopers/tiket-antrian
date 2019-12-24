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
  
    <link rel=icon href="<?= base_url() ?>asset/assets/img/brand/favicon.png" type=image/png>
    <link rel=stylesheet href="<?= base_url() ?>asset/assets/libs/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel=stylesheet href="<?= base_url() ?>asset/assets/css/quick-website.css" id=stylesheet>
</head>
<body>
    <section>
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center min-vh-100">
                <div class="col-md-6 col-lg-5 col-xl-4 py-6 py-md-0"><div>
                    <div class="mb-5 text-center">
                        <h6 class="h3 mb-1">Login</h6>
                        <!-- <p class="text-muted mb-0">Sign in to your account to continue.</p> -->
                    </div>
                    <span class=clearfix></span>
                    <form action="<?= base_url() ?>user/login" method="post"> 
                        <div class=form-group>
                            <label class=form-control-label>Email address</label>
                                <div class="input-group input-group-merge">
                                    <div class=input-group-prepend>
                                        <span class=input-group-text>
                                    
                                            <i data-feather=user></i>
                                        </span>
                                    </div>
                                    <input name="email" type=email class=form-control id=input-email placeholder=name@example.com>
                                </div>
                                </div>
                                    <div class="form-group mb-4">
                                        <div class="d-flex align-items-center justify-content-between"><div>
                                        <label class=form-control-label>Password</label>
                                    </div>
                                  
                                    </div>
                                        <div class="input-group input-group-merge">
                                            <div class=input-group-prepend>
                                            <span class=input-group-text>
                                            <i data-feather=key></i>
                                        </span>
                                        </div>
                                        <input type=password name="password" class=form-control id=input-password placeholder=Password>
                                        <div class=input-group-append>
                                            <span class=input-group-text>
                                                <a href=# data-toggle=password-text data-target=#input-password>
                                                <i data-feather=eye></i>
                                            </a>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=mt-4>
                                        <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                                    </div>
                    </form>

            </div>
        </div>
    </section>
                      
        
        <script src="<?= base_url() ?>asset/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/libs/in-view/dist/in-view.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/libs/sticky-kit/dist/sticky-kit.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/libs/svg-injector/dist/svg-injector.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/libs/feather-icons/dist/feather.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/libs/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/libs/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/js/quick-website.js"></script>
                                        
                                        
        
        <script>feather.replace({width:"1em",height:"1em"})</script>
    </body>
</html>