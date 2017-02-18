<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mutualfund;
use App\Customer;
use Illuminate\Support\Facades\Auth;

class MutualfundController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $mutualfunds = Mutualfund::all();
            return view('mutualfunds.index', compact('mutualfunds'));
        } else {
            return redirect('/login');
        }
    }

    public function show($id)
    {
        if (Auth::check()) {
            $mutualfund = Mutualfund::findOrFail($id);

            return view('mutualfunds.show', compact('mutualfund'));
        } else {
            return redirect('/login');
        }
    }

    public function create()
    {
        if (Auth::check()) {
            $customers = Customer::lists('name','id');
            return view('mutualfunds.create', compact('customers'));
        }
        else {
            return redirect('/login');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request, [
                'scheme' => 'required',
                'category' => 'required',
                'units' => 'required',
            ]);
            $mutualfund = new mutualfund($request->all());
            $mutualfund->save();

            return redirect('mutualfunds');
        }
    }

    public function edit($id)
    {
        if (Auth::check()) {
            $mutualfund=Mutualfund::find($id);
            return view('mutualfunds.edit',compact('mutualfund'));
        }
        else {
            return redirect('/login');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        if (Auth::check()) {
            $mutualfund= new Mutualfund($request->all());
            $mutualfund=Mutualfund::find($id);
            $mutualfund->update($request->all());
            return redirect('mutualfunds');
        }
        else {
            return redirect('/login');
        }
    }
    public function destroy($id)
    {
        Mutualfund::find($id)->delete();
        return redirect('mutualfunds');
    }
}