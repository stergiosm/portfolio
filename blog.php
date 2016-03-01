
<?php
$pageTitle = 'Stergios blog | Stergios Michopoulos';
$jumbotronH1 = 'A simple blog written in Symfony2';
include 'inc/header.php';
include 'inc/jumbotron.php';
?>

<disv class="page-blog container-fluid">
  <div class="row">

    <div class="posts col-md-10 col-md-offset-2">

      <div class="row">
        <div class="col-sm-3 ">
          <a href="blog.php" class="info"><img src="img/blog.gif" alt="" class="img-responsive"></a>
        </div>
        <div class="col-sm-4 col-sm-offset-2">
          <h3><strong>Stergios blog</strong></h3>
          <h4>Technology : </h4>
            <p>HTML5, CSS3,Bootstrap, PHP (OOP),Symfony2 - MVC, MySQL</P>
          <h4>What is : </h4>
            <p><strong>'Stergios Blog' </strong>started as a project in order to test my skills in Symfony2.</p>
          <h4>Functionality : </h4>
            <p>The user can register a new account.Then the user can login, write content (posts) and logout using forms.All the informations is stored in a database.</p>
            <p>The registered user can see a list of all posts and the users that wrote them.</p> 
            <p>There is also an admin (level) user who can delete posts and users</p>
        </div>
      </div>
      
    </div>

  </div>
</div>
<?php

include 'inc/footer.php';
?>