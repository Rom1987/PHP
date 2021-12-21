<?php
// no direct access
defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$txt = htmlspecialchars($params->get('txt'));
$img = htmlspecialchars($params->get('img'));
$url = htmlspecialchars($params->get('url'));
if ($url==1) {
	$link = htmlspecialchars($params->get('link'));
	$title = htmlspecialchars($params->get('title'));
	$twtext = htmlspecialchars($params->get('twtext'));
	}
else {$link = JURI::current();
$doc =& JFactory::getDocument();
$title = $doc->getTitle();
$twtext = $doc->getTitle();}

$soc_fs = htmlspecialchars($params->get('soc_fs'));
$desc = htmlspecialchars($params->get('desc'));
$ogmeta = htmlspecialchars($params->get('ogmeta'));

$fblike = htmlspecialchars($params->get('fblike'));
$fblike_lang = htmlspecialchars($params->get('fblike_lang'));
$fbw = htmlspecialchars($params->get('fblike_width'));

$Google = htmlspecialchars($params->get('Google'));
$plusLang = htmlspecialchars($params->get('plusLang'));
$gpw = htmlspecialchars($params->get('gplus_width'));

$twitter = htmlspecialchars($params->get('twitter'));
$twitter_lang = htmlspecialchars($params->get('twitter_lang'));
$twtw = htmlspecialchars($params->get('twt_width'));

$Vkl = htmlspecialchars($params->get('Vkl'));
$vkid = htmlspecialchars($params->get('vkid'));
$Vkw = htmlspecialchars($params->get('vk_width'));

$link2 = JURI::getInstance();
$root= $link2->getScheme() ."://" . $link2->getHost();
if ($ogmeta==1) {
$doc = JFactory::getDocument();
			$doc->addCustomTag('<meta property="og:title" content="'.$title.'"/>');
			$doc->addCustomTag('<meta property="og:type" content="article"/>');
			$doc->addCustomTag('<meta property="og:url" content="'.$link.'"/>');
			$doc->addCustomTag('<meta property="og:description" content="'.$desc.'" />');
			$doc->addCustomTag('<meta property="og:image" content="'.$root.'/'.$img.'" />');}
else {}
if ($fblike==1) {$fb = '<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/'.$fblike_lang.'/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
<div class="fb-like" data-href="'.$link.'" data-width="10" data-height="10" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>
';}
else {$fb='';}

if ($twitter==1) {$twt = '<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$link.'" data-text="'.$twtext.'" data-lang="'.$twitter_lang.'" rel="nofollow">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';}
else {$twt='';}
if ($Google==1) {$gp = '<div class="g-plusone" data-size="medium" data-href="'.$link.'"></div>
<script type="text/javascript">
  window.___gcfg = {lang: \''.$plusLang.'\'};
  (function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
    po.src = \'https://apis.google.com/js/plusone.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>';}
else {$gp='';}
$text = '<a href="http://socext.com/" title="SocShare v2.1" target="_blank" style="text-decoration:none; color: #c0c0c0; font-family: arial,helvetica,sans-serif; font-size: 5pt;">SocShare v2</a>';
if ($Vkl==1) {$doc = JFactory::getDocument();
$doc->addCustomTag('<script src="//vk.com/js/api/openapi.js?121"></script>');
$vk = '<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript">
  VK.init({apiId: '.$vkid.', onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Like block will be -->
<div id="vk_like_socshare"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like_socshare", {type: "mini", pageUrl:\''.$link.'\', pageTitle:\''.$title.'\', pageDescription:\''.$desc.'\', text:\''.$twtext.'\', pageImage:\''.$img.'\', height:20});
</script>';}
else {$vk='';}
require JModuleHelper::getLayoutPath('mod_socshare', $params->get('layout', 'default'));
