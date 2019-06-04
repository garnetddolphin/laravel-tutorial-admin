<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ログイン情報
        $user = \Auth::user();
        $customers = Customer::where('client_id', $user->id)->get();
        return View('customer.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('send.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ログイン情報
        $user = \Auth::user();
        $customer = new Customer;
        $customer->country = $request->country;
        $customer->postcode = $request->postcode;
        $customer->prefecture = $request->prefecture;
        $customer->city = $request->city;
        $customer->ward = $request->ward;
        $customer->streetAddress = $request->streetAddress;
        $customer->secondaryAddress = $request->secondaryAddress;
        $customer->company = $request->company;
        $customer->userName = $request->userName;
        $customer->domainName = $request->domainName;
        $customer->email = $request->email;
        $customer->lastName = $request->lastName;
        $customer->firstName = $request->firstName;
        $customer->lastKanaName = $request->lastKanaName;
        $customer->firstKanaName = $request->firstKanaName;
        $customer->phoneNumber = $request->phoneNumber;
        $customer->realText = $request->realText;
        $customer->client_id = $user->id;
        // 保存
        $customer->save();
        return redirect('/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // ログイン情報
        $user = \Auth::user();
        // 引数で受け取った$idを元にfindでレコードを取得
        $send = Send::where(['id' => $id, 'client_id' => $user->id])->first();
        // viewにデータを渡す
        return view('send.show', ['send' => $send]);
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

    public function __construct()
    {
        $this->middleware('auth');
    }
}
