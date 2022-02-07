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
      <div class="right-side" >
        <button style=" color: blue;
            font-family: verdana;
            border: none;
            font-size: 111%;">
            <a href="dashboard_display.html" style="text-decoration: none; "> Business Analytics </a></button>
      </div>
      </div>
      <div class="box mx-auto text-center">
        <div class="right-side">
        <button style=" color: blue;
            font-family: verdana;
            border: none;
            font-size: 111%;" >
            <a href="dashboard_update.html" style="text-decoration: none; "> Analytics Update</a></button>
        </div>
      </div>
      <div class="box mx-auto text-center">
      <div class="right-side">
        <button style=" color: blue;
            font-family: verdana;
            border: none;
            font-size: 111%;">
            <a href="advanced_forecast.html" style="text-decoration: none; "> Advanced Forecast</a></button>
      </div>
      </div>
  </div>
</div>
</div>
<?php
// $servername = "localhost";
// $username = "root";
// $dbchar = "utf8";
// $password = "";
// $dbname = "ba";
  // $conn = new PDO(
  //     "mysql:host=$servername;dbname=$dbname;charset=$dbchar",
  //     $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  //   );
  include("connect.php");
  $fh = fopen($_FILES["uploadfile"]["tmp_name"],"r");
  if ($fh===false) { exit("Error opening uploaded csv file"); }
    $i = 0;
    while(($row = fgetcsv($fh)) !== false) {
      if($i == 0){
        $i++;
        continue;
      }
      echo "<br>";
      $sql = "INSERT INTO `product`(`product_id`, `category_id`, `product_price`, `product_name`) 
      VALUES ('$row[0]','$row[1]','$row[2]','$row[3]')";
      echo $sql;

      if(mysqli_query($conn, $sql)){
        echo "done";
      }else{
        echo "false";
      }
      echo "<br>";
      
    }

fclose($fh);
echo "DONE!";
?>

<?php
//index.php
// $connect = mysqli_connect("localhost", "root", "", "ba");
// $message = '';

// if(isset($_POST["upload"]))
// {
//  if($_FILES['product_file']['name'])
//  {
//   $filename = explode(".", $_FILES['product_file']['name']);
//   if(end($filename) == "csv")
//   {
//    $handle = fopen($_FILES['product_file']['tmp_name'], "r");
//    while($data = fgetcsv($handle))
//    {
//     $product_id = mysqli_real_escape_string($connect, $data[0]);
//     $category_id = mysqli_real_escape_string($connect, $data[1]);  
//     $product_price = mysqli_real_escape_string($connect, $data[2]);
//     $product_name = mysqli_real_escape_string($connect, $data[3]);
//     $query = "
//      UPDATE product 
//      SET category_id = '$category_id', 
//      product_price = '$product_name', 
//      product_name = '$product_price' 
//      WHERE product_id = '$product_id'
//     ";
//     mysqli_query($connect, $query);
//    }
//    fclose($handle);
//    header("location: import.php?updation=1");
//   }
// }}

// if(isset($_GET["updation"]))
// {
//  $message = '<label class="text-success">Product Updation Done</label>';
// }

// $query = "SELECT * FROM product";
// $result = mysqli_query($connect, $query);
?>

     <?php
    //  while($row = mysqli_fetch_array($result))
    //  {
    //   echo '
    //   <tr>
    //    <td>'.$row["category_id"].'</td>
    //    <td>'.$row["product_name"].'</td>
    //    <td>'.$row["product_price"].'</td>
    //   </tr>
    //   ';
    //  }
     ?>

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



