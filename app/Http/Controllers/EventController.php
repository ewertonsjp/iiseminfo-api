<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller {
    
    public function list() {
        return response()->json(["events" => Event::all()], 200);
    }

    public function like($id) {
        $event = Event::find($id);
        $event->likes += 1;
        $event->save();
        return response()->json([], 200);
    }

}
