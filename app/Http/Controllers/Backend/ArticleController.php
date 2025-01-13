<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ArticleController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            new Middleware('permission:view articles', only: ['index']),
            new Middleware('permission:edit articles', only: ['edit']),
            new Middleware('permission:create articles', only: ['create']),
            new Middleware('permission:delete articles', only: ['destroy']),
        ];
    }


    public function index()
    {
        $articles = Article::latest()->paginate(3);
        return view("admin.article.index", compact("articles"));
    }


    public function create()
    {
        return view("admin.article.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:3', 'max:30'],
            'text' => ['required', 'min:3', 'max:30'],
            'author' => ['required', 'min:3', 'max:30'],
        ]);

        if ($validator->passes()) {

            $article = new Article();
            $article->title = $request->title;
            $article->text = $request->text;
            $article->author = $request->author;
            $article->save();

            $notification = array(
                'message' => 'Makale Eklendi',
                'alert-type' => 'success'
            );
            return to_route("admin.articles.index")->with($notification);

        } else {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function show(Article $article)
    {
        //
    }


    public function edit(Article $article)
    {
        return view("admin.article.edit", compact("article"));
    }


    public function update(Request $request, Article $article)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'min:3', 'max:30'],
            'text' => ['required', 'min:3', 'max:30'],
            'author' => ['required', 'min:3', 'max:30'],
        ]);

        if ($validator->passes()) {

            $article->title = $request->title;
            $article->text = $request->text;
            $article->author = $request->author;
            $article->save();

            $notification = array(
                'message' => 'Makale Eklendi',
                'alert-type' => 'success'
            );
            return to_route("admin.articles.index")->with($notification);

        } else {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }


    public function destroy(Article $article)
    {
        $data = $article::find($article->id);
        $data->delete();
        $notification = array(
            'message' => 'İzin silindi',
            'alert-type' => 'success'
        );
        return to_route("admin.articles.index")->with($notification);
    }
}