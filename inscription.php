<?php session_start()?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>chatbox</title>
    <?php include('./callback.php');?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <script src="./public/js/main.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <main class="d-flex justify-content-center">
        <div id="inscrire" class="card p-5 m-5 col-5 " >
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">nom</span>
                        <input type="text" class="form-control" name="nom" required>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">prenom</span>
                        <input type="text" class="form-control" name="prenom" required>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">username</span>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">password</span>
                        <input type="password" class="form-control"name="password" required>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-secondary" value="inscription" name="inscription">
                    <a href="./" class="mx-5 pt-2"> se connecter</a>
                </div>
            
            </form>
        </div>
    </main>
    <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inscription'])) {
                echo 'inscription';        
                $creatUser= $connect->exePrepaQuery($user->createUser(trim($_POST['nom']),trim($_POST['prenom']),trim($_POST['username']),trim($_POST['password'])));
                $_SESSION['user']=trim($_POST['username']);
                header('Location: ./index.php');
            }
    
    ?>
        

  </body>
</html>
