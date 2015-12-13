<?php 


function HomeController() {
	$data = [
		'title'	=> 'Myanmar Links'
	];
	echo load_view("home", $data);
}

function BlogController($id) {
	echo $id;
	echo load_view("blog");
}

function PageController() {
	echo load_view("page");
}

 ?>