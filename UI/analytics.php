<!DOCTYPE html>
<?php
  //  include "connect.php";
  //  $sql = "SELECT * FROM `product`";
  //  $result = mysqli_query($conn, $sql);
  
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
    <link rel="stylesheet" href="style.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-business' style='color:#2fc27e' ></i>
      <span class="logo_name">BA Team</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.html">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
            
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li> -->
        <li>
          <a href="analytics.html" class="active">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li> -->
        <li>
          <a href="team.html">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li> -->
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Home</span>
      </div>
      
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!-- <img src="images/profile.jpg" alt=""> -->
        <span class="admin_name">BA Team</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    

<!-- <form action="import.php" method="post" enctype ="multipart/form-data">
  <input type="file" name="upcsv" accept=".csv" required/>
  <input type ="submit" value ="Upload />
</form> -->
<div class="home-content">
  <div class="overview-boxes">
    <div class="box mx-auto text-center">
      <div class="right-side">
        <div class="upload-file"> Upload data</div>

      <form action="import.php" method="post" enctype ="multipart/form-data">
        <div class="button">  
          <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" name="uploadfile" accept=".csv" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Upload</button>
          </div>
        </div> 
      </form>
      <div>
        <!-- <h3>data</h3>
        <?php 
          //  while($row = mysqli_fetch_assoc($result)) {
          //    echo "Tên sản phẩm :".$row["product_name"]."<br >";
          //  }
        ?> -->
      </div>
    </div>
  </div>
</div>
</div>
       

<script>
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
</script>

</body>
</html>

