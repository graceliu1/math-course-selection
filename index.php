<!DOCTYPE html>
<html>

<head>
    <title>DHS Math Course Selection</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="icon" href="Images/favicon.png">
    <meta name="google-site-verification" content="EHI5S-34BBl23_CfEmvqsxaldvdEiCVQyPfmaM7lJL8" />
    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&family=Lato&family=Antic+Slab&family=Titillium+Web:wght@600&family=Crimson+Text&family=Poppins&display=swap" rel="stylesheet">
    
    <link type="text/css"  href="main_css.css" rel="stylesheet">
    <style>
        /**JUMBOTRON AND GENERAL STYLING**/
        .jumbotron-header {
            color: white;
            background-image: linear-gradient(
            rgba(0, 0, 0, 0.4),
            rgba(0, 0, 0, 0.4)
            ), url("Images/blue_wallpaper.jpg");
            background-size: cover;
            min-height: 550px;
            display: block;
            border-radius: 0;
        }
        .btn {
            display: inline-flex ;
            height: 40px;
            padding-right: 25px;
			padding-left: 25px;
            text-transform: uppercase ;
            text-decoration: none ;
            font-size: .8em ;
            letter-spacing: 1.5px ;
            align-items: center ;
            justify-content: center ;
            overflow: hidden ;
            border-radius: 0 ;
            border: 2px solid !important;
        }
        .btn-link {
            text-decoration: none;
            color: black;
        }
        .btn-link:hover{
            text-decoration: none;
            color: black;
        }
        button {
            all: unset;
        }
        /*****************/

        /**CARD STYLES CSS**/
            .card-style1 { background-color: #4E7FBE; }
            .card-style2 { background-color: #D5DEEA; }
            .card-style3 { background-color: #6CBAD9; }
            .card-style4 { background-color: #3B2D5B; }
        /*****************/
        
        /***THIS SECTION IS FOR THE OBSOLETE FULL JUMBOTRON
        .has-search .form-control {
            padding-left: 2.375rem;
            
        }
        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
            
        }
        .input-group {
            width: 300px;
        }
        .btn-search {
            background-color:#3B2D5B;
        }**/

        
    </style> 
</head>  

<body>
    <script>
        AOS.init();
    </script>
    <!--THE BELOW IS OPTIONAL JAVASCRIPT CODE-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php $filename = 'index.php'?>
    <?php include 'header.php'; ?>
    <!--
        <nav class="navbar navbar-expand-md sticky-top navbar-dark"> 
            <div class = "container">
        
            <a class="navbar-brand" href="#"> <img id="logo" alt="Logo" src="Images/dublinlogo.png" width="65" height="65"> <span>Math Course Selection<b>Dublin High School</b></span> </a> 
            
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
            
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link active" href="index.php">Home</a> </li>
                <li class="nav-item"> <a class="nav-link" href="math_selection_action_page.php">Pathway</a> </li>
                <li class="nav-item"> <a class="nav-link" href="guide.php">Guide</a> </li>
                <li class="nav-item"> <a class="nav-link" target = "_blank" href="https://www.dublin.k12.ca.us/dhs">School</a> </li>
                <li class="nav-item"> <a class="nav-link" target = "_blank" ref="https://sites.google.com/dublinusd.org/dusdmsmath/"">Math Department</a></li>
            </ul>
            </div>
            </div>
        </nav>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark ">
            <div class="container">
                <a class="navbar-brand" target = "_blank" href="https://www.dublin.k12.ca.us/dhs">
                    <img src="Images/dublinlogo.png" width="50" height="50" alt="">
                    Dublin Math Course Selection
                </a>
                <div >
                    <ul class="navbar-nav nav-fill w-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="math_selection_action_page.php">Pathway</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="guide.php">Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target = "_blank" href="https://www.dublin.k12.ca.us/dhs">School</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target = "_blank" ref="https://sites.google.com/dublinusd.org/dusdmsmath/"">Math Department</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    -->
    <div class = "jumbotron text-center jumbotron-header" > 
       <br><br><br><br>
       <h1 style = "font-family: 'Crimson Text', serif;">Dublin High School</h1>
       <h1 style = "font-size: 450%">MATH COURSE SELECTION</h1>
        <br>
        <a href="math_selection_action_page.php" class="btn btn-lg btn-outline-light">How to Use</a>
          <!--<a href="math_selection_action_page.php" class="btn btn-outline-light btn-lg" >HOW TO USE</a>-->
    </div>
    <!--
    <div class = "jumbotron-fluid text-center jumbotron-header" > 
        <br><br>
        <nav class="navbar navbar-custom navbar-expand-lg "> sticky-top  navbar-light bg-light
            <div class="container">
                <div class="navbar-collapse collapse" id="navbar10">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="math_selection_action_page.php">Pathway</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="guide.php">Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target = "_blank" href="https://www.dublin.k12.ca.us/dhs">School</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target = "_blank" href="https://www.google.com">Contact</a>
                        </li>
                        
                    </ul>
                </div>
                
                <div class = "float-right" style = "float: right !important">
                    <div class="input-group float-right">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                          <button class="btn btn-search" type="button">
                            <i style = "color:white;"class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
            </div>
        </nav>
        <br><br><br><br><br><br><br>
       <h1 style = "font-family: 'Crimson Text', serif;">Dublin High School</h1> 
       
       <h1 style = "font-size: 450%">MATH COURSE SELECTION</h1>
        <br>
        <a href="math_selection_action_page.php" class="btn btn-outline-light btn-lg" >Explore</a>
    </div>
    -->
    
    <br>
    <div class = "container">

    <!--HOW TO USE-->
    <div class = "card-deck">
        <div class = "card card-style1" style = "color: white"> 
            <div class = "card-header">
                <br>
                <div class = "card-title">
                    <h2 class = "container">ABOUT THIS APPLICATION</h2>
                </div>
            </div>
            <div class = "container">
                <div class = "card-body ">
                    <p class = "large-paragraph"> If you are a student at Dublin High School, you may use this application
                        to decide which math course you will take next year. By completing the form below, a possible pathway
                        will be generated based on your input. </p>
                        <!--Enter your grade and the math courses you have taken so far. The planned courses section is 
                        optional. After you click submit, a possible course pathway will be generated for you based on your input. 
                        
                        You must click "Reset" if you want to change any options.--> 
                    <p class = "large-paragraph">Your pathway will generated based on the current Dublin High School Math Department
                        criteria. Some courses have prerequisites that must be fulfilled. Not all courses will be avaliable 
                        depending on your current math course. Please keep in mind that your counselor may require additional waivers.
                    </p>
                    <p class = "large-paragraph">To begin, enter your grade and the math courses you have taken so far. 
                        Keep in mind that the "Planned Courses" section is optional. To read the user guide, please
                        click the button below.
                    </p>
                    
                    <a href="math_selection_action_page.php" class="btn btn-lg btn-outline-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class = "col-md-6" style = "color: white">
            <img src ="Images/main_page_1.jpg" class = "img-thumbnail">
        </div>
    </div>
    <br>

    <!--FORM SECTION BELOW-->
    <div data-aos="fade-in" data-aos-duration="1500" class = "card bg-light">
        <div class = "card-header">
            <br>
            <div class = "card-title">
                <h2 class = "container">FILL OUT THE FOLLOWING FORM</h2>
            </div>
        </div>
        <div class = "card-body">
            <div class = "container">
                <form name="MathCourse" id="form1" action="/math_selection_action_page.php">
                <br>
                <!--GRADE-->
                <div>
                    <h5>Please select your current grade:</h5>
                    <hr>
                    <div class = "form-check" > 
                        <input type="radio" id="grade8" name="grade" value=8 required>
                        <label  for="grade9">Grade 8</label>
                        <input type="radio" id="grade9" name="grade" value=9 required>
                        <label for="grade9">Grade 9</label>
                        <input type="radio" id="grade10" name="grade" value=10 required>
                        <label for="grade9">Grade 10</label>
                        <input type="radio" id="grade11" name="grade" value=11 required>
                        <label for="grade11">Grade 11</label>
                        <input type="radio" id="grade12" name="grade" value=12 required>
                        <label for="grade12">Grade 12</label><br>
                    </div>
                </div>
                <br>

                <!--PREVIOUS COURSES-->
                <div> 
                <h5>Please select all of the math courses you have taken, including your current course:</h5>
                <hr>
                <div class = "form-check" > 
                    <div class = "form-row">
                        <div class = "form-group col-md-4"> 
                            <input type="checkbox" id="Course3" name="Course3" value="Course3" >
                            <label for="Course3"> Course 3</label><br>

                            <input type="checkbox" id="Algebra1A" name="Algebra1A" value="Algebra1A" >
                            <label for="Algebra1A"> Algebra 1A </label><br>

                            <input type="checkbox" id="Algebra1" name="Algebra1" value="Algebra1" >
                            <label for="Algebra1"> Algebra 1 </label><br>
                            
                            <input type="checkbox" id="AdvancedAlgebra" name="AdvancedAlgebra" value="AdvancedAlgebra" >
                            <label for="AdvancedAlgebra"> Advanced Algebra </label><br>
                            
                            <input type="checkbox" id="Geometry" name="Geometry" value="Geometry" >
                            <label for="Geometry"> Geometry</label><br>

                            <input type="checkbox" id="AdvancedGeometry" name="AdvancedGeometry" value="AdvancedGeometry" >
                            <label for="AdvancedGeometry"> Advanced Geometry </label><br>
                            
                            <input type="checkbox" id="Algebra2" name="Algebra2" value="Algebra2" >
                            <label for="Algebra2"> Algebra 2 </label><br>
                            
                            <input type="checkbox" id="AdvancedAlgebra2" name="AdvancedAlgebra2" value="AdvancedAlgebra2" >
                            <label for="AdvancedAlgebra2"> Advanced Algebra 2 </label><br>
                            <!--
                            <input type="checkbox" id="AdvAlgebra2" name="AdvAlgebra2" value="AdvAlgebra2" >
                            <label for="AdvAlgebra2"> Adv. Algebra 2 </label><br>-->
                        </div> 
                        <div class = "form-group col-md-4"> 
                            <input type="checkbox" id="Statistics" name="Statistics" value="Statistics" >
                            <label for="Statistics"> Statistics </label><br>
                            
                            <input type="checkbox" id="Trigonometry" name="Trigonometry" value="Trigonometry" >
                            <label for="Trigonometry"> Trigonometry </label><br>
                            
                            <input type="checkbox" id="PreCalculus" name="PreCalculus" value="PreCalculus" >
                            <label for="PreCalculus"> PreCalculus </label><br>
                            
                            <input type="checkbox" id="PersonalFinance" name="PersonalFinance" value="PersonalFinance" >
                            <label for="PersonalFinance"> Personal Finance </label><br>
                            
                            <input type="checkbox" id="Calculus" name="Calculus" value="Calculus" >
                            <label for="Calculus"> Calculus </label><br>

                            <input type="checkbox" id="APstatistics" name="APstatistics" value="APstatistics">
                            <label for="APstatistics"> AP Statistics </label><br>
                            
                            <input type="checkbox" id="APCalculusAB" name="APCalculusAB" value="APCalculusAB" >
                            <label for="APCalculusAB"> AP Calculus AB </label><br>
                            
                            <input type="checkbox" id="APCalculusBC" name="APCalculusBC" value="APCalculusBC" >
                            <label for="APCalculusBC"> AP Calculus BC </label><br>
                        </div>
                    </div>
                </div>
                </div>
                <br>
                
                <!--FUTURE COURSES-->
                <div> 
                <h5>Please select one or multiple math courses you plan to take next year. This section is <em>optional.</em></h5>
                <hr>
                <div class = "form-check"> 
                    <div class = "form-row">
                        <div class = "form-group col-md-4">
                            <input type="checkbox" id="plan_Course3" name="plan_Course3" value="plan_Course3" >
                            <label for="plan_Course3"> Course 3 </label><br>

                            <input type="checkbox" id="plan_Algebra1A" name="plan_Algebra1A" value="plan_Algebra1A" >
                            <label for="plan_Algebra1A"> Algebra 1A </label><br>

                            <input type="checkbox" id="plan_Algebra1" name="plan_Algebra1" value="plan_Algebra1" >
                            <label for="plan_Algebra1"> Algebra 1 </label><br>
                            
                            <input type="checkbox" id="plan_AdvancedAlgebra" name="plan_AdvancedAlgebra" value="plan_AdvancedAlgebra" >
                            <label for="plan_AdvancedAlgebra"> Advanced Algebra </label><br>
                            
                            <input type="checkbox" id="plan_Geometry" name="plan_Geometry" value="plan_Geometry" >
                            <label for="plan_Geometry"> Geometry</label><br>

                            <input type="checkbox" id="plan_AdvancedGeometry" name="plan_AdvancedGeometry" value="plan_AdvancedGeometry" >
                            <label for="plan_AdvancedGeometry"> Advanced Geometry </label><br>
                            
                            <input type="checkbox" id="plan_Algebra2" name="plan_Algebra2" value="plan_Algebra2" >
                            <label for="plan_Algebra2"> Algebra 2 </label><br>
                            
                            <input type="checkbox" id="plan_AdvancedAlgebra2" name="plan_AdvancedAlgebra2" value="plan_AdvancedAlgebra2" >
                            <label for="plan_AdvancedAlgebra2"> Advanced Algebra 2 </label><br>
                        </div>
                        <div class = "form-group col-md-4">
                            <input type="checkbox" id="plan_Statistics" name="plan_Statistics" value="plan_Statistics">
                            <label for="plan_Statistics"> Statistics </label><br>
                            
                            <input type="checkbox" id="plan_Trigonometry" name="plan_Trigonometry" value="plan_Trigonometry">
                            <label for="plan_Trigonometry"> Trigonometry </label><br>
                            
                            <input type="checkbox" id="plan_PreCalculus" name="plan_PreCalculus" value="plan_PreCalculus">
                            <label for="plan_PreCalculus"> PreCalculus </label><br>

                            <input type="checkbox" id="plan_PersonalFinance" name="plan_PersonalFinance" value="plan_PersonalFinance" >
                            <label for="plan_PersonalFinance"> Personal Finance </label><br>
                            
                            <input type="checkbox" id="plan_Calculus" name="plan_Calculus" value="plan_Calculus">
                            <label for="plan_Calculus"> Calculus </label><br>
                            
                            <input type="checkbox" id="plan_APstatistics" name="plan_APstatistics" value="plan_APstatistics">
                            <label for="plan_APstatistics"> AP Statistics </label><br>

                            <input type="checkbox" id="plan_APCalculusAB" name="plan_APCalculusAB" value="plan_APCalculusAB">
                            <label for="plan_APCalculusAB"> AP Calculus AB </label><br>
                            
                            <input type="checkbox" id="plan_APCalculusBC" name="plan_APCalculusBC" value="plan_APCalculusBC">
                            <label for="plan_APCalculusBC"> AP Calculus BC </label><br>
                        </div>
                    </div>
                </div>
                </div>
                <br>
                <!--ALERT AND BUTTONS-->
                  
                <div class="alert alert-warning col-md-6 " role="alert">
                    You must click <strong>"Submit"</strong> or <strong>"Reset"</strong> 
                    each time you fill out this form. 
                </div>

                <input class="btn btn-success" type="submit" value="Submit" >
                <input class="btn btn-danger"  type="reset" >
                
                </form>
            </div>
        </div>
        <br>
        <br>
    </div>
    <br>

    <!--FAQ SECTION IS BELOW-->
    <div class = "card-deck">
        <div data-aos="fade-in" data-aos-duration="1500" class = "col-md-4" style = "color: white">
            <img src ="Images/main_page_4.jpg" class = "img-thumbnail">
        </div>
        <div data-aos="fade-in" data-aos-duration="1500" class = "card col-md-8 card-style3"> 
            <div class = "card-header" style = "color: white">
                <br>
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
                
            </div>
            <div class = "card-body">
                <div class="accordion" id="accordion-tab-1">
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-1">
                            <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                                Q: What are the prerequisites and criteria for each math course? </button>
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>For the full list of requirements, please refer to the official Dublin High School Course Selection Handbook for 2021-2022. You may also view the 
                                    flowchart from the DHS Math Department here.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-2">
                            <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                            Q: Why are certain options not appearing on my generated pathway?</button>
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                            <div class="card-body">
                            <p>You have either taken the equivalent of this course already or it is impossible to take this course based on your current course progression.
                                </p>
                                <p><strong>Example: </strong>If you have taken Algebra 2, there is no need to take Advanced Algebra 2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-3">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                                    Q: I've already taken/will have taken all of the avaliable math courses at Dublin High School by the time I graduate. What are my other options?</button>
                            
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>There may be alternative math courses avaliable online at local community colleges. Please contact your counselor for more information.</p>
                                <p><strong>Example: </strong>If you finish AP Calculus BC before 12th grade, you must take an advanced course such as Multivariable Calculus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-4">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                                    Q: I am planning to take DPIE or another summer option for a math course. How will this affect my pathway?</button>
                           
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>Summer courses are currently not supported. However, you can input your planned course for the next school year based on what you have taken
                                    so far in DPIE. 
                                </p>
                                <p><strong>Example: </strong>If you are taking Algebra I and plan to take Geometry during the summer, select both of those courses as "Taken"</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-5">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5">
                                    Q: I'm interested in dual enrollment. Where can I find more information'?</button>
                           
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>To dual enroll in two math classes at once, you must fill out an approval form. Please visit the Math Department tab for 
                                    more information. 
                                </p>
                                <p><strong>Example: </strong>If you are taking AP Statistics and plan to dual enroll in AP Calculus AB, please fill out the form.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
    <br>

    <!--CONTACT FORM BELOW
    <div data-aos="fade-in" data-aos-duration="1500" class = "card card-style4" style = "color: white"> 
        <div class = "card-header">
            <br>
            <h2 class = "container">CONTACT US:</h2>
        </div>
        <div class = "card-body">
            <form class = "container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="first">First Name</label>
                        <input type="text" class="form-control" placeholder="" id="first">
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="last">Last Name</label>
                        <input type="text" class="form-control" placeholder="" id="last">
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                
                        <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class = "row"> 
                    <div class="form-group col-md-6">
                        <label for="form_message">Message </label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" data-error="Please, leave us a message."></textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="button" id = "button-2">Submit</button>
            </form>
            <br>
        </div>
    </div>
    -->
    <br>
    
    <div data-aos="fade-in" data-aos-duration="1500" class = "card card-style4" style = "color: white"> 
        <div class = "card-header"> 
            <br>
            <h2 class = "container">OFFICIAL FLOWCHART</h2>
        </div>
        <div class = "card-body text-center" > 
            <img class = "container img-fluid" src = "Images/official_flowchart.png"> 
            <br><br>
            <a href="guide.php" class="btn btn-lg btn-outline-light">More Information</a>
        </div> 
    </div>

    <br>
    </div> <!--END OF THE CONTAINER-->
    
    <!----------- Footer ------------>
    <?php include 'footer.php'; ?>
    

    <!-- OLD FOOTER
        <footer class= "text-center">
            <div class = "jumbotron jumbotron-footer"> 
            <h5>Copyright 2020 @ Grace Liu </h5>
            </div>
        </footer>
    -->
</body>

</html>