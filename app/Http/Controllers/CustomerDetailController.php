<?php

namespace App\Http\Controllers;

use App\Models\models\CustomerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CustomerDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerDetail = CustomerDetail::all();
        return view('website.backend.customerDetail.index',compact('customerDetail'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.backend.customerDetail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        CustomerDetail::create($request->all());
        return redirect()->route('customerDetail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\models\CustomerDetail  $customerDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerDetail $customerDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\models\CustomerDetail  $customerDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerDetail $customerDetail)
    {
        return view('website.backend.customerDetail.update',compact('customerDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\models\CustomerDetail  $customerDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerDetail $customerDetail)
    {
        $customerDetail->update($request->all());
        return redirect()->route('customerDetail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\models\CustomerDetail  $customerDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerDetail $customerDetail)
    {
        $customerDetail->delete();
        return redirect()->route('customerDetail.index');
    }
}
