<?php

namespace App\Http\Controllers;

use App\Http\Resources\CropResource;
use App\Models\Crop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class cropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crops = Crop::all();
        return view('agri_system.view_crop', compact('crops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crop= new Crop();

        $crop->crop_name=$request->input('crop_name');
        $crop->soil_type=$request->input('soil_type');
        $crop->rainfall=$request->input('rainfall');
        $crop->temperature=$request->input('temperature_level');
        $crop->fertilizer=$request->input('fertilizer');
        $crop->period=$request->input('season');
 
         if($crop->save()==TRUE){
             $message='Crop Registered successfully';
             return redirect('view_crop');    
         }
         else{
             echo 'adff';
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
