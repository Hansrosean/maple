<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class EmployeeController extends Controller
{
    public function index(): View
    {
        $employee = Employee::latest()->paginate(10);

        return view('employee.index', compact('employee'));
    }

    public function create(): View
    {
        $departments = Department::all();
        $positions = Position::all();

        return view('employee.create', compact('departments', 'positions'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'employee_code' => 'required',
            'email' => 'required|string|unique:employees,email',
            'position_id' => 'required',
            'department_id' => 'required',
            'phone' => 'required|string|max:100',
            'gender' => 'required',
            'address' => 'required',
            'birth_date' => 'required',
            'hire_date' => 'required',
            'employment_type' => 'required',
        ]);

        Employee::create($validated);

        return redirect()
            ->route('employee.create')
            ->with('success', 'New employee added.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $positions = Position::all();

        return view('employee.edit', compact('employee', 'departments', 'positions'));
    }

    public function update(Request $request, Employee $employee): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'employee_code' => 'required',
            'email' => 'required|string|unique:employees,email,' . $employee->id, // supaya tidak dianggap duplikat
            'position_id' => 'required',
            'department_id' => 'required',
            'phone' => 'required|string|max:100',
            'gender' => 'required',
            'address' => 'required',
            'birth_date' => 'required',
            'hire_date' => 'required',
            'employment_type' => 'required',
        ]);

        $employee->update($validated);

        return redirect()
            ->route('employee.index')
            ->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()
            ->route('employee.index')
            ->with('success', 'Employee deleted successfully.');
    }
}
