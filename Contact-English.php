<?php
/*
- 1. Strict Transport Security
- 2. Content Security Policy
- 3. XSS Protection
- 4. X Frame Options
- 5. X Content Options
- 6. Referrer Policy
*/

$headerSTS = "Strict-Transport-Security:" . "max-age=631138519; includeSubDomains";
$headerCSP = "Content-Security-Policy:" . 
             "style-src 'self' 'unsafe-inline' *;" .
             "script-src 'self' 'unsafe-eval' 'unsafe-inline' code.jquery.com https://cse.google.com https://www.google.com https://www.google-analytics.com https://ajax.googleapis.com https://www.gstatic.com;" .
             "img-src 'self' https://www.google.com https://www.google-analytics.com *;" .
             "media-src 'self' https://player.vimeo.com;" .
             "frame-src 'self' https://player.vimeo.com;";
$headerXSS = "X-XSS-Protection: 1; mode=block";
$headerSO = "X-Frame-Options: SAMEORIGIN";
$headerNS = "X-Content-Type-Options: nosniff";
$headerReferrer = "Referrer-Policy: no-referrer-when-downgrade";

header($headerSTS);
header($headerCSP);
header($headerXSS);
header($headerSO);
header($headerNS);
header($headerReferrer);
?>

<?php
/*
From https://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/
$msg="";
if(isset($_POST['submit']))
{
    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */

	$from_add = "wbasters@shinwadp.co.jp"; 

	$to_add = "rahbdul@hotmail.nl"; //<-- put your yahoo/gmail email address here

	
	$officeName = $_POST['officeName'];
 $userName = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
		$message .= "メールを送信しました $officeName, $email".".\n\n".$content;
	
	
	
		$from_add = "wbasters@shinwadp.co.jp"; 

	$to_add = "rahbdul@hotmail.nl"; //<-- put your yahoo/gmail email address here
	$msg = "Message Sent";
	

	
	
	if(mail($to_add,$subject,$message,$headers)) 
	{
		$msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	}
}
?>

<!DOCTYPE html>
<html lang="en-US" class="js no-svg defaultHeader no-touchevents fa-events-icons-ready"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://shinwadp.co.jp/Shinwa/Contact-English.css" rel="stylesheet">
    <link href="https://shinwadp.co.jp/Shinwa/Contact-Phone.css" rel="stylesheet">
    <link href="https://shinwadp.co.jp/Shinwa/Form.css" rel="stylesheet">
  <script async src="https://shinwadp.co.jp/Shinwa/analytics.js.download">
		
	</script><script src="https://shinwadp.co.jp/Shinwa/sdk.js.download" async crossorigin="anonymous"></script><script src="https://shinwadp.co.jp/Shinwa/1906148336267937" async></script><script id="facebook-jssdk" src="https://shinwadp.co.jp/Shinwa/sdk.js.download"></script><script async src="https://shinwadp.co.jp/Shinwa/fbevents.js.download"></script><script src="https://shinwadp.co.jp/Shinwa/6e31837b67.js.download"></script><link href="https://shinwadp.co.jp/Shinwa/6e31837b67.css" media="all" rel="stylesheet">
  <script src="https://shinwadp.co.jp/Shinwa/jquery.min.js.download"></script>
  <link rel="shortcut icon" href="https://shinwadp.co.jp/Shinwa/favicon.ico">
		<link href="https://shinwadp.co.jp/Shinwa/ie-contact.css" rel="stylesheet">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@Shinwa">
  <meta name="twitter:creator" content="@Shinwa">

  <!-- FOR THE CAMPAIGN PAGE -->
  <link rel="stylesheet" type="text/css" href="https://shinwadp.co.jp/Shinwa/fonts.css">

<!-- This site is optimized with the Yoast SEO plugin v11.4 - https://yoast.com/wordpress/plugins/seo/ -->
<title>Shinwa Sendai factory -</title>

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta name="twitter:title" content="Shinwa" />
<!-- / Yoast SEO plugin. -->

<link rel="dns-prefetch" href="https://ws.sharethis.com/">
<link rel="dns-prefetch" href="https://maxcdn.bootstrapcdn.com/">
<link rel="dns-prefetch" href="https://s.w.org/">
	
		
	<link rel="stylesheet" id="wp-block-library-css" href="https://shinwadp.co.jp/Shinwa/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="simple-share-buttons-adder-font-awesome-css" href="https://shinwadp.co.jp/Shinwa/font-awesome.min.css" type="text/css" media="all">
<link rel="stylesheet" id="wptables-public-css" href="https://shinwadp.co.jp/Shinwa/wptables.min.css" type="text/css" media="all">
<script id="st_insights_js" type="text/javascript" src="https://shinwadp.co.jp/Shinwa/st_insights.js.download"></script>
<script type="text/javascript" src="https://shinwadp.co.jp/Shinwa/jquery.js.download"></script>
<script type="text/javascript" src="https://shinwadp.co.jp/Shinwa/jquery-migrate.min.js.download"></script>
<script type="text/javascript" src="https://shinwadp.co.jp/Shinwa/wptables.min.js.download"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://shinwadp.co.jp/Shinwa/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://shinwadp.co.jp/Shinwa/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.2.5">
		<style type="text/css" id="wp-custom-css">
			body.page-id-401 footer,
body.page-id-401 #MainNavDiv .button-area,
body.page-id-401 .navbar-expand-lg .navbar-collapse {
	display: none !important;
}

