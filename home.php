<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnakE-X</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="body">
        <div id="scoreBox">Score: 0</div>
        <div id="hiscoreBox">HighScore: 0</div>
        <div id="board"></div>
    </div>
</body>
<script src="js/index.js"></script>
</html>

<?php

session_start();
include("config/config.php");
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p> <a href="home.php">SnakE-X</a></p>
        </div>

        <div class="right-links">

            <?php
            
                $id = $_SESSION['id'];
                $query = mysqli_query($conn, "SELECT * FROM users WHERE Id= '$id'");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['username'];
                    $res_Email = $result['email'];
                    $res_id = $result['id'];

                }
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="config/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Uname?></b> Welcome !</p>
                </div>
                <div class="box">
                    <p>Your email is <b><?php echo $res_Email?></b>.</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body{
        background: #d3cdf4;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 90vh;
    }
    .box{
        background: #45b186;
        display: flex;
        flex-direction: column ;
        padding: 25px 25px;
        border-radius: 20px;
        box-shadow: 0 0 128px 0 rgba(56, 2, 2, 0.1),
                    0 32px 64px -48px rgba(134, 3, 3, 0.5);
    }
    .form-box{
        width: 450px;
        margin: 0px 10px;
    }
    .form-box header{
        font-size: 25px;
        font-weight: 600;
        padding-bottom: 10px;
        border-bottom: 1px solid #1b8070;
        margin-bottom: 10px;
    }
    .form-box form .field{
        display: flex;
        margin-bottom: 10px;
        flex-direction: column;
    }
    .form-box form .input input{
        height: 40px;
        width: 100%;
        font-size: 16px;
        padding: 0px 10px;
        border-radius: 5px;
        border: 1px solid #c91f1f;
        outline: none;
    }
    .btn{
        height: 35px;
        background: rgb(3, 247, 255);
        border: 0;
        border-radius: 5px;
        color: #7b0808;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s;
        margin-top: 10px;
        padding: 0px 10px;
    }
    .btn:hover{
        opacity: 0.82;
    }
    .submit{
        width: 100%;
    }
    .link{
        margin-bottom: 15px;
    }
    .nav{
        background: #fa8787;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        line-height: 60px;
        z-index: 100;
    }
    .logo{
        font-size: 25px;
        font-weight: 900;
        
    }
    .logo a{
        text-decoration: none;
        color: #000;
    }
    .right-links a{
        padding: 0 10px;
    }
    main{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 60px;
    }
    .main-box{
        display: flex;
        flex-direction: column;
        width: 70%;
    }
    .main-box .top{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .bottom{
        width: 100%;
        margin-top: 20px;
    }
    @media only screen and (max-width:840px){
        .main-box .top{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    .top .box{
        margin: 10px 10px;
    }
    .bottom{
        margin-top: 0; 
    }
}
.message{
        text-align: center;
        background: #f9edf9;
        padding: 15px 0px;
        border: 1px solid #699056;
        border-radius: 5px;
        margin-bottom: 10px;
        color: red;
    }
   </style>
</head>
</html>