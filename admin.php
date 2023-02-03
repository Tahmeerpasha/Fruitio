<?php
 $count1 = 1;
 $count2 = 1;
 function mytable($result){              
  echo '
  <div class="table">
  <table border="1">
          <tr>
          <th scope="col">Movie-ID</th>
        <th scope="col">Movie-Name</th>
        <th scope="col">Actor-Name</th>
        <th scope="col">Director-Name</th>
        <th scope="col">Movie-year</th>
        <th scope="col">Movie-Language</th>
        <th scope="col">Movie-Genre</th>
        <th scope="col">Movie-Image</th>
        <th scope="col">Ratings</th>
          </tr>';
          
          while($row = mysqli_fetch_array($result)) {
      echo '<tr>
            <th scope="row">' . $row["Mov_id"] . '</th>
            <td>' . $row["Mov_title"] . '</td>
            <td>' . $row["Act_Name"] . '</td>
            <td>' . $row["Dir_Name"] . '</td>
            <td>' . $row["Mov_year"] . '</td>
            <td>' . $row["Mov_lang"] . '</td>
            <td>' . $row["Genre"] . '</td>
            <td>' . $row["Image"] . '</td>
            <td>' . $row["Ratings"] . '</td>';
            echo "</tr>";
          }
          echo "</table>
          </div>";
       }
function check($con)
{
  if ($con) {
    echo '<div class="alert alert-danger" role="alert">
                Successful
              </div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">
    UnSuccessful
  </div>';;
  }
}
  ?>

 <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="admin1.css">
    <title class="title12">Admin Panel</title>
  </head>
  <body>
    <nav>
      <h1>Admin Panel</h1>
    </nav>
    <h4><label for="movies">Add Movie</label></h4>
<div class="addmovies"></div>
<form action="#" method = "post" >
    <div class="input-box">
        <span class="details">Movie id</span>
        <input type="text" placeholder="Enter movie id" name = "MovId" required>
      </div>

      <div class="input-box">
        <span class="details">Movie Title</span>
        <input type="text" placeholder="Enter movie title" name = "MovTitle"  required>
      </div>

      <div class="input-box">
        <span class="details">Year</span>
        <input type="text" placeholder="Enter year of release" name = "MovYear"  required>
      </div>
    
    <div class="genre">
        <span class="details">Genre</span>
        <select class="select" name="genre" id="genre">
          <option value="select">Select Genre</option>
          <option value="action">Action</option>
          <option value="Drama">Drama</option>
          <option value="sci-fi">Sci-fi</option>
          <option value="thriller">Thriller</option>
          <option value="comedy">Comedy</option>
          <option value="crime">Crime</option>
          <option value="fantasy">Fantasy</option>
          <option value="romance">Romance</option>
          <option value="documentary">Documentary</option>
        </select>
    </div>
    <div class="language">
        <span class="details">Language</span>
        <select class="select" name="languages" id="lang">
          <option value="select">Select Language</option>
          <option value="english">English</option>
          <option value="Hindi">Hindi</option>
          <option value="tamil">Tamil</option>
          <option value="telugu">Telugu</option>
          <option value="malyalam">Malyalam</option>
          <option value="Kannada">Kannada</option>
        </select>
    </div>
    <div class="input-box">
    <span class="details">Director Name</span>
    <input type="text" placeholder="Enter director name" name = "DirName" required>
    </div>

    <div class="input-box">
    <span class="details">Actor Name</span>
    <input type="text" placeholder="Enter actor name" name = "ActName" required>
    </div>

    <div class="input-box">
    <span class="details">Rating</span>
    <input type="text" placeholder="Enter Ratings out of 10" name = "Ratings" required>
    </div>

<div class="image">
        <label for="image-input">Choose Poster:</label>
        <input type="file" class="select" id="image-input" name="image" accept="img/">
  </div>
  <div class="input-box">
    <input class="submit"  type="submit" name = "submit1" value="Submit" />
  </div>
    </form>
      </div>
    <br>
    <?php
    include("dbcon.php");
    if (isset($_POST['submit1'])) {
      // session_start();
      $MovId = $_POST['MovId'];
      $ActName = $_POST['ActName'];
      $DirName = $_POST['DirName'];
      $MovTitle = $_POST['MovTitle'];
      $MovYear = $_POST['MovYear'];
      $MovLang = $_POST['languages'];
      $MovGenre = $_POST['genre'];
      $Image = $_POST['image'];
      $Ratings = $_POST['Ratings'];
      $sql = "INSERT INTO `movies` (`Mov_id`, `Act_Name`, `Dir_Name`, `Mov_title`, `Mov_year`, `Mov_lang`, `Genre`, `Image`, `Ratings`) VALUES ('$MovId', '$ActName', '$DirName', '$MovTitle', '$MovYear', '$MovLang', '$MovGenre', '$Image', '$Ratings')";
      $con1 = mysqli_query($connection, $sql);
      check($con1);

      $sql0 = "INSERT INTO `ratings`(`Mov_id`, `Rating_star`) VALUES ('$MovId','$Ratings')";
      $con2 = mysqli_query($connection, $sql0);

      $count1++;
      $count2++;
      $sql2 = "INSERT INTO `actor` ( `Actor_name`) VALUES ( '$ActName')";
      $con2 = mysqli_query($connection, $sql2);

      $sql3 = "INSERT INTO `director` ( `Dir_name`) VALUES ( '$DirName')";
      $con3 = mysqli_query($connection, $sql3);
    }
    ?>



