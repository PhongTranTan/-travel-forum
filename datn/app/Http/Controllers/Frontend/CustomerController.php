<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Session;
use App\Http\Controllers\Controller;
use App\Models\Review;


use App\Models\Customer;

class CustomerController extends Controller
{
    public function login(Request $rq)
    {
        $input = $rq->all();
        $check = Auth::guard('customer')->check();
        //-- Logined
        if ($check) {
            return redirect()->route('page.profile');
        }
        //-- Not Login
        $loginCheck = Auth::guard('customer')->attempt(
            [
                'email' => $input['email'], 
                'password' => $input['password'],
                'active' => 1
            ]
        );
        if (!$loginCheck) {
            session()->flash('error', 'Login Fail !');
        }
        Auth::guard('customer');
        session()->flash('success', 'Login Success !');
        return redirect()->route('page.profile');
    }

    public function profile()
    {
        $profile = Auth::guard('customer')->user();
        return view('frontend.profile', compact(
            'profile'
        ));
    }

    public function postProfile(Request $rq)
    {
        $input = $rq->all();
        return redirect()->route('page.profile');
    }

    public function putProfile(Request $rq)
    {
        $input = $rq->all();
        $customer = Customer::find($rq->id);
        $input = $this->parseInput($rq, $customer, $input);
        $checkAction = $customer->update($input);
        if (!$checkAction) {
            session()->flash('error', 'Update error !');
            return redirect()->back();
        }  
        session()->flash('success', 'Update Success !');
        return redirect()->route('page.profile');
    }

    public function parseInput($rq, $customer, $input)
    {
        if (isset($input['password_old']) 
            && isset($input['new_password'])  
            && isset($input['confirm_password'])) {
            if (!password_verify($input['password_old'], $customer->password)) {
                session()->flash('error', 'Incorrect password!');
                return redirect()->back();
            }
            if ($input['new_password'] != $input['confirm_password']) {
                session()->flash('error', 'Update password fail, passwords are not the same !');
                return redirect()->back();
            }
            $input['password'] = Hash::make($input['new_password']); 
        }
        if( $rq->file('avatar') ) {
            $type = $rq->file('avatar')->extension();
            $timeNow = strtotime("now");
            $folder = "public/images/avatar/";
            $nameFile = "avatar_{$timeNow}.{$type}";
            Storage::putFileAs("{$folder}", $rq->file('avatar'), $nameFile);
            $path = "/images/avatar/$nameFile";
            $input['avatar'] = $path;
        }

        return $input;
    }

    public function postSignup(Request $rq)
    {
        $isMainPage = 1;
        $input = $rq->all();
        $exits = Customer::where('email', $input['email'])->first();
        if ($exits) {
            return redirect()->back();
        }
        $input['password'] = Hash::make($input['password']);
        $customer = Customer::create($input);
        Auth::guard('customer')->login($customer);
        return redirect()->route('profile');
    }

    public function signup()
    {
        $isMainPage = 1;
        return view('frontend.signup', compact(
            'isMainPage'
        ));
    }

    public function forgot()
    {
        $isMainPage = 1;
        return view('frontend.forgot', compact(
            'isMainPage'
        ));
    }

    public function postForgot()
    {
        $isMainPage = 1;
        return view('frontend.forgot', compact(
            'isMainPage'
        ));
    }

    public function postReview(Request $rq)
    {
        $input = $rq->all();
        $input['customer_id'] = Auth::guard('customer')->user()->id;
        Review::create($input);
        session()->flash('success', 'Review Success !');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('page.home');
    }
}
