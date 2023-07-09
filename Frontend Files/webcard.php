<?php
    require('config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerificate</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Satisfy&display=swap');
        body{
            background: linear-gradient(55deg, #a4a4a4 60%, #757675 60%);
         

        }
        .contener{
            margin-left: 30rem;
            margin-top: 2rem;
           position: relative;
            /* border: 9px solid red; */
            align-items: center;
            width: 600px;
        }
        img{
            display: block;
         
            width: 100%;
            height:50rem;
           
        }
        .box input{         
            font-family: 'Satisfy', cursive;
            font-size: 2.2rem;
            text-align: center;
            position: absolute;
            /* border: 3px solid green; */
            padding:2px  ;
            top: 54%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 350px;
            height: 70px;
        }
    
    </style>
</head>
<body>
    <div class="contener">
        <a href="./certificate/web development.jpg" download>
            <img src="./certificate/web development.jpg">
        </a>
        <div class="box">
            <input type="text" pattern="[A-Za-z].{2}" placeholder="enter your name" required>
        </div>
     </div>

    
</body>
</html>