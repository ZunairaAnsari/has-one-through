<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use App\Models\Phone_number;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $employee = Employee::with('company')->with('phone_numbers')->get();
        // return $employee;
        
        // $employee = Employee::with('company')->with('phone_numbers')->find(1);

        foreach ($employee as $employee){
        echo $employee->name . "<br/>";
        echo $employee->company->name . "<br/>";
        echo $employee->phone_numbers->phone_numbers ."<br/>";
        echo "---------------------------------<br/>";
    }
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
        //
    }
}
