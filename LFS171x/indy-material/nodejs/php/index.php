<!-- <head>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
<div id="login_wrap">
    <div>
        <h1>Login Form</h1>
        <form action="login_ok.php" method="post" id="login_form">
            <p><input type="text" name="userid" id="userid" placeholder="ID"></p>
            <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
            <p class="forgetpw"><a href="changepw.php">Forget Password?</a></p>
            <p><input type="submit" value="Login" class="login_btn"></p>
        </form>
        <p class="regist_btn">Not a member? &nbsp;<a href="./regist.php">Sign Up</a></p>
    </div>
</div>
</body> -->

<head>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
<div id="login_wrap" class="wrap">
    <div>
        <h1>Login</h1>
        <form action="authentication.php" method="post" id="login_form">
            <p>
                <input type = "text" id ="user" name  = "user" placeholder="UserID"/>  
            </p>
            <p> 
                <input type = "password" id ="pass" name  = "pass" placeholder="Password"/>  
            </p>
            <p class="forgetpw"><a href="changepw.php">Forget Password?</a></p>
            <p><input type =  "submit" id = "btn" value = "Login" class="changepw_btn form_btn"> </p>
        </form>
        <p class="regist_btn">Not a member? &nbsp;<a href="./regist.php">Sign Up</a></p>
    </div>
</div>
</body>

<!-- <html>  
<head>  
    <title>PHP login system</title>  
    // insert style.css file inside index.html  
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
    // validation for empty field   
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  -->