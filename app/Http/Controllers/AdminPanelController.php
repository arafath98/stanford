<?php

namespace App\Http\Controllers;

class AdminPanelController extends Controller
{

    public function showAdminPage(){
        $page_title = 'Admin Panel';

        return view('backend.home.index', \get_defined_vars());
    }

}
