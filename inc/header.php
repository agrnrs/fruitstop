<nav class="navbar navbar-expand-lg navbar-light bg-light">
<ul class="nav">
 <a class="navbar-brand" href="index.php">Fruit-stop Ab</a>
  <li class="nav-item">
    <a class="nav-link active" href="products.php?sort=2">Sort by product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="products.php?sort=1">Sort by type</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add.php">Add product</a>
  </li>
  <!-- room for more categories, eg cocoa, bacon, other -->
</ul>
<ul class="nav navbar-nav navbar-right">
      <li><?php if($status){echo $status;}; ?></li>
    </ul>
</nav>
  <!-- ^ to header.php -->
  
  
  <!--
  
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#about">Right</a></li>
      <li><a href="#contact">Right</a></li>
    </ul>
  
  
  -->