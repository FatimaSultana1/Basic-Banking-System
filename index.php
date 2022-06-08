<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" style="padding-left: 0px;padding-right: 0px;">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #CCE5FF;">
              <div class="col-sm-12 col-md" style="padding-top:100px;">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>CITY BANK</h1>
                  <p></p>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2" style="height:380px;width:320px;">
              </div>
            </div>
            <div id="message">
              <marquee behavior="" direction=""> <b> City bank never asks for your Card/PIN/OTP/CVV details on phone, message or email. Please do not click on links received on your email or mobile asking your Bank/Card details.Any such call can be made only by fraudster.</b></marquee>
            </div>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/transfer.png" class="img-fluid" style="height:350px;width:450px;">
                    <br>
                    <a href="transfermoney.php"><button class="btn btn-info">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button class="btn btn-info">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>©Copyright 2022. Made by <b>@FATIMA SULTANA</b> <br>All Rights Reserved.</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>