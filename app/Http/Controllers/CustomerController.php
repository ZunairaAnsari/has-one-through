<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // this method is to get latest entries from the desired table
        // $latestOrder = Customer::with('latestOrder')->find(1);
        // $latestOrder = Customer::with('latestOrder')->get();
        // return $latestOrder;

        // this method is to get oldest entries from the desired table
        // $oldestOrder = Customer::with('oldestOrder')->find(1);
        // return $oldestOrder;

        // $largestOrder = Customer::with('largestOrder')->find(1);
        // return $largestOrder;

        
        // $smallestOrder = Customer::with('smallestOrder')->find(1);
        // return $smallestOrder;

        // $customer = Customer::with('orders')->with(['largestOrder', 'smallestOrder'])->find(1);
        
        
        // $customer = Customer::with('orders')->with(['latestOrder','oldestOrder','largestOrder', 'smallestOrder'])->get();
        

        // with this method you can retrive both the orders through giving your funtions name in an array
        $customer = Customer::with('orders')->with(['largestOrder', 'smallestOrder'])->get();
        return response()->json($customer);

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
