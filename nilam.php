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

<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="11.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">NIALM</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="21.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">NIALM</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="31.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">NIALM</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="14.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">NIALM</div>
</div>
<form action="upload-manager.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
</form>
</body>
</html>
