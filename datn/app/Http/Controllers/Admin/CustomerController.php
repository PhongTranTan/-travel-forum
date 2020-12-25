<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customers.index');
    }

    public function view()
    {

    }

    public function update()
    {

    }
}
