<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index', compact(
            'customers'
        ));
    }

    public function update($id, Request $rq)
    {
        $input = $rq->all();
        $dt = Customer::find($id);
        $dt->update($input);
        return 1;
    }

    public function delete($id)
    {
        $data = Customer::find($id);
        $data->delete();
        session()->flash('success', 'Delete Success !');
        return redirect()->route('admin.customer.index');
    }
}
