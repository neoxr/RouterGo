<?php
$route = [];
function go($act, Closure $cb) {
    global $route;
    $act = trim($act, '/');
    $route[$act] = $cb;
}

function patch($act) {
    global $route;
		$act = trim($act, '/');
    	$cb = $route[$act];
   if(is_null($cb)) {
		die('<span style="font-family:monospace">Page Not Found</span>');
	} else {
    	print call_user_func($cb);
	}
} ?>