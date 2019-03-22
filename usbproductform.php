<?php


if (isset($_POST) && !empty($_POST)) {

    $errors = [];

    foreach ($_POST as $key=>$value) {  //
        $_POST[$key] = trim($value);
    }




    if (empty($_POST['name']) OR strlen($_POST['name']) < 4) {
        $errors['name'] = "The name must be greater than 3 characters!";
    }

    if (empty($_POST['description']) OR strlen($_POST['description']) < 20) {
        $errors['description'] = "The description should be longer than 20 characters.";
    }

    if (empty($_POST['size']) OR $_POST['size'] < 5 OR $_POST['size'] > 300) {
        $errors['size'] = "How on earth did you screw up the size?";
    }


    if (!preg_match("/^[1-9]+[0-9]*$/", $_POST['price'])) {
        $errors['price'] = "Please enter a valid price";
    }

    if (empty($_POST['modal']) OR strlen($_POST['modal']) < 20) {
        $errors['modal'] = "The modal description should be longer than 20 characters.";
    }

 /*   if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['modal'] = "L'adresse e-mail n'est pas valide !";
    }   */

  //  if ($_POST['image'] != "jpg" && $image != "png" && $image != "jpeg" && $image != "gif" ) {
  //      $errors['image'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 //   }

    if (!$errors) {
        header("location: usbproductform.php");
        exit();
    }
}
?>


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
    <link rel="stylesheet" href="form.css" />
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


<!---------------------- Form -------------------------->
<section>


    <h2>Ajouter une clé USB</h2>

    <div id="formulaire">


        <form method="POST" action="usbproductform.php">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required minlength="3" maxlength="100"
                       value="<?= $_POST['name'] ?? "" ?>">
                <small class="text-danger font-weight-bold"><?= $errors['name'] ?? "" ?></small>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" cols="25" required minlength="20" maxlength="255"  placeholder="Une description courte du produit..."><?= $_POST['description'] ?? "" ?></textarea>
                <small class="text-danger font-weight-bold"><?= $errors['description'] ?? "" ?></small>
            </div>



<!--            <div class="form-group">
                <label for="Description">Description</label>
                <input type="text" class="form-control" id="description" name="description" required minlength="20" maxlength="255"
                       value="<?/*= $_POST['description'] ?? "" */?>">
                <small class="text-danger font-weight-bold"><?/*= $errors['description'] ?? "" */?></small>
            </div>-->

            <div class="form-group">
                <label for="size">Taille</label>
                <input class="radioUSB" type="radio" name="size" value="16" checked> 16 GB
                <input class="radioUSB" type="radio" name="size" value="32"> 32 GB
                <input class="radioUSB" type="radio" name="size" value="64"> 64 GB
                <input class="radioUSB" type="radio" name="size" value="128"> 128 GB
                <small class="text-danger pushright font-weight-bold"><?= $errors['size'] ?? "" ?></small>
            </div>


            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" class="form-control" id="price" name="price" required minlength="1" maxlength="4"
                       value="<?= $_POST['price'] ?? "" ?>" onwheel="this.blur()">
                <small class="text-danger font-weight-bold"><?= $errors['price'] ?? "" ?></small>
            </div>
            <div class="form-group">
                <label for="modal">Texte</label>
                <input type="text" class="form-control" id="modal" name="modal" required minlength="20" maxlength="255"
                       value="<?= $_POST['modal'] ?? "" ?>">
                <small class="text-danger font-weight-bold"><?= $errors['modal'] ?? "" ?></small>
            </div>

                Choisir un image:
                <input type="file" name="image" id="image">
                <small class="text-danger font-weight-bold"><?= $errors['image'] ?? "" ?></small>

                <!-- <input class="send-button" type="submit" value="Envoyer" name="submit"> -->
                <button type="submit" class="btn btn_item send-button"> Envoyer </button>

        </form>







    </div>


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