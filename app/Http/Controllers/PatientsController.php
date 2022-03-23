<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use DataTables;

class PatientsController extends Controller
{
    //get data in page "tables-1st.blade.php"
    public function getPatient1st(Request $request)
    {
        if ($request->ajax()) {
            $data = Patients::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"">View</a>';
                    return $actionBtn;
                    
                })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    //get data in page "tables-2nd.blade.php"
    public function getPatient2nd(Request $request)
    {
        if ($request->ajax()) {
            $data = Patients::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"">View</a>';
                    return $actionBtn;
                    
                })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    //get data in page "Registration-1st.blade.php"
    public function getRegister1st(Request $request)
    {
        if ($request->ajax()) {
            $data = Patients::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"">Register</a>';
                    return $actionBtn;
                    
                })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    //get data in page "Registration-2nd.blade.php"
    public function getRegister2nd(Request $request)
    {
        if ($request->ajax()) {
            $data = Patients::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"">Register</a>';
                    return $actionBtn;
                    
                })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    //get data in page "Deferral-1st.blade.php"
    public function getDeferral1st(Request $request)
    {
        if ($request->ajax()) {
            $data = Patients::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"">Deffer</a>';
                    return $actionBtn;
                    
                })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    //get data in page "Deferral-2nd.blade.php"
    public function getDeferral2nd(Request $request)
    {
        if ($request->ajax()) {
            $data = Patients::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"">Deffer</a>';
                    return $actionBtn;
                    
                })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    //get data in page "Vaccination-1st.blade.php"
    public function getVaccination1st(Request $request)
    {
        if ($request->ajax()) {
            $data = Patients::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"">Enter</a>';
                    return $actionBtn;
                    
                })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    //get data in page "Vaccination-2nd.blade.php"
    public function getVaccination2nd(Request $request)
    {
        if ($request->ajax()) {
            $data = Patients::latest()->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"">Enter</a>';
                    return $actionBtn;
                    
                })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Data = Patient::find($id);
        return view('patient.edit',compact('Registered','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function RegistrationUpdate(Request $request, $id)
    {
        $data  = Patients::find($id);

    return response()->json([
      'data' => $data
    ]);
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
