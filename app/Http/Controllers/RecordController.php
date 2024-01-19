<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;

class RecordController extends Controller
{
    // Show all records
    public function index() {
        return view('index', [
            'records' => Record::oldest()->paginate(10)
        ]);
    }
    
}
