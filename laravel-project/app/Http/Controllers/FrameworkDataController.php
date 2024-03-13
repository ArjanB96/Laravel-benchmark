<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrameworkData;
use Illuminate\Support\Facades\Cache;

class FrameworkDataController extends Controller
{
    public function index()
    {
        $frameworkData = Cache::remember('framework_data', 180, function () {
            return FrameworkData::all();
        });

        return view('frameworkdata.index', ['frameworkData' => $frameworkData]);
    }
}
