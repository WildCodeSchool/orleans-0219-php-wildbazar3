<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <link rel="stylesheet" href="style_jouets.css"/>

        <title>Wild Bazar  - Les Jouets</title>

    </head>

    <body>

        <header>
            <!-- NAVBAR -->
            <?php
            include 'header.php';
            ?>
            <!-- JUMBOTRON -->
            <div class="jumbotron">
                <div class="sliding-background">
                    <h1 class="display-1 mx-auto">J O U E T S</h1>
                    <p class="lead">On y trouve de tout et surtout du n'importe quoi !</p>
                </div>
                <button type="button" class="btn btn_item btn-block">Vendez !</button>
            </div>

        </header>
        <!-- SECTION CARDS -->
        <div class="card-deck">
            <!-- Card 01 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" data-toggle="modal">
                <div class="card">
                    <img src="https://images.king-jouet.com/6/GU708842_6.jpg" class="card-img-top" alt="Téléphone sur roulette">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $toys(['name'])?></h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            En savoir +
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 02 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" type="input">
                <div class="card">
                    <img src="https://www.baby-lux.com/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/j/o/jouet-pieuvre-musicale-lamaze.jpg" class="card-img-top" alt="Peluche pieuvre">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Poulpi la pieuvre</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div> 
            </div>



            <!-- Card 03 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.ekobutiks.com/3259/jouet-petite-voiture-course-rouge-everearth-jouets-bois.jpg" class="card-img-top" alt="Voiture en bois">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Vrombi la voiture</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 04 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.animalis.com/media/catalog/product/cache/2/image/600x/602f0fa2c1f0d1ba5e241f914e856ff9/6/4/6492_PM-97368.jpg" class="card-img-top" alt="Cochon rose en plastique">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Coco le cochon</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 05 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://images.king-jouet.com/6/GU708842_6.jpg" class="card-img-top" alt="Téléphone sur roulette">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Teddy le teléphone</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 06 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.baby-lux.com/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/j/o/jouet-pieuvre-musicale-lamaze.jpg" class="card-img-top" alt="Peluche pieuvre">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Poulpi la pieuvre</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div> 
            </div>
            <!-- Card 07 --> 
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.ekobutiks.com/3259/jouet-petite-voiture-course-rouge-everearth-jouets-bois.jpg" class="card-img-top" alt="Voiture en bois">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Vrombi la voiture</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 08 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.animalis.com/media/catalog/product/cache/2/image/600x/602f0fa2c1f0d1ba5e241f914e856ff9/6/4/6492_PM-97368.jpg" class="card-img-top" alt="Cochon rose en plastique">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Coco le cochon</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 09 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://images.king-jouet.com/6/GU708842_6.jpg" class="card-img-top" alt="Téléphone sur roulette">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Teddy le teléphone</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 10 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.baby-lux.com/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/j/o/jouet-pieuvre-musicale-lamaze.jpg" class="card-img-top" alt="Peluche pieuvre">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Poulpi la pieuvre</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 11 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.ekobutiks.com/3259/jouet-petite-voiture-course-rouge-everearth-jouets-bois.jpg" class="card-img-top" alt="Voiture en bois">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Vrombi la voiture</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>    
            </div>
            <!-- Card 12 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.animalis.com/media/catalog/product/cache/2/image/600x/602f0fa2c1f0d1ba5e241f914e856ff9/6/4/6492_PM-97368.jpg" class="card-img-top" alt="Cochon rose en plastique">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Coco le cochon</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 13 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://images.king-jouet.com/6/GU708842_6.jpg" class="card-img-top" alt="Téléphone sur roulette">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Teddy le teléphone</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 14 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.baby-lux.com/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/j/o/jouet-pieuvre-musicale-lamaze.jpg" class="card-img-top" alt="Peluche pieuvre">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Poulpi la pieuvre</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 15 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.ekobutiks.com/3259/jouet-petite-voiture-course-rouge-everearth-jouets-bois.jpg" class="card-img-top" alt="Voiture en bois">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Vrombi la voiture</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <!-- Card 16 -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="https://www.animalis.com/media/catalog/product/cache/2/image/600x/602f0fa2c1f0d1ba5e241f914e856ff9/6/4/6492_PM-97368.jpg" class="card-img-top" alt="Cochon rose en plastique">
                    <div class="price_item">25€
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Coco le cochon</h5>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>  
            </div>

        </div>
        <?php
        include 'footer.php'
        ?>
        <!-- Optional JavaScript -->

        <!-- Script navbar -->
        <script>var prevScrollpos = window.pageYOffset; window.onscroll = function() {var currentScrollPos = window.pageYOffset; if (prevScrollpos > currentScrollPos) {document.getElementById("navbar").style.top = "0";} else {document.getElementById("navbar").style.top = "-50px";} prevScrollpos = currentScrollPos; }</script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

</html>