body.page-id-401 #mainNav {
	height: 81px;
}		</style>
		    <style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}</style><script async src="https://shinwadp.co.jp/Shinwa/modules-v55.js.download"></script><style type="text/css">#i96002bb8ddab693489f9a43384f5de290da44067-container{margin:0;padding:0;overflow:hidden;position:absolute;border:none;background-color:transparent}body.logged-in.admin-bar #i96002bb8ddab693489f9a43384f5de290da44067-container.HB-Bar.hb-bar-top,body.logged-in.admin-bar #i96002bb8ddab693489f9a43384f5de290da44067-container.HB-Slider.hb-top-left,body.logged-in.admin-bar #i96002bb8ddab693489f9a43384f5de290da44067-container.HB-Slider.hb-top-right,body.logged-in.admin-bar #pull-down.hb-bar-top,body.logged-in.admin-bar #pull-down.hb-top-left,body.logged-in.admin-bar #pull-down.hb-top-right{z-index:99998!important;top:32px!important}.hellobar#pull-down.hb-animated{animation-duration:1s;-o-animation-duration:1s;-ms-animation-duration:1s;-moz-animation-duration:1s;-webkit-animation-duration:1s;animation-fill-mode:forwards;-o-animation-fill-mode:forwards;-ms-animation-fill-mode:forwards;-moz-animation-fill-mode:forwards;-webkit-animation-fill-mode:forwards}.hellobar#pull-down{top:-1px;right:10px;padding:3px;z-index:10000002;overflow:hidden;position:absolute;border-radius:0 0 5px 5px;transform:translateY(-40px);-o-transform:translateY(-40px);-ms-transform:translateY(-40px);-moz-transform:translateY(-40px);-webkit-transform:translateY(-40px)}.hellobar#pull-down .hellobar-arrow{cursor:pointer;display:flex;height:11px;opacity:.3;width:11px;filter:flipv;transform:scaleY(-1);-o-transform:scaleY(-1);-ms-transform:scaleY(-1);-moz-transform:scaleY(-1);-webkit-transform:scaleY(-1)}.hellobar#pull-down .hellobar-arrow:hover{opacity:.6}.hellobar#pull-down .hellobar-arrow svg{fill:#fff}.hellobar#pull-down.inverted .hellobar-arrow svg{fill:#3c3e3f}#i96002bb8ddab693489f9a43384f5de290da44067-container.hb-animated{animation-duration:.25s;-o-animation-duration:.25s;-ms-animation-duration:.25s;-moz-animation-duration:.25s;-webkit-animation-duration:.25s;animation-fill-mode:forwards;-o-animation-fill-mode:forwards;-ms-animation-fill-mode:forwards;-moz-animation-fill-mode:forwards;-webkit-animation-fill-mode:forwards}@keyframes hb-bounceInDown{0%,60%,75%,90%,to{transition-timing-function:cubic-bezier(.215,.61,.355,1);-o-transition-timing-function:cubic-bezier(.215,.61,.355,1);-ms-transition-timing-function:cubic-bezier(.215,.61,.355,1);-moz-transition-timing-function:cubic-bezier(.215,.61,.355,1);-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{transform:translate3d(0,-3000px,0);-o-transform:translate3d(0,-3000px,0);-ms-transform:translate3d(0,-3000px,0);-moz-transform:translate3d(0,-3000px,0);-webkit-transform:translate3d(0,-3000px,0)}60%{transform:translateZ(0);-o-transform:translateZ(0);-ms-transform:translateZ(0);-moz-transform:translateZ(0);-webkit-transform:translateZ(0)}75%{transform:translate3d(0,-40px,0);-o-transform:translate3d(0,-40px,0);-ms-transform:translate3d(0,-40px,0);-moz-transform:translate3d(0,-40px,0);-webkit-transform:translate3d(0,-40px,0)}90%{transform:translateZ(0);-o-transform:translateZ(0);-ms-transform:translateZ(0);-moz-transform:translateZ(0);-webkit-transform:translateZ(0)}to{transform:none;-o-transform:none;-ms-transform:none;-moz-transform:none;-webkit-transform:none}}@-moz-keyframes hb-bounceInDown{0%,60%,75%,90%,to{-moz-transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{-moz-transform:translate3d(0,-3000px,0)}60%{-moz-transform:translateZ(0)}75%{-moz-transform:translate3d(0,-40px,0)}90%{-moz-transform:translateZ(0)}to{-moz-transform:none}}@-webkit-keyframes hb-bounceInDown{0%,60%,75%,90%,to{-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{-webkit-transform:translate3d(0,-3000px,0)}60%{-webkit-transform:translateZ(0)}75%{-webkit-transform:translate3d(0,-40px,0)}90%{-webkit-transform:translateZ(0)}to{-webkit-transform:none}}@keyframes hb-bounceInUp{0%,60%,75%,90%,to{transition-timing-function:cubic-bezier(.215,.61,.355,1);-o-transition-timing-function:cubic-bezier(.215,.61,.355,1);-ms-transition-timing-function:cubic-bezier(.215,.61,.355,1);-moz-transition-timing-function:cubic-bezier(.215,.61,.355,1);-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{transform:translate3d(0,3000px,0);-o-transform:translate3d(0,3000px,0);-ms-transform:translate3d(0,3000px,0);-moz-transform:translate3d(0,3000px,0);-webkit-transform:translate3d(0,3000px,0)}60%{transform:translateZ(0);-o-transform:translateZ(0);-ms-transform:translateZ(0);-moz-transform:translateZ(0);-webkit-transform:translateZ(0)}75%{transform:translate3d(0,40px,0);-o-transform:translate3d(0,40px,0);-ms-transform:translate3d(0,40px,0);-moz-transform:translate3d(0,40px,0);-webkit-transform:translate3d(0,40px,0)}90%{transform:translateZ(0);-o-transform:translateZ(0);-ms-transform:translateZ(0);-moz-transform:translateZ(0);-webkit-transform:translateZ(0)}to{transform:none;-o-transform:none;-ms-transform:none;-moz-transform:none;-webkit-transform:none}}@-moz-keyframes hb-bounceInUp{0%,60%,75%,90%,to{-moz-transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{-moz-transform:translate3d(0,3000px,0)}60%{-moz-transform:translateZ(0)}75%{-moz-transform:translate3d(0,40px,0)}90%{-moz-transform:translateZ(0)}to{-moz-transform:none}}@-webkit-keyframes hb-bounceInUp{0%,60%,75%,90%,to{-webkit-transition-timing-function:cubic-bezier(.215,.61,.355,1)}0%{-webkit-transform:translate3d(0,3000px,0)}60%{-webkit-transform:translateZ(0)}75%{-webkit-transform:translate3d(0,40px,0)}90%{-webkit-transform:translateZ(0)}to{-webkit-transform:none}}@keyframes hb-bounceOutUp{0%,to{transition-timing-function:ease-in;-o-transition-timing-function:ease-in;-ms-transition-timing-function:ease-in;-moz-transition-timing-function:ease-in;-webkit-transition-timing-function:ease-in}0%{transform:none;-o-transform:none;-ms-transform:none;-moz-transform:none;-webkit-transform:none}to{transform:translate3d(0,-500px,0);-o-transform:translate3d(0,-500px,0);-ms-transform:translate3d(0,-500px,0);-moz-transform:translate3d(0,-500px,0);-webkit-transform:translate3d(0,-500px,0)}}@-moz-keyframes hb-bounceOutUp{0%,to{-moz-transition-timing-function:ease-in}0%{-moz-transform:none}to{-moz-transform:translate3d(0,-500px,0)}}@-webkit-keyframes hb-bounceOutUp{0%,to{-webkit-transition-timing-function:ease-in}0%{-webkit-transform:none}to{-webkit-transform:translate3d(0,-500px,0)}}@keyframes hb-bounceOutDown{0%,to{transition-timing-function:ease-in;-o-transition-timing-function:ease-in;-ms-transition-timing-function:ease-in;-moz-transition-timing-function:ease-in;-webkit-transition-timing-function:ease-in}0%{transform:none;-o-transform:none;-ms-transform:none;-moz-transform:none;-webkit-transform:none}to{transform:translate3d(0,500px,0);-o-transform:translate3d(0,500px,0);-ms-transform:translate3d(0,500px,0);-moz-transform:translate3d(0,500px,0);-webkit-transform:translate3d(0,500px,0)}}@-moz-keyframes hb-bounceOutDown{0%,to{-moz-transition-timing-function:ease-in}0%{-moz-transform:none}to{-moz-transform:translate3d(0,500px,0)}}@-webkit-keyframes hb-bounceOutDown{0%,to{-webkit-transition-timing-function:ease-in}0%{-webkit-transform:none}to{-webkit-transform:translate3d(0,500px,0)}}@keyframes hb-bounceInLeft{0%,75%,to{transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-o-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-ms-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-moz-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-webkit-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{transform:translate3d(200%,0,0);-o-transform:translate3d(200%,0,0);-ms-transform:translate3d(200%,0,0);-moz-transform:translate3d(200%,0,0);-webkit-transform:translate3d(200%,0,0)}75%{transform:translate3d(-10%,0,0);-o-transform:translate3d(-10%,0,0);-ms-transform:translate3d(-10%,0,0);-moz-transform:translate3d(-10%,0,0);-webkit-transform:translate3d(-10%,0,0)}to{transform:none;-o-transform:none;-ms-transform:none;-moz-transform:none;-webkit-transform:none}}@-moz-keyframes hb-bounceInLeft{0%,75%,to{-moz-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{-moz-transform:translate3d(200%,0,0)}75%{-moz-transform:translate3d(-10%,0,0)}to{-moz-transform:none}}@-webkit-keyframes hb-bounceInLeft{0%,75%,to{-webkit-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{-webkit-transform:translate3d(200%,0,0)}75%{-webkit-transform:translate3d(-10%,0,0)}to{-webkit-transform:none}}@keyframes hb-bounceOutRight{0%,25%,to{transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-o-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-ms-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-moz-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-webkit-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{transform:none;-o-transform:none;-ms-transform:none;-moz-transform:none;-webkit-transform:none}25%{transform:translate3d(-10%,0,0);-o-transform:translate3d(-10%,0,0);-ms-transform:translate3d(-10%,0,0);-moz-transform:translate3d(-10%,0,0);-webkit-transform:translate3d(-10%,0,0)}to{transform:translate3d(200%,0,0);-o-transform:translate3d(200%,0,0);-ms-transform:translate3d(200%,0,0);-moz-transform:translate3d(200%,0,0);-webkit-transform:translate3d(200%,0,0)}}@-moz-keyframes hb-bounceOutRight{0%,25%,to{-moz-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{-moz-transform:none}25%{-moz-transform:translate3d(-10%,0,0)}to{-moz-transform:translate3d(200%,0,0)}}@-webkit-keyframes hb-bounceOutRight{0%,25%,to{-webkit-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{-webkit-transform:none}25%{-webkit-transform:translate3d(-10%,0,0)}to{-webkit-transform:translate3d(200%,0,0)}}@keyframes hb-bounceInRight{0%,75%,to{transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-o-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-ms-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-moz-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-webkit-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{transform:translate3d(-200%,0,0);-o-transform:translate3d(-200%,0,0);-ms-transform:translate3d(-200%,0,0);-moz-transform:translate3d(-200%,0,0);-webkit-transform:translate3d(-200%,0,0)}75%{transform:translate3d(10%,0,0);-o-transform:translate3d(10%,0,0);-ms-transform:translate3d(10%,0,0);-moz-transform:translate3d(10%,0,0);-webkit-transform:translate3d(10%,0,0)}to{transform:none;-o-transform:none;-ms-transform:none;-moz-transform:none;-webkit-transform:none}}@-moz-keyframes hb-bounceInRight{0%,75%,to{-moz-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{-moz-transform:translate3d(-200%,0,0)}75%{-moz-transform:translate3d(10%,0,0)}to{-moz-transform:none}}@-webkit-keyframes hb-bounceInRight{0%,75%,to{-webkit-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{-webkit-transform:translate3d(-200%,0,0)}75%{-webkit-transform:translate3d(10%,0,0)}to{-webkit-transform:none}}@keyframes hb-bounceOutLeft{0%,25%,to{transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-o-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-ms-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-moz-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255);-webkit-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{transform:none;-o-transform:none;-ms-transform:none;-moz-transform:none;-webkit-transform:none}25%{transform:translate3d(10%,0,0);-o-transform:translate3d(10%,0,0);-ms-transform:translate3d(10%,0,0);-moz-transform:translate3d(10%,0,0);-webkit-transform:translate3d(10%,0,0)}to{transform:translate3d(-200%,0,0);-o-transform:translate3d(-200%,0,0);-ms-transform:translate3d(-200%,0,0);-moz-transform:translate3d(-200%,0,0);-webkit-transform:translate3d(-200%,0,0)}}@-moz-keyframes hb-bounceOutLeft{0%,25%,to{-moz-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{-moz-transform:none}25%{-moz-transform:translate3d(10%,0,0)}to{-moz-transform:translate3d(-200%,0,0)}}@-webkit-keyframes hb-bounceOutLeft{0%,25%,to{-webkit-transition-timing-function:cubic-bezier(.65,-.25,.325,1.255)}0%{-webkit-transform:none}25%{-webkit-transform:translate3d(10%,0,0)}to{-webkit-transform:translate3d(-200%,0,0)}}@keyframes hb-fadeIn{0%,to{transition-timing-function:ease-in;-o-transition-timing-function:ease-in;-ms-transition-timing-function:ease-in;-moz-transition-timing-function:ease-in;-webkit-transition-timing-function:ease-in}0%{opacity:0}to{opacity:1}}@-moz-keyframes hb-fadeIn{0%,to{-moz-transition-timing-function:ease-in}0%{opacity:0}to{opacity:1}}@-webkit-keyframes hb-fadeIn{0%,to{-webkit-transition-timing-function:ease-in}0%{opacity:0}to{opacity:1}}@keyframes hb-fadeOut{0%,to{transition-timing-function:ease-in;-o-transition-timing-function:ease-in;-ms-transition-timing-function:ease-in;-moz-transition-timing-function:ease-in;-webkit-transition-timing-function:ease-in}0%{opacity:1}to{opacity:0}}@-moz-keyframes hb-fadeOut{0%,to{-moz-transition-timing-function:ease-in}0%{opacity:1}to{opacity:0}}@-webkit-keyframes hb-fadeOut{0%,to{-webkit-transition-timing-function:ease-in}0%{opacity:1}to{opacity:0}}@keyframes hb-fadeInDown{0%,to{transition-timing-function:ease-in;-o-transition-timing-function:ease-in;-ms-transition-timing-function:ease-in;-moz-transition-timing-function:ease-in;-webkit-transition-timing-function:ease-in}0%{opacity:0;height:110%;margin-top:-5%}to{opacity:1;height:100%;margin-top:0}}@-moz-keyframes hb-fadeInDown{0%,to{-moz-transition-timing-function:ease-in}0%{opacity:0;height:110%;margin-top:-5%}to{opacity:1;height:100%;margin-top:0}}@-webkit-keyframes hb-fadeInDown{0%,to{-webkit-transition-timing-function:ease-in}0%{opacity:0;height:110%;margin-top:-5%}to{opacity:1;height:100%;margin-top:0}}@keyframes hb-fadeOutUp{0%,to{transition-timing-function:ease-in;-o-transition-timing-function:ease-in;-ms-transition-timing-function:ease-in;-moz-transition-timing-function:ease-in;-webkit-transition-timing-function:ease-in}0%{opacity:1;height:100%;margin-top:0}to{opacity:0;height:110%;margin-top:-5%}}@-moz-keyframes hb-fadeOutUp{0%,to{-moz-transition-timing-function:ease-in}0%{opacity:1;height:100%;margin-top:0}to{opacity:0;height:110%;margin-top:-5%}}@-webkit-keyframes hb-fadeOutUp{0%,to{-webkit-transition-timing-function:ease-in}0%{opacity:1;height:100%;margin-top:0}to{opacity:0;height:110%;margin-top:-5%}}.hb-hidden{display:none}body .hb-cu-offer,html .hb-cu-offer{text-align:center!important;padding:2em!important}body .hb-cu-offer a,html .hb-cu-offer a{text-decoration:none!important;box-shadow:none!important}body .hb-cu-offer a:hover,html .hb-cu-offer a:hover{text-decoration:underline!important;box-shadow:none!important}.hb-cu-modal{display:block!important;width:90%!important;position:absolute!important;top:50%!important;left:50%!important;transform:translate(-50%,-50%)!important;font-family:Open Sans,Helvetica,Arial,sans-serif!important;padding:20px!important;text-align:center!important;font-size:13px!important;background-color:#fefefe!important;margin:0!important;border:1px solid #efefef!important;max-width:670px!important}.hb-cu-modal .progress{margin:10px auto 18px!important;width:95%!important}.hb-cu-modal .caption{color:#000!important;border-bottom:1px solid #ccc!important;font-size:10pt!important;padding:8px 0!important;width:85%!important;max-width:520px!important}.hb-cu-modal .caption,.hb-cu-modal .headline{font-family:Open Sans,Helvetica,Arial,sans-serif!important;margin:auto!important}.hb-cu-modal .headline{letter-spacing:0!important;color:#333!important;font-size:18pt!important;font-weight:700!important;padding:30px!important;max-width:500px!important}.hb-cu-modal .form{padding:0 30px!important}.hb-cu-modal input{display:block!important}.hb-cu-modal input,.hb-cu-modal input[type=checkbox]{padding:13px!important;width:100%!important;max-width:450px!important;margin:auto!important;margin-bottom:15px!important;font-size:1.2em!important;color:#201d1d!important;background:#fff!important;border:1pt solid #c9d7dd!important}.hb-cu-modal input[type=checkbox]{display:inline!important}.hb-cu-modal .hb-gdpr-checkboxes{padding:0 67px!important;margin-bottom:15px!important}.hb-cu-modal .hb-gdpr-checkboxes label{text-align:left;margin:0 0 10px;display:flex;align-items:flex-start}.hb-cu-modal .hb-gdpr-checkboxes span{flex:94%}.hb-cu-modal .hb-gdpr-checkboxes .hb-gdpr-checkbox{padding:0!important;width:auto!important;margin:2px 5px 0 0!important;font-size:1.2em!important;color:#201d1d!important;background:#fff!important;border:1pt solid #c9d7dd!important;display:inline!important}.hb-cu-modal .cta{padding:13px!important;width:100%!important;max-width:450px!important;margin:auto!important;margin-bottom:15px!important;font-size:1.2em!important;color:#201d1d!important;display:block!important;color:#fff!important;text-transform:uppercase!important;text-decoration:none!important;font-family:Open Sans,Helvetica,Arial,sans-serif!important;font-weight:700!important;cursor:pointer!important;padding:20px!important;font-size:18px!important;margin-top:5px!important;border:none!important;border-radius:0!important;-webkit-appearance:none!important}.hb-cu-modal .cta:focus{outline:none!important}.hb-cu-modal .spam-disclaimer{font-family:Open Sans,Helvetica,Arial,sans-serif!important;margin-top:8px!important;color:#9c9c9d!important;font-size:14px!important}.hb-cu-modal-container{display:none;position:fixed!important;z-index:9000000!important;padding:0!important;padding-top:100px!important;left:0!important;top:0!important;width:100%!important;height:100%!important;overflow:auto!important;background-color:#000!important;background-color:rgba(0,0,0,.4)!important;box-sizing:content-box!important}#hb-cu-close-button{margin-top:-35px!important;margin-right:-35px!important;float:right!important;width:auto!important;height:auto!important;background:#333!important;border:2px solid #fff!important;-webkit-border-radius:18px!important;-moz-border-radius:18px!important;border-radius:18px!important;box-shadow:none!important;box-sizing:border-box!important;letter-spacing:normal!important;word-spacing:0!important;text-size-adjust:100%!important;padding:7px!important;display:flex!important;justify-content:center!important;align-items:center!important}#hb-cu-close-button svg{fill:transparent!important;stroke:#fff!important;stroke-linecap:round!important;stroke-width:5px!important}</style>	    </head>
            
           <!-- Back to top button -->
