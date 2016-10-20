<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Article;

use App\Http\Requests;

/**
 * Class ArticlesController
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller
{
    /**
     * For Index Page to show All the articles
     * But not future dated articles
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::latest()->published()->get();

        return view('Article.index', compact('articles'));
    }

    /**
     * View a specific article using a $name parameter as excerpt
     *
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($name)
    {
        $article = Article::where('excerpt', $name)->first();

        return view('Article.viewArticle', compact('article'));
    }

    /**
     * Create an article
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Article.insertArticle');
    }

    /**
     * Storing an article after it has been created
     *
     * @param Requests\ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\ArticleRequest $request)
    {
        $input = $request->all();

        Article::create($input);

        return redirect('/articles');
    }

    /**
     * Editing an article
     * $name as an excerpt
     *
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($name)
    {
        $article = Article::where('excerpt', $name)->first();

        return view('Article.editArticle', compact('article'));
    }

    /**
     * Updating article after the edited form has been submitted
     *
     * @param $name
     * @param Requests\ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($name, Requests\ArticleRequest $request)
    {
        $article = Article::where('excerpt', $name)->first();

        $article->update($request->all());

        return redirect('/articles');
    }
}
