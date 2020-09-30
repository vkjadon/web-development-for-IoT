<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/table.css"> 
<link rel="stylesheet" href="../css/admin.css"> 
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top"> 
<a class="navbar-brand" href="index.php"> Home </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">      
      <li class="nav-item">
        <a class="nav-link" href="reports.php">Reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>  
    </ul>
  </div>  
</nav>
<div class="container-fluid" style="margin-top:60px"></div>
<div class="sidenav"  style="margin-top:55px">
  <p>Admin Dashboard</p>
  <button class="dropdown-btn">My Page<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="uploadPages.php">Upload Page</a>
    <a href="uploadImage.php';?>">Upload Image</a>
  </div>
  <button class="dropdown-btn">IoT Feeds<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="manage_toggle.php';?>">Toggle Button</a>
    <a href="manage_knob.php';?>">Regulator/Knob</a> 
  </div>
  <button class="dropdown-btn">Display<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="manage_slider.php">Slider</a>
    <a href="manage_line.php">Line/Curve</a>
    <a href="manage_bar.php">Bar Chart</a>
  </div>
</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
