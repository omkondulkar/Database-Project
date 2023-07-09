<?php
    session_start();
    require("config.php");
    error_reporting(0);
    // $pay = $_POST['Payment'];
    // $sql="select * from `register` where (payment='$_POST[Payment]');";
    // $res=mysqli_query($connect,"INSERT INTO `register`(`payment`) VALUES ('#pay')");
    // if($res)
    // {
    //     $done=1;
    // }
    // else
    // {
    //     $error[]='Failed :Something Went Wrong';
    // }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>

    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>
    <script src="back.js"> </script>
    <script src="./back.js defer">  </script>
  
    <link rel="stylesheet" href="StudyLab.css">
    <link rel="stylesheet" href="Profile.css">
    <link rel="stylesheet" href="Payment.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather:ital,wght@0,300;0,900;1,300;1,900&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,500&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">

    <form  method="POST" action="">

        <div class="row">

            <div class="col">

                <h3 class="title1">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo" name="Full_name" required autocomplete="on">
                </div>
                <!-- <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" required autocomplete="on">
                </div> -->
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" autocomplete="on">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai" name="city_name" required  autocomplete="on">
                </div>

                <div class="flex">
                    <div class="inputBox">  
                        <span>state :</span>
                        <input type="text" placeholder="Maharastra" autocomplete="on">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" autocomplete="on">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="../Images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo" autocomplete="on">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" autocomplete="on">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" autocomplete="on">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" autocomplete="on">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123" autocomplete="on">
                    </div>
                </div>

            </div>
           
            


        <?php


        $Email=$_SESSION['Umail'];
        $CourseName="The Complete Graphic Design Theory for Beginners Course";
        $date=date('Y-m-d');

        if(isset($_POST['Payment']))
        {
            $Fullname=$_POST['Full_name'];
            $CityName=$_POST['city_name'];
           
        

            $run=mysqli_query($connect,"INSERT INTO `payment_details`(`Id`, `Email_id`, `CourseName`, `FullName`, `Date`, `City`) VALUES ('','$Email','$CourseName','$Fullname','$date','$CityName')");
        }
           ?>
              
                <!-- // header("Location:Digitalstat.php"); -->
<!--              
                <div class="buttons"> -->
              <?php  if($run)
                   {?>
                   <a href="courses.php " class="submit-btn"> Next </a>
                   
                 <?php   }else { ?>
                 <button type="submit" name="Payment" class="submit-btn ">Proceed To Payment</button>
                <?php }?>
            <!-- </div> -->
     </div>
    </form>

       

</div>    


<body>
    
</html>