<?php session_start()?>
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
 
        <main >

            <div class="view_chat p-2 m-5 border rounded-top">
                <div class="chat ">
                    <?php 
                        $userLock=$_SESSION['user'];
                        
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['message'])) {
                            echo $_GET['subject'],$userLock,$_POST['message'];
                            $chatsend = $connect->exePrepaQuery($chat->setSujetMessages($_POST['message'],$userLock,$_GET['subject']));
                    }
                        include('./discustion.php')?>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?subject=".$_GET['subject']);?>" method="post">
                    <div class="row justify-content-start">
                        <textarea class="col-9 mx-3" rows="1" cols="80" name="message"></textarea>
                        <input type="submit" class=" btn btn-primary btn-lg  col-2 mx-3" value="envoyer">
                    </div>

                </form>
            </div>
            <div>

            </div>
        </main>

  </body>
</html>
