<?php
/* Smarty version 4.5.4, created on 2025-05-26 12:54:42
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\Users\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6834649275d946_04324982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df1d20e580b2f15f386cbc077d4ad4b194d49210' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\Users\\Login.tpl',
      1 => 1748264079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834649275d946_04324982 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>#page {padding-top: 0px;height: inherit;}.failureMessage {color: red;display: block;text-align: center;}.successMessage {color: green;display: block;text-align: center;padding: 0px 0px 10px;}</style><div class="container"><div class="login-box" ><div id="loginFormDiv"><h2>Welcome back 👋</h2><p>Let's get your day started. It's your day to shine.<br>Sign in and get started on your projects.</p><div><span class="<?php if (!$_smarty_tpl->tpl_vars['ERROR']->value) {?>hide<?php }?> failureMessage" id="validationMessage"><?php $_smarty_tpl->_assignInScope('MESSid', 'AGE');?></span><span class="<?php if (!$_smarty_tpl->tpl_vars['MAIL_STATUS']->value) {?>hide<?php }?> successMessage"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</span></div><form id="loginForm" class="form-horizontal" method="POST" action="index.php"><input type="hidden" name="module" value="Users"/><input type="hidden" name="action" value="Login"/><label>Email</label><input type="text" id="username" type="text" name="username" placeholder="Username" required /><label>Password</label><div class="password-wrapper"><input type="password" name="password" id="password" placeholder="Enter your password" required /><span class="eye-icon" id="togglePassword"><i class="fa-solid fa-eye" id="eyeIcon"></i></span></div><div class="options"><label><input type="checkbox" checked /> Remember Me</label><a class="forgotPasswordLink">Forgot Password?</a></div><?php $_smarty_tpl->_assignInScope('CUSTOM_SKINS', Vtiger_Theme::getAllSkins());
if (!empty($_smarty_tpl->tpl_vars['CUSTOM_SKINS']->value)) {?><div class="group" style="margin-bottom: 10px;"><select id="skin" name="skin" placeholder="Skin" style="text-transform: capitalize; width:100%;height:30px;"><option value="">Default Skin</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_SKINS']->value, 'CUSTOM_SKIN');
$_smarty_tpl->tpl_vars['CUSTOM_SKIN']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_SKIN']->value) {
$_smarty_tpl->tpl_vars['CUSTOM_SKIN']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_SKIN']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CUSTOM_SKIN']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?><button type="submit" class="signin-button">Sign In</button><br></form></div><div id="forgotPasswordDiv" class="hide"><h2>Forgot Password</h2><form class="form-horizontal" action="forgotPassword.php" method="POST"><div class="group"><input id="fusername" type="text" name="username" placeholder="Username" ><span class="bar"></span><label>Username</label></div><div class="group"><input id="email" type="email" name="emailId" placeholder="Email" ><span class="bar"></span><label>Email</label></div><div class="group"><button type="submit" class="button buttonBlue forgot-submit-btn">Submit</button><br><span>Please enter details and submit<a class="forgotPasswordLink pull-right" style="color: #15c;">Back</a></span></div></form></div><footer><p>©Copyright 2025 Prosynet Communications LTD</p></footer></div></div><?php echo '<script'; ?>
>
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
		<?php echo '</script'; ?>
><?php echo '<script'; ?>
>
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
			
		  <?php echo '</script'; ?>
></div>
<?php }
}
