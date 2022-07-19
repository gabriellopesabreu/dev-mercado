<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller{

    private $model;
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data = $this->model->with('items')->get();
        return response()->json($data);
    }

    public function show($id)
    {
        //
    }

    public function store(OrderRequest $request)
    {
        //$max_number = DB::table('orders')->max('number');

        $request_data = $request->all();
        $order = Order::create($request_data);
        foreach ($request_data['items'] as $item) {
            $order->items()->create($item);
        }

        return response()->json($order);
    }

    public function update(OrderRequest $request, $id)
    {
        //
    }

    public function delete($id)
    {
        $data = $this->model->find($id);
        $data->delete();

        return response()->json('',201);
    }

}
