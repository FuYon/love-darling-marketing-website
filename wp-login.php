<!DOCTYPE html>
<html lang="zh-CN">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>登录 &lsaquo; elytoys &#8212; WordPress</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<link rel="stylesheet" id="dashicons-css" href="https://toxictoys.raincloud.ink/wp-includes/css/dashicons.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="buttons-css" href="https://toxictoys.raincloud.ink/wp-includes/css/buttons.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="forms-css" href="https://toxictoys.raincloud.ink/wp-admin/css/forms.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="l10n-css" href="https://toxictoys.raincloud.ink/wp-admin/css/l10n.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="login-css" href="https://toxictoys.raincloud.ink/wp-admin/css/login.min.css?ver=6.1.1" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-zh-cn">
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div id="login">
		<h1><a href="https://cn.wordpress.org/">基于WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="http://ely.io/wordpress/wp-login.php" method="post">
			<p>
				<label for="user_login">用户名或电子邮箱地址</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">密码</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="显示密码">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">记住我</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录">
									<input type="hidden" name="redirect_to" value="http://ely.io/wordpress/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a href="https://toxictoys.raincloud.ink/wp-login.php?action=lostpassword">忘记密码？</a>			</p>
					<script type="text/javascript">function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }</script>
				<p id="backtoblog">
			<a href="https://toxictoys.raincloud.ink/">&larr; 返回到elytoys</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">语言</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="zh_CN" lang="zh" selected data-installed="1">简体中文</option></select>
					
					
					
						<input type="submit" class="button" value="更改">

					</form>
				</div>
				<script src="https://toxictoys.raincloud.ink/wp-includes/js/jquery/jquery.min.js?ver=3.6.1" id="jquery-core-js"></script>
<script src="https://toxictoys.raincloud.ink/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script id="zxcvbn-async-js-extra">var _zxcvbnSettings = {"src":"https:\/\/toxictoys.raincloud.ink\/wp-includes\/js\/zxcvbn.min.js"};</script>
<script src="https://toxictoys.raincloud.ink/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script src="https://toxictoys.raincloud.ink/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script src="https://toxictoys.raincloud.ink/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="https://toxictoys.raincloud.ink/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
<script src="https://toxictoys.raincloud.ink/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script id="password-strength-meter-js-extra">var pwsL10n = {"unknown":"密码强度未知","short":"非常弱","bad":"弱","good":"中等","strong":"强","mismatch":"不匹配"};</script>
<script id="password-strength-meter-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-12-18 06:20:30+0000","generator":"GlotPress\/4.0.0-alpha.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_CN"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["自%2$s版开始，%1$s已经淘汰，请改用%3$s。请考虑撰写更具兼容性的代码。"]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );</script>
<script src="https://toxictoys.raincloud.ink/wp-admin/js/password-strength-meter.min.js?ver=6.1.1" id="password-strength-meter-js"></script>
<script src="https://toxictoys.raincloud.ink/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script id="wp-util-js-extra">var _wpUtilSettings = {"ajax":{"url":"\/wordpress\/wp-admin\/admin-ajax.php"}};</script>
<script src="https://toxictoys.raincloud.ink/wp-includes/js/wp-util.min.js?ver=6.1.1" id="wp-util-js"></script>
<script id="user-profile-js-extra">var userProfileL10n = {"user_id":"0","nonce":"0cc79d04c8"};</script>
<script id="user-profile-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-12-18 06:20:30+0000","generator":"GlotPress\/4.0.0-alpha.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_CN"},"Your new password has not been saved.":["您的新密码未被保存。"],"Hide":["隐藏"],"Show":["显示"],"Confirm use of weak password":["确认使用弱密码"],"Hide password":["隐藏密码"],"Show password":["显示密码"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );</script>
<script src="https://toxictoys.raincloud.ink/wp-admin/js/user-profile.min.js?ver=6.1.1" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>