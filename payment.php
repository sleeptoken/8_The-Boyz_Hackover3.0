<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>

<div class="container">
    <form action="#" method="POST">
        <div class="row">
            <div class="col">
                <h3 class="title">billing address</h3>
                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="Wick">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="mail" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="add" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state" placeholder="maharashtra">
                    </div>
                    <div class="inputBox">
                        <span>event name:</span>
                        <input type="text" name="even" placeholder="festival">
                    </div>
                </div>
            </div>
            <div class="col">
                <h3 class="title">payment</h3>
                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="ncard" placeholder="mr. wick">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="ccno" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="expm" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="expy" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="1234">
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="proceed to checkout" class="submit-btn">
    </form>
</div>    
</div>
</body>
</html>
<?php
if($_POST){
$servername="localhost";
$username="root";
$password="";
$database="payment";

$payment=new mysqli($servername,$username,$password,$database);
if($payment->connect_error){
    echo "Connection Failed<br>";
    die;    
}
else {
    echo "Connection Successful<br>";
}

$sql="INSERT INTO hackpay(name,mail,add,city,ncard,ccno,expm,state,even,expy,cvv) VALUES ('$_POST[name]',$_POST[mail],$_POST[add],$_POST[city],$_POST[ncard],$_POST[ccno],$_POST[expm],$_POST[state],$_POST[even],$_POST[expy],$_POST[cvv])";

if($payment->query($sql)==TRUE){
    echo "NEW RECORD created successfully";
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
}
?>