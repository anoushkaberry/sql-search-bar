<?php
include 'db.php'
 ?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta name="author" content="Anoushka" />
    <title>Music Search</title>
    <link href="app.css" rel="stylesheet" />
  </head>
  <body class="home">
    <nav class="navigation">
      <div class="logo">
        <img src="music-note.png" alt="web logo">
        <h1>Search Music Database</h1>
      </div>
    </nav>
    <br><br>
    <div class="container">
      <p>Use the search engine to search for pieces by Bach, Beethoven and so many more. The database used is limited, but still quite large so hopefully you find a piece for you!
        Currently, you can search for composer, composition (try searching for a key!), movement and ensemble.  The search results will provide you with the name of the piece, the movement and the style of ensemble as well as how long the piece is in seconds.</p>
        <br>
        <br>
      <div class="search">
        <form action="search.php" method="post" id="form">
          <input type="search" id="query" name="search"
           placeholder="Search composer"
           aria-label="Search through site content" />
           <input class="btn" type="submit" name="submit-search">
        </form>
        <?php
        $sql = "SELECT * FROM music_data";
        $result = mysqli_query($conn, $sql);

        ?>
      </div>
      <div style="position: absolute; bottom: 5px; text-align: right;">
          &copy; Anoushka Berry 2021</p>

      </div>
    </div>
  </body>
</html>
