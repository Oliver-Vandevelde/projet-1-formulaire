<<<<<<< HEAD
<?php
    // Tableaux de sanitization.
        
        $options = array(
            'name' 	    => FILTER_SANITIZE_STRING,
            'firstname' => FILTER_SANITIZE_STRING,
            'genre'     => FILTER_SANITIZE_STRING,
            'pays'      => FILTER_SANITIZE_STRING,
            'email'     => FILTER_VALIDATE_EMAIL,
            'sujet'     => FILTER_SANITIZE_STRING,
            'message'   => FILTER_SANITIZE_STRING
        );
        
        // Tableaux pour assosier le sanitizer et l'input.
        // $result = filter_input_array(INPUT_POST, $options);

        // Verification si bot spammer
        if($_POST['verification'] == ""){

            $result = filter_input_array(INPUT_POST, $options);
            // Boucle pour afficher les input sanitizer.
            foreach($options as $key => $value) 
            {
                $result[$key]=trim($result[$key]);
            }
        }


    // Autre technique / Verifier que la variable existe avec un ISSET , la sanitizer , puis verifier si
    // elle est remplie ou non , sinon le dire , si oui la modifier.

    // if(isset($_POST['name'])){
    //     $verif = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    //     if(empty($_POST['name'])){
    //         $name_error = "Veuillez entrez un nom";
    //     }else{
    //         $name = $verif;
    //     }
    // }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hackers Poulette</title>
        <link href="./assets/img/logoPoulette.png" rel="shortcut icon" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    </head>
=======
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hackers Poulette</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
>>>>>>> aa3a8b3153a4a688805d0f0b3419d89fac757e3a
<body>
    <?php
        include 'assets/php/header.php';
        if(empty($_GET['page'])){
            include 'assets/php/accueil.php';
<<<<<<< HEAD
        }if($_GET['page']=='accueil'){
            include 'assets/php/accueil.php';
=======
>>>>>>> aa3a8b3153a4a688805d0f0b3419d89fac757e3a
        }if ($_GET['page']=='information'){
            include 'assets/php/information.php';
        }if ($_GET['page']=='produit'){
            include 'assets/php/produit.php';
        }if ($_GET['page']=='contact'){
            include 'assets/php/contact.php';
<<<<<<< HEAD
        }if ($_GET['page']=='envoi'){
            include 'assets/php/envoi.php';
        }
        include 'assets/php/footer.php'
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

=======
        }
        include 'assets/php/footer.php';
    ?>
>>>>>>> aa3a8b3153a4a688805d0f0b3419d89fac757e3a
</body>
</html>