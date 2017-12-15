<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Selfie;

class SelfieController extends Controller {
    
    public function list() {
        return response()->json(["selfies" => Selfie::all()], 200);
    }

}
