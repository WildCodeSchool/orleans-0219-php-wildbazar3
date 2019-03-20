<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
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
<!--start of form -->
<form action="" method="post">

    <div>
        <label for="produit">Nom du produit :</label>
        <input type="text" id="produit" name="produit"><!--required removed so we can test the server side-->
        <p><?php if (isset($errors['produit1'])) echo $errors['produit1']; ?></p>
    </div>

    <div>
        <label for="price">Prix :</label>
        <input type="text" id="name" name="price"><!--required removed so we can test the server side-->
        <p><?php if (isset($errors['price1'])) echo $errors['price1']; ?></p>
    </div>

    <div>
        <label for="image">Image du produit :</label>
        <input type="text" id="image" name="image"><!--required removed so we can test the server side-->
        <p><?php if (isset($errors['image1'])) echo $errors['image1']; ?></p>
    </div>

    <div>
        <label for="hauteur">Hauteur :</label>
        <input type="text" id="hauteur" name="hauteur"><!--required removed so we can test the server side-->
        <p><?php if (isset($errors['hauteur1'])) echo $errors['hauteur1']; ?></p>
    </div>

    <div>
        <label for="largeur">Largeur :</label>
        <input type="text" id="largeur" name="largeur"><!--required removed so we can test the server side-->
        <p><?php if (isset($errors['largeur1'])) echo $errors['largeur1']; ?></p>
    </div>

    <div>
        <label for="poids">Poids :</label>
        <input type="text" id="poids" name="poids"><!--required removed so we can test the server side-->
        <p><?php if (isset($errors['poids1'])) echo $errors['poids1']; ?></p>
    </div>

    <div>
        <label for="description">Description :</label>
        <textarea id="description" name="description"></textarea>
        <p><?php if (isset($errors['description1'])) echo $errors['description1']; ?></p>
    </div>

    <div class="button">
        <button type="submit">Envoyer votre nouveau produit</button>
    </div>

</form>
<!--end of form -->


</body>

</html>