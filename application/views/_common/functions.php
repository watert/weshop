<?php

function image_good_1080(){
	static $index = 1;
	$index_str = sprintf("%02d",$index++);
	return "public/images/w-1080/w1080-$index_str.jpg";
}
function image_channel($idx=0){
	static $index = 1;
	if(!$idx)$idx = $index++;
	$index_str = sprintf("%02d",$idx);
	return "public/images/w-1080/w1080-$index_str.jpg";
}
function image_avatar($idx=0){
	static $index = 1;
	if(!$idx)$idx = $index++;
	$index_str = sprintf("%03d",$idx);
	return "public/images/80x80/80x80$index_str.jpg";
}
function image_avatar_large($idx=0){
	static $index = 1;
	if(!$idx)$idx = $index++;
	$index_str = sprintf("%03d",$idx);
	return "public/images/200x200/200x200$index_str.jpg";
}
function image_wishlist($idx=0){
	static $index = 1;
	if(!$idx)$idx = $index++;
	$index_str = sprintf("%d",$idx);
	return "public/images/wish-160/$index_str.jpg";
}