
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>chatbox</title>
    <?php include('./callback.php') ?>
    <link rel="stylesheet" href="./public/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 
        <main  class="d-flex justify-content-center mt-5 ">

            <div class="list-group col-7 ">
            <a class="list-group-item list-group-item-action active">SUJECT DISPONIBLE</a>
                <?php
                    $sujets= $connect->exePrepaQuery($chat->getSujet());

                    foreach($sujets as $subject): ?>
                    
                        <a href="./chatbox.php?subject=<?=$subject['id'] ?>" class="list-group-item list-group-item-action "><?=$subject['Subject'] ?></a>        
                <?php endforeach;?>
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                  <div class="input-group input-group-sm mt-5">
                          <span class="input-group-text" id="inputGroup-sizing-sm">nouveau sujet</span>
                          <input type="text" name="sujet" class="form-control" >
                          <input type="submit" class="btn btn-primary" value="créer">
                  </div>
                </form>
            </div>


        </main>
        <?php
                   if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sujet'])) {
                    
                    $makeSubject =$connect->exePrepaQuery($chat->setSujet($_POST['sujet']));
            }
            ?>
  </body>
</html>
