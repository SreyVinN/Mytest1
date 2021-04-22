<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>E-Commerce Website</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="top-nav-nar">
        <div class="search-box">
            <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
        <img src="logo.png" alt="" class="logo">
        <input type="text" class="form-control">
        <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
    </div>
    <div class="menu-bar">
        <ul>
            <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>cart</a></li>
            
            <li><a href="#">Account</a></li>
            
        </ul>
    </div>
    </div>
<!-----account Page-------->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
             
            </div>
            <div class="col-2">
               <div class="form-container">
                   <div class="form-btn">
                    <Span onclick="login()">Login</Span>
                    <Span onclick="register()">Register</Span>
                    <hr id="Indicator">
                   </div>
                   <Form id="LoginForm">
                       <input type="text" placeholder="Username">
                       <input type="password" placeholder="Password">
                       <button type="submit" class="btn">Login</button>
                       <a href="">forgot password</a>
                   </Form>
                   <Form id="RegForm">
                    <input type="text" placeholder="Username">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <button type="submit" class="btn">Register</button>
                    
                </Form>
               
               </div>
            </div>
        </div>
    </div>
</div>



<!------------footer-->
    <Section class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-3">
                    <h1>Useful Link</h1>
                    <p>Terms of Use</p>
                    <p>Return Policy</p>
                    <p>Discount Coupons</p>
                    
                </div>
                <div class="col-md-3">
                    <h1>Compeny</h1>
                    <p>About Us</p>
                    <p>Contact Us</p>
                    <p>Career</p>
                    <p>Affiliate</p>
                    
                </div>
                <div class="col-md-3">
                    <h1>Follow Us on</h1>
                    <p><i class="fa fa-facebook-official"></i>Facebook</p>
                    <p><i class="fa fa-youtube-play"></i>YouTube</p>
                    <p><i class="fa fa-linkedin"></i>Linkedin</p>
                    <p><i class="fa fa-twitter"></i>Twitter</p>
                    
                </div>
                <div class="col-md-3">
                    <h1>Download App</h1>
                    <img src="download1.png" alt="">
                </div>
            </div>
            <hr>
            <p class="copyright"> Copyrigt from<i class="fa fa-heart-o"> </i>Easy Tutorials</div></p>
        </div>
    </Section>
        <!-----------js for toggle Form-->
        <script>
            var LoginForm =document.getElementById("LoginForm");
            var RegForm =document.getElementById("RegForm");
            var Indicator =document.getElementById("Indicator"); 
            function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform ="translateX(100px)";
            }
            function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform ="translateX(0px)";
            }
          </script>
</body>
</html>