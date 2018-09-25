<?php
namespace MSDS\Http\Controllers;
use MSDS\Emergency;
use Illuminate\Http\Request;
class EmergencyController extends Controller
{

    public function show(Emergency $emergency)
    {
        return view('112');
    }

}
