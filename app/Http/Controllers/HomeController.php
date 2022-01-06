<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Session;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // FirebaseAuth.getInstance().getCurrentUser();
        try {
            $uid = Session::get('uid');
            $user = app('firebase.auth')->getUser($uid);
            return view('home');
        } catch (\Exception $e) {
            return $e;
        }

    }
    //
}
