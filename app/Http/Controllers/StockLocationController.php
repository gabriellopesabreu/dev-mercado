<?php

namespace App\Http\Controllers;

use App\Models\StockLocation;
use Illuminate\Http\Request;

class StockLocationController extends Controller{

    private $model;
    public function __construct(StockLocation $model)
    {
        $this->model = $model;
    }
    
    public function index()
    {
        $data = $this->model->all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = $this->model->find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'description'=>'required'
        ]);

        $data = $this->model->create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'description'=>'required'
        ]);
        $data = $this->model->find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = $this->model->find($id);
        $data->delete();

        return response()->json('',201);
    }

}
