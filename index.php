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

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Basic Banking System</h3>
                  <h1>Sparks Bank &copy</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.png" class="img-fluid" style="height: 250px; width: 300px;">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center" id="services">
                  <div class="col-md act">
                    <img src="img/user1.png" class="img-fluid" style="height: 250px; width: 250px;">
                    <br>
                    <a href="viewuser.php"><button>View Customers</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transact1.png" class="img-fluid" style="height: 250px; width: 250px;">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" class="img-fluid" style="height: 250px; width: 250px;">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2" id="foot">
        <p>#gripAUGUST2021. Made by <b>Dev Singh Parihar</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>