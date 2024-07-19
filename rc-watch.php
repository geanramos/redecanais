    <?php
    // Verifica se os parâmetros 'v' (código do vídeo) e 't' (título do vídeo) foram passados via GET
    if (isset($_GET['v']) && isset($_GET['t'])) {
        $videoId = $_GET['v'];
        $title = $_GET['t'];
    } else {
        // Valores padrão caso os parâmetros não sejam fornecidos (substitua por valores padrão ou manipule conforme necessário)
        $videoId = 'DVRTDMNT';
        $title = 'RedeCanais';
    }
    ?>
<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="https://redecanais.u1m.com.br/favicon.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Rede Canais - Assista <?php echo $title; ?> Online</title>
  <link rel="stylesheet" href="https://redecanais.u1m.com.br/assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="https://redecanais.u1m.com.br/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://redecanais.u1m.com.br/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="https://redecanais.u1m.com.br/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="https://redecanais.u1m.com.br/assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="https://redecanais.u1m.com.br/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="https://redecanais.u1m.com.br/assets/socicon/css/styles.css">
  <link rel="stylesheet" href="https://redecanais.u1m.com.br/assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"></noscript>
  <link rel="preload" as="style" href="https://redecanais.u1m.com.br/assets/mobirise/css/mbr-additional.css?v=IUdKXh"><link rel="stylesheet" href="https://redecanais.u1m.com.br/assets/mobirise/css/mbr-additional.css?v=IUdKXhj" type="text/css">
  <style> .btn-secondary, .btn-secondary:active { background-color: #0000ff !important; border-color: #3F51B5 !important; color: #ffffff !important; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2); } .btn-secondary:hover, .btn-secondary:focus, .btn-secondary.focus, .btn-secondary.active { color: #ffffff !important; background-color: #000000 !important; border-color: #999999 !important; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2); } img, iframe { border-radius: 8px; } </style>  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu2 cid-sFF0ciwnEL" once="menu" id="menu2-0">
    
    <nav class="navbar navbar-dropdown navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://redecanais.u1m.com.br/">
                        <img src="https://redecanais.u1m.com.br/assets/images/logo.png" alt="rede canais" style="height: 3rem;">
                    </a>
                </span>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="https://redecanais.u1m.com.br/browse-filmes-videos-1-date.html">Filmes</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="https://redecanais.u1m.com.br/browse-series-videos.html">Series</a></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="https://redecanais.u1m.com.br/browse-animes-videos-1-date.html">Animes</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="https://redecanais.u1m.com.br/topvideos.html">Top 10</a>
                    </li></ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="https://www.facebook.com/hashtag/redecanais" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://x.com/search?q=redecanais&src=typed_query&f=live" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://www.instagram.com/explore/tags/redecanais/" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                    </a>
                    
                </div>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-secondary display-4" href="https://redecanais.u1m.com.br/android/" target="_blank"><span class="mobi-mbri mobi-mbri-android mbr-iconfont mbr-iconfont-btn"></span>Download</a></div>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="video2 cid-uiUFkWLEie" id="video2-2">
    
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2"><strong><?php echo $title; ?></strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-0 mt-2 display-7">Temporada: 05 | Ep: 01 - Diretriz Vermelha</h5>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-12 video-block">
                <div class="video-wrapper"><iframe class="mbr-embedded-video" name=Player "" src="https://www.youtube.com/embed/uUQvoNM-Heo?autoplay=1" frameborder=0 height=400 scrolling=no width=640 allow="encrypted-media" allowFullScreen> </iframe>
				
				</div>
				
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="gallery5 mbr-gallery cid-uiUBJVWnUR" id="gallery5-1">
    

    
    

    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>Star Trek: Discovery</strong></h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">5 Temporada</h4>
        </div>
        <div class="row mbr-gallery mt-4">
            
            
            
            <div class="col-12 col-md-6 col-lg-3 item gallery-image active">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP01"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="0" data-bs-slide-to="0" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP01" class="text-primary">Star Trek: Discovery | Ep: 01</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP02"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="1" data-bs-slide-to="1" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP02" class="text-primary">Star Trek: Discovery | Ep: 02</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP03"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="2" data-bs-slide-to="2" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP03" class="text-primary">Star Trek: Discovery | Ep: 03</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP04"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="3" data-bs-slide-to="3" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP04" class="text-primary">Star Trek: Discovery | Ep: 04</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP05"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="4" data-bs-slide-to="4" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP05" class="text-primary">Star Trek: Discovery | Ep: 05</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP06"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="5" data-bs-slide-to="5" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP06" class="text-primary">Star Trek: Discovery | Ep: 06</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP07"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="6" data-bs-slide-to="6" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP07" class="text-primary">Star Trek: Discovery | Ep: 07</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP08"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="7" data-bs-slide-to="7" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP08" class="text-primary">Star Trek: Discovery | Ep: 08</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP09"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="8" data-bs-slide-to="8" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP09" class="text-primary">Star Trek: Discovery | Ep: 09</h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05E10"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="9" data-bs-slide-to="9" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP10" class="text-primary">Star Trek: Discovery | Ep: 10</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP11"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="10" data-bs-slide-to="10" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP11" class="text-primary">Star Trek: Discovery | Ep: 11</a></h6>
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#uiV444zO3n-modal" data-bs-target="#uiV444zO3n-modal">
                    <a href="https://geanramos.com/rc-watch.php?v=STRTRKT05E12"><img class="w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery | 5 Temporada" data-slide-to="11" data-bs-slide-to="11" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></a>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-4"><a href="https://geanramos.com/rc-watch.php?v=STRTRKT05EP12" class="text-primary">Star Trek: Discovery | Ep: 12</a></h6>
            </div>
        </div>

        <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="uiV444zO3n-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel slide" id="lb-uiV444zO3n" data-interval="5000" data-bs-interval="5000">
                            <div class="carousel-inner">
                                
                                
                                
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="https://image.tmdb.org/t/p/original/nezsWLwxiThJdVlRBdJcrSwxcaV.jpg" alt="Star Trek: Discovery">
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="1" data-bs-slide-to="1" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="2" data-bs-slide-to="2" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="3" data-bs-slide-to="3" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="4" data-bs-slide-to="4" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="5" data-bs-slide-to="5" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="6" data-bs-slide-to="6" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="7" data-bs-slide-to="7" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="8" data-bs-slide-to="8" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="9" data-bs-slide-to="9" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="10" data-bs-slide-to="10" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li><li data-slide-to="11" data-bs-slide-to="11" class="" data-target="#lb-uiV444zO3n" data-bs-target="#lb-uiV444zO3n"></li>
                                
                                
                                
                            </ol>
                            <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                            </a>
                            <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" data-bs-slide="prev" href="#lb-uiV444zO3n">
                                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-control" role="button" data-slide="next" data-bs-slide="next" href="#lb-uiV444zO3n">
                                <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer1 cid-uiUGKS41PZ" once="footers" id="footer1-4">

    

    
    
    <div class="container">
        <div class="row mbr-white">
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>RedeCanais</strong>
                </h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap">Home</li>
                    <li class="mbr-text item-wrap">Categoria</li>
                    <li class="mbr-text item-wrap">Politica de Privacidade</li>
                    <li class="mbr-text item-wrap">FuteMax</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Vídeos</strong>
                </h5>
                <ul class="list mbr-fonts-style display-4">

                    <li class="mbr-text item-wrap">Novos Vìdeos</li>
                    <li class="mbr-text item-wrap">Mais Acessados</li>
                    <li class="mbr-text item-wrap">RSS</li>
					<li class="mbr-text item-wrap">APP</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Menu</strong>
                </h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap">Filmes</li>
                    <li class="mbr-text item-wrap">Series</li>
                    <li class="mbr-text item-wrap">Desenhos</li>
                    <li class="mbr-text item-wrap">Animes</li>
					<li class="mbr-text item-wrap">Novelas</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Sobre</strong>
                </h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">
                    RedeCanais: Animes, Séries, Novelas, Filmes e Desenhos Online! Netflix, Disney+, Amazon Prime Video, Globoplay, HBO Max, Paramount+, Apple TV+, e o melhor, de graça!</p>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                    <strong>Social</strong>
                </h5>
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="https://www.facebook.com/hashtag/redecanais" target="_blank">
                            <span class="mbr-iconfont socicon socicon-facebook"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://x.com/search?q=redecanais&src=typed_query&f=live" target="_blank">
                            <span class="mbr-iconfont socicon socicon-twitter"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.instagram.com/explore/tags/redecanais/" target="_blank">
                            <span class="mbr-iconfont socicon socicon-instagram"></span>
                        </a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
	
</section><script src="https://redecanais.u1m.com.br/assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>  <script src="https://redecanais.u1m.com.br/assets/facebook-plugin/facebook-script.js"></script>  <script src="https://redecanais.u1m.com.br/assets/smoothscroll/smooth-scroll.js"></script>  <script src="https://redecanais.u1m.com.br/assets/ytplayer/index.js"></script>  <script src="https://redecanais.u1m.com.br/assets/dropdown/js/navbar-dropdown.js"></script>  <script src="https://redecanais.u1m.com.br/assets/playervimeo/vimeo_player.js"></script>  <script src="https://redecanais.u1m.com.br/assets/theme/js/script.js"></script>  
  
  
</body>
</html>