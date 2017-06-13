<?php
include './contenu.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todolist</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
       // <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="container">
<div class="row">
    <div class="col-sm-6 col-md-4">

        <h1>FORMULAIRE</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div id="Afaire">
                <h4>A FAIRE</h4>
                <?php
                  Get_Afaire();
                ?>
                <button type="button" class="btn btn-primary">Enregistrer</button>


                <h4>ARCHIVE</h4>

                <?php
                Get_Archive();
                ?>

            </div>

            <div id="Archive">
                <h4>Ajouter une tâche</h4>
                <input type="text" placeholder="La tâche à effectuer" >
                <button type="button" class="btn btn-primary">Ajouter</button>

            </div>

        </form>
    </div>
</div>
</div>


</body>

</html>