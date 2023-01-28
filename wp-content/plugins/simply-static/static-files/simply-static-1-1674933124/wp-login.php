<!DOCTYPE html>
<html lang="es-PE">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Iniciar sesión &lsaquo; Comunidad Vida Cristiana &#8212; WordPress</title>
	<meta name="robots" content="noindex, nofollow, noarchive">
<link rel="stylesheet" id="dashicons-css" href="https://comunidadvidacristiana.netlify.app/wp-includes/css/dashicons.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="buttons-css" href="https://comunidadvidacristiana.netlify.app/wp-includes/css/buttons.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="forms-css" href="https://comunidadvidacristiana.netlify.app/wp-admin/css/forms.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="l10n-css" href="https://comunidadvidacristiana.netlify.app/wp-admin/css/l10n.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="login-css" href="https://comunidadvidacristiana.netlify.app/wp-admin/css/login.min.css?ver=6.1.1" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-es-pe">
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div id="login">
		<h1><a href="https://pe.wordpress.org/">Gestionado con WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="http://localhost:8888/cvc/wp-login.php" method="post">
			<p>
				<label for="user_login">Nombre de usuario o correo electrónico</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Contraseña</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Mostrar contraseña">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Recordarme</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Iniciar sesión">
									<input type="hidden" name="redirect_to" value="http://localhost:8888/cvc/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a href="https://comunidadvidacristiana.netlify.app/wp-login.php?action=lostpassword">¿Olvidó su contraseña?</a>			</p>
					<script type="text/javascript">function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }</script>
				<p id="backtoblog">
			<a href="https://comunidadvidacristiana.netlify.app/">&larr; Ir a Comunidad Vida Cristiana</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">Idioma</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="es_PE" lang="es" selected data-installed="1">Español de Perú</option></select>
					
					
					
						<input type="submit" class="button" value="Change">

					</form>
				</div>
				<script src="https://comunidadvidacristiana.netlify.app/wp-includes/js/jquery/jquery.min.js?ver=3.6.1" id="jquery-core-js"></script>
<script src="https://comunidadvidacristiana.netlify.app/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script id="zxcvbn-async-js-extra">var _zxcvbnSettings = {"src":"https:\/\/comunidadvidacristiana.netlify.app\/wp-includes\/js\/zxcvbn.min.js"};</script>
<script src="https://comunidadvidacristiana.netlify.app/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script src="https://comunidadvidacristiana.netlify.app/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script src="https://comunidadvidacristiana.netlify.app/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="https://comunidadvidacristiana.netlify.app/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
<script src="https://comunidadvidacristiana.netlify.app/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script id="password-strength-meter-js-extra">var pwsL10n = {"unknown":"Fortaleza de la contraseña es desconocida","short":"Muy débil","bad":"Débil","good":"Mediano","strong":"Fuerte","mismatch":"No coinciden"};</script>
<script id="password-strength-meter-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2021-10-04 20:53:18+0000","generator":"GlotPress\/4.0.0-alpha.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"es_PE"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["¡%1$s está obsoleto desde la versión %2$s! Usa %3$s en su lugar. Por favor, plantéate escribir un código más inclusivo."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );</script>
<script src="https://comunidadvidacristiana.netlify.app/wp-admin/js/password-strength-meter.min.js?ver=6.1.1" id="password-strength-meter-js"></script>
<script src="https://comunidadvidacristiana.netlify.app/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script id="wp-util-js-extra">var _wpUtilSettings = {"ajax":{"url":"\/cvc\/wp-admin\/admin-ajax.php"}};</script>
<script src="https://comunidadvidacristiana.netlify.app/wp-includes/js/wp-util.min.js?ver=6.1.1" id="wp-util-js"></script>
<script id="user-profile-js-extra">var userProfileL10n = {"user_id":"0","nonce":"fd1e881dab"};</script>
<script id="user-profile-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2021-10-04 20:53:18+0000","generator":"GlotPress\/4.0.0-alpha.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"es_PE"},"Your new password has not been saved.":["No ha sido guardada tu nueva contraseña."],"Show":["Mostrar"],"Hide":["Ocultar"],"Show password":["Mostrar contraseña"],"Hide password":["Ocultar contraseña"],"Confirm use of weak password":["Confirme el uso de una contraseña débil"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );</script>
<script src="https://comunidadvidacristiana.netlify.app/wp-admin/js/user-profile.min.js?ver=6.1.1" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>