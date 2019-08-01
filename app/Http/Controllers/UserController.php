<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('UserReport.users', [
            'users' => User::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|E-Mail|email|unique:users,email',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            // 'pass' => 'min:6|required_with:passv|same:passv',
            // 'passv' => 'required|min:6'


        ]);
        $report= new User();
        $report->name = $request->get('name');
        $report->email = $request->get('email');
        $report->password = Hash::make($request->get('password'));
        // 'password' => Hash::make($data['password']),
        // $report->password_confirmation = $request->get('passv');
             
        $report->save();

        return redirect('/users');
        
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
        $report = User::findOrFail($id);
        return view('UserReport.edit', [
            'report' =>$report
        ]);
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
        $report = User::findOrFail($id);
        $report->name = $request->get('name');
        $report->email = $request->get('email');
        $report->password = Hash::make($request->get('password'));
        $report->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = User::findOrFail($id);
        $report->delete();
        return redirect('/users');
    }
    public function confirmDelete($id){
        // dd('confirmDelete'. $id); 
        $report = User::findOrFail($id);   
        return view('UserReport.delete', [
            'report' => $report
        ]);  
    }
}
