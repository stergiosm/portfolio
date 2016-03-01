<?php
$pageTitle = 'Military Courses | Stergios Michopoulos';
$jumbotronH1 = '<h1>Military Courses</h1>';
include 'inc/header.php';
include 'inc/jumbotron.php';
?>

<div class="page-blog container-fluid">
  <div class="row">

  <!-- <aside class="sidebar col-md-2 col-md-offset-1 col-md-push-8">

    <div class="widget">
      <h2>About Me</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, aliquam.
      </p>
    </div>

    <div class="widget">
      <h2>My projects</h2>
      <ul>
        <li>
          <a href="#">Finance Application</a>
        </li>
        <li>
          <a href="#">Social Network</a>
        </li>
        <li>
          <a href="#">Adress book</a>
        </li>
        <li>
          <a href="#">Twitter clone</a>
        </li>
        <li>
          <a href="#">Book list</a>
        </li>
      </ul>
    </div>

  </aside> -->

  <div class="posts col-md-10 col-md-offset-2">

    <div class="row">
      <div class="post col-md-10">
        <a href="#" class="post-thumbnail">
          <img src="img/army.jpg" class="img-responsive">
        </a>
        <article class="post">
          <header class="head text-center">
            <a href="http://www.army.gr/default.php?pname=Home&la=2" target="_blank"><h3>Greek Military Courses</h3></a>
          </header>
          <div class="paragraph">
            <p>
              Throughout the years as a military officer there are some opportunities that Greek Army provides in order to be a well trained and educated officer. In my case i was priviledged to take 5 courses and learn tactics and technics in the advanced military science field.
             </p>
        </div>

           <ul class="nav nav-tabs">
              <li><a href="#basic" data-toggle="tab">Basic Level</a></li>
              <li><a href="#commando" data-toggle="tab">Commando Basic Training</a></li>
              <li><a href="#special" data-toggle="tab">Special weapons</a></li>
              <li><a href="#deception" data-toggle="tab">Military deception</a></li>
              <li><a href="#advanced" data-toggle="tab">Advanced Level</a></li>
           </ul>

              <div class="tab-content">
                  <div class="tab-pane fade active in" id="basic">
                   <div class="table-responsive">
                     <table class="table table-condensed">
                        <thead>
                         <th>Date</th>
                         <th>Grade</th>
                         <th>Field of studies</th>
                       </thead>
                       <tbody>
                         <th>jun 2002 - jun 2003</th>
                         <th>18.51 / 20</th>
                         <th> Military and Strategic Leadership</th>
                       </tbody>
                   </table>
              </div>
          </div>
          
                  <div class="tab-pane fade" id="commando">
                   <div class="table-responsive">
                     <table class="table table-condensed">
                        <thead>
                         <th>Date</th>
                         <th>Grade</th>
                         <th>Field of studies</th>
                       </thead>
                       <tbody>
                         <th>apr 2003 - maj 2003</th>
                         <th>12.51 / 20</th>
                         <th>Commando Basic training</th>
                       </tbody>
                   </table>
              </div>
                  </div>
          
                  <div class="tab-pane fade" id="special">
                   <div class="table-responsive">
                     <table class="table table-condensed">
                        <thead>
                         <th>Date</th>
                         <th>Grade</th>
                         <th>Field of studies</th>
                       </thead>
                       <tbody>
                         <th>feb 2003 - apr 2003</th>
                         <th>15.0 / 20</th>
                         <th>Special weapons</th>
                       </tbody>
                   </table>
              </div>
                  </div>
          
                  <div class="tab-pane fade" id="deception">
                   <div class="table-responsive">
                     <table class="table table-condensed">
                        <thead>
                         <th>Date</th>
                         <th>Grade</th>
                         <th>Field of studies</th>
                       </thead>
                       <tbody>
                         <th>feb 2005 - apr 2005</th>
                         <th>18.70 / 20</th>
                         <th>Military Deception</th>
                       </tbody>
                   </table>
              </div>
                  </div>
                  <div class="tab-pane fade" id="advanced">
                   <div class="table-responsive">
                     <table class="table table-condensed">
                        <thead>
                         <th>Date</th>
                         <th>Grade</th>
                         <th>Field of studies</th>
                       </thead>
                       <tbody>
                         <th>jan 2011 -apr 2011</th>
                         <th>17.91 / 20</th>
                         <th>Advanced Military and Operational Studies</th>
                       </tbody>
                   </table>
              </div>
                  </div>
              </div>

        </article>


      </div>
    </div>
  </div>
</div>
</div>

<?php

include 'inc/footer.php';
?>