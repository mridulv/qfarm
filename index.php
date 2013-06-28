<?php
if (isset($_COOKIE['user'])){
setcookie("user","",time()-3600);
}
?>
<!DOCTYPE html>
<html>
    <head>
		<link rel="shortcut icon" href="favicon.png">
        <link rel="shortcut icon" href=""> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/style5.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script src="http://abrahamyan.com/wp-content/uploads/2010/jsslideshow/js/jquery.corner.js"></script>
		<style type="text/css">
						#register, 
			#login{
				position: absolute;
				top: 0px;
				margin-left : -400px;
				width: 48%;	
				height:380px;
				padding: 18px 6% 60px 6%;
				background: rgb(247, 247, 247);
				border: 1px solid rgba(147, 184, 189,0.8);
				-webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
				   -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
						box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
				-webkit-box-shadow: 5px;
				-moz-border-radius: 5px;
					 border-radius: 5px;
			}
			#about1{
				position: absolute;
				top: 550px;
				left: 250px;
				width: 1200px;
				height :300px;
				padding: 18px 6% 60px 6%;
				background: rgb(247, 247, 247);
				border: 1px solid rgba(147, 184, 189,0.8);
				-webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
				   -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
						box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
				-webkit-box-shadow: 5px;
				-moz-border-radius: 5px;
					 border-radius: 5px;
			}
			#about{
				position: absolute;
				top: 80px;
				right: 40px;
				width: 150px;
				height :380px;
				padding: 18px 6% 60px 6%;
				background: rgb(247, 247, 247);
				border: 1px solid rgba(147, 184, 189,0.8);
				-webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
				   -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
						box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
				-webkit-box-shadow: 5px;
				-moz-border-radius: 5px;
					 border-radius: 5px;
			}
			.check {
				position : absolute;
				margin-left: -100px;
				overflow:auto;
			}
			#ref{
				font-size: 48px;
				color: rgb(6, 106, 117);
				padding: 2px 0 10px 0;
				font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;
				font-weight: bold;
				text-align: center;
				padding-bottom: 30px;
			}
			#ref1{
				font-size: 48px;
				color: rgb(6, 106, 117);
				padding: 2px 0 10px 0;
				font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;
				font-weight: bold;
				text-align: center;
				padding-bottom: 30px;
			}			
			#container{
				position: absolute;
				top: 80px;
				left: 360px;
				width: 440px;
				height :380px;
				padding: 18px 6% 60px 6%;
				background: rgb(247, 247, 247);
				border: 1px solid rgba(147, 184, 189,0.8);
				-webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
				   -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
						box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
				-webkit-box-shadow: 5px;
				-moz-border-radius: 5px;
					 border-radius: 5px;
			}
			.slideshow{
				width:500px;
				list-style: none;
				position:relative;
				margin-left : -50px;
				margin-top:30px;
			}
			ul.slideshow li {
				position:absolute;
				left:0px;
				top:0px;
				display:inline;
				
			}
			ul.slideshow li.show {
				z-index:500;	
			}
			.check{
				margin-left: -40px;
			}
		</style>
		<script type="text/javascript">
			var fadeDuration=2000;
			var slideDuration=4000;
			var currentIndex=1;
			var nextIndex=1;
			$(document).ready(function()
			{
				$('ul.slideshow li img').corner();
				$('ul.slideshow li').css({opacity: 0.0});
				$("'ul.slideshow li:nth-child("+nextIndex+")'").addClass('show').animate({opacity: 1.0}, fadeDuration);
				var timer = setInterval('nextSlide()',slideDuration);
			})
			function nextSlide(){
					nextIndex =currentIndex+1;
					if(nextIndex > $('ul.slideshow li').length)
					{
						nextIndex =1;
					}
					$("'ul.slideshow li:nth-child("+nextIndex+")'").addClass('show').animate({opacity: 1.0}, fadeDuration);
					$("'ul.slideshow li:nth-child("+currentIndex+")'").animate({opacity: 0.0}, fadeDuration).removeClass('show');
					currentIndex = nextIndex;
			}
		</script>
    </head>
    <body>
		<div id="about">
							<h1 id="ref">Contact Us</h1> 
							<div class="check">
								<b style="font-size:20px;text-align:center;">Call Us At: </b></br>
								<b style="font-size:18px;">+1-512-271-2126</b></br></br>
								<b style="font-size:20px;text-align:center;">Visit Us At: </b></br>
								<b style="font-size:18px;">qfarm.shantanugoel.com</b>
								</p>
							</div>
		</div>
		<div id="container">
			<ul class="slideshow">
				<li> <img  src="images/0.jpg" width="500" height="333" /> </li>
				<li> <img  src="images/1.jpg" width="500" height="333" /> </li>
				<li> <img  src="images/2.jpg" width="500" height="333" /> </li>
				<li> <img  src="images/3.jpg" width="500" height="333" /> </li>
				<li> <img  src="images/4.jpg" width="500" height="333" /> </li>
				<li> <img  src="images/5.jpg" width="500" height="333" /> </li>
				<li> <img  src="images/6.jpg" width="500" height="333" /> </li>
			</ul>
		</div>		
        <div class="container">
            <header>
                <h1>QFarm</h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="user" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="pass" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
								<?php
								if (isset($_REQUEST['password']) && $_REQUEST['password']=='incorrect'){
									echo "<p class='qwe'><label><h2>Wrong username or password</h2></label></p>";
								}
								?>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="login"/> 
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="signin.php" autocomplete="on" method="post"> 
                                <h1> Sign up </h1> 
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Full Name</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Spencer Tracy" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Email-Id</label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="spencer@gmail.com"/>
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Username</label>
                                    <input id="usernamesignup" name="user" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Password</label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirm Password</label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
								<?php
								if (isset($_REQUEST['connect']) && $_REQUEST['connect']=='not'){
									echo "<p class='qwe'><label><h2>Wrong CC Username and Password</h2></label></p>";
								}
								if (isset($_REQUEST['valid']) && $_REQUEST['valid']=='user'){
									echo "<p class='qwe'><label><h2>You Have Been Registered</h2></label></p>";
								}
								?>
                                <p class="signin button"> 
									<input type="submit" value="Signup" name="signup"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>