<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllPageController extends Controller
{   
    public function goToLogin()
    {  
        return view('frontend.beforelogin.login');
    }
     public function goToRegister()
    {  
        return view('frontend.beforelogin.register');
    }
     public function goToForgotpassword()
    {  
        return view('frontend.beforelogin.forgotpassword');
    }
     public function goToChangepassword()
    {  
        return view('frontend.beforelogin.changepassword');
    }


    public function goToHomeMenu()
    {  
        return view('frontend.afterlogin.homemenu');
    }
    public function gotoViewTransactionHistory()
    {  
        return view('frontend.afterlogin.transactionhistory');
    }
    public function gotoViewRecentTransactions()
    {  
        return view('frontend.afterlogin.recenttransactions');
    }
    public function gotoViewStatusWM()
    {  
        return view('frontend.afterlogin.checkstatuswm');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
