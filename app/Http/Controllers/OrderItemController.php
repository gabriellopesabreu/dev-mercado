<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderItemRequest;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller{

    private $model;
    public function __construct(OrderItem $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data = $this->model->all();
        return response()->json($data);
    }

    public function show($seq)
    {
        $data = $this->model->find($seq);
        return response()->json($data);
    }

    public function store(OrderItemRequest $request)
    {
        $request->validate([
            'product_id'=> 'requeried',
            'quantity'=> 'requeried',
            'value'=> 'requeried'
        ]);

        $data = $this->model->create($request->all());
        return response()->json($data);
    }

    public function update(OrderItemRequest $request, $seq)
    {
        $request->validate([
            'product_id'=> 'requeried',
            'quantity'=> 'requeried',
            'value'=> 'requeried'
        ]);
        $data = $this->model->find($seq);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($seq)
    {
        $data = $this->model->find($seq);
        $data->delete();

        return response()->json('',201);
    }

}
