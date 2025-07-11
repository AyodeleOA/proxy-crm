{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{* modules/Users/views/Login.php *}

{strip}
<style>
#page {
    padding-top: 0px;
    height: inherit;
}

.failureMessage {
	color: red;
	display: block;
	text-align: center;
}
.successMessage {
	color: green;
	display: block;
	text-align: center;
	padding: 0px 0px 10px;
}
</style>
	
	  <div class="container">
		<div class="login-box" >
		<div id="loginFormDiv">
		  <h2>Welcome back 👋</h2>
		  <p>Let's get your day started. It's your day to shine.<br>
			Sign in and get started on your projects.</p>
			<div>
					<span class="{if !$ERROR}hide{/if} failureMessage" id="validationMessage">{$MESSid=AGE}</span>
					<span class="{if !$MAIL_STATUS}hide{/if} successMessage">{$MESSAGE}</span>
			</div>

		  <form id="loginForm" class="form-horizontal" method="POST" action="index.php">
			<input type="hidden" name="module" value="Users"/>
			<input type="hidden" name="action" value="Login"/>
			<label>Email</label>
			<input type="text" id="username" type="text" name="username"  placeholder="Username" required />
			
	   
			<label>Password</label>
			<div class="password-wrapper">
			  <input type="password" name="password" id="password"  placeholder="Enter your password" required />
			  <span class="eye-icon" id="togglePassword">
				<i class="fa-solid fa-eye" id="eyeIcon"></i>
			  </span>
			</div>
			  
			<div class="options">
			  <label><input type="checkbox" checked /> Remember Me</label>
			  <a class="forgotPasswordLink">Forgot Password?</a>
			</div>
			
				{assign var="CUSTOM_SKINS" value=Vtiger_Theme::getAllSkins()}
				{if !empty($CUSTOM_SKINS)}
				<div class="group" style="margin-bottom: 10px;">
					<select id="skin" name="skin" placeholder="Skin" style="text-transform: capitalize; width:100%;height:30px;">
						<option value="">Default Skin</option>
						{foreach item=CUSTOM_SKIN from=$CUSTOM_SKINS}
						<option value="{$CUSTOM_SKIN}">{$CUSTOM_SKIN}</option>
						{/foreach}
					</select>
				</div>
				{/if}
			
			<button type="submit" class="signin-button">Sign In</button><br>
		  </form>
		</div>
		
		<div id="forgotPasswordDiv" class="hide">
		  <h2>Forgot Password</h2>
		
			<form class="form-horizontal" action="forgotPassword.php" method="POST">
						<div class="group">
							<input id="fusername" type="text" name="username" placeholder="Username" >
							<span class="bar"></span>
							<label>Username</label>
						</div>
						<div class="group">
							<input id="email" type="email" name="emailId" placeholder="Email" >
							<span class="bar"></span>
							<label>Email</label>
						</div>
						<div class="group">
							<button type="submit" class="button buttonBlue forgot-submit-btn">Submit</button><br>
							<span>Please enter details and submit<a class="forgotPasswordLink pull-right" style="color: #15c;">Back</a></span>
						</div>
			</form>
					
		</div>
		
		
		  <footer>
			<p>©Copyright 2025 Prosynet Communications LTD</p>
		  </footer>
		</div>
		
	  </div>


		<script>
			jQuery(document).ready(function () {
				var validationMessage = jQuery('#validationMessage');
				var forgotPasswordDiv = jQuery('#forgotPasswordDiv');

				var loginFormDiv = jQuery('#loginFormDiv');
				loginFormDiv.find('#password').focus();

				loginFormDiv.find('a').click(function () {
					loginFormDiv.toggleClass('hide');
					forgotPasswordDiv.toggleClass('hide');
					validationMessage.addClass('hide');
				});

				forgotPasswordDiv.find('a').click(function () {
					loginFormDiv.toggleClass('hide');
					forgotPasswordDiv.toggleClass('hide');
					validationMessage.addClass('hide');
				});

				loginFormDiv.find('button').on('click', function () {
					var username = loginFormDiv.find('#username').val();
					var password = jQuery('#password').val();
					var result = true;
					var errorMessage = '';
					if (username === '') {
						errorMessage = 'Please enter valid username';
						result = false;
					} else if (password === '') {
						errorMessage = 'Please enter valid password';
						result = false;
					}
					if (errorMessage) {
						validationMessage.removeClass('hide').text(errorMessage);
					}
					return result;
				});

				forgotPasswordDiv.find('button').on('click', function () {
					var username = jQuery('#forgotPasswordDiv #fusername').val();
					var email = jQuery('#email').val();

					var email1 = email.replace(/^\s+/, '').replace(/\s+$/, '');
					var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/;
					var illegalChars = /[\(\)\<\>\,\;\:\\\"\[\]]/;

					var result = true;
					var errorMessage = '';
					if (username === '') {
						errorMessage = 'Please enter valid username';
						result = false;
					} else if (!emailFilter.test(email1) || email == '') {
						errorMessage = 'Please enter valid email address';
						result = false;
					} else if (email.match(illegalChars)) {
						errorMessage = 'The email address contains illegal characters.';
						result = false;
					}
					if (errorMessage) {
						validationMessage.removeClass('hide').text(errorMessage);
					}
					return result;
				});
				jQuery('input').blur(function (e) {
					var currentElement = jQuery(e.currentTarget);
					if (currentElement.val()) {
						currentElement.addClass('used');
					} else {
						currentElement.removeClass('used');
					}
				});

				var ripples = jQuery('.ripples');
				ripples.on('click.Ripples', function (e) {
					jQuery(e.currentTarget).addClass('is-active');
				});

				ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function (e) {
					jQuery(e.currentTarget).removeClass('is-active');
				});
				loginFormDiv.find('#username').focus();

				var slider = jQuery('.bxslider').bxSlider({
					auto: true,
					pause: 4000,
					nextText: "",
					prevText: "",
					autoHover: true
				});
				jQuery('.bx-prev, .bx-next, .bx-pager-item').live('click',function(){ slider.startAuto(); });
				jQuery('.bx-wrapper .bx-viewport').css('background-color', 'transparent');
				jQuery('.bx-wrapper .bxslider li').css('text-align', 'left');
				jQuery('.bx-wrapper .bx-pager').css('bottom', '-40px');

				var params = {
					theme		: 'dark-thick',
					setHeight	: '100%',
					advanced	:	{
										autoExpandHorizontalScroll:true,
										setTop: 0
									}
				};
				jQuery('.scrollContainer').mCustomScrollbar(params);
			});
		</script>
		
		  <script>
			// Password visibility toggle
			const passwordInput = document.getElementById("password");
			const togglePassword = document.getElementById("togglePassword");
			const eyeIcon = document.getElementById("eyeIcon");
		  
			togglePassword.addEventListener("click", function () {
			  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
			  passwordInput.setAttribute("type", type);
			  eyeIcon.classList.toggle("fa-eye");
			  eyeIcon.classList.toggle("fa-eye-slash");
			  togglePassword.classList.toggle("active");
			});
			
		  </script>
  
		</div>
	{/strip}
