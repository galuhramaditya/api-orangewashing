<?php

namespace App\Traits;

trait ApiResponse
{
    public function successResponse($data, int $code = 200)
    {
        return $this->callout($data, $code);
    }

    public function errorResponse($data, int $code = 400)
    {
        return $this->callout($data, $code);
    }

    private function callout($data, int $code)
    {
        if (!is_array($data) && !is_object($data)) {
            $data = ["message" => gettype($data)];
        }

        return response()->json($data, $code);
    }
}
