<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    

    <title>Online Banking System</title>
    <style type="text/css">
        button{
            position: relative;
    display: inline-block;
    padding: 12px 36px;
    margin: 10px 0;
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 18px;
    letter-spacing: 2px;
    border-radius: 8px;
    background-color: #ff0548;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
        }
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>
<div class="bg">
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
            <div >
                <div >
                   <center> <h1>Welcome to Online Banking System</h1></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img src="images/User.png" class="img-fluid">
                <br><br>
                <a href="userdetails.php"><button>View all Users</button></a>
            </div>
            <div class="col-md act">
                <br><br><br>
                <img src="images/History transaction.png" class="img-fluid">
                <br>
                <a href="transaction_history.php"><button >View Transfer History</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="images/transaction.png" class="img-fluid">
                <br><br>
                <a href="transfer_money.php"><button>Transfer Money</button></a>
            </div>

        </div>
    </div>
    </div>
    
    <?php include('footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>