<?php include_once('../config.php');

$gameCode    = $_REQUEST['gameid'];
$specialGameCode = $CONFIG['specicalGameCodes'];

if(in_array($gameCode, $specialGameCode, true)) {
    $host = rtrim($CONFIG['host'],"/");
    $redirectUrl = $host . $_SERVER['REQUEST_URI'];
    if($_SERVER['HTTP_HOST'] !== 'gamebox2.creaction-network.com') {
        header('Location:' . $redirectUrl);
    }
}

$fbAppList = [
    'loar'     => '340989056058098',
    'lobr'     => '237995926316918',
    'lode'     => '819224811435018',
    'loel'     => '745353535508346',
    'loes'     => '525004654217362',
    'lofr'     => '1723488324541538',
    'loit'     => '653755921394361',
    'lonl'     => '598441633564232',
    'lopl'     => '454465281300872',
    'lorpt'    => '127066761352922',
    'lortr'    => '912886975477479',
    'loru'     => '1597523750505918',
    'losv'     => '388606374615694',
    'lotr'     => '340651019346903',
    'narutode' => '1538179059837850',
    'narutoen' => '447973262074550',
    'narutoes' => '1512682705727003',
    'narutofr' => '562265367280905',
    'narutoit' => '1074884879203121',
    'narutopl' => '231602602186835',
    'narutopt' => '951098834965349',
    'narutotr' => '458874980963094',
];

$gameFbAppId = (isset($fbAppList[$gameCode])) ? $fbAppList[$gameCode] : '447973262074550';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<?php if($lg == 'ar') { ;?>
<link href="<?php echo $CONFIG['dir']?>static/css/oas.global.ar.css?ver=<?php echo $CONFIG['version']?>" rel="stylesheet" type="text/css" />
<?php }else{ ;?>
<link href="<?php echo $CONFIG['dir']?>static/css/oas.global.css?ver=<?php echo $CONFIG['version']?>" rel="stylesheet" type="text/css" />
<?php }; ?>
<script src="<?php echo $CONFIG['dir']?>static/package/jquery.min.js?ver=<?php echo $CONFIG['version']?>" type="text/javascript"></script>
<script src="<?php echo $CONFIG['dir']?>static/package/oas.lang.js?ver=<?php echo $CONFIG['version']?>" type="text/javascript"></script>

<script type="text/javascript">
    var FB_APP_ID = "<?php echo $gameFbAppId?>";
