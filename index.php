<?php
$pageTitle = 'Portfolio | Stergios Michopoulos';
$jumbotronH1 = 'Educated Web developer';
$jumbotronP = 'At the time working as an intern at Young and Skilled';
include 'inc/header.php';
include 'inc/jumbotron.php';
?>


<div class="container">
  <div class="row">
    <aside class="col-lg-3 col-sm-4 summary">
      <h3>A summary</h3>
      <p>Experienced in team leadership with more than 3 years in finance management.
          Former military officer with management experience and strong analytical skills trusted with confidential and sensitive information.
          Decided a career change after a keen interest in web, game and software development.</p>
      <p><a href="#"></a></p>
    </aside>
    <article class="col-lg-8 col-lg-offset-1 col-sm-7 col-sm-offset-1">
      <h1>About me</h1>
      <p><img src="img/stergio.jpg" class="pull-right img-responsive img-circle"></p>
      <p>I am from Greece located in Stockholm. At first i intended to be a military officer. Following my dream i got admitted to the Military Academy. After many years as an officer in many different positions i decided a carieer change. One thing led to another and finally i found myself studying web development in e-commerce in Stockholm.</p>
      <p>Through this first year studying i had the opportunity to learn all the necessary languages like HTML5, CSS3, Javascript, PHP, MySQL, Python and some of the best development tools (libraries and frameworks) like jQuery, Symfony2, Node.js, PHPMyadmin </p>
      <p>In my personal life, i am married and i have a little girl. My interest in music made me learn to play quitar although i do not consider myself to be a quitar-expert. Theater plays and literatur could captivate my interest. I like running and basketball but i prefer to watch football! </p>
    </article>
  </div>
  <div class="container-fluid">
    <div class="row epikefalis">
      <div class="col-md-12 text-center">
        <h1>What can i do</h1>
      </div>
    </div>
      <div class="row">
        <div class="col-sm-12">
          <ul class="nav nav-pills project-filter">
            <li class="portfolio-title">Filter by: </li>
            <li role="presentation" class="active"><a href="#" data-filter="*">All</a></li>
            <li role="presentation"><a href="#" data-filter=".html">HTML - CSS</a></li>
            <li role="presentation"><a href="#" data-filter=".javascript">Javascript -jQuery</a></li>
            <li role="presentation"><a href="#" data-filter=".php">PHP - OOP</a></li>
            <li role="presentation"><a href="#" data-filter=".symfony">Symfony2</a></li>
            <li role="presentation"><a href="#" data-filter=".bootstrap">Bootstrap</a></li>
          </ul>
        </div>
        <div class="row projects">
          <figure class="project col-sm-3 col-xs-6 javascript bootstrap">
            <a href="projects.php"><img src="img/portfolio.gif" class="img-responsive"></a>
            <!-- <h4 class="text-center">My first portfolio</h4> -->
          </figure>
          <figure class="project col-sm-3 col-xs-6 php symfony bootstrap">
              <a href="twitter.php" class="info"><img src="img/twitter.gif" class="img-responsive"></a>
              <!-- <h4 class="text-center">Social Network</h4> -->
          </figure>
          <figure class="project col-sm-3 col-xs-6 php">
          	<a href="social.php" class="info"><img src="img/social.gif" class="img-responsive"></a>
              <!-- <h4 class="text-center">To do list</h4> -->
          </figure>
          <figure class="project col-sm-3 col-xs-6 php symfony bootstrap">
              <a href="blog.php" class="info"><img src="img/blog.gif" class="img-responsive"></a>
              <!-- <h4 class="text-center">My first blog in Symfony2</h4> -->
              <!-- <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
               <p><a href="#" class="btn btn-warning">Visit the project >></a></p> -->
          </figure>
          <figure class="project col-sm-3 col-xs-6 html javascript">
              <a href="projects.php" class="info"><img src="img/slse.gif" class="img-responsive"></a>
              <!-- <h4 class="text-center">Facebook clone</h4> -->
          </figure>
          <figure class="project col-sm-3 col-xs-6 html javascript">
              <a href="projects.php" class="info"><img src="img/math.gif" class="img-responsive"></a>
              <!-- <h4 class="text-center">Math application for kids</h4> -->
          </figure>
          <figure class="project col-sm-3 col-xs-6 html javascript php">
              <a href="todolist.php" class="info"><img src="img/todolist.gif" class="img-responsive"></a>
              <!-- <h4 class="text-center">My first portfolio</h4> -->
          </figure>
          <figure class="project col-sm-3 col-xs-6 html javascript">
              <a href="projects.php" class="view"><img src="img/bookning.gif" class="img-responsive"></a>
              <!-- <h4 class="text-center">A booking form</h4> -->
          </figure>
        </div>

     </div>
   </div>
</div>
<?php

include 'inc/footer.php';
?>