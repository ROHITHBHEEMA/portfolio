
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Welcome to Rohith's Portoflio!</title>
    <meta name="description" content="Personal portfolio for Rohith Bheema.">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="icon" type="image/png" href="images/icon.jpg" sizes="32x32" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="<sha384-></sha384->BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
      crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/0a5ed7b6d5.js" crossorigin="anonymous"></script>

<!--     <link rel="stylesheet" href="./styl.css"> -->


    <link rel="stylesheet" hreft="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->


    <!-- <link href="./aos.css" rel="stylesheet"> -->
    <link href="./timeline.css" rel="stylesheet">
    <link rel="stylesheet" href="./cards.css">
    <link rel="stylesheet" href="./styles.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123369483-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123369483-1');
</script>




</head>
<body>
    <script src="https://use.typekit.net/bkt6ydm.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

<!-- partial:index.partial.html -->
<!--Start Navigation bar -->
        <div id="navBar" class="nav navbar-default navbar-fixed-top" >
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbartop" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand text-uppercase" href="#">Rohith</a>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbartop">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#" class="hvr-underline-from-center">Home<span class="sr-only">(current)</span></a></li>
                            <li><a href="#aboutMe" class="hvr-underline-from-center">About</a></li>
                            <li><a href="#myProjects" class="hvr-underline-from-center">Projects</a></li>
                            <li><a href="#contact" class="hvr-underline-from-center">Contact</a></li>
                            <li><a  href = "files/resume.pdf" target = "_blank" class="hvr-underline-from-center">Resume</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Navigation bar -->


        <!--Start Banner-->
        <div class="row">
            <div id="banner" class="col-md-12 col-xs-12">
                <div class="banner-image"></div>
                <div class="banner-text text-center">
                    <h1>Rohith Bheema</h1>
                    <h3 class="tag">Aspiring Software Developer</h3>
                    <p><span class="descripeMe"></span></p>
                    <br><br>
                    <a href = "files/resume.pdf" target = "_blank"><button type="submit" class="btn btn-xs btn-black-line">Resume <i class="fa fa-download"></i></button></a>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
        <!--End Banner-->


        <!--Start About me-->
        <div class="container">
            <div id="aboutMe" class="row">
                <div id="about_content">
                    <h2 class="text-center text-capitalize" data-aos="fade-down">About Me</h2>
                    <div class="line-block text-center" data-aos="fade-down">
                        <span class="hert-title"><i class="fas fa-code"></i></span>
                    </div>
                    <p class="col-md-8 col-md-offset-2 text-justify">
                        My name is Bheema Rohith and I'm undergraduate student at the Indian Institute of Technology, Bhubaneswar. I am a coding enthusiast with a passion for reading, applying algorithms, developing web applications.
                    </p>
                </div>

            </div>
        </div>

        <!--End About me-->

        <!--Start My Services-->
        <div class="container">
            <div id="myService" class="row">
                <div class="col-xs-12 col-md-12">
                    <h2 class="text-center text-capitalize" data-aos="fade-down">Interests</h2>
                    <div class="line-block text-center" data-aos="fade-down">
                        <span class="hert-title"><i class="fas fa-code"></i></span>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                            <span class="pic-service hvr-pulse-grow">

                                            <i class="fab fa-github fa-3x" aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">Coding</h3>
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                            <span class="pic-service hvr-pulse-grow">

                                                <i class="far fa-window-maximize fa-3x" aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">Web Development</h3>
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                        <span class="pic-service hvr-pulse-grow">
                                            <i class="fab fa-adobe fa-3x " aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">Graphic Designing</h3>
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End My Services-->

        <!--Start Resume-->
        <div id="myResume" class="row">
            <div class="row">
                <h2 class="text-center text-capitalize" data-aos="fade-down">Education</h2>
                <div class="line-block text-center" data-aos="fade-down"><span class="hert-title"><i class="fas fa-code"></i></span></div>
                <!-- Timeline -->

                <div id="timeline" data-aos="fade-up">
                <!-- begin timeline -->
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                    <ul class="timeline timeline-split">
                        
                        <li class="timeline-item">
                            <div class="timeline-info">
                                <span>2018 - present</span>
                            </div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h3 class="timeline-title">Indian Institute of Technology, Bhubaneswar</h3>
                            </div>
                        </li>

                        <li class="timeline-item">
                            <div class="timeline-info">
                                <span>2016 - 2018</span>
                            </div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h3 class="timeline-title">Narayana junior college</h3>
                            </div>
                        </li>

                        <li class="timeline-item">
                            <div class="timeline-info">
                                <span>2015 - 2016</span>
                            </div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h3 class="timeline-title">Nri's Indian Springs school</h3>
                            </div>
                        </li>

                    </ul>
                </div>
                
                <!-- end timeline -->
                </div> <!-- end id timeline -->

            </div>

        </div>
        <!--End Education-->



        <!--Start My Services-->
        <div class="container">
            <div id="myService" class="row">
                <div class="col-xs-12 col-md-12">
                    <h2 class="text-center text-capitalize" data-aos="fade-down">Programming Languages</h2>
                    <div class="line-block text-center" data-aos="fade-down">
                        <span class="hert-title"><i class="fas fa-code"></i></span>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                            <span class="pic-service hvr-pulse-grow">

                                                <i class="fas fa-copyright fa-3x " aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">C++</h3>
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                            <span class="pic-service hvr-pulse-grow">

                                                <i class="fab fa-contao fa-3x" aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">C</h3>
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                        <span class="pic-service hvr-pulse-grow">
                                            <i class="fab fa-python fa-3x " aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">Python</h3>
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                            <span class="pic-service hvr-pulse-grow">

                                                <i class="fab fa-react fa-3x" aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">React js</h3>
                            
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                            <span class="pic-service hvr-pulse-grow">

                                                <i class="fab fa-js-square fa-3x" aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">JavaScript</h3>
                            
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                        <span class="pic-service hvr-pulse-grow">
                                            <i class="fab fa-node-js fa-3x" aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">Node js</h3>
                            
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                </div>
            </div>

        </div>



        <!--Start My Services-->
        <div class="container">
            <div id="myService" class="row">
                <div class="col-xs-12 col-md-12">
                    <h2 class="text-center text-capitalize" data-aos="fade-down">Softwares/Tools</h2>
                    <div class="line-block text-center" data-aos="fade-down">
                        <span class="hert-title"><i class="fas fa-code"></i></span>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                            <span class="pic-service hvr-pulse-grow">

                                                <i class="fab fa-github-square fa-3x" aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">Git</h3>
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                            <span class="pic-service hvr-pulse-grow">

                                                <i class="fab fa-adobe fa-3x " aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">Adobe Illustrator</h3>
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center">
                                        <span class="pic-service hvr-pulse-grow">
                                            <i class="fas fa-database fa-3x" aria-hidden="true"></i>
                                        </span>
                            <h3 class="text-center">Mongo Db</h3>
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                </div>
            </div>
        </div>





        <!--Start portfolio-->

        <div id="myProjects" class="container">
            <div class="row">
                <h2 class="text-center text-capitalize" data-aos="fade-down">Projects</h2>
                <div class="line-block text-center" data-aos="fade-up">
                    <span class="hert-title"><i class="fas fa-code"></i></span>
                </div>

                <!-- <div class="filter-container portfolio-nav text-center">
                    <ul class="list-inline filter">
                        <li id="btn-all" class="btn-filter active-portfolio hvr-ripple-out" data-filter="*">All</li>
                        <li id="btn-design" class="btn-filter hvr-ripple-out" data-filter=".software">Software Development</li>
                        <li id="btn-website" class="btn-filter hvr-ripple-out" data-filter=".ml">Machine Learning</li>
                        <li id="btn-website" class="btn-filter hvr-ripple-out" data-filter=".other">Other</li>
                    </ul>
                </div> -->

                <div class="portfolio-boxes row" data-aos="fade-up">

              
                    <!--
                    <div class="col-md-4 col-sm-6 col-xs-12 thumbnail portfolio-box  website">

                        <img src="http://stays.net/blog/wp-content/uploads/2016/11/OB82E20.jpg"  alt="pic1">
                    </div>

                    <div class=" col-md-4 col-sm-6 col-xs-12 thumbnail portfolio-box  design">
                        <img src="http://stays.net/blog/wp-content/uploads/2016/11/OB82E20.jpg"  alt="pic1">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 thumbnail portfolio-box  website">
                        <img src="https://image.freepik.com/free-photo/no-translate-detected_23-2147601451.jpg"  alt="pic3">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 thumbnail portfolio-box website">
                        <img src="http://www.fatosedados.com.br/site/wp-content/uploads/5S.jpg" alt="pic4">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 thumbnail portfolio-box design">
                        <img src="http://i0.wp.com/www.lustrum.com.ua/wp-content/uploads/2016/11/coffee-smartphone-desk-pen.jpg?fit=3831%2C2554" alt="pic5">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 thumbnail portfolio-box design">
                        <img src="http://stays.net/blog/wp-content/uploads/2016/11/OB82E20.jpg"  alt="pic1">
                    </div>
                    -->


     
                
                    <div class="row">
                        <!-- start first portfolio item -->
                        
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 grid-portfolio software">
                            <a href=""  alt="MathPass Link">
                            <div class="portfolio-item-ct">
                                <div class="thumbnail">
                                    <img src="images/project3.jpg" alt="fundraiser" class="img-responsive">
                                    
                                </div>
                                <div class="caption portfolio-details">
                                    <h3>Journalism Body</h3>
                                </a>
                                    <p>Developed a website for the institute wherein the news articles prepared by the students of
                                        the institute on various happenings are hosted.
                                        <!-- <br> Managed registrations of participants for various events, conducted photography, sketching, quiz competitions
                                        online with a nominal entry fee collected using instamojo payments gateway. -->
                                        <br>
                                        Aug 2020 - Present
                                    </p>
                                    <ul class="portfolio-tags">
                                        <li class="portfolio-tag">Html</li>
                                        <li class="portfolio-tag">Css</li>
                                        <li class="portfolio-tag">Javascript</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end first portfolio item -->
                        <!-- start second portfolio item -->
                        
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 grid-portfolio software">
                            <a href="https://www.iitbbs.ac.in/cdc/index.php" target="_blank" alt="MathPass Link">
                            <div class="portfolio-item-ct">
                                <div class="thumbnail">
                                    <img src="images/project2.jpg" alt="fundraiser" class="img-responsive">
                                    
                                </div>
                                <div class="caption portfolio-details">
                                    <h3>CDC IIT Bhubaneswar</h3>
                                </a>
                                    <p>Developed a website for career development cell of the institute where in the students can register for the companies hiring them.
                                        <!-- <br> Managed registrations of participants for various events, conducted photography, sketching, quiz competitions
                                        online with a nominal entry fee collected using instamojo payments gateway. -->
                                        <br>
                                        Jan 2020 - Aug 2020
                                    </p>
                                    <ul class="portfolio-tags">
                                        <li class="portfolio-tag">Html</li>
                                        <li class="portfolio-tag">Css</li>
                                        <li class="portfolio-tag">Javascript</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end second portfolio item -->
                    <!--
                    </div>
                    <div class = "row">
                    -->
                                        <!-- start third portfolio item -->
                        
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 grid-portfolio software">
                                            <a href="http://fundraiser.wissenaire.org/index.php" target="_blank" alt="MathPass Link">
                                            <div class="portfolio-item-ct">
                                                <div class="thumbnail">
                                                    <img src="images/project1.jpg" alt="fundraiser" class="img-responsive">
                                                    
                                                </div>
                                                <div class="caption portfolio-details">
                                                    <h3>Do4Nation</h3>
                                                </a>
                                                    <p>Developed a website for do4nation fundraising event to aid the victims of Covid-19.
                                                        <!-- <br> Managed registrations of participants for various events, conducted photography, sketching, quiz competitions
                                                        online with a nominal entry fee collected using instamojo payments gateway. -->
                                                        <br>
                                                        April 2020 - May 2020
                                                    </p>
                                                    <ul class="portfolio-tags">
                                                        <li class="portfolio-tag">Html</li>
                                                        <li class="portfolio-tag">Css</li>
                                                        <li class="portfolio-tag">Javascript</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                        </div>
                        
                        <!-- end third portfolio item -->
                    </div>
                    
                
                    


                </div>
            </div>
        </div>


        <!--Start Resume-->
        <div id="myResume" class="row">
            <div class="row">
                <h2 class="text-center text-capitalize" data-aos="fade-down">Position of Responsibility</h2>
                <div class="line-block text-center" data-aos="fade-down"><span class="hert-title"><i class="fas fa-code"></i></span></div>
                <!-- Timeline -->

                <div id="timeline" data-aos="fade-up">
                <!-- begin timeline -->
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                    <ul class="timeline timeline-split">
                        
                        <li class="timeline-item">
                            <div class="timeline-info">
                                <span>May 2020- Present</span>
                            </div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h3 class="timeline-title">Governor</h3>
                                <p>Web and Design club, Student’s Gymkhana, IIT Bhubaneswar</p>
                            </div>
                        </li>

                        <li class="timeline-item">
                            <div class="timeline-info">
                                <span>April 2019- Present</span>
                            </div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h3 class="timeline-title">Web and Design Coordinator</h3>
                                <p>Wissenaire,Technical fest of IIT Bhubaneswar</p>
                            </div>
                        </li>


                    </ul>
                </div>
                
                <!-- end timeline -->
                </div> <!-- end id timeline -->

            </div>

        </div>
        <!--End Education-->


        <!--Start My Services-->
        <div class="container">
            <div id="contact">
            <div id="myService" class="row">
                <div class="col-xs-12 col-md-12">
                    <h2 class="text-center text-capitalize" data-aos="fade-down">Contact Me</h2>
                    <div class="line-block text-center" data-aos="fade-down">
                        <span class="hert-title"><i class="fas fa-code"></i></span>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        
                    
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        <div class="box text-center new">
                                            <span class="pic-service hvr-pulse-grow">

                                                <img src="images/icon.jpg" height="100px" width="auto" alt="">
                                        </span>
                            <h3 class="text-center">Rohith Bheema</h3>
                            
                            <!--<p class="text-center">
                                By working on projects from beginning to end, I've 
                                realized the importance of a team when building a robust software. 
                            </p>-->
                            <h4>Mobile No : </h4>
                            <h6>7780643299</h6>
                            <h4>Mail Id : </h4>
                            <h6>br16@iitbbs.ac.in</h6>
                            
                            
                        </div>
                        <div class="boxone"></div>
                        <div class="boxtow"></div>
                    </div>
                    <div class="block col-md-4 col-xs-12">
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--End My Services-->

        
        <!--End portfolio-->
        <!-- <div class="container">
            <div id="contactMe" class="row">
                <div id="about_content">
                    <h2 class="text-center text-capitalize" data-aos="fade-down">Contact Me</h2>
                    <div class="line-block text-center" data-aos="fade-down">
                        <span class="hert-title"><i class="fas fa-code"></i></span>
                    </div>
                    <p class="col-md-8 col-md-offset-2 text-center">
                       Feel free to email me at: <b>colinjianingxie@gmail.com</b> or <b>colinjianingxie@uchicago.edu</b>
                    </p>
                </div>

            </div>
        </div> -->
        <!--Start Footer-->
        
        <footer>
            <h4 class="text-center">
                <div>
                    <a href="https://www.linkedin.com/in/bheema-rohith-79812b193/"><i class="fab fa-linkedin fa-3x" aria-hidden="true"></i></a>
                    <a href="https://github.com/ROHITHBHEEMA"><i class="fab fa-github-square fa-3x" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/rohith.bheema.35/"><i class="fab fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                    <a  href="https://www.instagram.com/rohith.bheema/?hl=en"><i class="fab fa-instagram-square fa-3x" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/bheema_rohith"><i class="fab fa-twitter-square fa-3x" aria-hidden="true"></i></a>
                </div>
                <br>
                Rohith Bheema's Personal Website.
            </h4>
        </footer>
        
        
        <!--End Footer-->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js'></script>
<script src='https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js'></script>
<script src='https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js'></script>

<script  src="./script.js"></script>




</body>
</html>
