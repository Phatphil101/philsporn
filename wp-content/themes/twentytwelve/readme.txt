##########################################################################################
#Sitemap Creator 0.1, a php script that creates sitemap.org aka google,yahoo and msn sitemaps
#It can be downloaded from http://walid.kurtubba.com/
#License: GPL
#
#Walid GadElKarim, kurtubba@gmail.com
##########################################################################################


#Important FAQ
--------------
http://www.sitemaps.org/

#Create Sitemap Accounts
-------------------
https://www.google.com/webmasters/tools/siteoverview
https://siteexplorer.search.yahoo.com/mysites

#installation
-------------
- Extract files into your root dir, if you already have a .htaccess make sure to add the rewrite rule.
- CHMOD 'sm/files' to 777.
- Open .config.php and follow the comments to add your information.
- Open .staticurls.txt and add URLs, Priority and Frequency separated by spaces each group on one line
	* URL : URL of the page. This URL must begin with the protocol (such as http) and end with a trailing slash, if your web server requires it. This value must be less than 2,048 characters. 
	* Priority (optional): The priority of this URL relative to other URLs on your site. Valid values range from 0.0 to 1.0. (put 0 to skip adding this)
	* Frequency (optional): How frequently the page is likely to change (always, hourly, daily, weekly, monthly, yearly, never).
	@ File '.staticurls.txt' shouldn't exceed 50,000 line.
- Make sure RewriteEngine is on then add this line to .htaccess
	RewriteRule ^sitemap.xml.gz$ sm/get_sitemap.php?sitemap=sitemap.xml.gz [nc,L]
- To execute this script on a time based you need to edit corntab on unix or add schedule task on win.

#Script Development
------------------
- To add more URLs you can push more entries into $urls array
	$urls = array('url'=>'loc',
				  'time'=>'lastmod',
				  'freq'=>'changefreq',
				  'per'=>'priority');
