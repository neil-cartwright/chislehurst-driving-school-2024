<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.notes', compact(['customer']));
    }
}
