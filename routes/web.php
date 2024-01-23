<?php

use Illuminate\Support\Facades\Route;
use app\models\post;
use Illuminate\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/list-sekolah', function () {
    
$list_sekolah = [
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

    return view('list-sekolah', [
        "title" => "list-sekolah",
        "list" => $list_sekolah
    ]);
});

Route::get('/siswa', function () {
    return view('siswa', [
        "title" => "siswa"
    ]);
});


//halaman single post
Route::get('sekolah/{slug}' , function($slug) {
    $list_sekolah = [
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
    
        $info_sekolah = [];
    foreach ($list_sekolah as $list) {
        if ($list["slug"] == $slug) {
            $info_sekolah = $list;  
        } 
    }

    return view('sekolah' , [
        "title" => "info sekolah",
        "data" => $info_sekolah
    ]);
});
