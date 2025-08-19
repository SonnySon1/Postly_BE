<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    // get articles
    public function getAll($limit, $offset) {
        $articles = Post::limit($limit)->offset($offset)->get();
        
        return response()->json([
            'message' => 'Successfully get articles',
            'articles' => $articles,
            'count' => Post::where('status', 'publish')->count()
        ]);
    }


    // store articles
    public function store(Request $request) {
        $request->validate([
            'title'     => ['required', 'max:200'],
            'content'   => ['required'],
            'category'  => ['required', 'max:100'],
            'status'    => ['required'],
        ]);
        
        $data_stored = [
            'title'     => $request->title,
            'content'   => $request->content,
            'category'  => $request->category,
            'status'    => $request->status
        ];

        $article = Post::create($data_stored);

        return response()->json([
            'message' => 'Successfully created article',
            'article' => $article
        ]);
    }




    // show articles
    public function show($id) {
        $article = Post::find($id);
        
        if ($article == null) {
            return response()->json([
                'message' => 'Article not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Successfully get article',
            'article' => $article
        ]);
    }
    



    // update articles
    public function update(Request $request, $id) {
        $request->validate([
            'title'     => ['required', 'max:200'],
            'content'   => ['required'],
            'category'  => ['required', 'max:100'],
            'status'    => ['required'],
        ]);

        $article = Post::find($id);

        if ($article == null) {
            return response()->json([
                'message' => 'Article not found'
            ], 404);
        }

        $article->update([
            'title'     => $request->title,
            'content'   => $request->content,
            'category'  => $request->category,
            'status'    => $request->status
        ]);

        return response()->json([
            'message' => 'Successfully updated article',
            'article' => $article
        ]);
    }


    // delete articles
    public function destroy($id) {
        $article = Post::find($id);

        if ($article == null) {
            return response()->json([
                'message' => 'Article not found'
            ], 404);
        }

        $article->delete();

        return response()->json([
            'message' => 'Successfully deleted article'
        ]);
    }
}
