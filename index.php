<?php session_start();
include 'connection.php';
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom,black,gray); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:darkslategray;}
.login-sec .copy-text a{color:black;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: darkblue;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:black; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: darkblue; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}


</style>
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Now</h2>
		    <form class="login-form" action="index.php" method="post">
			<?php
					if (isset($_POST['login'])) {

						

    $myusername = mysqli_real_escape_string($link, $_POST['user_name']);
    $mypassword = mysqli_real_escape_string($link, $_POST['password']);
	
	 $sql1 = "SELECT * FROM admin WHERE email = '$myusername' AND password = '$mypassword'";
    $result = mysqli_query($link, $sql1);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);   
    $count = mysqli_num_rows($result);
    if ($count == 1) {
		$_SESSION['all'] = $row;       
		//  print_r($_SESSION['all']);
        
        header("location:viewblog.php");
    } else {
	   echo $msg = "<span style='color:red;'>Your Login Name or Password is invalid</span>"; 
	;
    }
}

?>
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="Enter admin name" name="user_name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="Enter password" name='password'>
  </div>
  
  
    <div class="form-check">
    <button type="submit" name='login' class="btn btn-login float-right">Sign In</button>
  </div>
  
</form>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                 </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h6 style="color: black"><i>"No one is more cherished than someone who lightens the burden of another."</i></h6>
            <h4 style="color: black">Welcome aboard Admin!</h4>
          
        </div>	
     </div>
    </div>

          </div>	   
		    
		</div>
	</div>
</div>
    </div>
</section>