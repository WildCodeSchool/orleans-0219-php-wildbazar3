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


       <?php include 'usbkeyDB.php'; ?>


       <!---------------------- USB -------------------------->


       <section class="container">
          <div class="row">



              <?php foreach($usbkeys as $usbkey) {

                  $image = $usbkey["image"] ;
                  $name = $usbkey["name"] ;
                  $text = $usbkey['text'] ;
                  $target = $usbkey['dataTarget'] ;
                  $modalText = $usbkey['modalText'] ;
                  $price = $usbkey['price'] ;
                  $size = $usbkey['size'] ;



                  include 'usbproductcard.php';
                  include 'usbmodal.php';

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



       <!---------------------- Footer -------------------------->


       <?php include 'footer.php'; ?>


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