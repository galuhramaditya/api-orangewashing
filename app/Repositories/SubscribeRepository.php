<?php

namespace App\Repositories;

use App\Models\Subscribe;
use App\Contracts\SubscribeRepositoryInterface;

class SubscribeRepository implements SubscribeRepositoryInterface
{
    public function store(array $data)
    {
        return Subscribe::firstOrCreate($data);
    }
}
