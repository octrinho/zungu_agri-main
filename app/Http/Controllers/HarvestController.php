<?php

namespace App\Http\Controllers;

use App\Http\Resources\CropResource;
use App\Models\Crop;
use App\Models\User;
use App\Http\Resources\HarvestResource;
use App\Models\Harvest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HarvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //This function purposely to give Crop name on Harvest form
    {
        $crops = Crop::all();
        return view('agri_system.add_harvest', compact('crops'));
    }

    public function view_harvest() //This function purposely to show Harvests in table format
    {
        $harvests = Harvest::all();
        $graph=Harvest::select(DB::raw("count(tonne) as tonne"))
                        ->Where('Crop_name','=','Maize')
                        ->groupBy(DB::raw("year"))
                        ->pluck("tonne");
        return view('agri_system.view_harvest', compact('harvests','graph'));
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
        //take crop name by using cropID
        $input_cropID=$request->input('crop_id');
        $cropname=Crop::select("*")->where("id","=",$input_cropID)->get();
        foreach ($cropname as $cropname)
            $cropname=$cropname->crop_name;
        
        $harvest= new Harvest();
        $cropYear=$request->input('year')."_".$request->input('crop_id'); //variable that concatinate year and cropid
        
        $cropYR = Harvest::where('CropID_year','=', $cropYear)->first();

        //Check if cropYear Exist
        if ($cropYR === null) {
            $harvest->cropID=$request->input('crop_id');
            $harvest->Crop_name=$cropname;
            $harvest->tonne=$request->input('tonne');
            $harvest->year=$request->input('year');
            $harvest->CropID_year=$cropYear;
    
            if($harvest->save()==TRUE){
                echo "<script> alert('Harvest Information is inserted succesful');
                    window.location.replace('view_harvest');
                 </script>";
                
            }
            else{
                echo 'adff';
            }
        } else {
            echo "<script> alert('Inserted Harvest Information is already exist');
                    window.location.replace('add_harvest');
                 </script>";
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
