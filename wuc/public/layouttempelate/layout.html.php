<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/desktopview.css" media="screen and (min-width: 801px)" />

    <title><?= $title ?></title>
  </head>
  <body>

 <nav class="topnav">
            <div class="logo1">
                <a href="../index.html"><img src="../image/logoAddedStroke.png" alt="log0"></a>
            </div>
            <ul class="topmenu">
                <li><a class="<?= ($activePage === 'home') ? 'active' : ''; ?>" href="../index.html">Home</a></li>
                <li><a class="<?= ($activePage === 'Academics') ? 'active' : ''; ?>" href="../pages/Academics.html.php">Academics</a></li>
                <li><a class="<?= ($activePage === 'Admission') ? 'active' : ''; ?>" href="../pages/Admission.html.php">Admission</a></li>
                <li><a class="<?= ($activePage === 'TuitionAid') ? 'active' : ''; ?>" href="../pages/TuitionAid.html.php">Tuition/Aid</a></li>
                <li><a class="<?= ($activePage === 'About') ? 'active' : ''; ?>" href="../pages/About Us.html.php">About Us </a></li>
                <li><a class="<?= ($activePage === 'Student') ? 'active' : ''; ?>" href="../pages/Student Life.html.php">Student Life</a></li>
                <li><a class="<?= ($activePage === 'contact') ? 'active' : ''; ?>" href="../pages/contact.html.php">Contact Us</a></li>
                <li><a class="<?= ($activePage === 'Logins') ? 'active' : ''; ?>" href="../pages/Logins.html.php">Logins</a></li>

                
            </ul>
        </nav>
            <nav class="dropdown">
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle"> 
                <div class="burger">
                  <div class="burgerelem"></div>
                  <div class="burgerelem"></div>
                  <div class="burgerelem"></div>
                </div>
            </label>
                <ul class="menu">   
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="portfolio.html">Academics</a></li>
                <li><a class="active" href="blog.html">Admission</a></li>
                <li><a href="sitereport.html">Tuition/Aid</a></li>
                <li><a href="contact.html">About Us/a></li>
                <li><a href="sitereport.html">Student Life</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="contact.html">Logins</a></li>

                </ul>
              </nav>



  