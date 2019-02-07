<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Detalhes</title>
  </head>
  <body>
    
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand " href="Index.php">
            <img src="img/yoda_logo.jpg" width="60" height="60" class="d-inline-block align-center" alt="">
            Yodaknowledges
        </a>
    </nav>  
    
    <?php
        $id = $_GET['id'];
        switch($id){
            case 1:
                $id = 4;
                break;
            case 2:
                $id = 5;
                break;
            case 3:
                $id = 6;
                break;
            case 4:
                $id = 1;
                break;
            case 5:
                $id = 2;
                break;
            case 6:
                $id = 3;
                break;
            case 7:
                $id = 7;
                break;
            default:
                echo("Indisponivel");
                break;
        }

        $url = "https://swapi.co/api/films/".$id;
        $filmes = file_get_contents($url);
        $filmes = json_decode($filmes);
    ?>

    <div class="container">
        <?php
            $img = "SW_";
            $img .= $id
        ?>
        <!--<img src="img/<?php// echo($img)?>.jpg" width="222" height="452" alt="<?php// echo($filme->title) ?> "> -->
        <?php
            echo("Título: ".$filmes->title);?> <br/>
            <?php echo("Diretor: ".$filmes->director);?> <br/>
            <?php echo("Data de Lançamento: ".$filmes->release_date);?> <br/>
            <?php echo("Sinopse: ".$filmes->opening_crawl);?> <br/>
            <?php
                echo("Planetas: ");
                foreach($filmes->planets as $urlP){
                    $planeta = json_decode(file_get_contents($urlP));
                    echo ($planeta->name."; ");     
                }
            ?>
            <br/>
            <?php
                echo("Espaçonaves: ");
                foreach($filmes->starships as $urlS){
                    $nave = json_decode(file_get_contents($urlS));
                    echo ($nave->name."; ");     
                }
            ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
