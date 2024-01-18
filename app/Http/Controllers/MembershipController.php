<?php

namespace App\Http\Controllers;

use App\Models\membership;
use Illuminate\Http\Request;
use Str;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memberships = membership::all();
        return view('backend.membership.index', [
            'memberships'=>$memberships,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title'         =>'',
            'image'         =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/membership'), $file_name);
            $validatesData['image'] = $file_name;
        }

        membership::create($validatesData);
        toast('Add Success','success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $memberships = membership::find($id);
        return view('backend.membership.edit', [
            'memberships'=>$memberships,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title'         =>'',
            'image'         =>'',
            'status'        =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/membership'), $file_name);
            $validatesData['image'] = $file_name;
        }

        membership::where('id', $id)->update($validatesData);
        toast('Update Success','success');
        return redirect()->route('membership.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        membership::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
