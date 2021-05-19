<!DOCTYPE html>
<html>
<head>
  <title>Make a Transaction</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./Main.css">
  <link rel="stylesheet" type="text/css" href="./table.css">
  <script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>

</head>

<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-university" style="font-size: 35px;"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#S1" style="font-size: 20px;">Home</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" ><i class="fas fa-search" style="font-size: 20px;"></i></button>
      </form>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!--End of Navbar-->   

<?php
    include 'conn.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn1,$sql);
?>

<!--Table-->
<h2><b>Make a Transaction</b></h2>
<table class="transact-table">
  <thead>
  <tr bgcolor="black" style="color: white; font-size: 20px;">
    <th>Id</th>
    <th>Name</th>
    <th>Email Id</th>
    <th>Balance</th>
    <th>Operation</th>
  </tr>
  </thead>

<tbody>
  <?php 
        while($rows=mysqli_fetch_assoc($result)){
    ?>
        <tr style="color : black;">
            <td class="py-2"><?php echo $rows['Id'] ?></td>
            <td class="py-2"><?php echo $rows['Name']?></td>
            <td class="py-2"><?php echo $rows['Email']?></td>
            <td class="py-2"><?php echo $rows['Balance']?></td>
            <?php
            $stid=$rows['Id'];
            ?>
            <td><a href="transaction.php?id=<?=$stid;?>"> <button style="background-color: #4d88ff; color: white; border-style: none; padding: 10px; border-radius: 5px;" >Transact</button></a></td> 
        </tr>
                <?php
                    }
                ?>
</tbody> 
</table>

<!--End of Table-->
    

<!-- Footer-->
<footer class="footer">
  <div class="section-center">
    <p class="text" style="margin-top: 100px;">
      &copy; <span>2021 All rights reserved</span>
    </p>
  </div>  
</footer>
<!-- End of Footer -->
</body>
</html>