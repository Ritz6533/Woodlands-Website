<?php
$title = "Woodlands University Website"; // Set the title name
$activePage = "home"; // Set the active page

require './layouttempelate/layout.html.php';
?>

<main class="mainclass">

<div class="homepagecontainer1">

  <img class= "containerimg"src="../image/z.jpg" alt="Background Image">
  <div class="container1text">
  <h2>Picture Yourself at the WOODLANDS University College</h2>
  </div>
</div>


<div class="homepagecontainer2">
  <div class="container2text">
  <div class="container2textbox">

    <p>
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
     when an unknown printer took a galley of type and scrambled it to make a type
      specimen book. It has survived not only five centuries, but also the leap into
       electronic typesetting, remaining essentially unchanged. It was popularised in
        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
    </p>
  </div>
  </div>

  <div class="container2image">

    <img src="../image/container2.jpeg" alt="Image" >
    
    </div>
</div>


</main>

<?php require './layouttempelate/footer.html.php'; ?>
