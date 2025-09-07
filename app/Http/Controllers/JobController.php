<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index() {
            $Jobs = Jobs::all(); // Fetch all jobs
        return view('Job/index' , ["Jobs"=>$Jobs]);} // Pass jobs to the view
}
