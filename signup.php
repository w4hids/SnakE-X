
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php 

            include("config/config.php");
            if(isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $verify_query = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

                if(mysqli_num_rows($verify_query) !=0) {
                    echo "<div class='message'>
                            <p>Email already exists</p>
                        </div> </br>";

                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";

                }
                else{

                    mysqli_query($conn, "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')");
                    
                    echo "<div class='message'>
                    <p>Registration Successfull</p>
                </div> </br>";

            echo "<a href='login.php'><button class='btn'>Go Back</button>";
                }

            }
            else{
        ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" placeholder="Enter your Username" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" placeholder="Enter your Email" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" placeholder="Enter your password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Sign Up" required>
                </div>

                <div class="link">
                    Already a member? <a href="login.php">Log In</a>
                </div>
                
            </form>
        </div>
        <?php } ?>
    </div>
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