<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
<h4><label for="movies">Delete Movie</label></h4>
<div class="deletemovie">
<form action="#" method = "post" >
<span class="details">Movie id</span>
<input type="text" class="select" placeholder="Enter movie id" name = deleteID required>
<input type="submit" value="Submit" name = "submit2"/>  
</form>
</div>
<br>
<?php
    include("dbcon.php");
    if (isset($_POST['submit2'])) {
      $delID = $_POST['deleteID'];
      $sql = "DELETE FROM movies WHERE `movies`.`Mov_id` = '$delID' ";
      $con1 = mysqli_query($connection, $sql);
      check($con1);
    }
    ?>

<!-- //////////////////////////////////////////////////////////////////// -->
  <?php
  include("dbcon.php");
  echo '<h4><label for="movies">Modify Movie Details</label></h4>   
 <div class="input-box">
   <form action="#" method="POST">
     <span class="details">Movie id</span>
     <input type="text" placeholder="Enter movie-id of the movie you want to modify" name = "movieID" required>
   </div>';
    echo '
<div class="input-box">
  <span class="details">Movie Title</span>
  <input type="text" placeholder="Enter movie title " name = "movtitle" >
</div>';
    echo '<div class="input-box">
  <span class="details">Year</span>
  <input type="text" placeholder="Enter year of release" name = YOR >
 
</div>';
    echo '<div class="details">
  <span class="details">Genre</span>
  <select class="select" name="genre" id="genre">
    <option value="select">Select Genre</option>
    <option value="action">Action</option>
    <option value="sci-fi">Sci-fi</option>
    <option value="thriller">Thriller</option>
    <option value="comedy">Comedy</option>
    <option value="crime">Crime</option>
    <option value="fantasy">Fantasy</option>
    <option value="romance">Romance</option>
    <option value="documentary">Documentary</option>
    
  </select>';
    echo '
<span class="details">Language</span>
  <select class="select" name="languages" id="lang">
    <option value="select">Select Language</option>
    <option value="english">English</option>
    <option value="Hindi">Hindi</option>
    <option value="tamil">Tamil</option>
    <option value="telugu">Telugu</option>
    <option value="malyalam">Malyalam</option>
     
  </select>
</div>';
    echo '<div class="input-box">
<span class="details">Director Name</span>
<input type="text" placeholder="Enter director name" name = "Director" >

</div>';
    echo '<div class="input-box">
<span class="details">Actor Name</span>
<input type="text" placeholder="Enter actor name" name = "Actor" >

</div>';
    echo '<div class="input-box">
  <span class="details">Rating</span>
  <input type="text" placeholder="Enter Ratings out of 10" name = "Ratings" >
  <input type="submit" value="Submit" name ="submit107" /> 
</form>
</div>
';
    echo '<br>';
    if (isset($_POST['submit107'])) {
      $id = $_POST['movieID'];
      $result = $connection->query("SELECT * FROM `movies` WHERE Mov_id =  $id;");
   
  $movtitle = $_POST['movtitle'];
  $yor = $_POST['YOR'];
  $genre = $_POST['genre'];
  $lang = $_POST['languages'];
  $dir = $_POST['Director'];
  $act = $_POST['Actor'];
  $rat = $_POST['Ratings'];
  if($movtitle != NULL){
      $sql101 = "UPDATE `movies` SET `Mov_title` = '$movtitle' WHERE `movies`.`Mov_id` = $id";
      $result101 = mysqli_query($connection, $sql101);
  }
  if($yor != NULL){
    $sql102 = "UPDATE `movies` SET `Mov_year`='$yor' WHERE `movies`.`Mov_id`='$id'";
    $result102 = mysqli_query($connection, $sql102);
  }
  if($genre != NULL){
      $sql103 = "UPDATE `movies` SET `Genre`='$genre' WHERE `movies`.`Mov_id`='$id'";
      $result103 = mysqli_query($connection, $sql103);
  }
  if($lang != NULL){
      $sql104 = "UPDATE `movies` SET `Mov_lang`='$lang' WHERE `movies`.`Mov_id`='$id'";
      $result104 = mysqli_query($connection, $sql104);
  }
  if($dir != NULL){
      $sql105 = "UPDATE `movies` SET `Dir_Name`='$dir' WHERE `movies`.`Mov_id`='$id'";
      $result105 = mysqli_query($connection, $sql105);
  }
  if($act != NULL){
      $sql106 = "UPDATE `movies` SET `Act_Name`='$act' WHERE `movies`.`Mov_id`='$id'";
      $result106 = mysqli_query($connection, $sql106);
  }
  if($rat != NULL){
      $sql107 = "UPDATE `movies` SET `Ratings`='$rat' WHERE `movies`.`Mov_id`='$id'";
    $result107 = mysqli_query($connection, $sql107);
  }
  // mytable($result);
}

  ?>
