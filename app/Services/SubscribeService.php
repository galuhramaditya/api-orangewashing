<?php

namespace App\Services;

use App\Traits\DataLayer;
use App\Contracts\SubscribeRepositoryInterface;

class SubscribeService
{
    use DataLayer;

    private $subscribe;

    public function __construct(SubscribeRepositoryInterface $subscribe)
    {
        $this->subscribe = $subscribe;
    }

    public function store(array $data)
    {
        $this->passingData(["email"], $data);
        // return $data;
        return $this->subscribe->store($data);
    }
}
