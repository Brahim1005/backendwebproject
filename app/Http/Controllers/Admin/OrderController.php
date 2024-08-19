<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function showorder()
    {
        $order = Order::all();
        return view('admin.showorder', compact('order'));
    }

    public function updatestatus($id)
    {
        $order = Order::find($id);
        $order->status = 'delivered';
        $order->save();

        return redirect()->back();
    }
}
