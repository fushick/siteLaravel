<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request) { //работаем с запросом
        $orderId = session('orderId');
        if (!is_null($orderId)){
            return redirect()-> route('index');
        }
        $order = Order::find($orderId);
        $success = saveOrder($request ->name,$request ->phone);

        if ($success) {
            session()->flash('success', 'Ваш заказ обрабатывается');
        }
        else {
            session()->flash('warning', 'Произошла ошибка');
        }

            return redirect()-> route('index');
    }

    public function basketPlace()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()-> route('index');
        }
        $order = Order::find($orderId);
        return view('order', compact('order'));
    }

    public function basketAdd($productId){
        $orderId = session('orderId');
        if (is_null($orderId)){
            $order = Order::create();
            session(['orderId' => $order->id]);
        }
        else {
            $order = Order::find($orderId);

        }
        if ($order ->products->contains($productId)){
            $pivotRow = $order ->products()->where('product_id',$productId) ->first()->pivot;
            $pivotRow ->count++;
            $pivotRow ->update();
        }
        else {
            $order ->products()->attach($productId);
        }
        return redirect()->route('basket');
    }

    public function basketDelete($productId) {
        $orderId = session('orderId');
        if (is_null($orderId)){
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
        if ($order ->products->contains($productId)){
            $pivotRow = $order ->products()->where('product_id',$productId) ->first()->pivot;
            if ($pivotRow ->count < 2) {
                $order -> products()->detach($productId);
            }
            else {
                $pivotRow ->count--;
                $pivotRow ->update();
            }
        }
        return redirect()->route('basket');

    }
}
