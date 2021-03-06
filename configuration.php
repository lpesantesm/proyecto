<?php

// ** ClearDB settings - from Heroku Environment ** //
$db = parse_url($_ENV["CLEARDB_DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for Joomla */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

class JConfig {
	public $offline = '0';
	public $offline_message = 'Este sitio está cerrado por tareas de mantenimiento.<br />Por favor, inténtelo nuevamente más tarde.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'efemerides';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	// public $dbtype = 'mysql';
	// public $host = 'us-cdbr-iron-east-03.cleardb.net';
	// public $user = 'b3d2925c74c520';
	// public $password = '4932b4ac';
	// public $db = 'heroku_5c1f36090b6e6ae';
	//public $db ='heroku_5c1f36090b6e6ae?sslca=cleardb-ca.pem&sslcert=b3d2925c74c520-cert.pem&sslkey=b3d2925c74c520-key.pem&reconnect=true';
	  public $dbtype = 'mysqli';
		public $host = DB_HOST;
		public $user = DB_USER;
		public $password = DB_PASSWORD;
		public $db = DB_NAME;

	public $dbprefix = 'efem_';
	public $live_site = 'https://efemerides.herokuapp.com';
	//public $live_site = 'http://localhost:81/proyecto';
	public $secret = 'i48ml38CgP5ZZX8V';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $mailonline = '1';
	public $mailer = 'mail';
	public $mailfrom = 'lpesantesm@gmail.com';
	public $fromname = 'efemerides';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $cache_platformprefix = '0';
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $feed_email = 'none';
	public $log_path = '/app/logs';
	public $tmp_path = '/app/tmp';
	//public $log_path = '/var/www/html/proyecto/logs';
	//public $tmp_path = '/var/www/html/proyecto/tmp';
	public $lifetime = '15';
	public $session_handler = 'database';
}
