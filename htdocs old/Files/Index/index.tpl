<?php global $db; $result = $db->query("SELECT * FROM cms_settings WHERE id = 1 LIMIT 1"); while($mant = $result->fetch_array()){ if($mant['mantenimiento'] == 1){header("LOCATION: ". PATH ."/Mantenimiento"); } } ?>
<html>
	﻿﻿<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>{SHORTNAME} ~ ¡Innovando para ti!</title>
		<link rel="shortcut icon" href="{CDN}/images/favicon.ico" type="image/vnd.microsoft.icon">
		<link rel="stylesheet" href="{CDN}/css/index.css" type="text/css" media="all" />																																																																																																																																																																																																																																																																																																																																																											<?php echo'<i style="color: white;text-align: center;font-size:0px;"> &#79;&#110;&#101;&#67;&#77;&#83; &#98;&#121; &#74;&#101;&#105;&#104;&#100;&#101;&#110;</i>'; ?>
		<script src="{CDN}/js/v3_landing_top.js" type="text/javascript"></script>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script>
			var andSoItBegins = (new Date()).getTime();
			var countryCode = "MX";
			var habboPageInitQueue = [];
			var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1d5d8853040f30be0cc82355679bba7c/3389/web-gallery";
		</script>
		<link rel="stylesheet" href="{CDN}/css/v3_landing.css" type="text/css" />
	</head>
	<body>
		<!--FORGOT-->
		<div id="overlay"></div>
		<div id="change-password-form" class="overlay-dialog" style="display: none;">
			<div id="change-password-form-container" class="clearfix form-container">
				<h2 id="change-password-form-title" class="bottom-border">¿Contraseña olvidada?</h2>
				<div id="change-password-form-content" style="display: none;">
					<form method="post" action="/functions.php" id="forgotten-pw-form">
						<span>Por favor, introduce el email de tu cuenta:</span>
						<div id="email" class="center bottom-border">
							<input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>
							<div id="change-password-error-container" class="error" style="display: none;">Por favor, introduce un e-mail</div>
						</div>
					</form>
					<div class="change-password-buttons">
						<a href="#" id="change-password-cancel-link">Cancelar</a>
						<a href="#" id="change-password-submit-button" class="new-button"><b>Enviar email</b><i></i></a>
					</div>
				</div>
			</div>
			<div id="change-password-form-container-bottom" class="form-container-bottom"></div>
		</div>
		<script type="text/javascript">
			function initChangePasswordForm() {
				ChangePassword.init();
			}
			if (window.HabboView) {
				HabboView.add(initChangePasswordForm);
			} else if (window.habboPageInitQueue) {
				habboPageInitQueue.push(initChangePasswordForm);
			}
		</script>
		 <!--END FORGOT-->
		 <div id="fb-root"></div>
		<script>window.fbAsyncInit=function(){Cookie.erase("fbsr_{FBID}");FB.init({appId:'{FBID}',channelUrl:'/fbchannel',status:true,cookie:true,xfbml:true});FB.getLoginStatus(function(oSession){if(typeof comufy_storeUser!='undefined'){if(oSession.status!=='connected'){FB.Event.subscribe('auth.login',function(oSession){if(oSession.status=="connected"){comufy_storeUser(oSession,{});}});}else{comufy_storeUser(oSession,{});}}});if(window.habboPageInitQueue){habboPageInitQueue.push(function(){$(document).trigger("fbevents:scriptLoaded");});}else{$(document).fire("fbevents:scriptLoaded");}};window.assistedLogin=function(FBobject,optresponse){Cookie.erase("fbsr_{FBID}");FBobject.init({appId:'{FBID}',channelUrl:'/fbchannel',status:true,cookie:true,xfbml:true});permissions='user_birthday,email,user_likes';defaultAction=function(response){if(response.authResponse){fbConnectUrl="{PATH}/facebook/index.php?connect=true";Cookie.erase("fbhb_val_{FBID}");Cookie.set("fbhb_val_{FBID}",response.authResponse.accessToken);Cookie.erase("fbhb_expr_{FBID}");Cookie.set("fbhb_expr_{FBID}",response.authResponse.expiresIn);window.location.replace(fbConnectUrl);}};if(typeof optresponse=='undefined')
		FBobject.login(defaultAction,{scope:permissions});else
		FBobject.login(optresponse,{scope:permissions});};(function(){var e=document.createElement('script');e.async=true;e.src=document.location.protocol+'//connect.facebook.net/es_ES/all.js';document.getElementById('fb-root').appendChild(e);}());</script>
		

		<div id="hotel_bg"></div>
		<div id="hotel_bg_right"></div>
		<div id="header"><div class="content"><div class="online-count"><img src="{CDN}/images/index/ons.gif" style="margin-right: 2px;float: left;height: 20px;">{USERSON} Conectados</div></div></div>
		<div id="header-bottom"><div class="content2"><img src="{CDN}/images/index/header.png" style="margin-top:-75px;"><img src="{CDN}/images/index/sole.png" style="margin-top:-20%;margin-left:15%;"></div></div>
		
		<div class="content" style="margin-top:10px;">																																																																																																																																																																																																																																																																																																																																																																							
			{ERROR}<br>
			<?php global $db;$logo = $db->query("SELECT * FROM cms_settings WHERE id = 1 LIMIT 1");while($logo2 = $logo->fetch_array()){?>
				<a href="/"><img src="<?php echo $logo2['logo'];?>" class="logo"/></a>
			<?php }?>
			<div class="left" style="margin-top:40px;">
				<div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
				<div style="float:right;margin-right:-70px;margin-top:-35px;"class="fb-share-button" data-href="https://www.facebook.com/Habbo" data-layout="button_count"></div>
				<form action="/submit.php" method="post" >
					<input type="text" name="username" class="text" value="" placeholder="Usuario"></input>
					<input type="password" name="password" class="password" placeholder="Contraseña"></input>
					<input name="login" type="submit" id="register_button" style="margin-top:8px;height: 46px;float:left;width: 300px;" value="Conectarme">																																																																																																																																																																										
					<a href="#" class="fb_button fb_button_large" onclick="assistedLogin(FB); return false;" id="register_fbbutton" style="margin-top:8px;height:2.8%;float:left;width:120%;">Conectarme vía Facebook</a>
				</form>
			</div>

			<div class="container" style="margin-top: -1px;">
					<div class="slide" style="background-image: url(http://www.wirchproductions.com/v5/new_newsbgs//promo_chatting.png);background-position: 0 85%;">
						<div style="position: relative; height: inherit; width: inherit">
							<div class="innerbox">
								<div id="name">Conoce Nuevos Amig@s</div>
								<div id="desc">¡En {SHORTNAME} puedes encontrar viejas y nuevas amistades!</div>
							</div>
						</div>
					</div>	
					<div class="slide" style="background-image: url(http://habbochannel.info/images/nieuws/66d22f920debf3e0ca90f4e17a8ae9a4588b3715.png);background-position: 100% 80%;">
						<div style="position: relative; height: inherit; width: inherit">
							<div class="innerbox">
								<div id="name">Créditos Gratis...</div>
								<div id="desc">No tienes de qué preocuparte, ¡Vamos! Animate a jugar.</div>
							</div>
						</div>
					</div>
					<div class="slide" style="background-image: url(http://i1166.photobucket.com/albums/q617/Rigbydekm/55.png);background-position: 100% 80%;">
						<div style="position: relative; height: inherit; width: inherit">
							<div class="innerbox">
								<div id="name">¡Regístrate Ahora! Es totalmente gratis</div>
								<div id="desc">Comienza o sigue formando parte de esta gran comunidad Latina.</div>
							</div>
						</div>
					</div>
			</div>
			<script>(function(d, s, id) {   var js, fjs = d.getElementsByTagName(s)[0];   if (d.getElementById(id)) return;   js = d.createElement(s); js.id = id;   js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.0";   fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
			<script>
				var currentSlide = 1;
				var intervalTime = 4000;
				var fade = 1000;
				var i = 0;
				var interval;
				var timeout;
				var oldSlide;
				var current;
				$(function() {
					$(".slide").each(function(index, element) {
						i++;
						$(".slides").html($(".slides").html()+"<div class='switch n"+i+"' onclick='switchTo(\""+i+"\")'></div> ");
					});
					
					startSlide();
					$(".switch.n1").addClass('active');
				});

				function switchTo(number) {
					if(currentSlide != number) {
						switchToSlide(number);
						startSlide();	
					}
				}

				function startSlide() {
					clearInterval(interval);
					interval = setInterval(function() {
						nextSlide();
					},intervalTime);
				}

				function nextSlide() {
					currentSlide++;
					if(currentSlide <= i) {
						switchToSlide(currentSlide);	
					} else {
						currentSlide = 1;
						switchToSlide(1);
					}
				}

				function switchToSlide(current) {
					clearTimeout(timeout);
					currentSlide = current;
					current = current;
					$(".switch").removeClass('active');
					$(".switch").animate({
						backgroundColor: 'rgba(255,255,255,0.3)'
					}, parseInt(fade/2));
					$(".switch.n"+current).animate({
						backgroundColor: '#FFF'
					}, parseInt(fade/2));
					timeout = setTimeout(function(){ 
						$(".container .slide").stop(true, true).fadeOut(fade);
						$(".container .slide:nth-child("+current+")").stop(true, true).fadeIn(fade).css('display','block');	
					}, 250);
				}
			</script>
			<div class="registerbanner">
				<img src="{CDN}/images/index/frank.gif" style="margin-top: 15px;float:left;margin-left: 120px;">
				<div id="sprechblase" style="width: auto;">Frank: ¡¿Qué esperas?! <a style="color: black;" href="/Registro">Regístrate ya!</a></div>
				<input type="button" id="register_button" onclick="location.href='/Registro'" value="Regístrate Gratis">
			</div></br>
			<div id="footer"><center>{SHORTNAME} {FOOTER}<br><div id="copy">Este Hotel usa <b>{ID}</b></div></center></div>																																																																																																																																																																																																																																																																																																																																											
		</div>
		
		<!--//BLOQUE COOKIES-->
		<div id="barraaceptacion">
			<div class="inner">
				Solicitamos su permiso para obtener datos estad&iacute;sticos de su navegaci&oacute;n en esta web, en cumplimiento del Real Decreto-ley 13/2012. Si contin&uacute;a navegando consideramos que acepta el uso de cookies.
				<a href="javascript:void(0);" class="info" style="color:#00ff2e;" onclick="PonerCookie();"><b>OK</b></a> | 
				<a href="http://politicadecookies.com" target="_blank" class="info">M&aacute;s informaci&oacute;n</a>
			</div>
		</div>
		<script>
			function getCookie(c_name){
				var c_value = document.cookie;
				var c_start = c_value.indexOf(" " + c_name + "=");
				if (c_start == -1){
					c_start = c_value.indexOf(c_name + "=");
				}
				if (c_start == -1){
					c_value = null;
				}else{
					c_start = c_value.indexOf("=", c_start) + 1;
					var c_end = c_value.indexOf(";", c_start);
					if (c_end == -1){
						c_end = c_value.length;
					}
					c_value = unescape(c_value.substring(c_start,c_end));
				}
				return c_value;
			}

			function setCookie(c_name,value,exdays){
				var exdate=new Date();
				exdate.setDate(exdate.getDate() + exdays);
				var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
				document.cookie=c_name + "=" + c_value;
			}

			if(getCookie('tiendaaviso')!="1"){
				document.getElementById("barraaceptacion").style.display="block";
			}
			function PonerCookie(){
				setCookie('tiendaaviso','1',365);
				document.getElementById("barraaceptacion").style.display="none";
			}
		</script>
		<!--//FIN BLOQUE COOKIES-->
		<script src="{CDN}/js/v3_landing_bottom.js" type="text/javascript"></script>
	</body>
</html>