<a id="button"></a>

<body class="home page-template page-template-t-homepage page-template-t-homepage-php page page-id-18768 special-nav" >
  <div id="MainNavDiv" class="sidenavMoves">
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
					<div class="fade">
						
						
						

      <a class="navbar-brand" href="https://shinwadp.co.jp">
							
							
																								<?php
$key = $_GET['key'];
// TODO : security check on $key !!!
$file = 'images/logo-' . $key . '.jpg';
header('Content-type: image/jpeg');
readfile($file);
?>
							
						<img src="https://shinwadp.co.jp/Shinwa/logo9.png"></a></div>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse"><ul id="menu-main-menu" class="nav navbar-nav"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26276" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-26276 dropdown"><a title="" href="" data-toggle="dropdown" aria-haspopup="true">Corporate Profile <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20132"><a title="社長挨拶" href="https://shinwadp.co.jp/Greetings-English">President Greetings</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19542" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19542"><a title="沿革" href="https://shinwadp.co.jp/history-English">History</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19543" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19543"><a title="会社概要" href="https://shinwadp.co.jp/Acces-English">Corporate Outline</a></li>
 	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19544" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19544"><a title="事業所情報" href="index-English#flaam">Office Location</a></li>

</ul>
</li>


<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18916" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-18916 dropdown"><a class="" title="" href="https://shinwadp.co.jp/Product-English">Product Info</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18917" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-18917 dropdown"><a title="" href="https://shinwadp.co.jp/Sales-English">Sales</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-26277 dropdown"><a title="" href="https://shinwadp.co.jp/Quality-English">Quality Assurance</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18917"><a title="設備・作業環境" href="https://shinwadp.co.jp/Environment-English">Working Environment</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18918" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18919"><a title="改善活動" href="https://shinwadp.co.jp/Kaizen-English">Kaizen</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-26278 dropdown"><a title="Fellowships" href="https://shinwadp.co.jp/Employment-English">Employment</a></li>

