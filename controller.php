<?php
define("BASE_URL", "http://bonserver.local/web/edwin/github/simplemvc/"); # BASE URL OF WEBSITE
$function=$_GET['function'];
function index($param=null)
{
	$page='index';
	$master_header=file_get_contents(BASE_URL.'master_header.php');
	$master_footer=file_get_contents(BASE_URL.'master_footer.php');
	$content=file_get_contents(BASE_URL.$page.'.php');
	$view=$master_header.$content.$master_footer;
	echo $view;
}
function about($param=null)
{
	$page='about';
	$master_header=file_get_contents(BASE_URL.'master_header.php');
	$master_footer=file_get_contents(BASE_URL.'master_footer.php');
	$content=file_get_contents(BASE_URL.$page.'.php');
	$view=$master_header.$content.$master_footer;
	echo $view;
}
call_user_func($function);
?>