FRANKLIN, Readme File
---------------------------------------------------------------------------
2009-06-19, Marcel Eichner // Ephigenia <love@ephigenia.de>

# DESCRIPTION

Franklin is a very basic PHP5-Script that collects data from various tests
that you’ve configured from websites and services for a later display as charts in a report page.

# REQUIREMENTS

* PHP 5.2 or later

# INSTALLATION

1. 	copy all files into an extra directory in your webspace
2.	make the directory `/data` writable by cron.php
3.	edit `/config/config.php` to your own desires
4. 	create a cron job that calls cron.php periodically
	(for example every 10 minutes)
5.	open the root directory in your webbrowser to see the reports

# UPDATES/FEEDBACK

Franklin will be updated from time to time. Check the official [Franklin Homepage](http://code.marceleichner.de/project/franklin) and the [github page](http://github.com/Ephigenia/franklin) for updates, new tests or contact to the developers.

# Changelog

* 2010-06-09
	* Updated all charts to use google chart API instead of own library
	* Added light and dark skin that can be changed by hand
	
* 2010-05-15
	* Fixed Google Results Count Test using Google Ajax REST API now
	* Fixed Alexa Site Rank test

* 2010-03-06
	* Added Test fro lesercharts.de
	* Fixed Alexa Traffic Rank for country
	* Cron now reports how many tests checked and runned

* 2009-10-17
	* Added Test for Twitter Follower Counting
	+ Added Test for recording Alexa Traffic Rank values
	* Changed code style to Zend Framework coding-guidelines

* 2009-06-19
	* Fixed nothing, just set up the first release on sourceforge.net
	* also put up a small website for franlin on sourceforge