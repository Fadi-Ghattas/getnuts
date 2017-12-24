<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Category;

class Post extends \TCG\Voyager\Models\Post
{
	//

	public function tags()
	{
		return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
	}

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

		$relatedPosts = \TCG\Voyager\Models\Post::where('category_id', '=', $post->category->id)->whereNotIn('id', [$post->id])->get();
		if (!$relatedPosts->count()) {
			$relatedPosts = \TCG\Voyager\Models\Post::limit(4)->orderby('created_at', 'desc')->whereNotIn('id', [$post->id])->get();
		}

		return $relatedPosts;
	}

	public static function filterPosts($page, $postPrePage, $category, $tag)
	{
		$posts = new Post();
		if (!empty($tag)) {
			$posts = $posts->with('tags')->whereHas('tags', function ($q) use ($tag) {
				$q->whereIn('name', [$tag]);
			});
		}
		if (!empty($category)) {
			$category = Category::where('slug', '=', $category)->first();
			if ($category->count()) {
				$posts = $posts->where('category_id', '=', $category->id);
			}
		}
		$posts = $posts->limit($postPrePage)
			->offset(($page - 1) * $postPrePage)
			->orderby('created_at', 'desc');
//		$posts = $posts->toSql();
		$posts = $posts->get();
		return $posts;
	}
}
