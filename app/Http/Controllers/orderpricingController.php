<?php

namespace App\Http\Controllers;

use App\Models\orderpricing;
use Illuminate\Http\Request;

class orderpricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderpricing = orderpricing::all();
        return view('backend.orderpricing.index', [
            'orderpricing'=>$orderpricing,
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
            'pricing_id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'',
        ];

        $validatesData = $request->validate($rules);

        orderpricing::create($validatesData);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        orderpricing::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
