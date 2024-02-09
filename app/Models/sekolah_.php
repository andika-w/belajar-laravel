<?php

namespace App\Models;


class Sekolah 
{
	private static  $list_sekolah = [
		[
			"nama" => "SMPN 7 Distrik 6",
			"slug" => "sekolah_1",
			"lokasi" => "distrik 6",
			"info" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, ratione delectus magni voluptates eum itaque maxime dicta sed natus vel dolores, fugit quo tempore a. At, repellendus facere? Unde dolor cum animi. Quis, quaerat voluptatibus? Impedit aperiam repellat est aliquid quidem enim. Praesentium voluptas iste esse totam eaque veniam eum delectus alias ex illum cumque minus magnam facilis minima, exercitationem aliquam quo accusantium, nisi commodi porro voluptatem, inventore possimus debitis. Esse voluptatibus harum, quo dolorem deserunt tenetur rem laborum distinctio repellat facere natus molestiae aliquam perferendis explicabo magnam quibusdam dignissimos ad quos, animi rerum voluptatem quidem fugit consectetur nisi. Magni?",
		],
		[
			"nama" => "SMP NUSA ",
			"slug" => "sekolah_2",
			"lokasi" => "distrik 7",
			"info" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, ratione delectus magni voluptates eum itaque maxime dicta sed natus vel dolores, fugit quo tempore a. At, repellendus facere? Unde dolor cum animi. Quis, quaerat voluptatibus? Impedit aperiam repellat est aliquid quidem enim. Praesentium voluptas iste esse totam eaque veniam eum delectus alias ex illum cumque minus magnam facilis minima, exercitationem aliquam quo accusantium, nisi commodi porro voluptatem, inventore possimus debitis. Esse voluptatibus harum, quo dolorem deserunt tenetur rem laborum distinctio repellat facere natus molestiae aliquam perferendis explicabo magnam quibusdam dignissimos ad quos, animi rerum voluptatem quidem fugit consectetur nisi. Magni?",
		]
		];

	public static function all()
	{
		return collect(self::$list_sekolah);
	}

	public static function find($slug)
	{
		$sekolah = static::all();
		
		// $info_sekolah = [];
		// foreach ($sekolah as $list) {
		// 	if ($list["slug"] == $slug) {
		// 		$info_sekolah = $list;  
		// 		} 
		// 	}
	
	return $sekolah-> firstWhere( 'slug', $slug);
	}
}