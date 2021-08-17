<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Start Routes to website************
    public function index(){
        return view('agri_website.index');
    }

    // End Routes to website**************

    // Start Routes to System-------------------------------------------
    public function home(){
        return view('agri_system.home');
    }
    
    //Routes to Farm
    public function add_farm(){
        return view('agri_system.add_farm');
    }

    public function view_farm(){
        return view('agri_system.view_farm');
    }

    

    //Route to Crop
    public function add_crop(){
        return view('agri_system.add_crop');
    }

    public function view_crop(){
        return view('agri_system.view_crop');
    }


    //Route to Crop Pesticide
    public function add_crop_pesticide(){
        return view('agri_system.add_pesticide');
    }

    public function add_crop_pests(){
        return view('agri_system.add_pest');
    }

    public function add_seed(){
        return view('agri_system.add_seed');
    }

    //Route to Harvest
    public function add_harvest(){
        return view('agri_system.add_harvest');
    }

    public function view_harvest(){
        return view('agri_system.add_harvest');
    }


    // End Routes to System----------------------------------------
    
}