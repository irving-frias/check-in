<?php
  include('conexion.php');

  $invitados = mysqli_query($con, 'select * from invitados');
  print_r($invitados);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Check-in</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css">
    </head>
    <body>
        <header class="header pt-4">
            <div class="container">
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-md-12 text-light text-center">
                        <h1 class="display-4 title">2° Jornadas de las Tecnologias de Informacion.</h1>
                        <p>26 de Septiembre del 2019 | En Universidad Tecnologica de Nayarit.</p>
                        <p>$200.00 MXN.</p>
                    </div>
                </div>
            </div>
        </header>

        <section class="mt-n5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 text-center bg-white">
                        <div class="mb-3">    
                            <h2 class="display-5 title mt-3">Mis invitados</h2>
                            <a href="create.html" class="text-dark">Agregar nuevo invitado</a>
                        </div>    
                        <ul class="list-group mb-3">
                            <?php while($invitado = mysqli_fetch_assoc($invitados)){ ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>
                                    <img src="img/5d71f00d1385f.png" /> Lorem Ipsum (lorem_ipsum@example.com) <i class="f-size fas fa-circle fa-xs text-success"></i>
                                </span>
                                <input type="submit" value="Eliminar" class="btn btn-danger" />
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>