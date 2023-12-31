<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeValidation;
use App\Models\Employee;
use App\Models\Nationality;
use Exception;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $employees = Employee::all();

        return view('admin.pages.employee.index',compact('employees'));
    }

   
    public function create()
    {
        $nationalities = Nationality::pluck('name_ar');

        return view('admin.pages.employee.create',compact('nationalities'));
    }

    
    public function store(EmployeeValidation $request)
    {

        $data = $request->except(['_method','_token']);

        try{

            if($request->avatar) {
                $data['avatar'] = 'uploads/' . $request->file('avatar')->store('employees','public_directory');
            }

            Employee::create($data);

            return redirect()->route('employees.index')->with('success','تمت العمليه بنجاح');

        } catch(Exception $ex) {

            return redirect()->route('employees.index')->with('error','لو سمحت حاول مره اخرى');

        }
    }

   
    public function show(Employee $employee)
    {
        return view('admin.pages.employee.show',compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $nationalities = Nationality::pluck('name_ar');

        return view('admin.pages.employee.edit',compact('nationalities','employee'));
    }

    
    public function update(EmployeeValidation $request, Employee $employee)
    {
        $data = $request->except(['_method','_token']);

        try{

            if($request->avatar) {

                if($employee->avatar !== 'uploads/employees/default.png') 
                    unlink($employee->avatar);

                $data['avatar'] = 'uploads/' . $request->file('avatar')->store('employees','public_directory');
            }

            $employee->update($data);

            return redirect()->route('employees.index')->with('success','تمت العمليه بنجاح');

        } catch(Exception $ex) {

            return redirect()->route('employees.index')->with('error','لو سمحت حاول مره اخرى');

        }
    }

    
    public function destroy(Employee $employee)
    {
        if($employee->avatar !== 'uploads/employees/default.png') 
            unlink($employee->avatar);

        $employee->delete();

        return back()->with('success','تم الحذف بنجاح');
    }
}
