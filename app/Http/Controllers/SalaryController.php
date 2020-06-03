<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;
use App\YearlyPaidLeave;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Salary::with('salaryPackage')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new Salary;
        $salary->salary_package_id = $request->salary_package_id;
        $salary->yearly_monthly = $request->yearly_monthly;
        $salary->amount = $request->amount;
        $salary->yearly_public_holidays = json_encode($request->yearly_public_holidays);
        $salary->yearly_working_days = json_encode($request->yearly_working_days);
        $salary->monthly_working_days = json_encode($request->monthly_working_days);
        $salary->monthly_paid_leave = $request->monthly_paid_leave;
        $salary->save();

        for($i = 0; $i < count($request->yearly_paid_leaves); $i++){
            $paidLeaves = new YearlyPaidLeave;
            $paidLeaves->salary_id = $salary->id;
            $paidLeaves->title = $request->yearly_paid_leaves[$i]['title'];
            $paidLeaves->number_of_days = $request->yearly_paid_leaves[$i]['number_of_days'];
            $paidLeaves->save();
        }
        return response()->json(['success','Salary Package Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
