<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Information::orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.information.index', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.information.create');

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
            $informations = new Information();
            $informations->map = $request->get('map');
            $informations->address = $request->get('address');
            $informations->mobile = $request->get('mobile');
            $informations->email = $request->get('email');


                $isSaved = $informations->save();

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
        $informations = Information::findOrFail($id);
        return response()->view('cms.information.edit' , compact('informations' ));
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
            $informations =  Information::findOrFail($id);

            $informations->map = $request->get('map');
            $informations->address = $request->get('address');
            $informations->mobile = $request->get('mobile');
            $informations->email = $request->get('email');

                $isUpdated = $informations->save();
                return ['redirect'=>route('informations.index')];


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
        $informations = Information::destroy($id);

    }
}