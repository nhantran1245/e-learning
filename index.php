
<?php session_start() ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>StudyWeb</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div id="menu">
        <a id="logo" href="index.html"><img src="image/logo.png" alt="logo" /></a>
        <ul id="main_menu">
            <li class="active"> <a href="index.html" >Trang chủ</a> </li>
            <li> <a href="about.html">Giới thiệu</a></li>
            <li> <a href="testExams">Thi thử</a></li>
            <li> <a href="document">Tài liệu</a></li>
            <li> <a href="news">Tin tức</a></li>
            <li> <a href="contact">Liên hệ</a></li>
        </ul>
            
    </div>


    <div id="content">
        <div id="controlBackground">
            
                <button  class="changeBackground active" id="btn1" value="1"></button>
                <button  class="changeBackground" id="btn2" value="2"></button>
                <button  class="changeBackground" id="btn3" value="3"></button> 
        </div>
        <div id="intro">
            <h1>You want to search for documents and online test ?</h1>
            
            <a href="#"><button>CONTACT US</button></a>
        </div>

        <script src="./js/switchForm.js"></script>
        <div class="logForm" id="login">
            <?php 
            if (!isset($_SESSION['username'])) { 
            ?>
            <h3>LOGIN</h3>
                <form action="login.php" method="post">
                    
                    <input type="text" id="username" name="username" placeholder="Enter Your Username"/><br />
                
                    <input type="password" id="password" name="password" placeholder="Enter Your Password"/><br />
                    <p>If you don't have an account, <a href="#" onClick="switch_signUp()">Sign Up</a> here</p>
                    <input type="submit" value="Sign In" name="loginSubmit"/>
                </form>
            <?php } ?>    
                <?php 
                    if (isset($_SESSION['username'])){ ?>
                        <p>Hello <?=$_SESSION['username'] ?>, <a href="logOut.php">Log out</a><p>
                    <?php } 
                ?>
        </div>
        <div class="logForm" id="signUp">
            <form action="" method="post">
                <h3>SIGN UP</h3>
                
                <input type="text" name="lname" placeholder="Enter Your Full Name"/></br>
                <input type="text" name="username" placeholder="Enter Your Username"/><br/>
                <input type="password" name="password" placeholder="Enter Your Password"/><br/>
                <input type="submit" value="Sign Up" name="signUpSubmit"/>


                <p>If you have an account, <a href="#" onClick="switch_signIn()">Sign In</a> now</p>
            </form>
        </div>

        <script> 
            checkLog();    
        </script>
        </div>
        <script src="./js/changeBackground.js"></script>
    
        <div id="listObject">
            <div class="sbox" id="math">
                <a href="#"><img src="./image/toan.jpg"/></a>
                <p>Toán</p>
            </div>    
            <div class="sbox" id="chemistry">
                <a href="#"><img src="./image/hoa.jpg"/></a>
                <p>Hóa</p>
            </div>
            <div class="sbox" id="english">
                <a href="#"><img src="./image/anh.jpg"/></a>
                <p>Tiếng Anh</p>
            </div>
            <div class="sbox" id="physic">
                <a href="#"><img src="./image/ly.jpg"/></a>
                <p>Lý</p>
            </div>   
            <div class="sbox" id="biology">
                <a href="#"><img src="./image/sinh.jpg"/></a>
                <p>Sinh</p>
            </div>  
            <div class="sbox" id="history">
                <a href="#"><img src="./image/su.jpg"/></a>
                <p>Lịch Sử</p>
            </div> 
            <div class="sbox" id="geography">
                <a href="#"><img src="./image/dia.jpg"/></a>
                <p>Địa lý</p>
            </div> 
            <div class="sbox" id="law">
                <a href="#"><img src="./image/gdcd.jpg"/></a>
                <p>GDCD</p>
            </div>     
            <div class="clear"></div>
        </div>
        

    
    
    
   



</body>
<?php include("footer.php")
?>