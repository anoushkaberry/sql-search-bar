<?php
  include 'db.php';
 ?>
 <html>
   <head>
     <title>Search Results</title>
     <link href="app.css" rel="stylesheet" />
   </head>
   <body class="home">
     <nav class="navigation">
       <div class="logo">
         <img src="music-note.png" alt="web logo">
         <h1>Search Music Database</h1>

       </div>
     </nav>
     <br>
     <div class="container">
       <?php
         $search = mysqli_real_escape_string($conn, $_POST['search']);
         $sql = "SELECT * FROM music_data WHERE composer LIKE '%$search%' OR composition LIKE '%$search%' OR movement LIKE '%$search%' OR ensemble LIKE '%$search%'";
         $result = mysqli_query($conn, $sql);
         $query2 = mysqli_num_rows($result);

         echo "<h2> Showing Results for '".$_POST['search']."'</h2>";

         if ($query2 > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
             echo "<div class='search-result'>
             <p> Composer: ".$row['composer']."</p>
             <p> Composition: ".$row['composition']."</p>
             <p> Movement: ".$row['movement']."</p>
             <p> Ensemble: ".$row['ensemble']."</p>
             <p> Duration: ".$row['seconds']." seconds</p>
             </div>";
           }
         } else {
           echo "There are no results matching your search! Sorry!";
         }
        ?>
        <br>
        <br>

        </form>
        <div class="search">
          <a href="index.php">Try Again</a>
        </div>
      </div>
   </body>
 </html>
