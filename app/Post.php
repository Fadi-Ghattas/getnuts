<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Post extends Model
{
	//

	public static function toJsJson($posts)
	{
		$postsAsJson = [];
		foreach ($posts as $post) {
			$postAsJson = [];
			$postAsJson['_title'] = $post->title;
			$postAsJson['_image'] = Helpers::thumbnail(Voyager::image($post->image), '750x300');
			$postAsJson['_excerpt'] = $post->excerpt;
			$postAsJson['_body'] = $post->body;
			$postAsJson['_url'] = url('post/' . $post->slug);
			$postAsJson['_created_at'] = Helpers::changeDateTimeFormat($post->created_at, 'Y-m-d H:i:s', 'F d, Y');
			$postAsJson['author'] = $post->authorId()->first()->name;
			$postAsJson['_link'] = $post->link;
			$postsAsJson [] = $postAsJson;
		}
		return $postsAsJson;
	}


	public static function getRelatedPosts($slug)
	{
		$post = \TCG\Voyager\Models\Post::where('slug', '=', $slug)->with('category')->firstOrFail();

		$relatedPosts = \TCG\Voyager\Models\Post::where('category_id', '=', $post->category->id)->whereNotIn('id',[$post->id])->get();
		if (!$relatedPosts->count()) {
			$relatedPosts = \TCG\Voyager\Models\Post::limit(4)->orderby('created_at', 'desc')->whereNotIn('id',[$post->id])->get();
		}

		return $relatedPosts;
	}

}
