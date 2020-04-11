<?php
if(empty($_FILES['image']['name'])){
     header('Location: nilam.php');
}

$mysqli = new mysqli("localhost","root","","test1");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Return name of current default database
if ($result = $mysqli -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
  echo "Default database is " . $row[0];
  $result -> close();
}

// Change db to "test" db
$mysqli -> select_db("test");

// Return name of current default database
if ($result = $mysqli -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
  echo "Default database is " . $row[0];
  $result -> close();
}

$uploaddir = getcwd()."/img/";
echo $_FILES['image']['name'];
$uploadfile = $uploaddir . $_FILES['image']['name'];
echo $uploadfile;
echo '<pre>';
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
    header('Location: nilam.php');
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

?>