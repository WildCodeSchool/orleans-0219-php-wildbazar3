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
        <p class="lead">Hundreds of books ! Thousands of books ! And ONE more...</p>
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

        require 'connec.php';
        require 'src/function.php';

        $pdo = new PDO(DSN, USER, PASS);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = cleanData($_POST);


            $errors = [];


            // Validation part

            if (empty($data['bookTitle'])) {
                $errors['bookTitle'] = 'Un titre est obligatoire !';
            }

            if (empty($data['image'])) {
                $errors['image'] = 'C\'est mieux avec une image !';
            }

            if (empty($data['price'])) {
                $errors['price'] = 'Le prix est obligatoire !';
            }

            if (empty($data['bookYear'])) {
                $errors['bookYear'] = 'L\'année de parution doit être entre 1800 et 2099';
            }

            if (empty($data['bookPage'])) {
                $errors['bookPage'] = 'Le nombre de pages est obligatoire !';
            }

            if (empty($data['bookShaping'])) {
                $errors['bookShaping'] = 'Le façonnage est obligatoire !';
            }

            if (empty($data['bookSize'])) {
                $errors['bookSize'] = 'Le format est obligatoire !';
            }

            if (empty($data['bookResume'])) {
                $errors['bookResume'] = 'Un résumé est obligatoire !';
            }



            if (empty($errors)) {
                $query = "INSERT INTO book (image, bookTitle, bookAuthor, price, bookYear, bookPage, bookShaping, bookSize, bookResume)
                          VALUES (:image, :bookTitle, :bookAuthor, :price, :bookYear, :bookPage, :bookShaping, :bookSize, :bookResume)";

                $statement= $pdo->prepare($query);

                $statement->bindValue(':image', $data['image'], PDO::PARAM_STR);
                $statement->bindValue(':bookTitle', $data['bookTitle'], PDO::PARAM_STR);
                $statement->bindValue(':bookAuthor', $data['bookAuthor'], PDO::PARAM_STR);
                $statement->bindValue(':price', $data['price'], PDO::PARAM_INT);
                $statement->bindValue(':bookYear', $data['bookYear'], PDO::PARAM_INT);
                $statement->bindValue(':bookPage', $data['bookPage'], PDO::PARAM_INT);
                $statement->bindValue(':bookShaping', $data['bookShaping'], PDO::PARAM_STR);
                $statement->bindValue(':bookSize', $data['bookSize'], PDO::PARAM_STR);
                $statement->bindValue(':bookResume', $data['bookResume'], PDO::PARAM_STR);
                $statement->execute();

                header('location:success.php');
                exit();
            }

        }

        $shapings = [
            'Broch&eacute;',
            'Broch&eacute; avec jaquette',
            'Dos carr&eacute;-coll&eacute;',
            'Dos carr&eacute;-coll&eacute; avec jaquette',
            'Wire-O',
            'Flatbook',
        ];

        ?>

        <form id="formbook" method="POST" action="formBook.php">
            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                    <label for="titre">Titre de l'ouvrage :</label>
                    <input type="text" id="titre" name="bookTitle" class="form-control" required
                           value="<?= $data['bookTitle'] ?? '' ?>"><span class="error">
                    <?php if (isset($errors['bookTitle'])) echo '* ' . $errors['bookTitle']; ?></span>
                </div>

                <div class="form-group col-sm-12 col-md-6">
                    <label for="auteur">Auteur :</label>
                    <input type="text" id="auteur" name="bookAuthor" class="form-control"
                           value="<?= $data['bookAuthor'] ?? '' ?>">
                    <?php if (isset($errors['bookAuthor'])) echo '* ' . $errors['bookAuthor']; ?>
                </div>

            </div>

            <div class="form-group">
                <label for="image">Image :</label>
                <input type="url" id="image" name="image" class="form-control" required
                       value="<?= $data['image'] ?? '' ?>"><span class="error">
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
                    <input type="number" id="annee" name="bookYear" min="1900" max="2099" class="form-control" required
                           value="<?= $data['bookYear'] ?? '' ?>"><span class="error">
                        <?php if (isset($errors['bookYear'])) echo '* ' . $errors['bookYear']; ?></span>
                </div>

                <div class="form-group col col-sm-6 col-md-3">
                    <label for="pages">Nombre de pages :</label>
                    <input type="number" id="pages" name="bookPage" class="form-control" onwheel="this.blur()" required
                           value="<?= $data['bookPage'] ?? '' ?>"><span class="error">
                        <?php if (isset($errors['bookPage'])) echo '* ' . $errors['bookPage']; ?></span>
                </div>

                <div class="form-group col col-sm-6 col-md-3">
                    <label for="shaping">Façonnage :</label>
                    <select id="shaping" name="bookShaping" class="form-control" required>
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
                    <input type="text" id="format" name="bookSize" class="form-control" required
                           value="<?= $data['bookSize'] ?? '' ?>"><span class="error">
                        <?php if (isset($errors['bookSize'])) echo '* ' . $errors['bookSize']; ?></span>
                </div>
            </div>

            <div class="form-group">
                <label for="resume">Résumé :</label>
                <textarea id="resume" name="bookResume" rows="10" required
                          class="form-control"><?= $data['bookResume'] ?? '' ?></textarea><span class="error">
                    <?php if (isset($errors['bookResume'])) echo '* ' . $errors['bookResume']; ?></span>
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