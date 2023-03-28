<?php 


$host = "localhost";
$user = "root";
$pass = "";
$dbname ="picasso";

try {
    $dsn = "mysql:host=" . $host . ";dbname=" . $dbname;
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  } catch(PDOException $e) {
    echo "DB Connection Failed: " . $e->getMessage();
  }

  $stmt = $pdo->query('SELECT * FROM tarif');

        
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Expo Picasso</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./oeuvres.html">Les oeuvres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./Apropos.html">A propos de Picasso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./info.html">Informations pratiques</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tarifs</a>
              </li>
          </ul>
        </div>
      </nav>
      <br>
      <table class="table table-warning table-striped-columns">
        <thead>
          <tr>
            <th scope="col">Catégories</th>
            <th scope="col">Prix</th>
          </tr>
        </thead>
        <tbody>
        <?php      while($row = $stmt->fetch())
                {?>                <tr>
                                    <th scope="row">><?php echo $row->Categories;?></th>
                                    <td><?php echo $row->Prix;?></td>
                            
                        <?php } ?>  
        </tbody>
      </table>
  </div>
</div>
</div>
       </body>    
</html>