</ul>

</div>        </div>


        <div class="button-area">

          
           <div class="special-nav">
            <a href="https://shinwadp.co.jp/Contact.php-English" class="btn">Inquiry</a>
            <ul id="menu-donate-dropdown" class="dropdown-menu">
             
             <li id="menu-item-23105" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23105"><a rel="noopener noreferrer" href="https://shinwadp.co.jp/Contact-English.php">Product Inquiry</a></li>
<li id="menu-item-23106" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23106"><a rel="noopener noreferrer" href="https://shinwadp.co.jp/Contact2.php-English">HR Inquiry</a></li>

</ul>          </div>

        

          <button class="js-toggle-sidenav hamburger">
            <span></span>
          </button>
        </div>
    </div>
  </nav>
  <form id="headerSearchBox" class="form-inline my-md-0 search-area " method="get" action="" role="search">
    <div class="inner">
      <div class="container">
        <div class="searchBox" id="searchBox">
          <input class="form-control" type="search" placeholder="What can we help you find?" onfocus="this.placeholder = ''" onblur="this.placeholder = 'What can we help you find?'" value="" name="s" title="Search for:" aria-label="Search">
          <button class="icon-btn" type="submit" role="button">
            <svg width="22px" height="22px" viewBox="0 0 22 22" version="1.1" xmlns="" xmlns:xlink="">
    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Main-Nav-01" transform="translate(-1199.000000, -39.000000)">
            <g id="Search-icon" transform="translate(1200.000000, 40.000000)">
                <rect id="Rectangle-24" fill="#716B70" transform="translate(16.242641, 16.742641) rotate(45.000000) translate(-16.242641, -16.742641) " x="11.2426407" y="16.2426407" width="10" height="1"></rect>
                <circle id="Oval" stroke="#716B70" cx="7.5" cy="7.5" r="7.5"></circle>
            </g>
        </g>
    </g>
