<?php

namespace App\Http\Controllers;

use App\Models\Say;
use Illuminate\Http\Request;

class SayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says = Say::orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.say.index', compact('says'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.say.create');
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
            $says = new Say();
            $says->name = $request->get('name');
            $says->message = $request->get('message');
            $says->rate = $request->get('rate');
            $says->email = $request->get('email');


                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/say', $imageName);

                    $says->image = $imageName;
                    }

                $isSaved = $says->save();

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
        $says = Say::findOrFail($id);
        return response()->view('cms.say.edit' , compact('says' ));
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
            $says =  Say::findOrFail($id);
            $says->name = $request->get('name');
            $says->message = $request->get('message');
            $says->rate = $request->get('rate');
            $says->email = $request->get('email');


                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/say', $imageName);

                    $says->image = $imageName;
                    }

                $isUpdated = $says->save();
                return ['redirect'=>route('says.index')];


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
        $says = Say::destroy($id);
    }
}