<!-- ////////////////////////////////////////////////////////////////////////// -->

<h4><label for="movies">Show Movies list</label></h4>
<h4>Enter any one option to get movie based on it</h4>

<div class="input-box">
<form action="#" method="POST">
    <span class="details">Year</span>
    <input type="text" placeholder="Enter year of release" name = "year" required>
    <input type="submit" value="submit" name ="submit11" /> 
</form>
  </div>
<?php
    if (isset($_POST['submit11'])) {
      $year = $_POST['year'];
      $sql10 = "SELECT * FROM `movies` WHERE Mov_year = '$year';";
      $result = mysqli_query($connection, $sql10);
      if($result){
        mytable($result);
      } 
       else{
        echo '<div class="alert alert-danger" role="alert">
            No movies found!
          </div>';
       }
    }
    ?>
<div class="input-box">
<form action="#" method="post">
    <span class="details">Genre</span>
    <select class="select" name="genre1" id="genre">
      <option value="select">Select Genre</option>
      <option value="action">Action</option>
      <option value="sci-fi">Sci-fi</option>
      <option value="thriller">Thriller</option>
      <option value="comedy">Comedy</option>
      <option value="crime">Crime</option>
      <option value="fantasy">Fantasy</option>
      <option value="romance">Romance</option>
      <option value="documentary">Documentary</option>
    </select>
    <input type="submit" value="submit" name ="submit12" /> 
</form>
</div>
<?php
    if (isset($_POST['submit12'])) {
      $genre = $_POST['genre1'];
      $sql11 = "SELECT * FROM `movies` WHERE Genre = '$genre';";
      $result = mysqli_query($connection, $sql11);
      if($result){
        mytable($result);
      } 
       else{
        echo '<div class="alert alert-danger" role="alert">
            No movies found!
          </div>';
       }
    }
    ?>
<div class="input-box">
<form action="#" method="post">
    <span class="details">Language</span>
    <select class="select" name="languages" id="lang">
      <option value="select">Select Language</option>
      <option value="english">English</option>
      <option value="Hindi">Hindi</option>
      <option value="tamil">Tamil</option>
      <option value="telugu">Telugu</option>
      <option value="malyalam">Malyalam</option>
    </select>
    <input type="submit" value="submit" name ="submit13" /> 
</form>
</div>
<?php
    if (isset($_POST['submit13'])) {
      $lang = $_POST['languages'];
      $sql12 = "SELECT * FROM `movies` WHERE Mov_lang = '$lang';";
      $result = mysqli_query($connection, $sql12);
      if($result){
        mytable($result);
      } 
       else{
        echo '<div class="alert alert-danger" role="alert">
            No movies found!
          </div>';
       }    }
    ?>

<div class="input-box">
<form action="#" method="post">
<span class="details">Director Name</span>
<input type="text" placeholder="Enter director name" name="director" required>
<input type="submit" value="submit" name ="submit14" /> 
</form>
</div>
<?php
    if (isset($_POST['submit14'])) {
      $dir = $_POST['director'];
      $sql13 = "SELECT * FROM `movies` WHERE Dir_Name = '$dir';";
      $result = mysqli_query($connection, $sql13);
      if($result){
        mytable($result);
      } 
       else{
        echo '<div class="alert alert-danger" role="alert">
            No movies found!
          </div>';
       }    }
    ?>

<div class="input-box">
<form action="#" method="post">
<span class="details">Actor Name</span>
<input type="text" placeholder="Enter Actor name" name="actor" required>
<input type="submit" value="submit" name ="submit15" /> 
</form>
</div>
<?php
    if (isset($_POST['submit15'])) {
      $act = $_POST['actor'];
      $sql14 = "SELECT * FROM `movies` WHERE Dir_Name = '$act';";
      $result = mysqli_query($connection, $sql14);
      if($result){
        mytable($result);
      } 
       else{
        echo '<div class="alert alert-danger" role="alert">
            No movies found!
          </div>';
       }    }
    ?>
<div class="input-box">
<form action="#" method="POST">
    <input type="submit" value="List all movies" name ="submit19" /> 
</form>
</div>
<?php
    if (isset($_POST['submit19'])) {
      $result = mysqli_query($connection, "SELECT * FROM movies");
      if($result){
        mytable($result);
      } 
       else{
        echo '<div class="alert alert-danger" role="alert">
            No movies found!
          </div>';
       }    }

?>        
  </body>
</html>
