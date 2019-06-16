<?php

namespace App\Traits;

trait DataLayer
{
    public function passingData(array $allowed, array &$data)
    {
        $data = array_intersect_key($data, array_flip($allowed));
    }
}
