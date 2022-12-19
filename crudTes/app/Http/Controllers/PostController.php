<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

public function destroy($id)
{
   $post = Post::find($id);
   $post->delete();
   
   return redirect('/');
   
   //atau
   
   return redirect('posts')->with('success',' Penghapusan berhasil!');
}
}


