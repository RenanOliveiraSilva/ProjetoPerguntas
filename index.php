<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <style>

        * {

        margin: 0;
        padding: 0;

        }

        .container{
            height: 100%;
            width: 100%;
 
        }

        .nav{
            margin-bottom: 25px;
        }

        .cards{
            display: flex;
            justify-content: space-around;
            height: 400px;
            padding: 10px;
        }

        .lateral {
            height: 400px; 
            padding: 15px;
        }

        .card-body {
            height: 50px;
        }

        .title{
            border-bottom: 15px;
        }
        .content{
            margin-bottom: 25px;
            background-color: #b30086;
        }
        .carousel{
            margin: 5px;
        }
        .content2{
            display: flex;
            justify-content: center;
            margin-bottom: 25px;

        }
        body {
            background-color: #F7E0FF;
        }
        .login-form {
            margin-top: 50px;
            margin-bottom: 50px;
            align-self: center;
            background-color: #b30086;
            height: 400px;
        }
        .form-group {
            margin: 15px;

        }
        .form-title {
            margin-bottom: 80px;
            margin-top: 45px;
            color: #F7E0FF;
            
        }
        .form-btn {
            margin-top: 45px;
        }
        .principal {
            background-color: #b30086;
            width: 100%;
        }
        .title{
            color: #F7E0FF;
        }
    </style>

    <body>

        <div class="row nav">
                <?php require_once('components/nav.php'); ?>
        </div>

        <div class="container text-center">



                <?php
                    //require_once 'controller/users.controller.php';

                    $link = @$_GET['link'];
                    $pag[1]='components/formUser.php';
                    $pag[2]='components/formUserLogin.php';

                    if(!empty($link)){
                        if(file_exists($pag[$link])){
                            include $pag[$link];
                        }
                    } else {

                        ?>

                            <div class="row content">

                                <div class="col-8 cards">
                                    <?php include_once("components/cards.php"); ?>
                                </div>

                            <?php 

                                session_start();

                                if ($_SESSION == true) {
                                    echo $_SESSION['nome'];
                                } else {
                                    ?>

                                        <div class="col-4 lateral">
                                            <div class="title">
                                                <h3>Minha Área:</h3>
                                            </div>
                                            <?php include_once("components/accordion.php"); ?>
                                        </div> 

                                    <?php                                 
                                }
                            
                            ?>


                            <div class="row content2">
                                
                                <div class="col-8 carousel">
                                    <?php include_once("components/carousel.php") ?>
                                </div>
                                
                            </div>

                        </div>

                        <?php 
                    }

                ?>



        </div>



        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>    
    </body>
</html>