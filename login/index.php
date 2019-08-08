
<html>
  <head>
    <meta charset="UTF-8">
    <title>Prisma Admin</title> 
    <link rel="stylesheet" href="./css_new/normalize.css">
<script src="./js_new/jquery.min.js"></script>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto+Slab'>
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">  
    <link href="./assets/css/font-awesome.css" rel="stylesheet">  
    <link href="./assets/css/bootstrap.css" rel="stylesheet"> 
 <link href="./assets/css/style.css" rel="stylesheet"> 
  <script type="text/javascript" src="./js_new/custom.js"></script> 
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<style>
    {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  background-color:#607d8b;
  font-family: "Roboto Slab", serif;
  color: black;
}

.preload * {
  transition: none !important;
}

label {
  display: block;
  font-weight: bold;
  font-size: small;
  text-transform: uppercase;
  font-size: 0.7em;
  margin-bottom: 0.35em;
}

input[type="text"], input[type="password"] {
  width: 100%;
  border: none;
  padding: 0.5em;
  border-radius: 2px;
  margin-bottom: 0.5em;
  color: #333;
}
input[type="text"]:focus, input[type="password"]:focus {
  outline: none;
  box-shadow: inset -1px -1px 3px rgba(0, 0, 0, 0.3);
}

button {
  padding-left: 1.5em;
  padding-right: 1.5em;
  padding-bottom: 0.5em;
  padding-top: 0.5em;
  border: none;
  border-radius: 2px;
  background-color: #0a3d56;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
  color: white;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.45);
  outline:none;
}

small {
  font-size: 1em;
}

.login--login-submit {
  float: right;
}

.login--container {
  width: 600px;
  background-color:#607d8b;
  margin: 0 auto;
  position: relative;
  top: 35%;
}

.login--toggle-container {
  position: absolute;
  background-color: #0a3d56;
  right: 0;
  line-height: 2.5em;
  width:60%;
  height: 200px;
  text-align: right;
  padding: 10px 20px 0 0;
  cursor: pointer;
  
  transform: perspective(1000px) translateZ(1px);
  transform-origin: 0% 0%;
  transition: all 1s cubic-bezier(0.06, 0.63, 0, 1);
  backface-visibility: hidden;
}
.login--toggle-container .js-toggle-login {
  font-size: 4em;
  text-decoration: underline;
}
.login--active .login--toggle-container {
  transform: perspective(1000px) rotateY(180deg);
  background-color: #607d8b;
}

.login--username-container, .login--password-container {
  float: left;
  background-color: #607d8b;
  width: 50%;
  height: 120px;
  padding: 0.5em;
}

.login--username-container {
  transform-origin: 100% 0%;
  transform: perspective(1000px) rotateY(180deg);
  transition: all 1s cubic-bezier(0.06, 0.63, 0, 1);
  background-color: #607d8b;
  backface-visibility: hidden;
}
.login--active .login--username-container {
  transform: perspective(1000px) rotateY(0deg);
  background-color: #607d8b;
}

footer {
  position: absolute;
  bottom: 12px;
  left: 20px;
}

    </style>    
        <script src="./js_new/prefixfree.min.js"></script>    
  </head>
  <body>  
   <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
				<div style="  font-weight:700">Prisma| RESEARCH AND ANALYSIS</div>
                  <div class="mu-top-email">
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span> +374 95005011 |  +374 95005218</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header> 

    <div class='preload login--container'>
  <div class='login--form'>
    <div class='login--username-container'>
      <label>Username</label>
      <input id="login" required autofocus placeholder='Username' type='text'>
    </div>
    <div class='login--password-container'>
      <label>Password</label>
      <input  id="pass" placeholder='Password' type='password'>
      <button  id="btn">Login</button>
	  <div id="status"></div>
    </div>
  </div>
  <div class='login--toggle-container'>
    <small>Special for Admin of Prisma,</small>
    <div class='js-toggle-login'>Login</div>
    
  </div>
</div>
<script>
$(document).ready(function(){	
	$("#btn").click(function(){
		l=$("#login").val();
		p=$("#pass").val();			
				$.post("./stugum.php",{login:l,password:p},function(arg){			
				$("#status").html(arg);
		
})	
}	
)	
})


</script>
<footer>  
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</footer>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
       <script src="./js_new/index.js"></script>   
  </body>
</html>
