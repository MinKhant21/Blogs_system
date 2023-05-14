<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Blog 
{
    public $title;
    public $slug;
    public $intro;
    public $body;
    public function __construct($title,$slug,$intro,$body) 
    {   
        $this->title = $title;
        $this->slug = $slug;
        $this->intro = $intro;
        $this->body = $body;
        
    }
    public static function all () {
        // $blogs = [];
        // dd($file[0]->getContents());
        // $obj = YamlFrontMatter::parseFile($files);
       
        return collect(File::files(resource_path('/views/blogs')))
            ->map(function($file){
            $obj = YamlFrontMatter::parseFile($file);
            return new Blog($obj->title,$obj->slug,$obj->intro,$obj->body());
            // $blogs[] = $blog;
        });

        // dd($blogs);

    }

    public static function find($slug) {
        // $fileName = $slug;
        // $path = resource_path("views/blogs/$fileName.html");
        // if(!file_exists($path)) {
        //     // abort("404");
        //     return redirect('/');
        // }
        // $blog = cache()->remember("posts.$fileName",2,function() use ($path){
        //     return file_get_contents($path);
        // });

        $blogs = static::all();
        return $blogs->firstWhere('slug',$slug);
    }
}
