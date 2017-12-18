<!doctype html>

<html lang="en">

<head>

  <?php require($DOCUMENT_ROOT . "assets/layouts/_head.php"); ?>

  <title>VP DECA | Victoria Park CI's DECA Chapter</title>

</head>

<body>

  <?php require($DOCUMENT_ROOT . "assets/layouts/_header.php"); ?>

<div class="container-background">

  <div class="container">

    <div id ="jumbo-welcome">
      <h1 class="display-2">Victoria Park DECA</h1>
      <hr class="my-6">

      <div id="registration-welcome">
        <h3><b>DAYS UNTIL DECA ONTARIO PROVINCIALS:</b></h3><br>
        <h1><?php $remaining = floor((strtotime("February 8, 2018 8:00 AM")-time()) / 86400); echo "$remaining" ?></h1><br>
        <h4>
          Have have you been studying?
        </h4><br>

        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/assets/training/resources/" role="button">Training Resources</a>
        </p>
      </div>

      <hr class="my-6">

      <div id="about-welcome">

        <p class="lead">VP DECA is Victoria Park Collegiate Institute's DECA chapter under DECA Ontario, with over 120 members in grades 9 - 12. We train and prepare our members for DECA's competitive events, at competitions at the regional, provincial, and international levels.</p>

        <p class="lead">Our goal is to prepare our students for the rapidly changing economy by fostering high-demand skills in marketing, finance, hospitality, and business administration.</p>

        <p class="lead">DECA prepares emerging leaders and entrepreneurs in marketing, finance, hospitality and management in high schools and colleges around the globe.</p>

        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>

      </div>

      <hr class="my-6">

      <div id="contact-welcome">

      </div>

      <h4>Please excuse our appearance as our site undergoes maintenance and upgrades.</h4>

    </div>

  </div>

</div>

  <?php require($DOCUMENT_ROOT . "assets/layouts/_footer.php"); ?>

</body>

</html>
