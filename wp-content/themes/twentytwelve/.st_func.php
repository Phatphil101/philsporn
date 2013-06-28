<?php
/*
	Sitemap Creator 0.1, a php script that creates Sitemap 0.90 aka google,yahoo and msn sitemaps for your site
	It can be downloaded from http://walid.kurtubba.com/
	License: GPL

	Walid GadElKarim, kurtubba@gmail.com
*/

/*
	functions
*/

//reading urls from .staticurls.txt file
function get_static_urls(){
	global $urls;
	$staturl = array_map('rtrim',file('.staticurls.txt'));
	foreach($staturl as $ech){
		$ech = split(' ', $ech);
		$urls[] = array('url'=>utf8_encode(htmlspecialchars($ech[0])),'per' => $ech[1],'time'=>gmdate("Y-m-d\TH:i:s",time())."+00:00",'freq' => $ech[2]);
	}
	_echo('Got '.count($urls).' URLS from .staticurls.txt','pass');
}
//creating sitemap.xml.gz
function create_sitemap(){
	global $urls,$settings;
	$cont = '<?xml version="1.0" encoding="utf-8" ?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"><!-- generator="Sitemap Creator" --><!-- sitemap-generator-url="http://walid.kurtubba.com" sitemap-generator-version="0.1"  -->';
	foreach($urls as $url){
		$cont.='<url>';
		$cont.="<loc>$url[url]</loc>";
		$cont.="<lastmod>$url[time]</lastmod>";
		if($url['freq']) $cont.="<changefreq>$url[freq]</changefreq>";
		if($url['per']) $cont.="<priority>$url[per]</priority>";
		$cont.='</url>';
	}
	$cont.='</urlset>';
	if(!$fh = gzopen('files/sitemap.xml.gz', 'wb')) _echo('<div style="color:red">Could not write file please check you CHMOD folder files to 777</div>','error');
	gzwrite( $fh, $cont);
	gzclose($fh);
	_echo('File <a href='.$settings['siteurl'].'/sitemap.xml.gz>sitemap.xml.gz</a> written successfully Size:'.filesize('files/sitemap.xml.gz').'Bytes','pass');
}
//pinging google,yahoo and msn
function ping_em(){
	global $pings;
	foreach($pings as $domain =>$val)
		_echo("<div style='padding-bottom:20px;'><b>pinging <a href=$val>$domain</a> said</b><hr>".ping($domain)."</div>");
}
//connecting to sites
function ping($d)
{
	global $pings;
	$timeout = 5; //timeout in seconds
	$url = $pings[$d];
	$pings[$d] = "";
	$old = ini_set('default_socket_timeout', $timeout);
	if(!$fh = fopen($url, "r"))	return false;
	ini_set('default_socket_timeout', $old);
	stream_set_timeout($fh, $timeout);
	stream_set_blocking($fh, 0);
	while(!feof($fh))
		$pings[$d] .= fread($fh, 1024);
	fclose($fh);
	return $pings[$d] = strip_tags($pings[$d], '<br> <h2> <h1>');
}
//sending an email
function send_email($email){
	global $start_time, $urls, $pings;
	$msg = count($urls).' urls written to file at '.date(" h:i:s a ( l d  of  F Y )").' took me '.(time()-$start_time)." seconds.\r\n";
	foreach($pings as $domain =>$val)
		$msg .= "$domain said :".strip_tags($val)."\r\n\r\n";
	
	mail($email, 'sitemap created', $msg,'From:'.$email);
	_echo('Email Sent to '.$email,'pass');
}
function _echo($msg,$type=''){
	global $settings,$footer;
	if($settings['nooutput']) return;
	switch($type){
		case 'error': echo "<div style='color:red'>$msg</div>".$footer; exit;
		case 'pass': echo "<div style='color:green'>$msg</div>"; break;
		default: echo $msg;
	}
}
?>