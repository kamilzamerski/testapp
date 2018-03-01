<?php

namespace App\Http\Controllers;

use App\Libs\SmsApi\contents\SMSNotifyProductAvailable;
use App\Page;
use App\User;

class TestController extends Controller
{
    public function index()
    {
        //SMS TEST
        //$send = app('App\Libs\SmsApi')->send(new SMSNotifyProductAvailable(User::find(1), 'Toys'));
        return view('dashboard', ['users' => User::all()]);
    }

    /**
     * @param $id - userId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showUser(int $id)
    {
        return view('user', ['users' => User::all(), 'user' => User::findOrFail($id)]);
    }

    /**
     * @param $id - pageId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPage(int $id)
    {
        return view('page', ['users' => User::all(), 'page' => Page::findOrFail($id)]);
    }
}
