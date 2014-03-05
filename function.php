<?php

if(!function_exists('get_bootstrap')){
  function get_bootstrap(){

      $main='
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      ';

    return $main;
  }
}

if(!function_exists('toolbar_bootstrap_nav')){
	function toolbar_bootstrap_nav($interface_menu=array()){

	  if(empty($interface_menu))return;

	  $main="<ul class='nav nav-tabs'>";

	  if(is_array($interface_menu)){
	    foreach($interface_menu as $title => $url){
	      $urlPath=(empty($moduleName) or substr($url,0,7)=="http://")?$url:XOOPS_URL."/modules/{$moduleName}/{$url}";
	      $basename=basename($_SERVER['SCRIPT_NAME']);
	      $baseurl=basename($url);
	      //if($baseurl=="index.php" and !preg_match("/admin/", $url))continue;
	      $active=preg_match("/^{$basename}/",$baseurl)?"class='active'":"";
	      $main.="<li $active><a href='{$urlPath}'>{$title}</a></li>";
	    }
	  }else{
	    return;
	  }
	  $main.="</ul>";

	  return $main;
	}
}

if(!function_exists('get_jquery')){
	function get_jquery(){
		
		$main="
		<script type='text/javascript'>
        if(typeof jQuery == 'undefined') {
          document.write(\"<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'><\/script>\");
        }
        </script>
      ";

      return $main;
    }
}
?>