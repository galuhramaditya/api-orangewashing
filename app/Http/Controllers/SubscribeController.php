<?php

namespace App\Http\Controllers;

use App\Services\SubscribeService;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class SubscribeController extends Controller
{
    use ApiResponse;

    private $subscribe;

    public function __construct(SubscribeService $subscribe)
    {
        $this->subscribe = $subscribe;
    }

    public function store(Request $request)
    {
        $this->validation($request);
        $store = $this->subscribe->store($request->all());

        return $this->successResponse($store);
    }

    private function validation(Request $request)
    {
        $rules = [
            "store" => ["email" => "required|email"]
        ];

        $func = debug_backtrace()[1]['function'];
        return $this->validate($request, $rules[$func]);
    }
}
