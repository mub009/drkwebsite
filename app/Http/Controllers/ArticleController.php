<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ArticleController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Article::query();

            return DataTables::of($query)
                ->addColumn('title', function ($row) {
                    return $row->title;
                })
                ->addColumn('image', function ($row) {
                    if ($row->image) {
                        return $imageUrl = asset('images/' . $row->image); // Ensure this path is correct

                    } else {
                        return 'No Image';
                    }
                })
                ->addColumn('content', function ($row) {
                    return $row->content;
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('Y-m-d H:i:s');
                })
                ->filterColumn('title', function($query, $keyword) {
                    $query->where('title', 'like', "%{$keyword}%");
                })
                ->filterColumn('content', function($query, $keyword) {
                    $query->where('content', 'like', "%{$keyword}%");
                })
                ->make(true);
        }
        return view('articles');
    }

    
    public function store(Request $request)
{
    try {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $article->image = $imageName;
        }

        $article->save();

        return response()->json(['status' => true, 'message' => 'Article created successfully.']);
    } catch (\Exception $e) {
        return response()->json(['status' => false, 'message' => $e->getMessage()], 1000);
    }
}



    
    public function edit($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return response()->json([
                'status' => false,
                'message' => 'Article not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $article,
        ]);
    }

   
    public function update(Request $request, $id)
{
    try {
        $article = Article::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $article->title = $request->title;
        $article->content = $request->content;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $article->image = $imageName;
        }

        $article->save();

        return response()->json(['status' => true, 'message' => 'Article updated successfully.']);
    } catch (\Exception $e) {
        return response()->json(['status' => false, 'message' => $e->getMessage()], 1000);
    }
}



  
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return response()->json(['status' => true, 'message' => 'Article deleted successfully'],);
    }


    public function show(Request $request, $id)
    {
        $article = Article::find($id);
    
        if (!$article) {
            return response()->json([
                'status' => false,
                'message' => 'Article not found',
            ], 404);
        }
    
        return response()->json([
            'status' => true,
            'data' => $article,
        ]);
    }
    
}