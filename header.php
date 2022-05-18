


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Tchat</title>
    
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="d-flex flex-column vh-100" >
    <header class="p-3 text-white border-bottom border-dark vh-10">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between">
                <a href="./index.php" class="mb-2 mb-lg-0 text-white text-decoration-none">
                    <h1>MINITCHAT</h1>
                </a>
                <?php  
                    if(!isset($_SESSION['LOGGED_USER'])){
                        echo    '<div class="text-end">
                                    <a href="./connexion.php" class="btn btn-outline-light me-2">Connexion</a>
                                    <a href="./inscription.php" class="btn btn-warning me-2">Inscription</a>
                                </div>';

                    }
                    else{
                        echo    '<div class="text-end d-flex align-items-center gap-2">
                                    <p class="m-auto">'.$_SESSION['LOGGED_USER'].'</p>
                                    <form action="submit-deconnexion">
                                        <button class="btn btn-danger">Deconnexion</button>
                                    </form>
                                </div>';


                    }
                ?>

            </div>
        </div>
    </header>
    <main class="container py-5 col-lg-4 vh-80">