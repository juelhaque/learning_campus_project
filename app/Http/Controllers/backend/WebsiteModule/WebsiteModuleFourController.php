<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WebsiteModuleFourController extends Controller
{
    public function manageNotice(){
        return view('backend.website_module.manage_notice');
    }

    public function manageCareer(){
        return view('backend.website_module.manage_career');
    }

    public function boardResult(){
        return view('backend.website_module.board_result');
    }


    // add section
    public function addNotice(){
        return view('backend.website_module.add_folder.add_notice');
    }

    public function addCareer(){
        return view('backend.website_module.add_folder.add_Career');
    }

    public function addBoardResult(){
        return view('backend.website_module.add_folder.add_board_result');
    }


}

