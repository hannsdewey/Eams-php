<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Employee;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $employees = Employee::all();
        return view('employee.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Employee::create($input);
        return redirect('employee')->with('flash_message', 'Employee Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $employees = Employee::find($id);
        return view('employee.show')->with('employees', $employees);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $employees = Employee::find($id);
        return view('employee.edit')->with('employees', $employees);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $employees = Employee::find($id);
        $input = $request->all();
        $employees->update($input);
        return redirect('employee')->with('flash_message', 'Employee Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Employee::destroy($id);
        return redirect('employee')->with('flash_message', 'Employee deleted!');
    }
}