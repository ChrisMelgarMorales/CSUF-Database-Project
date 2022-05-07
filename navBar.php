<?php
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
      <a class="navbar-brand" href="#">Lindeed</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown <?php echo (!isset($_SESSION["employer"])) ? 'd-none' : ''; ?>">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Employer Tools
               </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="createJobPost.php">Create Jobpost</a></li>
                  <li><a class="dropdown-item" href="viewEmployerPosts.php">View Jobposts</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown <?php echo (!isset($_SESSION["employee"])) ? 'd-none' : ''; ?>">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Employee Tools
               </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">My Jobpost</a></li>
                  <li><a class="dropdown-item" href="#">My Applications</a></li>
                  <li><a class="dropdown-item" href="searchResults.php">Search Jobposts</a></li>
               </ul>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="logout.php">Logout</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<?php  ?>
