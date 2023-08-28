<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee; // Assuming you have an Employee model

class EmployeeController extends Controller
{
    public function index()
    {
        // $query = 'SELECT * FROM school';
        // $schools = DB::select($query);
        $employees = Employee::select('id', 'name', 'designation','salary', 'created_at')->get();
        return view('pages.employee.index', compact('employees'));
    }
    public function employeedata()
    {
        return view('pages.employee.create');
    }

    public function store(EmployeeRequest $request)
    {
        $employee = employee::create(['name' => $request->name, 'designation' => $request->designation,'salary' => 'salary']);
        // dd('data saved');
        // You can choose to return a view or redirect to another route
        return view('pages.employee.show', ['name' => $request->name, 'designation' => $request->designation,'salary' => $request->salary]);
        // or
        // return redirect()->route('employee.show', ['id' => $employee->id]);
    }
    public function show(employee $employee)
    {
        // $query = 'SELECT * FROM companies WHERE id = '. $id;
        // $employee = DB::select($query);

        return view('pages.employee.show', $employee);
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