<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Star Wars</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand " href="Index.php">
            <img src="img/yoda_logo.jpg" width="50" height="50" class="d-inline-block align-center" alt="">
            Yodaknowledges
        </a>
    </nav>  
    
    <?php
      $url = "https://swapi.co/api/films/";
      $filmes = file_get_contents($url);
      $filmes = json_decode($filmes);
      //echo "<pre>";
      //print_r($filmes);
      //exit;
    ?>
      <div class = "container" >
        <div class="row">
          <?php
            if(count($filmes->results)) {
              $i = 0;
              foreach($filmes->results as $filme){ 
                $i++; 
          ?>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <?php $a = "SW_";
                $ep = $filme->episode_id;
                $img = $a.$ep;?>
              <img src="img/<?php echo($img)?>.jpg" class="card-img-top" alt="<?php echo($filme->title) ?> ">
              <div class="card-body">
                <h5 class="card-title"><?php echo($filme->title)?></h5>
                <a href="#" class="btn btn-dark">Mais detalhes</a>
              </div>
            </div>
          </div>
            <?php }
        }
        ?>
        </div>
      </div>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
