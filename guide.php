<!DOCTYPE html>
<html>

<head>
    <title>DHS Math Course Selection Guide</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Images/favicon.png">

    <!-- Bootstrap CSS -->
    <script rel = "preconnect" src="https://kit.fontawesome.com/2b00a0d522.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&family=Lato&family=Titillium+Web:wght@600&family=Crimson+Text&display=swap" rel="stylesheet">
    
    <link href="main_css.css" rel="stylesheet">
    <style>
       
        .jumbotron-header {
            color: white;
            background-image: linear-gradient(
            rgba(0, 0, 0, 0.4),
            rgba(0, 0, 0, 0.4)
            ), url("Images/red_wallpaper.jpg");
            background-size: cover;
            min-height: 450px;
            display: 10% block;
            border-radius: 0;
        }
        .card-style1 {
            background-color: #E74762;
        }
        .card-style2 {
            background-color: #FBD7D3;
        }
        .card-style3 {
            background-color: #fffbf7;
        }
        .card-style4 {
            background-color: #FBAFBC;
        }
        .btn {
            display: inline-flex;
            
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
    /*OBSOLETE ICON CODE
        .icon {
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            text-decoration: none;
        }
        .fa-facebook {
            background: #3B5998;
            color: white;
        }
         
        #social-fb:hover {
            color: #3B5998;
        }
        #social-tw:hover {
            color: #4099FF;
        }
        #social-gp:hover {
            color: #d34836;
        }
        #social-em:hover {
            color: #f39c12;
        }*/
        
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
    <?php $filename = 'guide.php'?>
    
    <?php include 'header.php'; ?>

    <div class = "jumbotron text-center jumbotron-header" > 
        <br><br>
       <h1 style = "font-family: 'Crimson Text', serif;">Dublin High School</h1>
       <h1 style = "font-size: 450%">USER GUIDE</h1>
        <br>
        <a href="index.php" class="btn btn-outline-light btn-lg" >Home</a>
    </div>

    <!--HOW TO USE-->
    <div class = "container">
        <div data-aos="fade-in" data-aos-duration="1500" class = "row" > 
            <div data-aos="fade-in" data-aos-duration="1500" class = "col-md-6" style = "color:lightpink">
                <img src ="Images/guide_2.jpg" class = "img-thumbnail">
            </div>
            <div class = "card card-style1 col-md-6" style = "color: white">
                <div class = "card-header">
                    <br>
                    <h2>THE BASICS</h2>
                </div>
                <div class = "card-body">
                    <ol>
                        <li>Enter your grade in the first section of the form.</li>
                        <li>Select <strong>all</strong> of the math courses you have taken so far.</li>
                        <li>The planned courses section is optional. The application will verify if these courses are possible 
                            to take next school year based on your current qualifications.</li>
                        <li>Click "Submit" to see your pathway.</li>
                        <li>If you want to change your input, click "Reset". </li>
                        <li>Your results will <strong>not</strong> be saved. Please take a screenshot.</li>
                    </ol>
                    <div class = "text-center">
                        <br>
                    <a href="index.php" class="btn btn-light" >Start</a>
                    </div> 
                </div>
            </div>
            
        </div>
    
    <br>
    <div data-aos="fade-in" data-aos-duration="1500" class = "card card-style2" > 
        <div class = "card-header">
            <br>
            <h2 class = "container">EXAMPLE OUTPUT</h2>
        </div>
        <div class = "card-body">
            <div class = "container">
            <p>Selected Grade 10.<br>Courses taken already: Algebra I, Geometry, and Algebra II.<br>Planned courses: No planned courses.</p>
            
            <p> Results:<br>
            In grade 11 you may take the following courses: Statistics, Trigonometry, PreCalculus.<br>
            In grade 12 you may take the following courses: AP Statistics, Calculus, AP Calculus AB.
            </p>
            <p>Note that courses are not repeatedly printed. For example, if this student chose to take PreCalculus in grade 11, 
                they would still be able to take Statistics in grade 12. 
            </p>
            </div>
        </div>
    </div>
    <br>
    <div data-aos="fade-in" data-aos-duration="1500" class = "card card-style3" style = "color: black"> 
        <div class = "card-header">
            <br>
            <h2 class = "container">THE RESULT</h2>
        </div>
        <div class = "card-body">
            <div class = "container">
                <ol>
                    <li>There are two sections that will appear: "Current Information" and "Possible Pathway."</li>
                    <li>The "Current Information" section will contain all of the information that you entered in the form.</li>
                    <li>If you selected planned courses, the application will first check if your planned courses are valid.</li>
                    <li>Otherwise, the application will print out all the possible courses you may take in each succeeding school year.</li>
                    <li>Although all of these courses are technically possible, there may be additional restrictions.</li>
                    <li>If you want to try another option, click "Go Back" and fill out the form again. </li>
                </ol>
                <div class ="text-center">
                <a href="index.php" class="btn btn-outline-secondary" >Begin</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <?php include 'footer.php'; ?>
    <!--
    <footer class= "jumbotron text-center">
        
        <div class="container">
            <div class = "fa-3x">
                <i class="fab fa-facebook-square"></i>
                <i class="fas fa-envelope-square"></i>
                <i class="fas fa-phone-square-alt"></i>
                <i class="fas fa-camera"></i>

        
            </div>
        </div>
        <br>
        <h6>Copyright 2020 @ Grace Liu </h6>
    </footer>
    -->
</body>

</html>