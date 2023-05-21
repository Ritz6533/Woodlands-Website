<?php
$title = "Contact Us"; // Set the title name
$activePage = "contact"; // Set the active page

require '../layouttempelate/layout.html.php';
?>

<main class="mainclass">
    

<div class="contactpagecontainer1">

  <img class= "containerimg"src="../image/z.jpg" alt="Background Image">
  <div class="container1textcontainerpage">
  <h2>Contact US</h2>
  </div>
</div>

<div class="contactcontainer">
 
  <div class="text-section">
    <h3>ADDRESS</h3>
    <p>21 Free Street, Tidworth ,SP9 7PF <br> Yorkshire, United Kingdom<br></p>
    <h3>EMAIL</h3>
    <p>study@woodlandsuniversity.edu.uk <br>
    iss@woodlandsuniversity.edu.uk<br></p>
    <h3>PHONE Number</h3>
    <p>011-2154-111 <br> 011-2155-121<br></p>
    <h3>FAX</h3>
    <p>5468 8545674</p>

  </div>
  <div class="image-section">
  <img src="../image/map.png" alt="Image" >
  </div>
</div>

<div class="contactcontainer2">
 
  <div class="form">
  <form class="contact-form">
  <h2>Contact Us</h2>
  
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
  </div>
  
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  
  <div class="form-group">
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
  </div>
  
  <button type="submit">Submit</button>
</form>


  </div>

  <div class="image-section2">
  <img src="../image/contact.jpg" alt="Image" >
  </div>
</div>

</main>

<?php require '../layouttempelate/footer.html.php'; ?>

