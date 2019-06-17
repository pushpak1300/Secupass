<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\accounts;
use Illuminate\Support\Facades\Auth;
use App\User;

class AccountsController extends Controller
{
    /**
     * This will create Authenticate to view any resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {   
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $user = $this->currentuser();
        $accounts=accounts::where('owner_id',auth()->id())->get();
        return view('accounts.accounts',compact(['user','accounts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user=$this->currentuser();
        $accounts =$this->useraccounts() ;
        return view('accounts.accountcreate', compact(['user','accounts']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $this->validator($request);
        $data['owner_id']=Auth::id();
        $account=accounts::create($data);
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
        $user = $this->currentuser();
        $accounts = $this->useraccounts();
        $this->authorize('view',$accounts);
        return view('accounts.accountview',compact(['account','user','accounts']));
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
        $data = $this->validator($request);
        $data['owner_id'] = Auth::id();
        $account =  accounts::update(data);
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

    public function dashboard()
    {
        $user = $this->currentuser();
        $accounts = $this->useraccounts();
        return view('accounts.dashboard', compact(['accounts', 'user']));
    }
    public function validator($request){
        return $request->validate([
            'title' => ['required', 'min:4'],
            'link' => ['required', 'min:4'],
            'login_id' => ['required', 'min:4'],
            'login_password' => ['required', 'min:4'],
            'comment' => ['required', 'min:4'],
        ]);
    }
    public function currentuser(){
        return Auth::user();
    }
    public function useraccounts(){
        return accounts::where('owner_id', auth()->id())->get();
    }
}
