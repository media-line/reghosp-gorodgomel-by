<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<jdoc:include type="head" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo $this->baseurl ?>/templates/ugokb/style.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrap">
		
		<div id="main" class="clearfix">
			<div class="lang-select">
				<div id="google_translate_element">
					
					<div class="skiptranslate goog-te-gadget" dir="ltr" style="">
						<div id=":0.targetLanguage" style="display: inline;">
							<!--<select class="goog-te-combo">
								<option value="">Выбрать язык</option>
								<option value="en">английский</option>
								<option value="be">белорусский</option>
								<option value="zh-TW">китайский (традиционный)</option>
							</select>-->
						</div>
						<!--&nbsp;&nbsp;Технологии <span style="white-space:nowrap">
						<a target="_blank" href="https://translate.google.com" class="goog-logo-link">
							<img width="37px" height="13px" style="padding-right: 3px" src="https://www.google.com/images/logos/google_logo_41.png">Переводчик
						</a>
						</span>-->
					</div>
				</div>
				<script type="text/javascript">
				function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'ru,be,en,zh-TW', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
								}
				</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
			</div>
        	</div>
			<div id="m_header">
						<div id="txt_min"><jdoc:include type="modules" name="top_left_text" /></div>
						<div id="txt_adress"><jdoc:include type="modules" name="top_right_text" /></div>
						<div id="ych">Учреждение<br> «Гомельская областная клиническая больница»</div>
						<div id="str">Структура</div>
						<div id="main_menu">
											<jdoc:include type="modules" name="top_menu" />
						</div>
			</div>
			<div id="left_column">
					<jdoc:include type="modules" name="left_menu" />
             <p style="padding-left:60px;"><noindex><!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='http://counter.yadro.ru/hit?t21.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet--></noindex>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." :
"http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost +
"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9645513-20");
pageTracker._trackPageview();
} catch(err) {}</script>
</p>
			</div>
			<div id="rigtht_column">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
			</div>

		</div>

	</div>

	<div id="footer">

		<div id="foot">
			<div id="footer_border">
			<div id="footer_context">
			<p>&nbsp;</p>
					<jdoc:include type="modules" name="cop_link" />
					<jdoc:include type="modules" name="cop_text" />
                    <jdoc:include type="modules" name="copy" />



			</div>
			</div>

		</div>
	</div>
	</body>
</html>