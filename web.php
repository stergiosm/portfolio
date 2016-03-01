<?php
$pageTitle = 'IT courses | Stergios Michopoulos';
$jumbotronH1 = 'IT Programs- Courses';
$jumbotronP = 'It is fascinating to receive knowledge from many different schools';
include 'inc/header.php';
include 'inc/jumbotron.php';
?>

 <div class="page-blog container-fluid">

  <div class="row">

    
    <div class="posts col-md-10 col-md-offset-2">

      <div class="row">

        <div class="post col-md-9">

          <a href="#" class="post-thumbnail">
            <div class="row">
              <div class="col-xs-3">
                <img src="img/medie.jpg" class="img-responsive">
              </div>
              <div class="col-xs-3">
                <img src="img/michigan.jpg" class="img-responsive">
              </div>
              <div class="col-xs-3">
                <img src="img/umea.jpg" class="img-responsive">
              </div>
              <div class="col-xs-3">
                <img src="img/lulea.jpg" class="img-responsive">
              </div>
            </div>
          </a>
          <article class="post">

            <header class="head text-center">
              <a href="http://www.sse.gr/index_en.php" target="_blank"><h3>IT courses</h3></a>
              
            </header>

            <div class="paragraph">
              <p>
                 The main mission of the Academy is to provide the Hellenic Army with leaders versed in the military science through living in a military environment and undergoing the many-sided military and academic education.
               </p>
             </div>

             <ul class="nav nav-tabs">
                <li><a href="#medie" data-toggle="tab">Web development</a></li>
                <li><a href="#python" data-toggle="tab">Python</a></li>
                <li><a href="#web" data-toggle="tab">Web design</a></li>
                <li><a href="#game" data-toggle="tab">Game design - production</a></li>
             </ul>


                  <div class="tab-content">

                    <div class="tab-pane fade active in" id="medie">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                           <th>Date</th>
                           <th>School</th>
                           <th>Field of studies</th>
                           <th>Courses</th>
                          </thead>
                          <tbody>
                           <th>sep 2014 - ongoing</th>
                           <th> Medieinstitutet </th>
                           <th>Web developer e-commerce</th>
                           <th>PHP (OOP-MVC-Symfony2), Javascript (jQuery), MySQL, Databases, Responsive design, Agile methods, CMS</th>
                         </tbody>
                        </table>
                      </div>
                    </div>
            
                    <div class="tab-pane fade" id="python">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                           <th>Date</th>
                           <th>School</th>
                           <th>Field of studies</th>
                          </thead>
                          <tbody>
                           <th>feb 2015 - apr 2015</th>
                           <th>University of Michigan (Coursera)</th>
                           <th>Python programming (Files, Strings, Conditional Statements, Loops-iterations, Functions, Lists, Dictionaries, Tuples)</th>
                         </tbody>
                        </table>
                      </div>
                    </div>
            
                    <div class="tab-pane fade" id="web">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                           <th>Date</th>
                           <th>School</th>
                           <th>Field of studies</th>
                          </thead>
                          <tbody>
                           <th>sep 2013 - dec 2013</th>
                           <th>Umeå University</th>
                           <th>Web design (Basics) HTML5 - CSS3</th>
                          </tbody>
                        </table>
                      </div>
                    </div>
            
                    <div class="tab-pane fade" id="game">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                           <th>Date</th>
                           <th>School</th>
                           <th>Field of studies</th>
                          </thead>
                          <tbody>
                           <th>feb 2005 - apr 2005</th>
                           <th>Luleå University</th>
                           <th>Game Design - Game Production</th>
                          </tbody>
                        </table>
                      </div>
                    </div>

                  </div>

                </div>

              </div>

          </article>
        
      </div>

    </div>

  </div>

</div>
<?php

include 'inc/footer.php';
?>