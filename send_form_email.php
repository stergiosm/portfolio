
<?php
$pageTitle = 'Portfolio | Stergios Michopoulos';
$jumbotronH1 = $status;
$jumbotronP = 'Please complete the form below and i will get in contact with you as soon as possible';
include 'inc/header.php';
include 'inc/jumbotron.php';

// if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
//   if ( mail('stergios.michopoulos@gmail.com', 'Contact form', $_POST['comments']) ) {
//     $status = "Thank you for your message!";
//   }
// }

?>


<div class="page-contact container-fluid">

  <div class="row">
    <div class="col-md-6 col-md-push-3">
      <p>
        I'm glad you've decided to contact me.
      </p>
    </div>
  </div>

  <div class="row">
    <div class="contact-form col-md-6 col-md-push-3">
    	<?php if (isset($status)) : ?> 
    	<p class="notice"><?php echo $status; ?></p>
    <?php endif; ?>

      <form name="contactform" method="post" action="">
        <div class="form-group">

          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="<?= old('name') ?>">
        </div>
        <div class="form-group">
          <label for="email">E-mail Address</label>
          <input type="text" name="email" class="form-control" id="email" placeholder="Enter your e-mail address" value="<?= old('email') ?>">
        </div>
        <!-- <div class="form-group">
          <label for="telephone">Telephone Number</label>
          <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Enter your name">
        </div> -->
        <div class="form-group">
          <label for="comments">Message</label>
          <textarea name="comments" class="form-control" rows="3" id="comments" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>


    </div>
  </div>

</div>


<?php

include 'inc/footer.php';
?>