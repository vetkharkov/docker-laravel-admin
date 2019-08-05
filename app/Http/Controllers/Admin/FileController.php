<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Storage;

class FileController extends Controller
{
    private $photos_path;
    private $dir;

    public function __construct()
    {
        $this->dir = date('YmdHis');
        $this->photos_path = public_path('/uploads/user-images');
    }

    public function index()
    {
//        $files = scandir('uploads/images/');
        $directory = 'uploads/images/';
        $files = array_diff(scandir($directory), ['..', '.']);
//        dd($files);
        return view('admin.user-management.file.index', compact('files'));
    }

    public function show($id)
    {

        dd($id);

    }

    public function create()
    {
        dd('форма Dropzone');
    }

    public function dropzone(Request $request)
    {

        $photos = $request->file('file');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        $this->photos_path = $this->photos_path.'/'.$this->dir;
        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777, true);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $path_parts = pathinfo(basename($photo->getClientOriginalName()));
//            $name = sha1(date('YmdHis') . str_random(30));
            $name = $this->dir.'/'.$path_parts['filename'].'_resize';
            $save_name = $name.'.'.$photo->getClientOriginalExtension();
//            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
            $resize_name = $path_parts['filename'].'_thumb'.'.'.$photo->getClientOriginalExtension();
// Меняем размер изображения
//            thumbnail
            Image::make($photo)
                ->resize(100, null, function ($constraints) {
                    $constraints->aspectRatio();
                })
                ->save($this->photos_path.'/'.$resize_name);
//          filename
            $photo->move($this->photos_path, $save_name);

        }

        return Response::json([
            'message' => 'Image saved Successfully',
        ], 200);

    }


    public function destroy($id)
    {
        dd($id);

    }


}
