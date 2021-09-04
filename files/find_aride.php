<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find a ride</title>
<style>
  .containers{
    float: left;
    width: 45%;
    padding: 0.3125rem;
    margin-left: 2.2rem;
    text-align: initial;
    color:whitesmoke;
  }
  
  
  .block::after {
    content: "";
    clear: both;
    display: table;
  }

  .block{
    padding: 1.875rem;
    margin: 1.875rem;
  }
  .btn {
  width: 150px;
  height: 49px;
  border: none;
  outline: none;
  border-radius: 48px;
  cursor: pointer;
  background-color: orange;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  transition: all 0.5s;
}

.btn:hover {
  background-color: red;
}
</style>
</head>
<body>
<div>
    <?php include ("nav.php") ?>
</div>
<?php
    $con = mysqli_connect("localhost","root","","stakekar");

    $dep =$_POST['dep'];
    $dest=$_POST['dest'];
    $date=$_POST['date'];
    $query="SELECT * FROM offer_a_ride WHERE pickup='$dep' AND dropoff='$dest' AND date='$date'";
    $query_run = mysqli_query($con,$query);
    $check = mysqli_num_rows($query_run)>0;
    
if($check)
{
    session_start();
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
<div class="container" style="background-color: aliceblue;">
    <div class="row">
        <div class="block" style="background-color: lightskyblue; width: 50rem; margin: auto; align-items: center; text-align: center; justify-content: center; border-radius: 1.875rem;margin-top: 1.5rem;">
            <div><img src="blockcar.png" alt="car" width="190rem" height="100px"></div>
            <div class="containers">
            <h2 class="pick">Pickup : <?php echo $row['pickup'];?></h2>
            <h2 class="drop">Dropoff : <?php echo $row['dropoff'];?></h2>
            <h2 class="cost">City :<?php echo $row['city'];?></h2>
            <h2 class="name">Owner Name : <?php echo $row['name'];?></h2>
            
            
            </div>
            <div class="containers">
            <h2 class="cost">Date :<?php echo $row['date'];?></h2>
            <h2 class="cost">Time :<?php echo $row['time'];?></h2>
            <h2 class="cost">Amount :<?php echo $row['cost'];?></h2>
            <h2 class="cost">Capacity:<?php echo $row['capacity'];?></h2>
            <br><br>
            </div>
            <?php 
                if(isset($_REQUEST['sub']))
                      {      
                          
                            $_SESSION['user']=$row['name'];
                            $_SESSION['usermobile']=$row['mobile'];
                            $_SESSION['useremail']=$row['email'];}?>
            <div style="">
                <br><br>
                
                <button type="button" id="button" class="btn" name="sub" onclick="document.location='/Project%20koinonia%201/find_user_details/index.html'">CHECK IT</button>
                
            </div>
        </div>
    </div>
</div>
<?php
       
    }
}
else
{
    header("Location:nodata.php");
}
?>
<div>
    <?php include("footer.php") ?>
</div>
</body>
</html>

