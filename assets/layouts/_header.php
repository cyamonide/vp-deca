<?php $section = $_SERVER["REQUEST_URI"]; ?>

<header class="navbar navbar-fixed-top navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="logo" href="/">VP DECA</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if ($section == "/about.php") { echo "class=\"active\""; } ?>>
          <a href="/about.php">About</a>
        </li>
        <li <?php if ($section == "/events.php") { echo "class=\"active\""; } ?>>
          <a href="/events.php">Events</a>
        </li>
        <li <?php if ($section == "/executives.php") { echo "class=\"active\""; } ?>>
          <a href="/executives.php">Exec</a>
        </li>
        <li <?php if ($section == "/documents.php") { echo "class=\"active\""; } ?>>
          <a href="/resources.php">Resources</a>
        </li>
        <li <?php if ($section == "/registration.php") { echo "class=\"active\""; } ?>>
          <a href="/registration.php">Registration</a>
        </li>
        <li <?php if ($section == "/contact.php") { echo "class=\"active\""; } ?>>
          <a href="/contact.php">Contact</a>
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
