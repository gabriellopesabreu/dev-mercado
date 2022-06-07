<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserHasCustomerRequest;
use App\Models\UserHasCustomer;
use Illuminate\Http\Request;

class UserHasCustomerController extends Controller{

    private $model;
    public function __construct(UserHasCustomer $model)
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

    public function store(UserHasCustomerRequest $request)
    {
        $data = $this->model->create($request->all());
        return response()->json($data);
    }

    public function update(UserHasCustomerRequest $request, $id)
    {
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
