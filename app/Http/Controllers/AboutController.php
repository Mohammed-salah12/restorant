<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() ,[

        ]);
        if(! $validator->fails()){
            $abouts = new About();
            $abouts->title = $request->get('title');
            $abouts->content = $request->get('content');


                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/about', $imageName);

                    $abouts->image = $imageName;
                    }

                $isSaved = $abouts->save();

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
        $abouts = About::findOrFail($id);
        return response()->view('cms.about.edit' , compact('abouts' ));
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
        $validator = Validator($request->all() ,[

        ]);
        if(! $validator->fails()){
            $abouts =  About::findOrFail($id);
            $abouts->title = $request->get('title');
            $abouts->content = $request->get('content');


                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/about', $imageName);

                    $abouts->image = $imageName;
                    }

                $isUpdated = $abouts->save();
                return ['redirect'=>route('abouts.index')];


                if($isUpdated){
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts = About::destroy($id);
    }
}