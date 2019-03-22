<!doctype html>
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
    <link rel="stylesheet" href="form.css">


    <title>Wild Bazar / Books</title>
</head>


<body>

<header>


    <?php include 'header.php'; ?>


    <div class="jumbotron w-100">
        <h1 class="display-1 mx-auto">WILD BOOKS</h1>
        <p class="lead">Des livres par centaines, des livres par milliers !</p>
        <!--  <button type="button" class="btn btn_item">Vendez !</button>    -->
    </div>

</header>


<section id="books">
    <div class="container">
        <div class="row"><!-- Ouverture Row Catégorie -->
            <div class="col text-center">
                <h2>AJOUT DE LIVRES</h2>
                <div class="sep"></div>
            </div>
        </div><!--Fermeture Row Titre-->
    </div>
    <div class="container">


        <!-- ================== Début formulaire d'ajout ================== -->

        <?php

        require 'src/function.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = cleanData($_POST);


            $errors = [];


            // Validation part

            if (empty($_POST['title'])) {
                $errors['title'] = 'Un titre est obligatoire !';
            }


            if (empty($_POST['image'])) {
                $errors['image'] = 'C\'est mieux avec une image !';
            }

            if (empty($_POST['price'])) {
                $errors['price'] = 'Le prix est obligatoire !';
            }

            if (empty($_POST['year'])) {
                $errors['year'] = 'L\'année de parution doit être entre 1800 et 2099';
            }

            if (empty($_POST['pages'])) {
                $errors['pages'] = 'Le nombre de pages est obligatoire !';
            }

            if (empty($_POST['shaping'])) {
                $errors['shaping'] = 'Le façonnage est obligatoire !';
            }

            if (empty($_POST['size'])) {
                $errors['size'] = 'Le format est obligatoire !';
            }

            if (empty($_POST['resume'])) {
                $errors['resume'] = 'Un résumé est obligatoire !';
            }

            // check errors

            if (count($errors) == 0) {
                header('location:success.php');
                exit();
            }


        }

        $shapings = [
            'Broché',
            'Broché avec jaquette',
            'Dos carré-collé',
            'Dos carré-collé avec jaquette',
            'Wire-O',
            'Flatbook',
        ];

        ?>

        <form id="formbook" method="POST" action="formBook.php">
            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                    <label for="titre">Titre de l'ouvrage :</label>
                    <input type="text" id="titre" name="title" class="form-control" required
                           value="<?= $data['title'] ?? '' ?>"><span class="error">
                    <?php if (isset($errors['title'])) echo '* ' . $errors['title']; ?></span>
                </div>

                <div class="form-group col-sm-12 col-md-6">
                    <label for="auteur">Auteur :</label>
                    <input type="text" id="auteur" name="author" class="form-control"
                           value="<?= $data['author'] ?? '' ?>">
                    <?php if (isset($errors['author'])) echo '* ' . $errors['author']; ?>
                </div>

            </div>

            <div class="form-group">
                <label for="image">Image :</label>
                <input type="url" id="image" name="image" required class="form-control" required
                       value="http://<?= $data['image'] ?? '' ?>"><span class="error">
                    <?php if (isset($errors['image'])) echo '* ' . $errors['image']; ?></span>
            </div>

            <div class="form-group">
                <label for="prix">Prix de l'ouvrage :</label>
                <input type="number" id="prix" name="price" class="form-control" required
                       value="<?= $data['price'] ?? '' ?>"><span class="error">
                    <?php if (isset($errors['price'])) echo '* ' . $errors['price']; ?></span>
            </div>

            <div class="row">
                <div class="form-group col col-sm-6 col-md-3">
                    <label for="annee">Année de parution :</label>
                    <input type="number" id="annee" name="year" min="1900" max="2099" class="form-control" required
                           value="<?= $data['year'] ?? '' ?>"><span class="error">
                        <?php if (isset($errors['year'])) echo '* ' . $errors['year']; ?></span>
                </div>

                <div class="form-group col col-sm-6 col-md-3">
                    <label for="pages">Nombre de pages :</label>
                    <input type="number" id="pages" name="pages" class="form-control" onwheel="this.blur()" required
                           value="<?= $data['pages'] ?? '' ?>"><span class="error">
                        <?php if (isset($errors['pages'])) echo '* ' . $errors['pages']; ?></span>
                </div>

                <div class="form-group col col-sm-6 col-md-3">
                    <label for="shaping">Façonnage :</label>
                    <select id="shaping" name="shaping" class="form-control" required>
                        <option value="" selected>-- Choisissez un façonnage --</option>
                        <?php foreach ($shapings as $shape) : ?>
                            <option value="<?= strtolower($shape); ?>">
                                <?= $shape; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                </div>

                <div class="form-group col col-sm-6 col-md-3">
                    <label for="format">Format :</label>
                    <input type="text" id="format" name="size" class="form-control" required
                           value="<?= $data['size'] ?? '' ?>"><span class="error">
                        <?php if (isset($errors['size'])) echo '* ' . $errors['size']; ?></span>
                </div>
            </div>

            <div class="form-group">
                <label for="resume">Résumé :</label>
                <textarea id="resume" name="resume" rows="10" required
                          class="form-control"><?= $data['resume'] ?? '' ?></textarea><span class="error">
                    <?php if (isset($errors['resume'])) echo '* ' . $errors['resume']; ?></span>
            </div>

            <div>
                <button type="submit" class="btn btn_item">Mettre en ligne</button>
            </div>

        </form>


        <!-- ================== fin formulaire d'ajout ================== -->

    </div>

</section>


<!-- ========== Footer ============ -->

<?php include 'footer.php'; ?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>