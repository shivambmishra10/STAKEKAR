<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sTAKEkar</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div>
    <?php include("usernav.php") ?>
    </div>
    <div id="main">
        <h1 style="text-align: center; font-weight: 1500; color: aliceblue; margin-top: 0rem; color:blue; opacity: 0.5;">Your ride. Your choice.</h1>
        <div class="fcontainer">
            <div class="inputs">
                <form autocomplete="off" action="find_aride.php" method="POST">
                  <div class="autocomplete">
                    <input id="myInput" type="text" name="dep" placeholder="Leaving from...">
                  </div>
                  <div class="autocomplete">
                    <input id="myInput1" type="text" name="dest" placeholder="Going to...">
                  </div>
                  <div class="autocomplete">
                    <input id="myInput2" type="date" name="date">
                  </div>
                  <div class="autocomplete">
                    <button type="submit" class="button1">Find a ride</button>
                  </div> 
                </form>
            </div>
        </div>

    </div>

    <div class="block" style="max-width: 50%;">
        <img src="offer.svg" alt="" style="position: absolute; right: 55%;">
       <div class="blocklet">
           <h3 >Driving a car soon?</h3>
           <p>Lets make its least expensive.</p>
           <button class="button" onclick="document.location='signin-signupform1.php'">offer</button>
       </div>
      </div>
    <br><br>
    <div class="middle">
        <br>
        <h1>Go literally anywhere.<br>
            From anywhere.</h1><br>
        <div class="containers">
            <h3> Smart</h3>
            <p>With access to millions of journeys, you<br> 
                can quickly find people nearby travelling your way.</p>
        </div>
        <div class="containers">
            <h3>Simple</h3>
           <p>Enter your exact address to find the perfect ride.<br>
                Choose who you’d like to travel with. And book!</p>
        </div>
        <div class="containers">
            <h3>Seamless </h3>
            <p>Get to your exact destination, without the hassle.<br>
                No queues. No waiting around.</p>
        </div>
      </div>

      <div class="middle">
          <br>
        <h1>3 things you'll love about sTAKEkar</h1><br>
        <div class="containers">
            <h3>Choice</h3>
                    <p>We go everywhere. Literally thousands of destinations.<br>
                         No station required.</p>
        </div>
        <div class="containers">
            <h3>Carpool with confidence</h3>
                      <p>Government ID verification adds<br>
                      another level of security to member profiles.</p>
        </div>
        <div class="containers">
            <h3>Get going faster </h3>
            <p>No need to travel across town,<br>
            catch a ride leaving near you.</p>
        </div>
      </div>
      <?php include("footer.php") ?>
</body>
</html>