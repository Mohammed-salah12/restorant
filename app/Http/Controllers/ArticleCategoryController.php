<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $article_categories = ArticleCategory::withCount('articles')->orderBy('id' ,'desc');

        if ($request->get('name')) {
            $article_categories = ArticleCategory::where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->get('code')) {
            $article_categories = ArticleCategory::where('code', 'like', '%' . $request->code . '%');
        }

        $article_categories = $article_categories->paginate(5);

        return response()->view('cms.articleCategory.index' , compact('article_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.articleCategory.create');
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
            'name' => 'required|string|min:3|max:30',

        ] , [
            'name.required' => 'هذا الحقل مطلوب' ,
            'name.min' => 'لا يمكن اضافة اقل من 3 حروف' ,
            'name.max' => 'لا يمكن أضافة اكثر من 30 حرف'

        ]);

        if(! $validator->fails()){

            $article_categories = new ArticleCategory();
            $article_categories->name = $request->get('name');

            $isSaved = $article_categories->save();

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
        $article_categories = ArticleCategory::findOrFail($id);
        return response()->view('cms.articleCategory.edit' , compact('article_categories'));
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
            'name' => 'required|string|min:3|max:20',
        ]);

        if (! $validator->fails()){

            $article_categories = ArticleCategory::findOrFail($id);
            $article_categories->name = $request->get('name');

            $isUpdated = $article_categories->save();
            return ['redirect' => route('article_categories.index')];
            if($isUpdated){
                return response()->json(['icon' => 'success' , 'title' => 'Updated is Successfully'] , 200);
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'Updated is Failed'] , 400);

            }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
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
        $article_categories = ArticleCategory::destroy($id);
        return response()->json(['icon' => 'success' , 'title'=> "Deleted is Successfully"] , 200);
    }
}