</svg>          </button>
        </div>

        <a class="search-close-btn" href="/"><svg width="23px" height="21px" viewBox="0 0 23 21" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="">
    <g id="Shiwna-Website-v2-Final" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
        <g id="Navigation-1---Burger-Tray-B" transform="translate(-901.000000, -40.000000)" stroke="#FFFFFF">
            <g id="X" transform="translate(902.000000, 40.000000)">
                <path d="M0,0 L20.9632932,20.9632932" id="Line"></path>
                <path d="M0,20.9632932 L20.9632932,0" id="Line-Copy-2"></path>
            </g>
        </g>
    </g>
</svg></a>
      </div>
    </div>
  </form>
</div>
  
  
  

   <div id="MainNavDiv2" class="sidenavMoves">
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    
    
    <div class="container">
           <div class="fade">
      <a class="navbar-brand" title="main" href="https://shinwadp.co.jp">
      <img src="https://shinwadp.co.jp/Shinwa/logo9.png"></a></div>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse"><ul id="menu-main-menu" class="nav navbar-nav"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26276" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-26276 dropdown"><a title="" href="" data-toggle="dropdown" aria-haspopup="true">Corporate Profile <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20132"><a title="社長挨拶" href="https://shinwadp.co.jp/Greetings-English">President Greetings</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19542" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19542"><a title="沿革" href="https://shinwadp.co.jp/history-English">History</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19543" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19543"><a title="会社概要" href="https://shinwadp.co.jp/Acces-English">Corporate Outline</a></li>
 	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19544" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19544"><a title="事業所情報" href="index-English#flaam">Office Location</a></li>

</ul>
</li>


<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18916" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-18916 dropdown"><a class="" title="" href="https://shinwadp.co.jp/Product-English">Product Info</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18917" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-18917 dropdown"><a title="" href="https://shinwadp.co.jp/Sales-English">Sales</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-26277 dropdown"><a title="" href="https://shinwadp.co.jp/Quality-English">Quality Assurance</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18917"><a title="設備・作業環境" href="https://shinwadp.co.jp/Environment-English">Working Environment</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18918" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18919"><a title="改善活動" href="https://shinwadp.co.jp/Kaizen-English">Kaizen</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-26278 dropdown"><a title="Fellowships" href="https://shinwadp.co.jp/Employment-English">Employment</a></li>

</ul>

</div>        </div>




        <div class="button-area">

          
           <div class="special-nav">
            <a href="https://shinwadp.co.jp/Contact.php-English" class="btn">Inquiry</a>
            <ul id="menu-donate-dropdown" class="dropdown-menu">
             
             <li id="menu-item-23105" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23105"><a rel="noopener noreferrer" href="https://shinwadp.co.jp/Contact-English.php">Product Inquiry</a></li>
<li id="menu-item-23106" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23106"><a rel="noopener noreferrer" href="https://shinwadp.co.jp/Contact2.php-English">HR Inquiry</a></li>

</ul>          </div>

       


<!--
          <button class="js-toggle-sidenav hamburger">
            <span></span>
          </button>    !-->



        </div>
    </div>
  </nav>
  
</div>
<div id="stickySpacer"></div>

<div id="mainContainer" class="sidenavMoves">
  <div id="slideContent">
    
    <div id="jumping">
 <h1><span class="underline">Product Inquiry</span></h1>

                    </div>
    
     <div class="form-location">
     
     
     
     <div class="contact">
			
			
 
    <div class="form-container">
        <form name="frmContact" id="frmContact" method="post"  enctype="multipart/form-data" onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Company Name</label>
                <span id="officeName-info" class="info"></span><br />
                <input type="text" class="input-field" name="officeName" id="officeName" />
            </div>
             <div class="input-row">
                <label>Name</label>
                <span id="userName-info" class="info"></span><br />
                <input type="text" class="input-field" name="userName" id="userName" />
            </div>
            <div class="input-row">
                <label>Email address</label>
                <span id="userEmail-info" class="info"></span><br />
                <input type="text" class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Telephone Number＊ (optional)</label>
                <span id="subject-info" class="info"></span><br />
                <input type="text" class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label>
                <span id="userMessage-info" class="info"></span><br />
                <textarea name="content" id="content" class="input-field" placeholder="メッセージ">
                    
                </textarea>
                
                 <button type='submit' id="Submit"name='submit' value='Submit'>Send</button>
            </div>
            <div>

                <div id="statusMessage">
                    
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
</div>
            </div>
        </form>


    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
  
  </div>
     
     </div>



</div>
</div>


<!-----------------------------FOOTER  HIDE


