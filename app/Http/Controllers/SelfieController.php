<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Selfie;

class SelfieController extends Controller {
    
    public function list() {
        return response()->json(["selfies" => Selfie::all()], 200);
    }

    public function save(Request $request) {
        Selfie::create($request->all());
        return response()->json([], 200);
    }

    public function like($id) {
        $selfie = Selfie::find($id);
        $selfie->likes += 1;
        $selfie->save();
        return response()->json([], 200);
    }

}
