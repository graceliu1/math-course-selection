<!DOCTYPE html>
<html>

<head>
    <title>DHS Math Course Selection Contact</title>
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
            rgba(0, 0, 0, 0.3),
            rgba(0, 0, 0, 0.3)
            ), url("Images/grey_wallpaper.jpg");
            background-size: cover;
            background-position: center bottom;
            min-height: 450px;
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
    <?php $filename = 'contact.php'?>
    
    <?php include 'header.php'; ?>

    <div class = "jumbotron text-center jumbotron-header" > 
        <br><br>
       <h1 style = "font-family: 'Crimson Text', serif;">Dublin High School</h1>
       <h1 style = "font-size: 450%">CONTACT US</h1>
        <br>
        <a href="https://www.dublin.k12.ca.us/dhs" target = "_blank" class="btn btn-outline-light btn-lg" >School</a>
    </div>

    <!--HOW TO USE-->
    <div class = "container text-center">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf8-fxCEMtY9WtZiWP4uuvcD4U4Kc55xYcfL9NsTUn7JDvpuA/viewform?embedded=true" width="900" height="931" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    
    <br>
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