</script>
</head>
<?php include_once('../../gdpr/gdpr.php'); ?>
<body scroll="no" style=" background: #e4e4e4;">
<div class="gb-outside-box">
	<!--弹出登陆窗口-->
	<div class="gb-dialog-login-box" id="gb-dialog-login-box">
		<div class="gb-dialog-common-login-t-c oas-gamebox-login-js">
			<div data-selecter="parent" data-type="oas">
				<div class="gb-dialog-login-t-box" id="common-login-box-wrap">
					<ul>
						<li>
							<div class="gb-dialog-login-name-box">
								<em class="oas-login-box-em"></em>
								<label data-name="usernameTip"  class="gb-login-default-val"><script type="text/javascript">OASWriteContent('Gamebox_Account')</script></label>
								<input type="text" class="gb-dialog-login-input" data-name="username" />
								<i class="gb-login-arrow-down" onclick="GSY.gamebox.showLoginUserList($(this))"></i>
							</div>
							<p data-name="accountError" class="gb-common-err-tips" id="gb-login-username-error"></p>
						</li>
							
						<li>
							<div class="gb-dialog-login-password-box">
								<em class="oas-login-box-em"></em>
								<label data-name="passwordTip" class="gb-login-default-val"><script type="text/javascript">OASWriteContent('Gamebox_Password')</script></label>
								<input type="password" data-name="password" />
							</div>
							<p data-name="accpassError" class="gb-common-err-tips" id="gb-login-password-error"></p>
						</li>
						<li class="gb-common-top-spacing gb-dialog-login-t-tag">
							<label class="gb-common-rem-paw">
								<input data-name="remember" type="checkbox" checked="checked" />
								<em class="oas-login-box-em"><script type="text/javascript">OASWriteContent('Gamebox_remember_password')</script></em>
							</label>
							<label class="gb-dlalog-forget-password" ><script type="text/javascript">OASWriteContent('Gamebox_Forgot_password');</script></label>
							<div clear="clear"></div>
						</li>
						<li class="gb-common-top-spacing">
							<a href="javascript:void(0);" data-name="gb-login-btn" onclick="GSY.gamebox.login($(this));return false;"  class="gb-dialog-login-btn" ><span><em><script type="text/javascript">OASWriteContent('Gamebox_Login');</script></em></span></a>
							<a href="javascript:void(0);"  class="gb-dialog-register-btn" id="gb-btn-to-register"><span><em><script type="text/javascript">OASWriteContent('Gamebox_Register_word');</script></em></span></a>
						</li>
						<li class="gb-xh-login-tips">
							<p><script type="text/javascript">OASWriteContent('Gamebox_fb_google_unRecord')</script></p>
						</li>
						<li class="gb-common-top-spacing-share">
							<p class="gb-login-by-others">
								<a  href="Javascript: void(0)" class="gb-login-by-facebook" onclick="OAS_GAMES_JS.facebook.login({'fail':'Fail to connect with facebook'},GSY.gamebox.FBloginCallback);"></a>
								<a href="Javascript: void(0)" class="gb-i gb-login-by-google" onclick="OAS_GAMES_JS.google.login({'fail':'Fail to connect with google'},GSY.gamebox.GOOGLEloginCallback);"></a>							
							</p>
						</li>
					</ul>
					<div class="lopl-login-wrap-list">
						<ul data-height="82" data-width="30"></ul>
					</div>	
					<p class="login-status-res"></p>
				</div>			
			
				<div class="gb-dialog-register-t-c" id="common-register-box-wrap">
					<div class="gb-dialog-register-t-box">
						<ul>
							<li>
								<div class="gb-dialog-register-name-box">
									<em class="oas-register-box-em"></em><label class="gb-login-default-val"><script type="text/javascript">OASWriteContent('Gamebox_Account')</script></label>
									<input id="gb-register-user-input" type="text" data-name="username" />
								</div>
								<p class="gb-common-err-tips" id="gb-reg-username-error"></p>
							</li>
							<li>
								<div class="gb-dialog-register-password-box">
									<em class="oas-register-box-em"></em><label class="gb-login-default-val"><script type="text/javascript">OASWriteContent('msg_pwd_length')</script></label><input id="gb-register-password-input" type="password" data-name="password" />
								</div>
								<p class="gb-common-err-tips" id="gb-reg-password-error"></p>
							</li>
							<li>
								<div class="gb-dialog-register-repassword-box">
									<em class="oas-register-box-em"></em><label class="gb-login-default-val"><script type="text/javascript">OASWriteContent('Gamebox_re_enter_password')</script></label><input id="gb-register-repassword-input" type="password" data-name="password" />
								</div>
								<p class="gb-common-err-tips" id="gb-reg-repassword-error"></p>
							</li>
                            <?php echo $html_reg_small_user_check ?>
							<li class="gb-common-btn-top">
								<a data-facebook="true" href="javascript:void(0);"  class="gb-dialog-login-btn" id="gb-oas-register"><span><em><script type="text/javascript">OASWriteContent('Gamebox_Register_word');</script></em></span></a>
								<a data-google="true" href="javascript:void(0);"  class="gb-dialog-register-btn" id="gb-btn-to-login"><span><em><script type="text/javascript">OASWriteContent('Gamebox_Login');</script></em></span></a>
							</li>
						</ul>
						<p class="reg-status-res" style="bottom: 41px;"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--弹出登陆窗口结束-->
</div>
<script type="text/javascript" src="<?php echo $CONFIG['dir']?>static/package/oas.common.js?ver=<?php echo $CONFIG['version']?>"></script>
<script type="text/javascript" src="<?php echo $CONFIG['dir']?>static/scripts/oas.gamebox.js?ver=<?php echo $CONFIG['version']?>"></script>
<script type="text/javascript" src="<?php echo $CONFIG['dir']?>static/package/oas.library.js?ver=<?php echo $CONFIG['version']?>"></script>
<script type="text/javascript" src="<?php echo $CONFIG['dir']?>static/scripts/oas.login.js?ver=<?php echo $CONFIG['version']?>"></script>
<script type="text/javascript" src="//gamebox2.oasgames.com/gamebox/tempfacebook.js?ver=<?php echo $CONFIG['version']?>"></script>

<script type="text/javascript">
/**
 * [description] 设置用户密码对语言操作
 * @return {[type]} [description]
 */
;(function(){
	return;
	var parent = $('#gb-dialog-login-box');
	var uname = parent.find('input[data-name=username]');
	var pwd = parent.find('input[data-name=password]');
	var unameVal = OASGetLangVal('Gamebox_Account');
	var pwdVal = OASGetLangVal('Gamebox_Password');
	uname.val(unameVal);
	pwd.val(pwdVal);

	//绑定初始化信息
	uname.focus(function(){
		GSY.util.fous($(this),unameVal,'#999');
	});

	//绑定初始化信息
	pwd.focus(function(){
		GSY.util.fous($(this),pwdVal,'#999');
	});
})();

</script>	
</body>
</html>
