<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'Halaman Home',
    ]);
});

Route::get('/add', function () {
    return view('add', [
        'title' => 'Halaman Tambah',
        'nama' => 'Thoriq',
        'food' => 'Rendang',
        'Umur' => 20,
        'image' => 'assets/mike.gif',
    ]);
});

Route::get('/student', function () {
    return view('viewStudent', [
        'title' => 'Halaman Siswa',
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            'judul' => 'Judul 1',
            'slug' => 'judul-1',
            'author' => 'Saya Sendiri',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis at veniam suscipit. Quibusdam sed consectetur exercitationem. Culpa sit facilis aspernatur cum dolore minima nobis ad nemo ipsa aperiam. Autem, architecto?',
        ],
        [
            'judul' => 'Judul 2',
            'slug' => 'judul-2',
            'author' => 'Saya Sendiri 2',
            'body' => 'Kedua ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis at veniam suscipit. Quibusdam sed consectetur exercitationem. Culpa sit facilis aspernatur cum dolore minima nobis ad nemo ipsa aperiam. Autem, architecto?',
        ],
    ];

    return view('blogs', [
        'title' => 'Halaman Blogs',
        'posts' => $blog_posts,
    ]);
});

Route::get('blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            'judul' => 'Judul 1',
            'slug' => 'judul-1',
            'author' => 'Saya Sendiri',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis at veniam suscipit. Quibusdam sed consectetur exercitationem. Culpa sit facilis aspernatur cum dolore minima nobis ad nemo ipsa aperiam. Autem, architecto?',
        ],
        [
            'judul' => 'Judul 2',
            'slug' => 'judul-2',
            'author' => 'Saya Sendiri 2',
            'body' => 'Kedua ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis at veniam suscipit. Quibusdam sed consectetur exercitationem. Culpa sit facilis aspernatur cum dolore minima nobis ad nemo ipsa aperiam. Autem, architecto?',
        ],
    ];

    $real_post = [];

    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $real_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single News',
        'post' => $real_post,
    ]);
});

Route::get('/tes', function () {
    return view('add', [
        'nama' => 'Thoriq',
        'food' => 'Rendang',
        'Umur' => 20,
        'image' => 'assets/mike.gif',
    ]);
});

Route::get('users/{username}/{id}', function ($id, $username) {
    return '<h1>Ini Username ' . $username . " Dengan id " . $id;
});

Route::get('tesuser/{username?}/{admin?}', function ($username = null, $admin = null) {
    $result = '';
    if ($username === null) {
        $result = "Login Dlu Bro";
    } else {
        $result = 'Ini Username ' . $username;
    }
    return $result;
});

Route::get('example/profile', function () {
    echo "Hello User!";
})->name('profile');

Route::prefix('blog1')->group(function () {
    Route::get('/profile', function () {
        echo "Hello blog profile!";
    });
    Route::get('/comments', function () {
        echo "Hello blog comment!";

    });
});

Route::get('/users1', [UserController::class, 'viewUser']);