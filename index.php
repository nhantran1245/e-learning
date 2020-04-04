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
    
    <div id="login">
        <h3>LOGIN</h3>
            <form action="/acction_login.php" method="post">
                <label for="username">Username</label><br />
                <input type="text" id="username" name="username" /><br />
                <label for="password">Password</label><br />
                <input type="password" id="password" name="password" /><br />
                <input type="submit" value="Submit">
            </form>
    </div>
</div>
    <script>
        var t = document.getElementById('content');
        var buttons = document.getElementsByClassName('changeBackground');
        function changeBackground(n){
            if (n==1) t.style.backgroundImage = "url("+"image/1.jpg"+")";
            else if (n==2) t.style.backgroundImage = "url("+"image/2.jpg"+")";
            else t.style.backgroundImage = "url("+"image/3.jpg"+")"; 
        }  
        for (var i=0;i<buttons.length;i++){
            buttons[i].addEventListener("click",function(){
                var id= this.id;
                for (var i=0;i<buttons.length;i++){
                    buttons[i].classList.remove("active");
                }
                this.className +=" active";
                if (id=="btn1") changeBackground(1);
                else if (id=="btn2") changeBackground(2);
                else changeBackground(3);
            })
        }  
       
        changeBackground(1);
    </script>
    
    
    
    
   



</body>
<?php include("footer.php");
?>