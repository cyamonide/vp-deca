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

			<div id="jumbo-welcome">
				<h1 class="display-2">Victoria Park DECA</h1>
				<hr class="my-6">

				<div id="registration-welcome">
					<h3>
						<b>DAYS UNTIL REGIONAL COMPETITIONS:</b>
					</h3>
					<br>
					<h1>
						<?php $remaining = floor((strtotime("November 1, 2018 8:00 AM")-time()) / 86400); echo "$remaining" ?>
					</h1>
					<br>
					<h4>
						Have have you been studying?
					</h4>
					<br>

					<p class="lead">
						<!-- <a class="btn btn-primary btn-lg" href="/assets/training/resources/" role="button">Training Resources</a> -->
						<a class="btn btn-primary btn-lg" href="members/registration.php" role="button">Register now!</a>
					</p>
				</div>

				<hr class="my-6">

				<div id="about-welcome">

					<h1>About us</h1>

					<h2>Who we are</h2>

					<p>
						VP DECA is Victoria Park Collegiate Institute's DECA chapter. We started in 2013, with the purpose of promoting business
						to our students. Today, we are over 120 members strong in grades 9 - 12, and are chiefly student-run, led by an exec
						team of 12 and staff advisor/business teacher Ms. Susan Leung.
					</p>

					<p>
						DECA is a chance for those who may potentially study business to showcase their abilities by competing against other like-minded
						students. Through DECA, members will learn business concepts and apply them to real-world scenarios presented to them.
						They will learn presentation along the way that will not only help them in DECA, but also wherever our members may
						find themselves in their future endeavors.
					</p>

					<p>
						Having said that, DECA is by no means exclusive to students interested in business. It is open to all students, and all are
						encouraged to participate with the purpose of enhancing their communication skills, creativity, and study skills which
						are all key to success in any career.
					</p>

					<h2>What we do</h2>

					<p>
						Our goal is to prepare our students for the rapidly changing economy by fostering high-demand skills in marketing, finance,
						hospitality, and business administration.
					</p>

					<p>
						Our trainers will hold training sessions during lunches and afterschool depending on your availability, to prepare you for
						either the multiple choice exam, case study, or written proposal depending on your event. To study from home, training
						resources can be found
						<a href="members.php">here</a>.
					</p>

					<p>
						Our members compete at the regional, provincial, and international levels each year, with over half of our members bringing
						home awards at each level.
					</p>

				</div>

			</div>

		</div>

	</div>

	<?php require($DOCUMENT_ROOT . "assets/layouts/_footer.php"); ?>

</body>

</html>