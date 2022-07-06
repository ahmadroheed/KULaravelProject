<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ShowNotification extends Controller
{
    public function Show()
    {
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back();
    }
}
