<?php $section = $_SERVER["REQUEST_URI"]; ?>

<header class="navbar navbar-fixed-top navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php"><img src="assets/images/logos/HomeLogo.png" id="logo"></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if (fnmatch("/about.php*", $section)) { echo "class=\"active\""; } ?>>
          <a href="about.php">About</a>
        </li>
        <li <?php if (fnmatch("/events.php*", $section)) { echo "class=\"active\""; } ?>>
          <a href="events.php">Events</a>
        </li>
        <li <?php if (fnmatch("/executives.php*", $section)) { echo "class=\"active\""; } ?>>
          <a href="executives.php">Exec</a>
        </li>
        <li <?php if (fnmatch("/documents.php*", $section)) { echo "class=\"active\""; } ?>>
          <a href="documents.php">Resources</a>
        </li>
        <li <?php if (fnmatch("/registration.php*", $section)) { echo "class=\"active\""; } ?>>
          <a href="registration.php">Registration</a>
        </li>
        <li <?php if (fnmatch("/contact.php*", $section)) { echo "class=\"active\""; } ?>>
          <a href="contact.php">Contact</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button">Dropdowntest <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action 1</a></li>
            <li><a href="#">Action 2</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</header>
