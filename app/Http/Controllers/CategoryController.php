<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Category;


class CategoryController extends Controller
{
    public function getCategory($Category_id)
    {
        $category = Category::find($Category_id);
        if($category !== null){
            $posts = $category->posts;
            return view('category',['posts' => $posts]);
        }
    }
}
