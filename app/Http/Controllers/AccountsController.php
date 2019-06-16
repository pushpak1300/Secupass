<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\accounts;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accounts.accounts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.accountcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedaccount = $request->validate([
            'title'=>['required','min:4'],
            'link' =>['required','min:4'],
            'login_id' => ['required','min:4'],
            'login_password' => ['required','min:4'],
            'comment' =>['required','min:4'],
        ]);
        $request=$validatedaccount;
        $account=new accounts;
        $account->title=$request['title'];
        $account->link = $request['link'];
        $account->login_id = $request['login_id'];
        $account->login_password = $request['login_password'];
        $account->comment = $request['comment'];
        $account->owner_id=0;
        $account->save();
        
        // accounts::create(request(['title','link','login_id','login_password','comment',]));//route model bindings
        return redirect('accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function show( accounts $account)
    {
        return view('accounts.accountview',compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function edit(accounts $accounts)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accounts $account)
    {
        $validatedaccount = $request->validate([
            'title' => ['required', 'min:4'],
            'link' => ['required', 'min:4'],
            'login_id' => ['required', 'min:4'],
            'login_password' => ['required', 'min:4'],
            'comment' => ['required', 'min:4'],
        ]);
        $request = $validatedaccount;
        $account->title = $request['title'];
        $account->link = $request['link'];
        $account->login_id = $request['login_id'];
        $account->login_password = $request['login_password'];
        $account->comment = $request['comment'];
        $account->owner_id = 0;
        $account->save();
        // accounts::update(request(['title', 'link', 'login_id', 'login_password', 'comment',]));
        return redirect('accounts/'.$account['account_id'].'');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy( accounts $account)
    {
        $account->delete();
        return redirect('accounts');   
    }
}
