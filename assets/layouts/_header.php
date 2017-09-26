<?php $section = $_SERVER["REQUEST_URI"]; ?>

<header class="navbar navbar-fixed-top navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/index.php"><img src="/assets/images/logos/HomeLogo.png" id="logo"></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">

        <li <?php if (fnmatch("/about.php*", $section)) { echo "class=\"active\""; } ?>>
          <a href="/about.php">About</a>
        </li>

        <li <?php if (fnmatch("/executives.php*", $section)) { echo "class=\"active\""; } ?>>
          <a href="/executives.php">Exec</a>
        </li>

        <li class="dropdown <?php if (fnmatch("/events*", $section)) { echo "active\""; } ?>">
          <a href="/events.php" class="dropdown-toggle" type="button">Events <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/events/regionals.php">Regionals</a></li>
            <li><a href="/events/provincials.php">Provincials</a></li>
            <li><a href="/events/icdc.php">ICDC</a></li>
          </ul>
        </li>

        <li class="dropdown <?php if (fnmatch("/members*", $section)) { echo "active\""; } ?>">
          <a href="/members.php" class="dropdown-toggle" type="button">Members <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/members/registration.php">Registration</a></li>
            <li><a href="/members/competitive.php">Competitive Events</a></li>
            <li><a href="/members-resources.php">Resources</a></li>
          </ul>
        </li>

        <li <?php if (fnmatch("/contact.php*", $section)) { echo "class=\"active\""; } ?>>
          <a href="/contact.php">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</header>
