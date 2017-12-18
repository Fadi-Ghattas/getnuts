<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/12/2017
 * Time: 5:11 PM
 */

namespace App;


class Helpers
{
	public static function removeFirstParagraph($text)
	{
		return preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1', $text);
	}

	/**
	 *    Accessing Thumbnail image helper.
	 *
	 * @params: $image path = assets('storage/' . image_file, 'size of image generated ')
	 */
	public static function thumbnail($image_path, $size = '')
	{
		$path = pathinfo($image_path);
		if (!empty($size)) {
			$size = '-' . $size;
		}

		return $path['dirname'] . '/'
		. $path['filename']
		. $size . '.'
		. $path['extension'];
	}

	public static function changeDateTimeFormat($dateString, $fromFormat = 'Y-m-d H:i:s', $toFormat = 'Ymd')
	{
		$myDateTime = \DateTime::createFromFormat($fromFormat, $dateString);
		$newDateString = $myDateTime->format($toFormat);
		return $newDateString;
	}

	public static function limitTextAsExpert($text, $limit, $link = '')
	{
		$excerpt = explode(' ', $text, $limit);
		if (count($excerpt) >= $limit) {
			array_pop($excerpt);
			if (!empty($link))
				$excerpt = implode(" ", $excerpt) . ' <a  href="' . $link . '">read more...</a>';
			else
				$excerpt = implode(" ", $excerpt) . ' Read more';
		} else {
			$excerpt = implode(" ", $excerpt);
		}

		$excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
		return $excerpt;
	}

}