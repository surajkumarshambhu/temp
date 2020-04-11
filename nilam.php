<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>
<?php 

$mysqli = new mysqli("localhost","root","","test1");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Return name of current default database
if ($result = $mysqli -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
  // echo "Default d÷atabase is " . $row[0];
  $result -> close();
}

// Change db to "test" db
$mysqli -> select_db("test1");

// Return name of current default database
if ($result = $mysqli -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
  // echo "Default ÷database is " . $row[0];
  $result -> close();
}
$result = mysqli_query($mysqli, 'SELECT * FROM test');
if(empty($result)){
  echo "empty";die;
}
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
echo $row["imagepath"]
?>
<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src=<<?php echo $row["imagepath"] ?>  width="600" height="400">
  </a>
</div>
<?php 
            }
         } 
?>
<form action="upload-manager.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
</form>
</body>
</html>
