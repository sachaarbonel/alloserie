<?php
namespace App\Api\V1\Serializers;

use League\Fractal\Serializer\ArraySerializer;

class NoDataArraySerializer extends ArraySerializer
{
    public function collection($resourceKey, array $data)
    {
        return ($resourceKey) ? [ $resourceKey => $data ] : $data;
    }

    public function item($resourceKey, array $data)
    {
        return ($resourceKey) ? [ $resourceKey => $data ] : $data;
    }


}

/*
class NoDataArraySerializer extends ArraySerializer
{
    public function collection($resourceKey, array $data)
    {
        if ($resourceKey === false) {
            return $data;
        }
        return array($resourceKey ?: 'data' => $data);
    }

    public function item($resourceKey, array $data)
    {
        if ($resourceKey === false) {
            return $data;
        }
        return array($resourceKey ?: 'data' => $data);
    }
}*/