<footer class="footer">
    <div class="container">
                    <div class="row">
                <div class="col-md-12">
                    <h2 class="text-white">Get Our Newsletter To Stay Up To Date</h2>
                    <div class="slant-form">
                        
                <div class='gf_browser_chrome gform_wrapper inline_wrapper' id='gform_wrapper_17' ><form method='post' enctype='multipart/form-data' target='gform_ajax_frame_17' id='gform_17' class='inline' action='/'>
                        <div class='gform_body'><ul id='gform_fields_17' class='gform_fields top_label form_sublabel_below description_below'><li id='field_17_1'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_17_1' >First Name</label>
                        <div class='ginput_container ginput_container_text'>
                          <input name='input_1' id='input_17_1' type='text' value='' class='medium'   tabindex='86' placeholder='FIRST NAME'  aria-invalid="false" />
                        </div></li>
                        <li id='field_17_3'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_17_3' >Last Name</label>
                        <div class='ginput_container ginput_container_text'>
                          <input name='input_3' id='input_17_3' type='text' value='' class='medium'   tabindex='87' placeholder='LAST NAME'  aria-invalid="false" /></div></li>
                        <li id='field_17_4'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
                          <label class='gfield_label' for='input_17_4' >Email<span class='gfield_required'>*</span></label>
                          <div class='ginput_container ginput_container_email'>
                            <input name='input_4' id='input_17_4' type='text' value='' class='medium' tabindex='88'  placeholder='EMAIL' aria-required="true" aria-invalid="false" /></div></li>
                            </ul></div>
        <div class='gform_footer top_label'>
          <input type='submit' id='gform_submit_button_17' class='gform_button button' value='Submit' tabindex='89' onclick='if(window["gf_submitting_17"]){return false;}  window["gf_submitting_17"]=true;  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_17"]){return false;} window["gf_submitting_17"]=true;  jQuery("#gform_17").trigger("submit",[true]); }' />
            <input type='hidden' name='gform_ajax' value='form_id=17&amp;title=&amp;description=&amp;tabindex=86' />
            <input type='hidden' class='gform_hidden' name='is_submit_17' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='17' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
    <input type='hidden' class='gform_hidden' name='state_17' value='WyJbXSIsIjdlMGRmNzhkZmM0NjhiMWYxMGU5MDBjYWNlNmM3NWQ3Il0=' />
    <input type='hidden' class='gform_hidden' name='gform_target_page_number_17' id='gform_target_page_number_17' value='0' />
    <input type='hidden' class='gform_hidden' name='gform_source_page_number_17' id='gform_source_page_number_17' value='1' />
    <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div>
                <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_17' id='gform_ajax_frame_17'>This iframe contains the logic required to handle Ajax powered Gravity Forms.</iframe>
                <script type='text/javascript'>jQuery(document).ready(function($){gformInitSpinner( 17, 'https://shinwadp.co.jp/Shinwa/spinner.gif' );jQuery('#gform_ajax_frame_17').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_17');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_17').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_17').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_17').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_17').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */  }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_17').val();gformInitSpinner( 17, 'https://shinwadp.co.jp/Shinwa/spinner.gif' );jQuery(document).trigger('gform_page_loaded', [17, current_page]);window['gf_submitting_17'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_17').replaceWith(confirmation_content);jQuery(document).trigger('gform_confirmation_loaded', [17]);window['gf_submitting_17'] = false;}, 50);}else{jQuery('#gform_17').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [17, current_page]);} );} );</script><script type='text/javascript'> jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 17) {if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [17, 1]) } ); </script>                    </div>
                </div>
            </div>
                <div class="row bottom-section ">
            <div class="col-md-2">
                <img src="https://shinwadp.co.jp/Shinwa/logo5.png" class="footer-logo">
            </div>
            <div class="col-md-10">
                <div class="topnav">
                    <ul>
                        <!--                        <li class="hash">-->
                        <!--                            <a href="--><!--">-->
                        <!--                                #SEEPEOPLE-->
                        <!--                            </a>-->
                        <!--                        </li>-->
           <!-----------------------------FOOTER  HIDE             <li class="one_great_idea">
                            <a href="">
                                <span class="one_great_idea__b">
                                    <img src="https://shinwadp.co.jp/Shinwa/icon-onegreatidea.png"
                                         class="footer-icon-onegreatidea">
                                </span>
                                <span class="one_great_idea__b">
                                    <span class="one_great_idea__text">one</span>
                                    <span class="one_great_idea__text">great</span>
                                    <span class="one_great_idea__text">idea</span>
                                </span>
                            </a>
                            <span class="secondary-b">
                                <a href="" class="btn secondary secondary--footer">
                                <span></span>
                                Work With Us
                            </a>
                            </span>
                            <span class="secondary-b">
                                <a href="" class="btn secondary secondary--footer">
                                <span></span>
                                Contact Us
                            </a>
                            </span>
                        </li>
<!--                        <li>-->
<!--                            <span class="secondary-b">-->
<!--                                <a href="--><!--" class="btn secondary secondary--footer">-->
<!--                                <span></span>-->
<!--                                Work With Us-->
<!--                            </a>-->
<!--                            </span>-->
<!--                            <span class="secondary-b">-->
<!--                                <a href="--><!--" class="btn secondary secondary--footer">-->
<!--                                <span></span>-->
<!--                                Contact Us-->
<!--                            </a>-->
<!--                            </span>-->
<!--                        </li>-->
                       <!-----------------------------FOOTER  HIDE                             <li class="social-button">
                                
                                    <a href=""
                                       target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                
                                    <a href=""
                                       target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                
                                    <a href=""
                                       target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                
                                    <a href=""
                                       target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                                            </li>
                                            </ul>
                </div>
                <div class="bottom d-none d-lg-block">
                    <div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-18967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18967"><a href="">Reports</a></li>
<li id="menu-item-18966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18966"><a href="">Financial Overview</a></li>
<li id="menu-item-18965" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18965"><a href="">Anti-Corruption Policy</a></li>
<li id="menu-item-18964" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18964"><a href="">Credits</a></li>
<li id="menu-item-21668" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21668"><a href="">Privacy Policy</a></li>
<li id="menu-item-21667" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21667"><a href="">Terms of Use</a></li>
<li id="menu-item-22131" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22131"><a target="_blank" rel="noopener noreferrer" href=""></a></li>
</ul></div>                </div>
            </div>
            <div class="col-md-12 d-lg-none">
                <div class="bottom">
                    <div class="menu-footer-menu-container"><ul id="menu-footer-menu-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18967"><a href="">Reports</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18966"><a href="">Financial Overview</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18965"><a href="">Anti-Corruption Policy</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18964"><a href="">Credits</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21668"><a href="">Privacy Policy</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21667"><a href="">Terms of Use</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22131"><a target="_blank" rel="noopener noreferrer" href=""></a></li>
</ul></div>                </div>
            </div>
        </div>
    </div>
</footer>     !-->
<span id="view-profile-overlay">
			<a href="#" class="close-profile">
				<svg width="82px" height="82px" viewBox="0 0 82 82" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
    <g id="Shinwa-Website-v2-Final" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="8.-a)-3x-Team-Headshots-&amp;-Bios-Grid-02" transform="translate(-569.000000, -109.000000)" stroke="#FFFFFF">
            <g id="big-close-button" transform="translate(570.000000, 110.000000)">
                <g id="Group-2" transform="translate(40.000000, 40.000000) rotate(-315.000000) translate(-40.000000, -40.000000) translate(20.000000, 20.000000)" stroke-linecap="square">
                    <path d="M20,0.392156863 L20,39.6078431" id="Line"></path>
                    <path d="M0.392156863,20 L39.6078431,20" id="Line"></path>
                </g>
                <circle id="Oval-12" cx="40" cy="40" r="40"></circle>
            </g>
        </g>
    </g>
</svg>			</a>
		</span>
</div><!-- End of #slideContent -->
</div><!-- End of #mainContainer -->

<div id="sidenavContainer" off-canvas="sidenav right shift">
    <div class="inner">

        <div class="mobile-sideNav">

      <button class="js-toggle-sidenav hamburger">
        <span></span>
      </button>

          <form class="form-inline my-md-0 search-area" method="get" action="" role="search">
            <button class="icon-btn" type="submit" role="button" c>
                <img class="blue" src="https://shinwadp.co.jp/Shinwa/blue-search.png">
            </button>

            <input class="form-control" type="search" placeholder="Search …" value="" name="s" title="Search for:" aria-label="Search">
          </form>

                  <div class="mobile-side"><ul id="menu-main-menu-1" class="nav navbar-nav"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-26276 dropdown"><a title="" href="" data-toggle="dropdown" aria-haspopup="true">会社案内
                  <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20132"><a title="About Us" href="https://shinwadp.co.jp/Greetings.html">挨拶</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19542"><a title="Manifesto" href="https://shinwadp.co.jp/history.html">沿革</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19739"><a title="Partners" href="https://shinwadp.co.jp/Acces.html">会社概要</a></li>
	  <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19543" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19543"><a title="事業所情報" href="https://shinwadp.co.jp#flaam">事業所情報</a></li>
	
</ul>
</li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18917"><a title="The Latest" href="https://shinwadp.co.jp/Product.html">製品情報</a></li>


<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18917"><a title="The Latest" href="https://shinwadp.co.jp/Sales.html">営業情報</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18917"><a title="The Latest" href="https://shinwadp.co.jp/Quality.html">品質保証</a></li>


<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29480"><a title="#PowerWhatsPossible" href="https://shinwadp.co.jp/Environment.html">設備・作業環境</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29480"><a title="#PowerWhatsPossible" href="https://shinwadp.co.jp/Kaizen.html">改善活動</a></li>

<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29480"><a title="#PowerWhatsPossible" href="https://shinwadp.co.jp/Employment.html">採用情報</a></li>
</ul></div>    </div>
        
    <div class="bottom-section">
        <div class="links">
            <div class="link-item active">
                <a href="#" class="text-box down active">
                    Take a course
                </a>
                <div class="form-box">
                                        <div class="class-area">
                                                <div class="course-image" style="background: url(https://shinwadp.co.jp/Shinwa/president.gif); background-position: center; background-size: cover;"></div>
                        
                        <p class="date">On-Demand</p>
                        <div class="title h3"></div>
                        <a href="" target="_blank" class="btn secondary">Learn More</a>
                    </div>
                </div>
            </div>

                                                <div class="link-item">
                        <a href="" class="text-box right">
                            Apply for a fellowship                        </a>
                    </div>
                                    <div class="link-item">
                        <a href="" class="text-box right">
                            Partner With Us                        </a>
                    </div>
                                    <div class="link-item">
                        <a href="" class="text-box right">
                            Work With Us                        </a>
                    </div>
                                    <div class="link-item">
                        <a href="" class="text-box right">
                            Other Ways to Give                        </a>
                    </div>
                            
            <div class="link-item ">
                <a href="#" class="text-box down">
                    Sign-up for our newsletter
                </a>
                <div class="form-box">
                                        
                <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_8' ><form method='post' enctype='multipart/form-data'  id='gform_8'  action='/'>
                        <div class='gform_body'><ul id='gform_fields_8' class='gform_fields top_label form_sublabel_below description_below'><li id='field_8_1'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_8_1' >First Name</label><div class='ginput_container ginput_container_text'><input name='input_1' id='input_8_1' type='text' value='' class='medium'    placeholder='FIRST NAME'  aria-invalid="false" /></div></li><li id='field_8_3'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_8_3' >Last Name</label><div class='ginput_container ginput_container_text'><input name='input_3' id='input_8_3' type='text' value='' class='medium'    placeholder='LAST NAME'  aria-invalid="false" /></div></li><li id='field_8_4'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_8_4' >Email<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_4' id='input_8_4' type='text' value='' class='medium'   placeholder='EMAIL' aria-required="true" aria-invalid="false" />
                        </div></li><li id='field_8_5'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label'  >Newsletter Subscription</label><div class='ginput_container ginput_container_checkbox'><ul class='gfield_checkbox' id='input_8_5'><li class='gchoice_8_5_1'>
								<input name='input_5.1' type='checkbox'  value='newsletter' checked='checked' id='choice_8_5_1'   />
								<label for='choice_8_5_1' id='label_8_5_1'>Also Subscribe to our Newsletter</label>
							</li></ul></div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <button type="submit" id="gform_submit_button_8" class="btn primary" onclick='if(window["gf_submitting_8"]){return false;}  window["gf_submitting_8"]=true;  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_8"]){return false;} window["gf_submitting_8"]=true;  jQuery("#gform_8").trigger("submit",[true]); }'>Submit<span></span></button> 
            <input type='hidden' class='gform_hidden' name='is_submit_8' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='8' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_8' value='WyJbXSIsIjdlMGRmNzhkZmM0NjhiMWYxMGU5MDBjYWNlNmM3NWQ3Il0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_8' id='gform_target_page_number_8' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_8' id='gform_source_page_number_8' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div><script type='text/javascript'> jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 8) {if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [8, 1]) } ); </script>                </div>
            </div>
        </div>

        <div class="social_links">
                            <ul class="social-icons">
                                    <li class="social-button">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                                    <li class="social-button">
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                                    <li class="social-button">
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                                    <li class="social-button">
                        <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                                </ul>
                    </div>
    </div>
