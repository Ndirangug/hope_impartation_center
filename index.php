<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home Page' />
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Home | Hope Impartation Centre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="hope impartation centre, nyahururu church, meshack mwangi, pastor sarah, Faith and miracle" />
    <meta name="author" content="WIT Ltd" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
     <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="fonts/css/fontawesome-all.css" />
</head>
<body>

    <!-----------navbar + banner----------------->
    <div class="container-fluid" id="header">
        <!--navbar-->
        <nav class="navbar">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="#"><strong> Hope <span> Impartation </span> Centre </strong> </a>
                        
                </div>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#wordOfTheDay">Word of The Day</a></li>
                        <li><a href="#aboutUs">About</a></li>
                        <li><a href="https://www.youtube.com/channel/UC8NSv8yLnYCSYTY-Zii28vA/videos" target="_blank">Sermons</a></li>
                        <li><a href="#pastoralTeam">Pastoral Team</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#">Shop</a></li> 
                        <li><a href="#contact">Contact Us</a></li> 
                       
                    </ul>
                </div>
        </nav>
        <!------------------banner------------------------>
        <div class="jumbotron text-center">
            <div class="jumbotron-content">
                <h3>Welcome to </h3>
                 <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                         <div class="row">
                             <div class="col-md-4"> <hr /></div>
                              <div class="col-md-4"><h4>Hope Impartation Centre</h4></div>
                              <div class="col-md-4">  <hr /> </div>
                         </div> 
                     </div>
                    <div class="col-md-1"></div>
                </div>
                <h1>An altar of Grace and Love</h1>
                <p>At Hope Impartation Centre, we believe the kingdom of God was meant for evryone regardless of where theyre coming from. Whatever you've done in the past is past. Come to the mercy seat where Jesus is waiting to embrace you and turn your ashes to beauty</p>
                <button class="btn btn-default text-capitalize">Service Schedule</button>
            </div>
         </div>
    </div>
      <!-- --------------upcoming event & latest sermon---------------->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-xs-12"><!--blank--></div>
            <div class="col-md-4 col-xs-12 shadow1"> 
                <div class="event-upcoming">
                        <h4><span class="glyphicon glyphicon-calendar"></span> Next Upcoming Event</h4>
                        <hr />
                        <cms:editable name='upcoming_event_title' type='richtext'><h5>Event Title Goes Here</h5></cms:editable>
                        <ul class="text-muted list-unstyled">
                            <li><span class="glyphicon glyphicon-user"></span> <cms:editable name='chief_guest_or_speaker' type='richtext'><h5>Pastor: First Last Name</h5></cms:editable></li>
                            <li><span class="glyphicon glyphicon-map-marker"></span><cms:editable name='venue' type='richtext'><h5> Venue:  Place, building, town</h5></cms:editable></li>
                            <li><span class="glyphicon glyphicon-phone"></span><cms:editable name='phone' type='richtext'> <h5> Phone:   254_________ </h5></cms:editable></li>
                            <li><span class="glyphicon glyphicon-envelope"></span><cms:editable name='email' type='richtext'> <h5>Email:  username@domain.ending </h5></cms:editable></li>
                        </ul>
                        <a href="#" class="btn btn-default">REGISTER</a> 
                 </div>
              </div>
            <div class="col-md-4 col-xs-12 sermon-latest shadow2 ">
                 <div class="sermon-latest sermon-box ">
                     <h4><img class="glyphicon" src="images/sermon2.png" width="40em" height="40em"> Latest Sermon</h4>
                     <hr />
                      <iframe src="<cms:editable name='you_tube_embed_url' type='richtext'>https://www.youtube.com/embed/WTmDs-omj3U</cms:editable>"></iframe>
                 </div>
            </div>
            <div class="col-md-2 col-xs-12"><!--blank--></div>
         </div>   
        </div>

     <!--------------------About Us-------------------->
    <div class="container-fluid" id="aboutUs">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 hug-about ">
                <img src="images/hug.png" alt="hug" />
            </div>
            <div class="col-md-5 bio-about">
                <h4>About Us</h4>
                <h3>Welcome to Hope Impartation Centre, an altar of grace and love</h3>
                <p>We are a family in Christ founded in love. We are lead of the Holy Spirit. We believe in the manifestation of the Holy Spirit in the physical. We are for salvation for the lost, deliverance to the yoked, healing for the sick and restoration to the lost. We believe in the Kingdom way.</p>
                <div class="row">
                    <div class="col-md-6">
                        <h4 > <img  src="images/love.png" alt="Love Icon" /> Founded in Love</h4>
                        <p>Love is how were called to live. Its the way Christ came to introduce us to by dying on the cross. Its what draws us to righteousness.As such we make it our foundtion.</p>
                    </div>
                    <div class="col-md-6">
                        <h4><img  src="images/spirit.png" alt="Holy spirit logo" />Led of the Spirit</h4>
                        <p>The Holy Spirit is our guide and loyal helper. It was Him who was sent to help us continue what Jesus had started. We need Him coz we cannot do this alone.He teaches us all things and brings to our remembrance Jesus' words(John 14:26)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4> <img  src="images/grace.png" alt="Grace logo" />Grace for all</h4>
                        <p>Grace is God's unmerited favour upon us. Its for the undeserving. its out of love. It makes us able to approach the throne of God with confidence. It draws us closer to Him.</p>
                    </div>
                    <div class="col-md-6">
                        <h4><img src="images/restore.png" alt="restoration logo" />Restoration for the lost</h4>
                        <p>After you've joined the Kingdom thats only the start of greater things. The start of God taking you where He wanted you to be in the fist place.The start of restoration.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div> 

         <!-----------------word of the day------------------->
    <div class="container-fluid text-center" id="wordOfTheDay">
        <div class="tint">
            <h4>Word Of The Day</h4>
            <cms:editable name='word_of_day_reference' type='richtext'><p>Psalms 86:11 (NKJV)</p></cms:editable>
            <blockquote>
               <cms:editable name='word_of_day_verse' type='richtext'> "Teach me thy way O Lord that I may walk in thy truth; unite my heart to fear thy name" </cms:editable>
            </blockquote>
        </div>
    </div>
    <!---------------Gallery--------------->
    <div class="container" id="gallery">
        <h2 class="text-center">Gallery</h2>
      <div id="gallerySlider" class="carousel slide" data-ride="carousel" data-interval="10000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#gallerySlider" data-slide-to="0" class="active"></li>
        <li data-target="#gallerySlider" data-slide-to="1"></li>
        <li data-target="#gallerySlider" data-slide-to="2"></li>
        
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
          <!--page1-->
        <div class="item active">
            <div class="row">
                <div class="col-md-4">  <img class="img-responsive img-thumbnail" src="<cms:editable name='gallery1' type='image'/>" alt="interior" /></div>
                <div class="col-md-4"> <img class="img-responsive img-thumbnail" src="<cms:editable name='gallery2' type='image'/>" alt="interior" /></div>
                <div class="col-md-4"> <img class="img-responsive img-thumbnail" src="<cms:editable name='gallery3' type='image'/>" alt="interior" /></div>
            </div>
             <div class="row">
                <div class="col-md-4"> <img class="img-responsive img-thumbnail" src="<cms:editable name='gallery4' type='image'/>" alt="interior" /></div>
                <div class="col-md-4"> <img class="img-responsive img-thumbnail" src="<cms:editable name='gallery5' type='image'/>" alt="interior" /></div>
                <div class="col-md-4"> <img class="img-responsive img-thumbnail" src="<cms:editable name='gallery6' type='image'/>" alt="interior" /></div>
            </div>
        </div>
          <!--page2-->
        <div class="item">
            <div class="row">
                <div class="col-md-4"><img class="img-responsive img-thumbnail" src="<cms:editable name='gallery7' type='image'/>" alt="interior" /> </div>
                <div class="col-md-4"><img class="img-responsive img-thumbnail" src="<cms:editable name='gallery8' type='image'/>" alt="interior" /></div>
                <div class="col-md-4"><img class="img-responsive img-thumbnail" src="<cms:editable name='gallery9' type='image'/>" alt="interior" /></div>
            </div>
             <div class="row">
                 <div class="col-md-4"><img class="img-responsive img-thumbnail" src="<cms:editable name='gallery10' type='image'/>" alt="interior" /></div>
                 <div class="col-md-4"><img class="img-responsive img-thumbnail" src="<cms:editable name='gallery11' type='image'/>" alt="interior" /></div>
                 <div class="col-md-4"> <img class="img-responsive img-thumbnail" src="<cms:editable name='gallery12' type='image'/>" alt="interior" /></div>
            </div>
          
        </div>
          <!--page3-->
         <div class="item">
             <div class="row">
                 <div class="col-md-4">  <img class="img-responsive img-thumbnail" src="<cms:editable name='gallery13' type='image'/>" alt="interior" /> </div>
                 <div class="col-md-4"><img class="img-responsive img-thumbnail" src="<cms:editable name='gallery14' type='image'/>" alt="interior" /></div>
                 <div class="col-md-4"> <img class="img-responsive img-thumbnail" src="<cms:editable name='gallery15' type='image'/>" alt="interior" /> </div>
            </div>
             <div class="row">
                 <div class="col-md-4"><img class="img-responsive img-thumbnail" src="<cms:editable name='gallery16' type='image'/>" alt="interior" /></div>
                 <div class="col-md-4"><img class="img-responsive img-thumbnail" src="<cms:editable name='gallery17' type='image'/>" alt="interior" /></div>
                 <div class="col-md-4"><img class="img-responsive img-thumbnail" src="<cms:editable name='gallery18' type='image'/>" alt="interior" /> </div>
            </div>
          
        </div>
      </div>

     
     
    </div>

    </div>

    <!--pastoral team-->
    <div class="container-fluid" id="pastoralTeam">
        <div class="row">
            <div class="col-md-2"> <img class="img-circle img-responsive" src="images/pastor.png" alt="pastor" /> </div>
            <div class="col-md-2"> <img class="img-circle img-responsive" src="images/pastor.png" alt="pastor" /> </div>
            <div class="col-md-2"> <img class="img-circle img-responsive" src="images/pastor.png" alt="pastor" /> </div>
            <div class="col-md-2"> <img class="img-circle img-responsive" src="images/pastor.png" alt="pastor" /> </div>
            <div class="col-md-2"> <img class="img-circle img-responsive" src="images/pastor.png" alt="pastor" /> </div>
            <div class="col-md-2"> <img class="img-circle img-responsive" src="images/pastor.png" alt="pastor" /> </div>
        </div>
     
     </div>
   
  

    <!--blog-->
    <div class="container" id="blog">
        <h2>Our Blog</h2>
       <div id="blogSlider" class="carousel slide" data-ride="carousel" data-interval="10000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#blogSlider" data-slide-to="0" class="active"></li>
        <li data-target="#blogSlider" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
            <!--page1-->
          
          <div class="item active">
          <div class="row">
              <div class="col-md-6 item-blog-1">
                  <img src="<cms:editable name='page1_main_post_image' type='image'/>" alt="blog image" />
                      <cms:editable name='page1_main_post_title' type='richtext'>
                          <h4>The New Sanctuary </h4>
                      </cms:editable>
                      <cms:editable name='page1_main_post_author' type='richtext'>
                          <h6 class="text-muted">Author: Hope Impartation Centre</h6>
                      </cms:editable>
                      <cms:editable name='page1_main_post_content' type='richtext'>
                          <p>The launching of the ultra modern church sanctuary is to take place on the 1st of yhis month . Come witness this wasemse experience.Dont be left out in the makrking of such an important milestone.</p>
                      </cms:editable>
                </div>
              <div class="col-md-6">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="row blog-item-2-entry">
                              <div class="col-md-4">
                                  <img class="img-responsive" src="<cms:editable name='page1_post1_image' type='image'/>" alt="Alternate Text" />
                              </div>
                                  <div class="col-md-8">
                                      <cms:editable name='page1_post1_title' type='richtext'>
                                          <h5>Story Title</h5>
                                      </cms:editable>
                                      <cms:editable name='page1_post1_author' type='richtext'>
                                          <h6 class="text-muted">Author: First last Name</h6>
                                      </cms:editable>
                                      <cms:editable name='page1_post1_content' type='richtext'>
                                          <p>Lorem ipsum deol reo  car dieu a aime lomonde quil a dionne. Je suis un garcon de God.Jais dix-neuf ans</p>
                                      </cms:editable>
                                  </div>
                              
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="row blog-item-2-entry">
                               <div class="col-md-4">
                                   <img class="img-responsive" src="<cms:editable name='page1_post2_image' type='image'/> " alt="Alternate Text" />
                                </div>
                              <div class="col-md-8">
                                 <cms:editable name='page1_post2_title' type='richtext'> <h5>Story Title</h5></cms:editable>
                                  <cms:editable name='page1_post2_author' type='richtext'><h6 class="text-muted">Author: First last Name</h6></cms:editable>
                                 <cms:editable name='page1_post2_content' type='richtext'> <p>Lorem ipsum deol reo  car dieu a aime lomonde quil a dionne. Je suis un garcon de God.Jais dix-neuf ans</p></cms:editable>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="row blog-item-2-entry">
                              <div class="col-md-4">
                                 <img class="img-responsive" src=" <cms:editable name='page1_post3_image' type='image'/>" alt="Alternate Text" />
                               </div>
                              <div class="col-md-8">
                                  <cms:editable name='page1_post3_title' type='richtext'><h5>Story Title</h5></cms:editable>
                                  <cms:editable name='page1_post3_author' type='richtext'><h6 class="text-muted">Author: First last Name</h6></cms:editable>
                                  <cms:editable name='page1_post3_content' type='richtext'><p>Lorem ipsum deol reo  car dieu a aime lomonde quil a dionne. Je suis un garcon de God.Jais dix-neuf ans</p></cms:editable>
                              </div>
                          </div>
                      </div>
                  </div>
              
              
          </div>
        </div>
        </div>
          <!--page2-->
        <div class="item">
            <div class="row">
              <div class="col-md-6 item-blog-1">
                  <img src="<cms:editable name='page2_main_post_image' type='image'/>" alt="blog image" />
                      <cms:editable name='page2_main_post_title' type='richtext'>
                          <h4>Children Dedication </h4>
                      </cms:editable>
                      <cms:editable name='page2_main_post_author' type='richtext'>
                          <h6 class="text-muted">Author: Hope Impartation Centre</h6>
                      </cms:editable>
                      <cms:editable name='page2_main_post_content' type='richtext'>
                          <p>As is the tradition, the first sunday of next minth willl be for dediation of our chiuldren. There will ne an anointing service.</p>
                      </cms:editable>
