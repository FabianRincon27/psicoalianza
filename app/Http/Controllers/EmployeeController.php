<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployees(){
        $employees = Employee::orderBy('id', 'desc')->paginate(10);
        return view('master', compact('employees'));
    }

    public function postEmployee(Request $request){
        $e = new Employee;
        $e->name = e($request->input('name'));
        $e->lastname = e($request->input('lastname'));
        $e->type_document = $request->input('type_document');
        $e->num_document = e($request->input('num_document'));
        $e->address = e($request->input('address'));
        $e->city = e($request->input('city'));
        $e->phone = e($request->input('phone'));

        $e->save();

        return back();
    }

    public function addCharges(Request $request, $id){
        $u = Employee::findOrFail($id);
        $u->charges = $request->except(['_token']);
        $u->save();

        return back();
    }
}
