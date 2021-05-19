<?php
include 'conn.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn1,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array of sender

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn1,$sql);
    $sql2 = mysqli_fetch_array($query); // returns array of receiver


    // condition to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


    // condition to check insufficient balance
    else if($amount > $sql1['Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    

    // condition to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Sorry! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE users set Balance=$newbalance where id=$from";
                mysqli_query($conn1,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE users set Balance=$newbalance where id=$to";
                mysqli_query($conn1,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO transaction(`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn1,$sql);

                if($query)
                {
                     echo "<script> alert('Transaction Successful');
                                     window.location='history.php';
                           </script>";   
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaction</title>
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



 <!-- Form -->
        <h2><b>Transaction</b></h2>
            <?php
                include 'conn.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id=$sid";
                $result=mysqli_query($conn1,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn1);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>

            <form class="contact" method="post">
                <label style="font-size: 20px;">Sender's Name:</label><br/>
                <input type="text" name="Name" value="<?php echo $rows['Name']; ?>" readonly><br/><br/>

                <label style="font-size: 20px;">Balance:</label><br/>
                <input type="text" name="balance" value="<?php echo $rows['Balance']; ?>" readonly><br/><br/>


                <label style="font-size: 20px;">Transfer to:</label><br/>
                <select name="to" class="form-control" style="width:100%; box-sizing: border-box; padding:12px 10px; background:rgba(0,0,0,0.1);
                outline:none; border:1px solid black; color:blue; border-radius: 5px; margin: 10px;" required>
                <option value="" disabled selected>Choose</option> 
                <?php
                include 'conn.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn1,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn1);
                }
                while($rows = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $rows['Id'];?>" >
                
                    <?php echo $rows['Name'] ;?>
               
                </option>
                <?php 
                    } 
                ?>
            </select><br/>
                <label style="font-size: 20px;">Amount:</label><br/>
                <input type="number" name="amount" style="width:100%; box-sizing: border-box; padding:12px 10px; background:rgba(0,0,0,0.1);
                outline:none; border:1px solid black; color:blue; border-radius: 5px; margin: 10px;" required>
                <input type="submit" name="submit" value="Transfer">
            </form>
<!--End of Form-->
        

<!-- Footer-->
<footer class="footer">
    <div class="section-center">
        <p class="text">
            &copy; <span>2021 All rights reserved</span>
        </p>
    </div>  
</footer>
<!-- End of Footer -->
</body>
</html>