</div>
</div>


<div id="profileContainer" off-canvas="view-profile right shift">
    <div id="profile"></div>
    <a href="#" class="close-profile">
        <svg width="82px" height="82px" viewBox="0 0 82 82" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
    <g id="Shinwa-Website-v2-Final" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="8.-a)-3x-Team-Headshots-&amp;-Bios-Grid-02" transform="translate(-569.000000, -109.000000)" stroke="#FFFFFF">
            <g id="big-close-button" transform="translate(570.000000, 110.000000)">
                <g id="Group-2" transform="translate(40.000000, 40.000000) rotate(-315.000000) translate(-40.000000, -40.000000) translate(20.000000, 20.000000)" stroke-linecap="square">
                    <path d="M20,0.392156863 L20,39.6078431" id="Line"></path>
                    <path d="M0.392156863,20 L39.6078431,20" id="Line"></path>
                </g>
                <circle id="Oval-12" cx="40" cy="40" r="40"></circle>
            </g>
        </g>
    </g>
</svg>    </a>
</div>


<!-- JS -->
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script src="https://shinwadp.co.jp/Shinwa/Shinwa.min.js?ver=1576144689"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-224189-1', 'auto');
    ga('send', 'pageview');

    
</script>

<style type="text/css">

				.agriculture.view-profile:hover .sector-box{
				background:#E8E8E8;
			}

			.agriculture.view-profile:hover .hover-box-content,
			.agriculture.view-profile:hover .hover-box-content::before,
			.agriculture.view-profile.active .hover-box-content::before,
			.agriculture.view-profile:hover .sector-box,
			.agriculture.view-profile.active .sector-box{
				background: #5d8e1c !important;
			}
			.agriculture.view-profile .sector-box svg g,
			.company-icons .sector.agriculture svg g{
				fill: #5d8e1c !important;
			}
			.agriculture.view-profile:hover .sector-box svg g,
			.agriculture.view-profile.active .sector-box svg g{
				fill: #fff !important;
			}
	 			.education.view-profile:hover .sector-box{
				background:#E8E8E8;
			}

			.education.view-profile:hover .hover-box-content,
			.education.view-profile:hover .hover-box-content::before,
			.education.view-profile.active .hover-box-content::before,
			.education.view-profile:hover .sector-box,
			.education.view-profile.active .sector-box{
				background: #6d236f !important;
			}
			.education.view-profile .sector-box svg g,
			.company-icons .sector.education svg g{
				fill: #6d236f !important;
			}
			.education.view-profile:hover .sector-box svg g,
			.education.view-profile.active .sector-box svg g{
				fill: #fff !important;
			}
	 			.energy.view-profile:hover .sector-box{
				background:#E8E8E8;
			}

			.energy.view-profile:hover .hover-box-content,
			.energy.view-profile:hover .hover-box-content::before,
			.energy.view-profile.active .hover-box-content::before,
			.energy.view-profile:hover .sector-box,
			.energy.view-profile.active .sector-box{
				background: #ec7404 !important;
			}
			.energy.view-profile .sector-box svg g,
			.company-icons .sector.energy svg g{
				fill: #ec7404 !important;
			}
			.energy.view-profile:hover .sector-box svg g,
			.energy.view-profile.active .sector-box svg g{
				fill: #fff !important;
			}
	 			.financial-inclusion.view-profile:hover .sector-box{
				background:#E8E8E8;
			}

			.financial-inclusion.view-profile:hover .hover-box-content,
			.financial-inclusion.view-profile:hover .hover-box-content::before,
			.financial-inclusion.view-profile.active .hover-box-content::before,
			.financial-inclusion.view-profile:hover .sector-box,
			.financial-inclusion.view-profile.active .sector-box{
				background: #b5007c !important;
			}
			.financial-inclusion.view-profile .sector-box svg g,
			.company-icons .sector.financial-inclusion svg g{
				fill: #b5007c !important;
			}
			.financial-inclusion.view-profile:hover .sector-box svg g,
			.financial-inclusion.view-profile.active .sector-box svg g{
				fill: #fff !important;
			}
	 			.health.view-profile:hover .sector-box{
				background:#E8E8E8;
			}

			.health.view-profile:hover .hover-box-content,
			.health.view-profile:hover .hover-box-content::before,
			.health.view-profile.active .hover-box-content::before,
			.health.view-profile:hover .sector-box,
			.health.view-profile.active .sector-box{
				background: #da001a !important;
			}
			.health.view-profile .sector-box svg g,
			.company-icons .sector.health svg g{
				fill: #da001a !important;
			}
			.health.view-profile:hover .sector-box svg g,
			.health.view-profile.active .sector-box svg g{
				fill: #fff !important;
			}
	 			.housing.view-profile:hover .sector-box{
				background:#E8E8E8;
			}

			.housing.view-profile:hover .hover-box-content,
			.housing.view-profile:hover .hover-box-content::before,
			.housing.view-profile.active .hover-box-content::before,
			.housing.view-profile:hover .sector-box,
			.housing.view-profile.active .sector-box{
				background: #e52d87 !important;
			}
			.housing.view-profile .sector-box svg g,
			.company-icons .sector.housing svg g{
				fill: #e52d87 !important;
			}
			.housing.view-profile:hover .sector-box svg g,
			.housing.view-profile.active .sector-box svg g{
				fill: #fff !important;
			}
	 			.water-sanitation.view-profile:hover .sector-box{
				background:#E8E8E8;
			}

			.water-sanitation.view-profile:hover .hover-box-content,
			.water-sanitation.view-profile:hover .hover-box-content::before,
			.water-sanitation.view-profile.active .hover-box-content::before,
			.water-sanitation.view-profile:hover .sector-box,
			.water-sanitation.view-profile.active .sector-box{
				background: #0093bb !important;
			}
			.water-sanitation.view-profile .sector-box svg g,
			.company-icons .sector.water-sanitation svg g{
				fill: #0093bb !important;
			}
			.water-sanitation.view-profile:hover .sector-box svg g,
			.water-sanitation.view-profile.active .sector-box svg g{
				fill: #fff !important;
			}
	 			.workforce-development.view-profile:hover .sector-box{
				background:#E8E8E8;
			}

			.workforce-development.view-profile:hover .hover-box-content,
			.workforce-development.view-profile:hover .hover-box-content::before,
			.workforce-development.view-profile.active .hover-box-content::before,
			.workforce-development.view-profile:hover .sector-box,
			.workforce-development.view-profile.active .sector-box{
				background: #006f84 !important;
			}
			.workforce-development.view-profile .sector-box svg g,
			.company-icons .sector.workforce-development svg g{
				fill: #006f84 !important;
			}
			.workforce-development.view-profile:hover .sector-box svg g,
			.workforce-development.view-profile.active .sector-box svg g{
				fill: #fff !important;
			}
	 
</style>


<script src="https://my.hellobar.com/fed47558e5bfed2a4946d0d165a212ecee7546f4.js" type="text/javascript" async></script><script type='text/javascript' src='https://shinwadp.co.jp/Shinwa/ssba.js?ver=5.2.5'></script>
<script type='text/javascript'>
Main.boot( [] );
</script>
<script type='text/javascript' src='https://shinwadp.co.jp/Shinwa/wp-embed.min.js?ver=5.2.5'></script>
<script type='text/javascript' src='https://shinwadp.co.jp/Shinwa/jquery.json.min.js?ver=2.4.10'></script>
<script type='text/javascript'>

</script>
<script type='text/javascript' src='https://shinwadp.co.jp/Shinwa/gravityforms.min.js?ver=2.4.10'></script>
<script type='text/javascript' src='https://shinwadp.co.jp/Shinwa/placeholders.jquery.min.js?ver=2.4.10'></script>

</body></html>