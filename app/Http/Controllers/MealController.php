<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function indexBin()
    {
        $meals = Meal::onlyTrashed()->paginate(5);
        return response()->view('cms.meal.recycle', compact('meals'));

    }
     public function indexMeal($id)
     {
         //
         $meals = Meal::where('subcategory_id', $id)->orderBy('created_at', 'desc')->paginate(5);
         return response()->view('cms.meal.index', compact('meals','id'));
     }

     public function createMeal($id)
     {
         $subcategories = Subcategory::all();
         return response()->view('cms.meal.create' , compact( 'subcategories' , 'id'));
     }

    public function index()
    {

        $meals = Meal::with('subcategory')->orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.meal.indexAll' , compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $subcategories = Subcategory::all();
        return response()->view('cms.meal.create' , compact('subcategories'));
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

            $meals = new Meal();
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/meal', $imageName);

                $meals->image = $imageName;
                }
            $meals->name = $request->get('name');
            $meals->description = $request->get('description');
            $meals->price = $request->get('price');
            $meals->meal_number = $request->get('meal_number');
            $meals->subcategory_id = $request->get('subcategory_id');


            $isSaved = $meals->save();

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
        $subcategories = Subcategory::all();
        $meals = Meal::findOrFail($id);
        return response()->view('cms.meal.edit' , compact('subcategories' , 'meals'));
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
            'name' => 'required|string|min:3|max:30',

        ] , [
            'name.required' => 'هذا الحقل مطلوب' ,
            'name.min' => 'لا يمكن اضافة اقل من 3 حروف' ,
            'name.max' => 'لا يمكن أضافة اكثر من 30 حرف'

        ]);
        if(! $validator->fails()){
            $meals = Meal::findOrFail($id);
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/meal', $imageName);

                $meals->image = $imageName;
                }
            $meals->name = $request->get('name');
            $meals->description = $request->get('description');
            $meals->price = $request->get('price');
            $meals->meal_number = $request->get('meal_number');
            $meals->subcategory_id = $request->get('subcategory_id');

            $isUpdate = $meals->save();
            return ['redirect' => route('meals.index')];
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
        $meals = Meal::destroy($id);
    }

    public function restore($id){
        $restore = Meal::onlyTrashed()->findOrFail($id)->restore();
        $meals = Meal::onlyTrashed()->paginate(5);
        return response()->view('cms.meal.recycle', compact('meals'));

    }
    public function forceDelete($id){
        $deleted = Meal::where('id', $id)->forceDelete();
        $meals = Meal::onlyTrashed()->paginate(5);
        return response()->view('cms.meal.recycle', compact('meals'));

    }
}
