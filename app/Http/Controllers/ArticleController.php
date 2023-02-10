<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Author;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function indexBin()
    {
        $articles = Article::onlyTrashed()->paginate(5);
        return response()->view('cms.article.recycle', compact('articles'));

    }
     public function indexArticle($id)
     {
         //
         $articles = Article::where('author_id', $id)->orderBy('created_at', 'desc')->paginate(5);
         return response()->view('cms.article.index', compact('articles','id'));
     }

     public function createArticle($id)
     {
         $article_categories = ArticleCategory::all();
         return response()->view('cms.article.create' , compact( 'article_categories' , 'id'));
     }

     public function index()
    {
        $articles = Article::orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.article.indexAll' , compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article_categories = ArticleCategory::all();
        return response()->view('cms.article.create' , compact('article_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() , [
            'title' => 'required|string|min:3|max:30',

        ] , [
            'title.required' => 'هذا الحقل مطلوب' ,
            'title.min' => 'لا يمكن اضافة اقل من 3 حروف' ,
            'title.max' => 'لا يمكن أضافة اكثر من 30 حرف'

        ]);

        if(! $validator->fails()){

            $articles = new Article();
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/article', $imageName);

                $articles->image = $imageName;
                }
            $articles->title = $request->get('title');
            $articles->description = $request->get('description');
            $articles->author_id = $request->get('author_id');
            $articles->article_category_id = $request->get('article_category_id');


            $isSaved = $articles->save();

            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => "Created is Successfully"] , 200);
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => "Created is Failed"] , 400);
            }
        }
        else{
            return response()->json(['icon'=>'error' , 'title' => $validator->getMessageBag()->first()] , 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article_categories = ArticleCategory::all();
        $articles = Article::findOrFail($id);
        return response()->view('cms.article.edit' , compact('article_categories' , 'articles', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all() , [
            'title' => 'required|string|min:3|max:30',

        ] , [
            'title.required' => 'هذا الحقل مطلوب' ,
            'title.min' => 'لا يمكن اضافة اقل من 3 حروف' ,
            'title.max' => 'لا يمكن أضافة اكثر من 30 حرف'

        ]);
        if(! $validator->fails()){
            $articles = Article::findOrFail($id);
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/article', $imageName);

                $articles->image = $imageName;
                }
                $articles->title = $request->get('title');
                $articles->description = $request->get('description');
                $articles->author_id = $request->get('author_id');
                $articles->article_category_id = $request->get('article_category_id');

            $isUpdate = $articles->save();
            return ['redirect' => route('articles.index')];
            return response()->json(['icon' => $isUpdate ? 'success' : 'error' , 'title' => $isUpdate ? "Created is Successfully" : "Created is Failed"] , $isUpdate ? 200 : 400);

        }

        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first()] , 400);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Article::destroy($id);
    }

    public function restore($id){
        $restore = Article::onlyTrashed()->findOrFail($id)->restore();
        $articles = Article::onlyTrashed()->paginate(5);
        return response()->view('cms.article.recycle', compact('articles'));

    }
    public function forceDelete($id){
        $deleted = Article::where('id', $id)->forceDelete();
        $articles = Article::onlyTrashed()->paginate(5);
        return response()->view('cms.article.recycle', compact('articles'));
    }
}