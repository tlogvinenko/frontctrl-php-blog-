<?php	

if ($page === '/home' || $page === '/') {
	$ctrl= 'home';
} elseif ($page === '/about') {
	$ctrl= 'about';
} elseif ($page === '/add_post') {
	$ctrl= 'add_post';
} elseif ($page === '/register') {
	$ctrl= 'register';
} elseif ($page === '/login') {
	$ctrl= 'login';
} elseif ($page === '/logout') {
	$ctrl= 'logout';
} elseif ($page === '/posts') {
	$ctrl= 'posts';		
} else {
	$ctrl= 'not_found';
}
