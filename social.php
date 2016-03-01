
<?php
$pageTitle = 'Joke it | Stergios Michopoulos';
$jumbotronH1 = 'A social network to share jokes';
include 'inc/header.php';
include 'inc/jumbotron.php';
?>

<disv class="page-blog container-fluid">
  <div class="row">

    <div class="posts col-md-10 col-md-offset-2">

      <div class="row">
        <div class="col-sm-3 ">
          <a href="#" class="info"><img src="img/social.gif" alt="" class="img-responsive"></a>
        </div>
        <div class="col-sm-4 col-sm-offset-2">
          <h3><strong>Joke it</strong></h3>
          <h4>Technology : </h4>
            <p>HTML5, CSS3, PHP (OOP), MySQL</P>
          <h4>What is : </h4>
            <p><strong>'Joke it' </strong>is a social network designed to give the users the opportunity to write and share jokes and increase their 'happy' network.</p>
          <h4>Functionality : </h4>
            <p>The user can register a new account.Then the user can login, write content (jokes) and logout using forms.All the informations is stored in a database.</p>
            <p>The registered user can see a list of all the jokes and the users that wrote them. The user can send a request to another user and receive requests from other users ( to be friends)</p> 
        </div>
      </div>
      
    </div>

  </div>
</div>
<?php

include 'inc/footer.php';
?>