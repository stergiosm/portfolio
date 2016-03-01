
<?php
$pageTitle = 'Lethe | Stergios Michopoulos';
$jumbotronH1 = 'list all the things to do!';
include 'inc/header.php';
include 'inc/jumbotron.php';
?>

<disv class="page-blog container-fluid">
  <div class="row">

    <div class="posts col-md-10 col-md-offset-2">

      <div class="row">
        <div class="col-sm-3 ">
          <a href="#" class="info"><img src="img/todolist.gif" alt="" class="img-responsive"></a>
        </div>
        <div class="col-sm-4 col-sm-offset-2">
          <h3><strong>Lethe</strong></h3>
          <h4>Technology : </h4>
            <p>HTML5, CSS3, PHP (OOP), MySQL</P>
          <h4>What is : </h4>
            <p><strong>'Lethe' </strong>is an application designed to give the users the opportunity to write and list all the things that a human mind can forget.</p>
          <h4>Functionality : </h4>
            <p>The user can register a new account.Then the user can login, write content (things to do) and logout using forms. All the informations is stored in a database.</p>
            <p>The registered user can see a list of all the things that he wrote</p> 
        </div>
      </div>
      
    </div>

    
  </div>
</div>
<?php

include 'inc/footer.php';
?>