<?php
/*
	Sitemap Creator, a php script that creates sitemap.org aka google,yahoo and msn sitemaps for your site
	It can be downloaded from http://walid.kurtubba.com/
	License: GPL

	Walid GadElKarim, kurtubba@gmail.com
*/

/*
	settings file
*/

$settings['siteurl'] = 'http://yoursite.com'; //you can't include directories here, add subdomains if necessary, dont add / at the end
$settings['email'] = 'sitemaps@yoursite.com'; //add ur email to be notified
$settings['appid'] = 'ee_yahoo_map_update'; //only change if you have optained application id from https://developer.yahoo.com/wsregapp/ or leave it to use default id
$settings['disabledirect'] = true; //change to false to enable direct excution of the script without a pass
$settings['pass'] = 'password'; //change this to your password
$settings['nooutput'] = false; //change to true if you don't want output
$settings['sendemails'] = true; //change to false to stop sending all emails

#################################
# Stop editing
#################################
$smapurl = urlencode($settings['siteurl'].'/sitemap.xml.gz'); //make sure you have the rewrite rule added to your root dir .htaccess
$urls = array(); //this is the array where all the info for the sitemap are store, you can add more functions to add dynamically 
$pings['google'] = 'http://www.google.com/webmasters/sitemaps/ping?sitemap='.$smapurl;
$pings['yahoo'] = 'http://search.yahooapis.com/SiteExplorerService/V1/updateNotification?appid='.$settings['appid'].'&url='.$smapurl;
$pings['msn'] = 'http://search.live.com/ping?sitemap='.$smapurl; //this will return bad format as msn sitemaps are still running in testing mode
$header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><title>Create Sitemap Script</title><body>';
$footer = '</body></html>';
