<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="sample.js"></script>
    <script type="text/javascript" src="auto_complete.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>

</head>

<body><center>

<div class="container-fluid" id="body-box">
    <h2 class="container-fluid">ACCOUNT FINDER</h2>

    <p><b>Welcome to findMe.com</b></p>

    <form method="POST" action="index.php">
                                        <!-- showName(this.value) natin ay function sa JS file natin kung san mo to ilalagay
                                             dun sya kukuha ng inputs para iexecute ng function na nasa js file -->
                                             
        <p><input type="text" size="40" id="txtHint" onkeyup="showName(this.value)"></p>
        <!-- onkeyup="showName(this.value)" -->
       

    </form>
    </div> <!-- END LINE OF DIV BOX-->        
    </center>

    <!-- RESULTS OUTPUT AREA-->
    <div class="container-fluid" id="Mbg">
    <p class="match">Matches:</p> </div>
   <!-- <div class="result-body"> -->

    <span class="container-fluid" id="txtOutput"></span>

    <button id="home" class="btn btn-danger" ><a href="Home.html" class="text-warning">Home</a></button>

</body>

</html>
