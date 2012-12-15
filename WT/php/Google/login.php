<html>
<head>
    <title>Google login</title> 
     
      <link href="main.css" rel="stylesheet" />

  <script src="js/jquery-1.8.2.min.js"></script>
    <link href="js/css/validationEngine.jquery.css" rel="stylesheet" />
    <script src="js/languages/jquery.validationEngine-en.js"></script>
    <script src="js/jquery.validationEngine.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#glavnaforma").validationEngine();
        });
    </script>

</head>
<body>
<div class="googleheader">
    <input type="button" class="dugmeuhederu" value="Sign Up" onclick="parent.location='signup.php'" />

</div>
<form id="glavnaforma" method="post" action="login.php">
<div class="glavnakutija">
    <div class="desnakutija">
        <div class="forma">
            <div class="reduformi">
                <p class="paragraf">Sign in</p>
                <img src="small.png" class="malaslika" />

            </div>
            <div class="redzalabelu">
                <label>Username</label>
             
            </div>
            <div class="redzatextbox">
                <input id="username" name="username" class="textbox" required="true"; />

            </div>
            <div class="redzalabelu" style="margin-top:40px;">
                <label>Password</label>
             
            </div>
            <div class="redzatextbox">
                <input id="passwrod" type="password" name="password" class="textbox"required="true"; />

            </div>
            <div class="other">
            <input type="submit" id="singin" class="dugme" value="Sign in" onclick="validate()" />




                <input type="checkbox" class="chekbox" />
                <p class="staysinged">Stay singed in</p>
                <a href="www.google.com" class="cantacces">Can't access your account? </a>
            </div>
        </div>



    </div>
	
	<?php 
include("db_conf.php");


                if (!isset($_POST['username']) || !isset($_POST['password'])) {
                   
                }
                else if (empty($_POST['username']) || empty($_POST['password'])) {
                     
                }
                else
                {
                    $username =htmlentities($_POST['username']);
                    $password = htmlentities($_POST['password']);
                    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
                    $result=mysql_query($sql,$conn_link);
                    if(mysql_num_rows($result) > 0)
                    {
                                session_start();
                                
                                $_SESSION['username'] = $username;  

                                header( "Location: restricted.php" );
                    }
                    else {
                        echo 'Greska';
                    }
                }
            ?>
    <div class="lijeva">
        <h1 class="naslov">Accounts</h1>
        <div class="redovi">

            <p class="textovi">Google has more to offer when u sign in in your Google account</p>
            <p class="textovi" style="margin-top:-5px">Sign in on the right or create a new account</p>
        </div>

        <div class="redovi" style="margin-top:15px">
            <img src="googlemail.png" /> 
            <p class="podnaslovi">Gmail</p>
            <p class="textoviispodnaslova">Chat with friends and never miss important mail</p>
            
         
        </div>

          <div class="redovi" style="margin-top:15px">
            <img src="search-b42.png" /> 
            <p class="podnaslovi">Personalized search</p>
            <p class="textoviispodnaslova">Get more relivant information based on your past search</p>
            
         
        </div>

         <div class="redovi" style="margin-top:15px">
            <img src="homepage.png" /> 
            <p class="podnaslovi">Like Google?</p>
            <p class="textoviispodnaslova"><a href="www.google.com">Make Google your homepage</a></p>
            
         
        </div>

    </div>

</div>
   </form>             
</div>
</body>
</html>
