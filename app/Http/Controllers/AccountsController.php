<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\accounts;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Mail\accountcreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Encryption\DecryptException;



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
        // $this->middlewear( 'verified');
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
        if($accounts->count()>0){
        foreach ($accounts as $account) {
            try {
                $account['login_password'] = decrypt($account['login_password']);
            } catch (DecryptException $e) {
                // 
            }
        }
     }
        else{
            //
        }
        return view('accounts.accounts', compact(['user', 'accounts']));
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
        $data['login_password']=encrypt($request->login_password);
        $account=accounts::create($data);
        // Mail::to($account->owner->email)->send(new accountcreated($account));   //Mail To user when new email is created
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
        $this->authorize('view',$account);
        try {
            $account->login_password= decrypt( $account->login_password);
        } catch (DecryptException $e) {
            //
        }
        return view('accounts.accountview',compact(['account','user','accounts']));
    }

    public function update(Request $request, accounts $account)
    {
        $this->authorize('update', $account);
        $data = $this->validator($request);
        // $data['owner_id'] = Auth::id();
        $data['login_password'] = encrypt($request->login_password);
        $account =  accounts::find($account->account_id)->update($data);
        return redirect()->back()->with('success','The accounts credentials has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy( accounts $account)
    {
        $this->authorize('delete', $account);
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
            'comment' => [],
        ]);
    }
    
    public function search( Request $request)
    {
        
        $user = $this->currentuser();
        $accounts = accounts::where('owner_id', auth()->id())->get();
        $accounts=$accounts->where('title','LIKE',$request->search);
        foreach ($accounts as $account) {
            try {
                $account['login_password'] = decrypt($account['login_password']);
            } catch (DecryptException $e) {
            //
            }
        }
        return view('accounts.accounts', compact(['user', 'accounts']));
    }
    public function currentuser()
    {
        return Auth::user();
    }
    public function useraccounts()
    {
        return accounts::where('owner_id', auth()->id())->get();
    }
}
