<nav class="navbar flex-wrap navbar-expand-md sticky-top navbar-dark"> 
    <div class = "container d-flex">
    <!-- Brand --> 
    <a class="navbar-brand" href="#"> <img id="logo" alt="Logo" src="Images/dublinlogo.png" width="65" height="65"> <span style ="max-width: 70%">Math Course Selection<b>Dublin High School</b></span> </a> 
    
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
    
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link <?php echo ($filename == 'index.php')? 'active':''; ?>" href="index.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link <?php echo ($filename == 'math_selection_action_page.php')? 'active':''; ?>" href="math_selection_action_page.php">Pathway</a> </li>
        <li class="nav-item"> <a class="nav-link <?php echo ($filename == 'guide.php')? 'active':''; ?>" href="guide.php">Guide</a> </li>
        <li class="nav-item"> <a class="nav-link <?php echo ($filename == 'contact.php')? 'active':''; ?>" href="contact.php">Contact</a> </li>
        <li class="nav-item"> <a class="nav-link" target = "_blank" href="https://docs.google.com/document/d/1915aWCENg1Ps_Uwa6XLkvzW9Pyy7VfBA8L_aIKBLDbw/edit?usp=sharing"">Math Department</a></li>
    </ul>
    </div>
    </div>
</nav>