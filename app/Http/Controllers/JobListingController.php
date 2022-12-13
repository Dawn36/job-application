<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobData=JobListing::get();
        return view('job-listing/job_listing_index',compact('jobData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job-listing/job_listing_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => ['required'],
            'job_number' => ['required'],
        ]);
        $data = JobListing::create([
            'job_title' => $request->job_title,
            'job_number' => $request->job_number,
            'user_id'=>Auth::user()->id,
            'created_at' => date("Y-m-d h:i:s"),
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobListing  $jobListing
     * @return \Illuminate\Http\Response
     */
    public function show(JobListing $jobListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobListing  $jobListing
     * @return \Illuminate\Http\Response
     */
    public function edit(JobListing $jobListing)
    {
        return view('job-listing/job_listing_edit',compact('jobListing'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobListing  $jobListing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'job_title' => ['required'],
            'job_number' => ['required'],
        ]);
        $job = JobListing::find($id);
        $job['job_title'] = $request->job_title;
        $job['job_number'] = $request->job_number;
        $job['updated_at'] = date("Y-m-d");
        $job->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobListing  $jobListing
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data = JobListing::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function jobActive(Request $request)
    {
        $id=$request->id;
        $isActive=$request->value;
        $isActive = $isActive == 'yes' ? 'no' : 'yes';
        $job = JobListing::find($id);
        $job['is_active'] = $isActive;
        $job->save();

        return true;

    }
}
