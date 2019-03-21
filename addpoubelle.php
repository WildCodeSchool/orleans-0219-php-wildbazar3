<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <link rel="stylesheet" href="style.css"/>

    <title>Ajouter un produit</title>
</head>

<body>


<?php

//first, check if the form has been posted

if ($_POST) {

    //second, validate that the fields are not empty and create a variable (type Array) to store our errors.

    $errors = array();

    //start of validation

    if (empty($_POST['produit'])) {
        $errors['produit1'] = "Le champ Nom du produit est obligatoire...merci !";
    }

    if (empty($_POST['price'])) {
        $errors['price1'] = "Le champ Prix est obligatoire...merci !";
    }

    if (empty($_POST['image'])) {
        $errors['image1'] = "Veuillez inserer une image...merci !";
    }

    if (empty($_POST['hauteur'])) {
        $errors['hauteur1'] = "Le champ Hauteur est obligatoire...merci !";
    }

    if (empty($_POST['largeur'])) {
        $errors['largeur1'] = "Le champ Largeur est obligatoire...merci !";
    }

    if (empty($_POST['poids'])) {
        $errors['poids1'] = "Le champ Poids est obligatoire...merci !";
    }

    if (empty($_POST['description'])) {
        $errors['description1'] = "Le champ Description est obligatoire...merci !";
    }

    //checking for any errors

    if (empty ($errors)) {
        //redirect to success page
        header("Location: success.php");
        //exit so the rest of the script does not run
        exit();
    }
}


?>

<h2>Ajouter un produit</h2>

<!--start of form -->
<div class="container"
<div action="" method="post">

    <div class="form-group">
        <label for="produit">Nom du produit :</label>
        <input type="text" class="form-control" id="produit" name="produit"><!--required removed so we can test the server side-->
        <p><?php if (isset($errors['produit1'])) echo $errors['produit1']; ?></p>
    </div>

    <div class="form-group">
        <label for="price">Prix :</label>
        <input type="text" class="form-control" id="name" name="price"><!--required removed so we can test the server side-->
        <p><?php if (isset($errors['price1'])) echo $errors['price1']; ?></p>
    </div>

    <div class="form-group">
        <label for="image">Image du produit :</label>
        <input type="url" class="form-control" id="image" name="image" placeholder="URL de l'image">
        <!--required removed so we can test the server side-->
        <p><?php if (isset($errors['image1'])) echo $errors['image1']; ?></p>
    </div>

    <div class="form-group">
        <label for="hauteur">Hauteur :</label>
        <input type="text" class="form-control" id="hauteur" name="hauteur" placeholder="en centimètres">
        <!--required removed so we can test the server side-->
        <p><?php if (isset($errors['hauteur1'])) echo $errors['hauteur1']; ?></p>
    </div>

    <div class="form-group">
        <label for="largeur">Largeur :</label>
        <input type="text" class="form-control" id="largeur" name="largeur" placeholder="en centimètres">
        <!--required removed so we can test the server side-->
        <p><?php if (isset($errors['largeur1'])) echo $errors['largeur1']; ?></p>
    </div>

    <div class="form-group">
        <label for="poids">Poids :</label>
        <input type="text" class="form-control" id="poids" name="poids" placeholder="en kilos">
        <!--required removed so we can test the server side-->
        <p><?php if (isset($errors['poids1'])) echo $errors['poids1']; ?></p>
    </div>

    <div class="form-group">
        <label for="description">Description :</label>
        <textarea class="form-control" id="description" name="description"></textarea>
        <p><?php if (isset($errors['description1'])) echo $errors['description1']; ?></p>
    </div>

    <div class="button form-group">
        <button type="submit">Envoyez votre nouveau produit</button>
    </div>
</div>


</form>
<!--end of form -->

<!--jquery, popper, and javascript-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>