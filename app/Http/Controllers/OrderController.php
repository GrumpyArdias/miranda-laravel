<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        $userId = Auth::user()->id;
        $orders = Order::where('userId', $userId)->get();


        return view("order", ["rooms" => $rooms, "orders" => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(["roomId" => "required", "type" => "required", "description" => "required"]);
        $userId = Auth::user()->id;
        Order::create(["userId" => $userId, ...$validateData]);
        return back()->with("success", "Your order has been placed");
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $orders = Order::all();
        dd($orders);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $orderDescription = request("description");
        $orderId = request("orderId");
        Order::where("id", $orderId)->update(['description' => $orderDescription]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $orderId = request("orderId");
        Order::destroy($orderId);
        return back();
    }
}
