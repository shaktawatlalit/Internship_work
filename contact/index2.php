<?php
include('mail/email.php');

?>
<!DOCTYPE html>
 <head>
         <title> Contact </title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="shortcut icon" type="image/x-icon" href="ic_launcher.png"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
         <link href="https://vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
          <!-- Compiled and minified CSS -->
         <script src="https://vjs.zencdn.net/5.11/video.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		  <script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-91521205-1', 'auto');
			  ga('send', 'pageview');

          </script>

         
         <style>
              body
             {    max-width:100%;
                 font-family: 'Open Sans', sans-serif;
                 overflow-x:hidden;
                 overflow-y:scroll;
                 font-size:16px;
             }
             .button
             {
                 border:1px solid deeppink;
                 background-color:deeppink;
                 border-radius:20px;
             }
           .navbar-default .navbar-nav .button>a 
             {
                 color:white;
               }
             .navigation
             {   width:100%;
                 margin-top:1%;
               
             }
            .navbar-nav>li>a {
                padding-top: 15px;
                 padding-bottom: 15px;
               }
            .navbar-brand 
             {
                float:right;
                height: 50px;
                
                font-size: 18px;
                line-height:20px;
             }
             .navbar-header
             {
                 padding-left:1%;
                 position:relative;
             }
             .navbar-default
             {
                 background-color: white;
                 border-bottom-color: deeppink;
              }
              .navbar-header a
             {
                 text-decoration:none;
            }
              .beta
            {
                
                color:deeppink;
                position:absolute;
                left:200px;
                top:-5px;
                font-size:12px;
             }
              .navbar-default .navbar-nav>li>a:hover 
          {
               color:deeppink;
              background-color: transparent;
         }
           .navbar-default .navbar-nav .button>a:hover
        {
                 color:black;
                 background-color: transparent;
          }
              .footer
             {   width:100%;
                 background-color:gray;
                 color:white;
                 
                
             }
             .footer a
             {
                 color:white;
                 text-decoration:none;
             }
             
             .form-container
             {
                 width:40%;
                 text-align:center;
                 background-color:linen;
                 border: 1px solid white;
                 border-radius: 5px;
				 margin-bottom:4%;
				 padding-bottom:2%;
                 margin-top:8%;
             }
             .form-row
             {
                 padding-top:2%;
                 padding-left: 7%;
                 padding-right: 7%;
             }
             input.form-control 
             {
                  height: 50px;
                  padding-left:8%;
              }
             input[type="text-area"] 
             {
                    height: 100px;
                    width: 100%;
              }
             .form-control-feedback
             {
                    position: absolute;
                    top: 8px;
                    left: 0;
                    z-index: 2;
                    display: block;
                    width: 34px;
                    height: 34px;
                    line-height: 34px;
                    text-align: center;
                    pointer-events: none;
               }
              .msg
             {
                    position: absolute;
                    top: 33px;
                    left: 0;
                    z-index: 2;
                    display: block;
                    width: 34px;
                    height: 34px;
                    line-height: 34px;
                    text-align: center;
                    pointer-events: none;   
             }
             
           span.beta1
             {
                    color: gray;
                    position: absolute;
                    font-size: 10px;
                    top: 28px;
                    left:62px;
            }
              @media screen and (max-width:600px)
              {
                  .footer
				  {
				   position:static;
				  }
                  .footer .row
                  {
                      text-align:center;
                  }
                  .form-container
                  {
                      width:100%;
                      padding-bottom:2%;
                      margin-top:18%;
                  }
             }
         </style>
         <script src="valid.js" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container navigation">
                         <div class="navbar-header">
                                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span> 
                                        </button>
                                           <img src="ic_launcher.png" style="width:45px;height:auto;" alt="health_drive_icon">  
                                           <a  href="../" style="color:deeppink;font-size:24px;">
                                                  Health Drive
                                           </a>
                                           <span class="beta">BETA</span>
                                           <span class="beta1">let's organize your health</span>
                                               
                         </div>
                         <div class="collapse navbar-collapse" id="myNavbar">
                             <ul class="nav navbar-nav navbar-right">
                                      <li><a href="../benefits-of-having-health-record/">Benefits</a></li>  
                                     <li><a href="" style="color:#E91E63;">Contact</a></li>

                                     <li><a href="../about/">About</a></li>
                                     <li class="button" style="margin-right:10px;"><a href="#" style="padding-top:10px;padding-bottom:10px;
                                            font-size:18px;">GET THE APP</a>
                                     </li>


                             </ul>
                    </div>
                </div>
        </nav>
    
        <div class="container form-container">
               
                            <div class="row form-row">
                                     <form  action="mail/email.php" 
                                            method="post" id="form" onsubmit="return validateform()">
                                         <div class="form-group has-feedback has-feedback-left" style="text-align:center;padding-bottom:2%;">
                                             <h2 style="color:deeppink;">Contact Us</h2>
                                         </div>
                                         <div class="form-group has-feedback has-feedback-left">
                                                    <i class="glyphicon glyphicon-user form-control-feedback"></i>
                                                    <input type="text" class="form-control" name="userName"
                                                           placeholder="Full Name" required>
                                                     
                                                    <span id="userName-info" class="info"></span>
                                          </div>
                                         <div class="form-group has-feedback has-feedback-left">
                                                    <i class="glyphicon glyphicon-phone form-control-feedback"></i>
                                                    <input type="text" class="form-control" id="icon_telephone"
                                                           name="phone" placeholder="Mobile" required>
                                                     <span id="phone-info" class="info"></span>
                                          </div>
                                         <div class="form-group has-feedback has-feedback-left">
                                                    <i class="fa fa-at form-control-feedback" aria-hidden="true"></i>
                                                    <input type="email" class="form-control" id="userEmail" name="userEmail" 
                                                           placeholder="Email" required>
                                                    <span id="userEmail-info" class="info"></span>
                                         </div>
                                          
                                          <div class="form-group has-feedback has-feedback-left">
                                                    <i class="glyphicon glyphicon-envelope form-control-feedback msg"></i>
                                                    <input type="text-area" class="form-control" name="content" placeholder="Message" required>
                                          </div>
                                          
                                                   <button type="submit" class="btn btn-default">Submit</button>
                                  </form>
                                </div>
                              
        </div>
    <div class="container-fluid footer">
         <div class="row" style="padding-top:1%;padding-bottom:1%;">
               <div class="col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1 col-sm-4 col-xs-12">
                        <p>We are in<strong> BETA</strong>,&nbsp;kindly contact us.</p>
               </div>
              <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 social-button " style="text-align:center;">
                     <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                          Follow Us
                     </div>
                     <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                          <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/health_drive" target="_blank">
                               <img src="Twitter_logo_blue.png" style="width:20px;height:20px;" alt="twitter_logo">
                          </a>
                          <a class="btn btn-social-icon btn-googleplus" href="#" target="_blank">
                              <img src="gplus.png" style="width:20px;height:20px;" alt="googlePlus_logo"> 
                          </a>
                          <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/healthdrive.in" target="_blank">
                              <img src="fb_icon_325x325.png" style="width:20px;height:20px;" alt="fb_logo"> 
                          </a>
                        
                     </div>
             </div>
             
             <div class="col-md-3 col-lg-3 col-lg-offset-1 col-md-offset-1 col-sm-4 col-xs-12"> 
                  &copy; &nbsp;2017&nbsp;healthdrive.in
             </div>
                
    
         </div>
     </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    
</body>
</html>