</div>
              <div class="col-md-6">
                  <div class="row">
                      <div class="col-md-12"> 
                          <div class="row blog-item-2-entry">
                              <div class="col-md-4">
                                  <img class="img-responsive" src="<cms:editable name='page2_post1_image' type='image'/>" alt="Alternate Text" />
                               </div>
                              <div class="col-md-8">
                                  <cms:editable name='page2_post1_title' type='richtext'><h5>Story Title</h5></cms:editable>
                                  <cms:editable name='page2_post1_author' type='richtext'><h6 class="text-muted">Author: First last Name</h6></cms:editable>
                                  <cms:editable name='page2_post1_content' type='richtext'><p>Lorem ipsum deol reo  car dieu a aime lomonde quil a dionne. Je suis un garcon de God.Jais dix-neuf ans</p></cms:editable>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="row blog-item-2-entry"">
                               <div class="col-md-4">
                                   <img class="img-responsive" src="<cms:editable name='page2_post2_image' type='image'/>" alt="Alternate Text" />
                               </div>
                              <div class="col-md-8">
                                  <cms:editable name='page2_post2_title' type='richtext'><h5>Story Title</h5></cms:editable>
                                  <cms:editable name='page2_post2_author' type='richtext'><h6 class="text-muted">Author: First last Name</h6></cms:editable>
                                  <cms:editable name='page2_post2_content' type='richtext'><p>Lorem ipsum deol reo  car dieu a aime lomonde quil a dionne. Je suis un garcon de God.Jais dix-neuf ans</p></cms:editable>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="row blog-item-2-entry"">
                              <div class="col-md-4">
                                  <img class="img-responsive" src="<cms:editable name='page2_post3_image' type='image'/>" alt="Alternate Text" />
                               </div>
                              <div class="col-md-8">
                                  <cms:editable name='page2_post3_title' type='richtext'><h5>Story Title</h5></cms:editable>
                                  <cms:editable name='page2_post3_author' type='richtext'><h6 class="text-muted">Author: First last Name</h6></cms:editable>
                                  <cms:editable name='page2_post3_content' type='richtext'><p>Lorem ipsum deol reo  car dieu a aime lomonde quil a dionne. Je suis un garcon de God.Jais dix-neuf ans</p></cms:editable>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
        </div>

        

        
      </div>

      
     
    </div>
   </div>
    
    <div class="container-fluid" id="contact">
        <div class="footer">
            <div class="row">
                <div class="col-md-6 feedback-form">
                    <cms:form action="" role="form" method="post">
                        <div class="form-group">
                            <label for="full_name">Name: </label>
                            <cms:if k_error_fullname>
                                <p class="text-danger val">*required</p>
                            </cms:if>
                            <cms:input class="form-control" required="1" type="text" value="" name="fullname" placeholder="Full Name" id="full_name"></cms:input>
                        </div>
                        <div class="form-group">
                            <cms:if k_error_email>
                                <p class="text-danger val">enter a valid email address</p>
                            </cms:if>
                            <label for="email">Email Address: </label>
                            <cms:input class="form-control" required="1" validator="email" type="text" value="" name="email" placeholder="yourname@email.end" id="email"></cms:input>

                        </div>
                        <div class="form-group">
                            <cms:if k_error_subject>
                                <p class="text-danger val">*required</p>
                             </cms:if>
                                    <label for="subject">Subject: </label>
                                    <cms:input class="form-control" required="1" type="text" value="" name="subject" placeholder="subject" id="subject"></cms:input>

                        </div>
                        <div class="form-group">
                            <cms:if k_error_comments>
                                <p class="text-danger val">*required</p>
                            </cms:if>
                            <label for="comments">Comments: </label>
                            <cms:input type="textarea" required="1" class="form-control" name="comments" cols="20" rows="3" id="comments" placeholder="your comments here..."></cms:input>
                        </div>
                        <cms:if k_success>
                            <p class="text-success val">Thanks for your feedback. We'll get back to you soon</p>
                            <cms:send_mail from=k_email_from to=k_email_to subject="feedback from your site">
                                The following is an email sent from your site
                                <cms:show k_success/>
                            </cms:send_mail>
                        </cms:if>
                        <cms:input class="btn btn-default" name="submit" type="submit" value="SEND"></cms:input>
                    </cms:form>
                </div>
                <div class="col-md-6 map">
                    <div class="row">
                        <div class="col-md-12 contacts">
                            <h5><span class="glyphicon glyphicon-phone"></span> +254723435500 <span class="text-muted">Bishop</span>  +254724423095 <span class="text-muted">Pst. Sarah</span></h5>
                            <h5><span class="glyphicon glyphicon-envelope"></span> info@hopeimpartationcentre.church</h5>
                            <h5><span class="glyphicon glyphicon-map-marker"></span> Koinange road, Nyahururu <span class="text-muted"> (near gomongo) </span></h5>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63837.090817610886!2d36.35006825912505!3d0.015406629705486253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178763be4e5dcb1b%3A0x462f1d0ccb0352e3!2sNyahururu!5e0!3m2!1sen!2ske!4v1517488235014"></iframe></div>
                    </div>
                </div>
            </div>
            <div class="row social text-center">
                <a href="http://www.facebook.com"><i class="fab fa-facebook"></i></a>
                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
                <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
                <a href="http://www.youtube.com"><i class="fab fa-youtube"></i></a>
                
                


            </div>
        </div>
    </div>
        
   
    <!--------------------------------------------------
                        SCRIPTS                      
        --------------------------------------------->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>