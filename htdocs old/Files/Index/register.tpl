<?php global $db; $result = $db->query("SELECT * FROM cms_settings WHERE id = 1 LIMIT 1"); while($mant = $result->fetch_array()){ if($mant['mantenimiento'] == 1){header("LOCATION: ". PATH ."/Mantenimiento"); } } ?>
<?php global $db;$result = $db->query("SELECT * FROM cms_settings WHERE id = '1'");while($data = $result->fetch_array()){if($data['registros'] == 1){?>
<html>
	﻿﻿<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>{SHORTNAME} ~ Registro</title>
		<link rel="shortcut icon" href="{CDN}/images/favicon.ico" type="image/vnd.microsoft.icon">
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<link rel="stylesheet" href="{CDN}/css/index.css" type="text/css" media="all" />
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>																																																																																																																																																																																																																																																																																																																																																															<?php echo'<i style="color: white;text-align: center;font-size:0px;"> &#79;&#110;&#101;&#67;&#77;&#83; &#98;&#121; &#74;&#101;&#105;&#104;&#100;&#101;&#110;</i>'; ?>
	</head>
	<body>
		<div id="hotel_bg"></div>
		<div id="hotel_bg_right"></div>
		<div id="header"><div class="content"><div class="online-count" style="height:60%;"><img src="{CDN}/images/index/ons.gif" style="margin-right: 2px;float: left;height: 20px;">{USERSON} Conectados</div></div></div>
		<div id="header-bottom"><div class="content2"><img src="{CDN}/images/index/header.png" style="margin-top:-75px;"><img src="{CDN}/images/index/sole.png" style="margin-top:-20%;margin-left:15%;"></div></div>
		
		<div class="content" style="margin-top:10px;">																																																																																																																																																																																																																																																																																																																																																																							
			{ERROR}<br>		
			<a href="/Registro"><img src="{LOGO}" class="logo"/></a>
			<div class="left" style="margin-top:40px;">
				<div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
				<div style="float:right;margin-right:-70px;margin-top:-35px;"class="fb-share-button" data-href="https://www.facebook.com/Habbo" data-layout="button_count"></div>
				<form method="post" action="<?php echo PATH; ?>/register_submit.php">
					<input type="text" name="reg.username" class="text" value="<?php echo $_SESSION['REG_USERNAME']; ?>" placeholder="Usuario"></input>
					<input type="password" name="reg.password" class="password" value="<?php echo $_SESSION['REG_PASSWORD']; ?>" placeholder="Contraseña"></input>
					<input type="password" name="reg.password2" class="password" value="<?php echo $_SESSION['REG_PASSWORD2']; ?>" placeholder="Repite tu Contraseña"></input>
					<input type="email" name="reg.mail" class="password" value="<?php echo $_SESSION['REG_MAIL']; ?>" placeholder="Email"></input><br><br>
					<select name="DD" class="col s12 m4 l4 browser-default">
						<option value="" disabled selected>D&iacute;a</option>
						<option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
					</select>
					<select name="MM" class="col s12 m4 l4 browser-default" style="width:43%;">
						<option value="" disabled selected>Mes</option>
						<option value="01" >Enero</option><option value="02" >Febrero</option><option value="03" >Marzo</option><option value="04" >Abril</option><option value="05" >Mayo</option><option value="06" >Junio</option><option value="07" >Julio</option><option value="08" >Agosto</option><option value="09" >Septiembre</option><option value="10" >Octubre</option><option value="11" >Noviembre</option><option value="12" >Diciembre</option>
					</select>
					<select name="AAAA" class="col s12 m4 l4 browser-default-right">
						<option value="" disabled selected>A&ntilde;o</option>
						<option value="2010" >2010</option><option value="2009" >2009</option><option value="2008" >2008</option><option value="2007" >2007</option><option value="2006" >2006</option><option value="2005" >2005</option><option value="2004" >2004</option><option value="2003" >2003</option><option value="2002" >2002</option><option value="2001" >2001</option><option value="2000" >2000</option><option value="1999" >1999</option><option value="1998" >1998</option><option value="1997" >1997</option><option value="1996" >1996</option><option value="1995" >1995</option><option value="1994" >1994</option><option value="1993" >1993</option><option value="1992" >1992</option><option value="1991" >1991</option><option value="1990" >1990</option><option value="1989" >1989</option><option value="1988" >1988</option><option value="1987" >1987</option><option value="1986" >1986</option><option value="1985" >1985</option><option value="1984" >1984</option><option value="1983" >1983</option><option value="1982" >1982</option><option value="1981" >1981</option><option value="1980" >1980</option><option value="1979" >1979</option><option value="1978" >1978</option><option value="1977" >1977</option><option value="1976" >1976</option><option value="1975" >1975</option><option value="1974" >1974</option><option value="1973" >1973</option><option value="1972" >1972</option><option value="1971" >1971</option><option value="1970" >1970</option>
					</select>
					<div class="left" style="margin-top:8px;margin-bottom:3%;width:130%;padding:5px;background-color:white;background-repeat: no-repeat;color: #454545;background-position: 4px 4px;border-radius:5px;font-size:13px;box-shadow: inset 0px 2px 0px 0px rgba(255,255,255,0.3), inset 0px -3px 0px 0px rgba(0,0,0,0.1);border: 1px solid rgba(0,0,0,0.4);">
						Elige una placa con la cual ser&aacute;s obsequiado por registrarte<br>
									<div id="register_badges">
										<?php 	global $db;
											$badreg = $db->query("SELECT * FROM cms_badges_reg ORDER BY id ASC LIMIT 9");
											if($badreg->num_rows > 0){
												while($bdg = $badreg->fetch_array()){?>
												<input class="with-gap" name="badge" id="badge_<?php echo $bdg['id']; ?>" value="<?php echo $bdg['code']; ?>" type="radio" checked/><label for="badge_<?php echo $bdg['id']; ?>"><img src="<?php echo BADGEURL; ?><?php echo $bdg['code']; ?>.gif"></label>
										<?php } }else{ echo '<b style="color:red;">No hay Placas en la Base de Datos</b><br><br><br>'; } ?>
											<img src="{CDN}/images/index/frank2.gif" style="float:right;margin-top:-25%;margin-right:-10px;">
									</div>	
					</div>
					<div style="font-size:15px;color:#454545;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none; user-select: none;">Captcha: <b>{CAPTCHA}</b></div>
					<input type="text" name="reg.captcha" class="password" placeholder="Repite EXACTAMENTE el c&oacute;digo Captcha"></br>
					<div style="clear: both;"><input id="code" type="hidden" name="look" value="&nbsp;"></input><br clear="all"></div>
					<input name="action" type="submit" id="register_button" style="margin-top:8px;height: 46px;float:left;width: 300px;" value="¡Registrarme ya!">
				</form>
				<a href="/Index" style="float:right;font-size:13px;color:white;">&laquo; Ya no quiero registrarme :(</a>
			</div>

			<div class="containerlooks" style="margin-top:-8px;">
					<link rel="stylesheet" href="{CDN}/css/materialize.min.css" media="all" />
					<script src="{CDN}/js/avatar.js"></script>
					<script>
						var Avatargenerator = new Avatargenerator();            
					</script>
					
					<style>
					@import url(http://fonts.googleapis.com/css?family=Roboto:400,300,600,700,800);
					@import url(http://fonts.googleapis.com/css?family=Ubuntu:100,200,300,400,600,700,800,900);    
					
					html, body, div, span, applet, object, iframe,
					h1, h2, h3, h4, h5, h6, p, blockquote, pre,
					a, abbr, acronym, address, big, cite, code,
					del, dfn, em, img, ins, kbd, q, s, samp,
					small, strike, strong, sub, sup, tt, var,
					b, u, i, center,
					dl, dt, dd, ol, ul, li,
					fieldset, form, label, legend,
					table, caption, tbody, tfoot, thead, tr, th, td,
					article, aside, canvas, details, embed, 
					figure, figcaption, footer, header, hgroup, 
					menu, nav, output, ruby, section, summary,
					time, mark, audio, video {
						margin: 0;
						padding: 0;
						border: 0;
					}
					/* HTML5 display-role reset for older browsers */
					article, aside, details, figcaption, figure, 
					footer, header, hgroup, menu, nav, section {
						display: block;
					}
					ol, ul {
						list-style: none;
					}
					blockquote, q {
						quotes: none;
					}
					blockquote:before, blockquote:after,
					q:before, q:after {
						content: '';
						content: none;
					}
					table {
						border-collapse: collapse;
						border-spacing: 0;
					}
					html {
						box-sizing: border-box;
					}
					*, *:before, *:after {
						box-sizing: inherit;
					}  

					#content {
						margin: 0 auto;
						width: 550px;
						
					}
					#palette {
						width: 410px;
						margin-top: 30px;
						overflow-y: auto;
						height: 100px;
					}
					.palette-child {
						float: left;
						height: 25px;
						width: 25px;
						cursor: pointer;
						margin-right: 5px;
						margin-bottom: 5px;
						border-radius: 20px;
						border: 2px solid rgba(0,0,0,0.3);
					}
						
					.palette-child.selected {
						cursor: auto;
						box-shadow: inset 0px 0px 0  3px rgba(255,255,255,0.3);
					}
						
					#clothes {
						height: 200px;
						width: 410px;
						overflow-y: scroll;
					}
					
						
					.clothes-object {
						height: 45px;
						cursor: pointer;
						width: 45px;
						float: left;
						margin-right: 10px;
						margin-bottom: 10px;
						text-align: center;
						line-height: 50px;
						background-position-x: center;
						border-radius: 35px;
						background-repeat: no-repeat;
						border: 3px solid #DBDAD5;
						background-color: #C9C8C3;   
					}
						
					.clothes-object.selected {
						border-radius: 35px;
						border: 3px solid rgba(52, 152, 219,0.6);
						background-color: #B1B1B1;   
						cursor: auto;
					}
						
					.clothes-object.hr, .clothes-object.hd, .clothes-object.he, .clothes-object.ea, .clothes-object.ha, .clothes-object.fa {
						background-position-y: -20px;   
					}
						
					.clothes-object.ca, .clothes-object.ch, .clothes-object.cp, .clothes-object.cc {
						background-position-y: -40px;
					}
						
					.clothes-object.wa {
						background-position-y: -60px;   
					}
					
					.clothes-object.sh {
						background-position-y: -80px;   
					}
						
					.clothes-object.remove {
						background-position-y: center;   
						background-image: url('{CDN}/images/avatar/remove.png');
					}
						
					.clothes-object.lg {
						background-position-y: -70px;   
					}
						
					
					
					#avatar {
						height: 220px;
						width: 128px;
						float: left;
						background-image: url('http://www.habbo.de/habbo-imaging/avatarimage?figure=&size=l&direction=4');
					}
						
					nav {
						font-family: Ubuntu;
						font-weight: lighter;
						height: 100px;
						border-radius:5px 5px 0px 0px;
						padding-top: 20px;
						
					}
					nav > ul {
						list-style: none;
					}
						
					nav > ul > li{
						float: left;
						margin-right: 10px;
						cursor: pointer;
					}
						
					nav > ul > li.selected {
						font-weight: bolder;   
						cursor: auto;
						pointer-events: none;
					}
						
					nav > ul.subnav {
						display: none;
					}
						
					nav > ul.subnav.selected {
						display: block;    
					}
						
					nav > ul.subnav.selected > .selected {
						font-weight: bolder;   
					}
						
					.rotate {
						height: 29px;
						width: 64px;
						
						background-repeat: no-repeat;
					
						cursor: pointer;
					}
					.rotate.left {
						background-position: center;
						float: left;
						background-image: url('{CDN}/images/avatar/rotate_left.png');
					}
						
					.rotate.right {
						float: right;
						background-position: center;
						background-image: url('{CDN}/images/avatar/rotate_right.png');
					}
						
					.rotate:hover {
						opacity: 0.5;   
					}
						
					</style>
					
					<div id="content">
						<nav style="background-color: #0085D6;width: 600px;margin-left: -25px;">
							<ul style="margin-top: -8px;">
								<li class="waves-effect waves-light btn mainNav selected" nav-point="hd" style="font-size: 15px;margin-left: 10px;padding: 0 0.5rem;" onclick="openNav('hd');setSet('hd')">Cara</li>
								<li class="waves-effect waves-light btn mainNav" nav-point="hr" style="font-size: 15px;padding: 0 0.5rem;" onclick="openNav('hr'); setSet('hr');">Cabello</li>
								<li class="waves-effect waves-light btn mainNav" nav-point="ch" style="font-size: 15px;padding: 0 0.5rem;" onclick="openNav('ch');setSet('ch');">Camisas</li>
								<li class="waves-effect waves-light btn mainNav" nav-point="lg" style="font-size: 15px;padding: 0 0.6rem;" onclick="openNav('lg');setSet('lg');">Pantalones</li>
							</ul>
							<div style="margin-bottom: 10px;clear: both"></div>
							
							<ul class="subnav selected" subnav="hd">
								<li class="waves-effect waves-light btn subNav selected" style="margin-left: 10px;font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='gender-m' onclick="setGender('M');activateSub('gender-m')">Masculino</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='gender-f' onclick="setGender('F');activateSub('gender-f')">Femenino</li>
							</ul>
							<ul class="subnav" subnav="hr">
								<li class="waves-effect waves-light btn subNav selected" style="margin-left: 10px;font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='hair' onclick="setSet('hr');activateSub('hair')">Cabello</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='hats' onclick="setSet('ha');activateSub('hats')">Sombreros</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='he' onclick="setSet('he');activateSub('he')">Tocado</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='ea' onclick="setSet('ea');activateSub('ea')">Gafas</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='fa' onclick="setSet('fa');activateSub('fa')">Mascaras</li>
							</ul>
							
							<ul class="subnav" subnav="ch">
								<li class="waves-effect waves-light btn subNav selected" style="margin-left: 10px;font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='ch' onclick="setSet('ch');activateSub('ch')">Principal</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='cp' onclick="setSet('cp');activateSub('cp')">Etiquetas</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='cc' onclick="setSet('cc');activateSub('cc')">Chaquetas</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='ca' onclick="setSet('ca');activateSub('ca')">Prendas</li>
							</ul>
							
							<ul class="subnav" subnav="lg">
								<li class="waves-effect waves-light btn subNav selected" style="margin-left: 10px;font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='lg' onclick="setSet('lg');activateSub('lg')">Pantalones</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='sh' onclick="setSet('sh');activateSub('sh')">Zapatos</li>
								<li class="waves-effect waves-light btn subNav" style="font-size: 12px;padding: 0 0.5rem;margin-top: -6px;" subnav-point='wa' onclick="setSet('wa');activateSub('wa')">Cinturones</li>
							</ul>
						</nav>
						<div style="float: right">
							<div id="avatar"></div>
							<div style="clear: both"></div>
							<div class="rotate left" onclick="rotateAvatar('left')"></div>
							<div class="rotate right" onclick="rotateAvatar('right')"></div>
						</div>
						<div style="float: left; margin-bottom: 20px;">
							<div id="clothes" style="margin-left: 10px;margin-top: 13px;"></div>
							<div style="clear: both"></div>
							<div id="palette" style="margin-left: 10px;height: 150px;margin-top: 1px;"></div>
						</div>
					</div>
					
					<script>   
						var direction = 4;
							
						function openNav(point) {
							var mainNavigationObjects = document.getElementsByClassName('mainNav');   
							for(var key in mainNavigationObjects) {
								var cObject = mainNavigationObjects[key];
								if(typeof cObject.classList == 'object') {
									if(cObject.getAttribute('nav-point') == point) {
										cObject.classList.add('selected');
										openSubnav(point);
									} else {
										cObject.classList.remove('selected');   
									}
								}
							}
							
							return false;
						}
							
						function openSubnav(point) {
							var subNavigationObjects = document.getElementsByClassName('subnav');   
							for(var key in subNavigationObjects) {
								var cObject = subNavigationObjects[key];
								if(typeof cObject == 'object') {
									if(cObject.getAttribute('subnav') == point) {
										cObject.classList.add('selected');
									} else {
										cObject.classList.remove('selected');
									}
								}
							}
							
							return false;
						}
							
						function activateSub(point) {
							var subNavigationObjects = document.getElementsByClassName('subNav');   
							for(var key in subNavigationObjects) {
								var cObject = subNavigationObjects[key];
								if(typeof cObject == 'object') {
									if(cObject.getAttribute('subnav-point') == point) {
										cObject.classList.add('selected');
									} else {
										cObject.classList.remove('selected');
									}
								}
							}
							
							return false;
						}
							
						function setGender(gender) {
							Avatargenerator.setGender(gender);
							setSet(Avatargenerator.currentSet);
							drawAvatar();
						}
							
						setSet(Avatargenerator.currentSet);
						drawAvatar();
							
						function getCode() {
						  console.log(Avatargenerator.generateCode());   
						}
							
						function inArray(value, array) {
							return array.indexOf(value) > -1;
						}
							
						function setClothes() {
							var uSet = Avatargenerator.getSet('U', Avatargenerator.currentSet);
							var gSet = Avatargenerator.getSet(Avatargenerator.gender, Avatargenerator.currentSet);
							var set = uSet.concat(gSet);
							
							var loadedClothes = [];
										
							set.forEach(function(element, index, array) {
								if(!inArray(element, loadedClothes)) {
									loadedClothes.push(element);
									div = document.createElement('div');
									if(Avatargenerator.getByType(Avatargenerator.currentSet)[1] == element) {
										div.className = 'clothes-object '+Avatargenerator.currentSet+' '+element+' selected'; 
									} else {
										div.className = 'clothes-object '+Avatargenerator.currentSet + ' '+element;
									}
									div.setAttribute('remove', 0);
									div.setAttribute('element', element);

									//div.innerHTML = element;

									color = 0;

									if(Avatargenerator.getColor(Avatargenerator.currentSet) != null) {
										color = Avatargenerator.getColor(Avatargenerator.currentSet);    
									} 

									div.style.backgroundImage = "url('http://www.habbo.de/habbo-imaging/avatarimage?figure="+Avatargenerator.currentSet+"-"+element+"-"+color+"')";

									div.onclick = function() {   
										var clothesObjects = document.getElementsByClassName('clothes-object');
										for(var key in clothesObjects) {
											var currentObject = clothesObjects[key];
											if(typeof currentObject.className == 'string') {                            
												if(currentObject.classList[2] == element) {
													if(typeof currentObject.classList[3] == 'undefined' && currentObject.classList[3] != 'selected') {
														currentObject.classList.add('selected');   
													}
												} else {
													currentObject.classList.remove('selected');   
												}

											}
										}                    

										Avatargenerator.setCloth(element,Avatargenerator.currentSet);
										return drawAvatar();
									};
								
									
									document.getElementById('clothes').appendChild(div);
								}
							});
						}
						
						function setPalette() {
							var palette = [];
							
							Avatargenerator.getSets().forEach(function(e, i, a) {
								if(e[0] == Avatargenerator.currentSet) {
									palette = Avatargenerator.getPaletteById(e[1]);
								}  
							});
							palette.forEach(function(e, i, a) {
								if(typeof e != 'number') {
									var div = document.createElement('div');
									if(Avatargenerator.getColor(Avatargenerator.currentSet) == e[0]) {
									   div.className = 'palette-child selected';
									} else {
										div.className = 'palette-child';
									}
									div.nColor = e[0];
									div.nType = Avatargenerator.currentSet;
									div.style.backgroundColor = '#'+e[1];
									div.onclick = function() {
										
										Avatargenerator.setColor(e[0], Avatargenerator.currentSet);
																
										var paletteObjects = document.getElementsByClassName('palette-child');
										for(var key in paletteObjects) {
											var currentObject = paletteObjects[key];
											if(typeof currentObject.className == 'string') {    
												if(currentObject.nColor == e[0]) {
													if(currentObject.nType == Avatargenerator.currentSet) {
														currentObject.classList.add('selected');   
													} else {
														currentObject.classList.remove('selected');   
													}
												} else {
													currentObject.classList.remove('selected');   
												}
											}
										}                        
										
										var clothesObjects = document.getElementsByClassName('clothes-object');
										for (var nKey in clothesObjects) {
											var nCObject = clothesObjects[nKey];
											
											if(typeof nCObject.style != 'undefined') {
												if(typeof nCObject.getAttribute('remove') == 'string' && nCObject.getAttribute('remove') == '0') {
													nCObject.style.backgroundImage = "url('http://www.habbo.de/habbo-imaging/avatarimage?figure="+Avatargenerator.currentSet+"-"+nCObject.getAttribute('element')+"-"+e[0]+"')";
												}
											}
										}
										
										//setClothes();
										return drawAvatar();
									};
									
									
									document.getElementById("palette").appendChild(div);
								}
							});
						}
							
						function drawAvatar() {
							document.getElementById("avatar").style.backgroundImage = "url('http://www.habbo.de/habbo-imaging/avatarimage?figure="+Avatargenerator.generateCode()+"&size=l&direction="+direction+"&head_direction="+direction+"')";
							document.getElementById('code').value= ''+Avatargenerator.generateCode();
						}

						  
						function rotateAvatar(ndirection) {
							if(ndirection == 'left') {
								if(direction == 7) {
									direction = 0;   
								} else {
									direction++;
								}
							} else {
								if(direction == 0) {
									direction = 7;   
								} else {
									direction--;
								}
							}
							return drawAvatar();
						}
										
						function setSet(set) {
							Avatargenerator.currentSet = set;
							document.getElementById("palette").textContent = '';
							document.getElementById("clothes").textContent = '';
							
							if(Avatargenerator.isAllowedToRemove(set)) {
						   
								var div = document.createElement('div');
								div.className = 'clothes-object remove'; 
								div.setAttribute('remove', '1');
								div.onclick = function() {
									Avatargenerator.setCloth(0,Avatargenerator.currentSet);
									var clothesObjects = document.getElementsByClassName('clothes-object');
									for(var key in clothesObjects) {
										var currentObject = clothesObjects[key];
										if(typeof currentObject.className == 'string') {                            
											currentObject.classList.remove('selected');   
										}
									}
									
									div.className = 'clothes-object remove selected'; 
									return drawAvatar();
								};
								document.getElementById("clothes").appendChild(div);
							}
							
							setClothes();
							setPalette();
						}
					</script>
			</div>
			<div class="containerlooks" style="margin-top:8px;padding:5px;">
				<font size="4px">Últimos registrados</font><br>
				<hr>
				<center>
					<?php 	global $db;
						$usreg = $db->query("SELECT * FROM users ORDER BY id DESC LIMIT 6");
						if($usreg->num_rows > 0){
							while($us = $usreg->fetch_array()){?>
							<div class="look" style="background-image: url('{AVATARIMAGE}<?php echo $us['look']; ?>');" title="<?php echo $us['username']; ?> | Creado: El <?php setlocale(LC_TIME,"spanish"); echo utf8_encode(strftime("%A %d de %B del %Y", $us['account_created'])); ?>"></div>
							
					<?php } }else{ echo '<b style="color:red;">No hay Usuarios Registrados A&uacute;n</b><br><br><br>'; } ?>
					
				</center>
			</div>
			</br>
			<div id="footerreg"><center>{SHORTNAME} {FOOTER}<br><div id="copy">Este Hotel usa <b>{ID}</b></div></center></div>						
		</div>
	</body>
</html>
<?php }else{$_SESSION['LOGIN_ERROR'] = "Los registros han sido desactivados temporalmente";header("LOCATION: ". PATH ."/Index");}}?>