<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styles/usb.css" />

    <title>USB keys</title>
  </head>



  <body>






       <!---------------------- Navbar -------------------------->

         <header>

      <?php include 'header.php'; ?>

      <!---------------------- Header -------------------------->


            <div class="jumbotron ">
              <div class="text-block">


                <h1 class="display-1  mx-auto">USB Keys</h1>
                <p class="lead ">On y trouve de tout et surtout du n'importe quoi !</p>
              </div>
        <!--    <button type="button" class="btn btn_item">Vendez !</button>    -->
            </div>


        </header>




       <?php $usbkeys =  array(

            array(
                "name" => "Sandisk RedDrive 1000",
                "image" => "img/a.png",
                "text" => "Sandisk's hot new flash drive combines speed and accuracy.",
                "data-target" => "a",
                "size" => "16",
                "price" => "32",
                "modalText" => "Cutting edge super-flash technology makes Sandisk's RedDrive 1000 one of the hottest drives on the market.",
            ),
           array(
               "name" => "SP Key",
               "image" => "img/b.png",
               "text" => "The SP Key will hold your important data for the long run.",
               "data-target" => "b",
               "size" => "32",
               "price" => "45",
               "modalText" => "Cutting edge super-flash technology makes the SP Key one of the hottest drives on the market.",
           ),
           array(
               "name" => "Samsung Arrow",
               "image" => "img/c.png",
               "text" => "Perfect for images or documents, Samsung has done it again.",
               "data-target" => "c",
               "size" => "32",
               "price" => "52",
               "modalText" => "Cutting edge super-flash technology makes the Samsung Arrow one of the hottest drives on the market.",
           ),
           array(
               "name" => "SanDisk Button",
               "image" => "img/d.png",
               "text" => "So small and unimposing, you might even forget it's in your pocket!",
               "data-target" => "d",
               "size" => "8",
               "price" => "19",
               "modalText" => "Cutting edge super-flash technology makes the SanDisk Button one of the hottest drives on the market.",
           ),
           array(
               "name" => "Transformer",
               "image" => "img/e.png",
               "text" => "From a bottle-opener to a door-stop, this little flash drive can do almost anything.",
               "data-target" => "e",
               "size" => "32",
               "price" => "49",
               "modalText" => "Cutting edge super-flash technology makes the Transformer one of the hottest drives on the market.",
           ),
           array(
               "name" => "Samsung Silver",
               "image" => "img/f.png",
               "text" => "Luxury meets elegance in Samsung's high-end model You get what you pay for!",
               "data-target" => "f",
               "size" => "64",
               "price" => "72",
               "modalText" => "Cutting edge super-flash technology makes the Samsung Silver one of the hottest drives on the market.",
           ),
           array(
               "name" => "Thetis Key",
               "image" => "img/g.png",
               "text" => "The flagship drive from upcoming Greek manufacturer Thetis. Now Fido certified.",
               "data-target" => "g",
               "size" => "32",
               "price" => "64",
               "modalText" => "Cutting edge super-flash technology makes the Thetis Key one of the hottest drives on the market.",
           ),
           array(
               "name" => "PNY Gadget",
               "image" => "img/h.png",
               "text" => "Designed from Leonardo da Vinci's sketches, the Gadget is a true work of art.",
               "data-target" => "h",
               "size" => "32",
               "price" => "45",
               "modalText" => "Cutting edge super-flash technology makes the PNY Gadget one of the hottest drives on the market.",
           ),
           array(
               "name" => "iLOK Performer",
               "image" => "img/i.png",
               "text" => "The iLOK Performer locks your data so even you can't get to it!",
               "data-target" => "i",
               "size" => "16",
               "price" => "40",
               "modalText" => "Cutting edge super-flash technology makes the iLOK Performer one of the hottest drives on the market.",
           ),
           array(
               "name" => "Corsair Voyager Vega",
               "image" => "img/j.png",
               "text" => "The preferred flash drive of corsairs for over 5 centuries.",
               "data-target" => "j",
               "size" => "24",
               "price" => "86",
               "modalText" => "Cutting edge super-flash technology makes the Corsair Voyager Vega one of the hottest drives on the market.",
           ),
           array(
               "name" => "Samsung Little Boy",
               "image" => "img/k.png",
               "text" => "Don't let the size fool you! The Little Boy has the power of an adult!",
               "data-target" => "k",
               "size" => "128",
               "price" => "119",
               "modalText" => "Cutting edge super-flash technology makes the Little Boy one of the hottest drives on the market.",
           ),
           array(
               "name" => "Corsair GS",
               "image" => "img/l.png",
               "text" => "Waterproof, weatherproof, fireproof... everything but childproof!",
               "data-target" => "l",
               "size" => "8",
               "price" => "12",
               "modalText" => "Cutting edge super-flash technology makes the Corsair GS one of the hottest drives on the market.",
           )

        );




        ?>



       <!---------------------- USB -------------------------->


       <section class="container">
          <div class="row">



              <?php foreach($usbkeys as $usbkey) {
                  $image = $usbkey["image"] ;
                  $name = $usbkey["name"] ;
                  $text = $usbkey['text'] ;
                  $target = $usbkey['data-target'] ;

                  include 'usbproductcard.php';
                  }

                ?>





          </div>


        <nav aria-label="Page navigation example" class="paginationbar">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link orangeb" href="#">1</a></li>
            <li class="page-item"><a class="page-link oranget" href="#">2</a></li>
            <li class="page-item"><a class="page-link oranget" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link oranget" href="#">Next</a>
            </li>
          </ul>
        </nav>


       </section>



       <!-- Modals -->

       <div>
            <?php


            ?>


            <!-- Modal -->
            <div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Sandisk RedDrive 1000</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/a.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 16GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes Sandisk's RedDrive 1000 one of the hottest drives on the market.</p>
                        <p class="usbprice">$32.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="b" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">SP Key</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/b.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 32GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the SP Key one of the hottest drives on the market.</p>
                        <p class="usbprice">$45.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="c" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Samsung Arrow</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/c.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 32GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the Samsung Arrow one of the hottest drives on the market.</p>
                        <p class="usbprice">$52.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="d" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">SanDisk Button</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/d.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 8GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the SanDisk Button one of the hottest drives on the market.</p>
                        <p class="usbprice">$19.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="e" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Transformer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/e.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 32GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the Transformer one of the hottest drives on the market.</p>
                        <p class="usbprice">$49.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="f" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Samsung Silver</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/f.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 64GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the Samsung Silver one of the hottest drives on the market.</p>
                        <p class="usbprice">$72.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="g" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Thetis Key</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/g.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 32GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the Thetis Key one of the hottest drives on the market.</p>
                        <p class="usbprice">$64.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="h" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">PNY Gadget</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/h.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 32GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the PNY Gadget one of the hottest drives on the market.</p>
                        <p class="usbprice">$45.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="i" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">iLOK Performer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/i.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 16GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the iLOK Performer one of the hottest drives on the market.</p>
                        <p class="usbprice">$40.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="j" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Corsair Voyager Vega</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/j.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 24GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the Corsair Voyager Vega one of the hottest drives on the market.</p>
                        <p class="usbprice">$86.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="k" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Samsung Little Boy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/k.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 128GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the Little Boy one of the hottest drives on the market.</p>
                        <p class="usbprice">$119.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="l" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Corsair GS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                          <div>
                            <img class="modalphoto" src="img/l.png" alt="Photo of USB key">
                          </div>
                          <div>
                            <p class="characteristics">Characteristics:</P>
                            <p>-size: 8GB</p>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <p>Cutting edge super-flash technology makes the Corsair GS one of the hottest drives on the market.</p>
                        <p class="usbprice">$12.00</p>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                  </div>

                </div>
              </div>
            </div>

       </div>









       <!---------------------- Footer -------------------------->


  <!--Start of footer-->
  <footer id="contact">

    <div class="container">
      <div class="row">

        <!--Start of left column-->
        <div class="col-12 col-sm-6">


          <div class="row text-center"> <!--Start of row #2 of left column-->
            <div class="col">
              <img class="imgfooter" src="img/logo_wb.png" alt="Wild Bazar Logo">
            </div>
            <div class="col">
              <h4 class="h4-footer">WILD&nbsp;BAZAR</h4>
              <p class="address">1, rue de la paix<br>75000 Paris<br>+33&nbsp;(0)1&nbsp;23&nbsp;45&nbsp;67&nbsp;89</p>
            </div>
          </div> <!--end of row #2 of left column-->

          <div class="row categories_footer"> <!--Start of row #1 of left column-->
           <div class="col">
            <ul class="list-group">
              <li class="list-group-item border-0">
                <a href="#" class="a_footer">Home</a>
              </li>
              <li class="list-group-item border-0">
                <a href="about" class="a_footer">About us</a>
              </li>
              <li class="list-group-item border-0">
                <a href="topselling" class="a_footer">Top Selling</a>
              </li>
              <li class="list-group-item border-0">
                <a href="contact" class="a_footer">Contact</a>
              </li>
              <li class="list-group-item border-0">
                <a href="#" class="a_footer">Legal mentions</a>
              </li>
            </ul>
          </div>
          <div class="col">
            <ul class="list-group">
              <li class="list-group-item border-0">
                <a href="books.html" class="a_footer">Livres</a>
              </li>
              <li class="list-group-item border-0">
                <a href="toys.html" class="a_footer">Jouets</a>
              </li>
              <li class="list-group-item border-0">
                <a href="poubelle.html" class="a_footer">Poubelles</a>
              </li>
              <li class="list-group-item border-0">
                <a href="usb.php" class="a_footer">Clés USB</a>
              </li>
            </ul>
          </div>
          </div> <!--End of row #1 of left column-->

        </div>
        <!--end of left column-->

        <!--Start of right column-->
        <div class="col-12 col-sm-6">
          <!--Start of Contact form-->
          <h6 class="formheader">Contact us</h6>
          <form>
            <div class="form-group formlabel">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="@">
            </div>
            <div class="form-group formlabel">
              <label for="text">Message</label>
              <textarea class="form-control" id="text" rows="3" placeholder="Your message"></textarea>
            </div>
            <div class="submitbutton col-4 offset-5">
              <button type="button" class="btn btn_footer">Submit</button>
            </div>
          </form>
        </div>
        <!--End of Contact form-->
      <!--End of right column-->
      </div>
    </div>
  </footer>
  <!--End of footer-->



    <!-- Optional JavaScript -->

    <!-- For modals -->

<!--         $('#myModal').on('shown.bs.modal', function () {
 $('#myInput').trigger('focus')
}) -->



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>