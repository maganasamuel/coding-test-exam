<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest('created_at')->latest('id')->paginate();

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'boolean'],
            'birth_date' => ['required', 'date'],
            'address' => ['required', 'string'],
            'contact_number' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'job_title' => ['required', 'string', 'max:255'],
            'salary_per_month' => ['required', 'integer', 'max:99999'],
        ]);

        Employee::create($data);

        return redirect(route('employees.index'))->with('success', 'Employee has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);

        return view('employees.show', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'boolean'],
            'birth_date' => ['required', 'date'],
            'address' => ['required', 'string'],
            'contact_number' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'job_title' => ['required', 'string', 'max:255'],
            'salary_per_month' => ['required', 'numeric', 'max:99999'],
        ]);

        $employee->update($data);

        return redirect(route('employees.index'))->with('success', 'Employee has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        $employee->delete();

        return redirect(route('employees.index'))->with('success', 'Employee has been deleted.');
    }
}
