<?php 
  session_start();

  function get_title() {
  	global $title;
  	$title='Home page';
  	echo $title;
  }
?>

<!-- Header Partial (including php functions) -->
<?php require_once "partials/_header.php"; ?>

<!-- Main Section -->
<main class="container-fluid" id="welcomebg">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<div style="border: 3px solid white; border-radius: 0 15px; padding: 20px; margin-bottom: 15px; ">
			<h2 style="color: white;font-family: 'poppinssemibold';" > DO YOU LOVE <br> TO EAT? </h2>
			
			</div>
			<a class="btn btn-primary btn-lg page-scroll" href="#about">See more</a>
		</div>
	</div>
</main>

<!-- About Section -->
<section id="about" class="about-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h2>Me too!</h2>
              <h3>Sign up now and let's order food.</h3>
              <a class="btn btn-default btn page-scroll" href="#">Back to top</a>
              <?php require_once "order_summary.php"; ?>
          </div>
      </div>
  </div>
</section>

<!-- Footer Partial (including javascript) -->
<?php require_once "partials/_footer.php"; ?>