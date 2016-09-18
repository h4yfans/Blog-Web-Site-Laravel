<?php

namespace App\Http\Controllers;

/**
* 
*/
class PostController extends Controller
{
	
	public function getBlogIndex()
	{
		//Fetch Post and Pagination

		return view('frontend.blog.index');
	}


	public function getSinglePost($post_id, $end = 'frontend')
	{
		// Fetch the Post
		return view($end . 'blog.single');
	}
}