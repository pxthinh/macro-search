<?php

namespace App\Mixins;

class CollectionMixin
{
    public function sumBy()
    {
        return function ($key) {
            return $this->sum(function ($item) use ($key) {
                return data_get($item, $key);
            });
        };
    }

    public function averageBy()
    {
        return function ($key) {
            return $this->avg(function ($item) use ($key) {
                return data_get($item, $key);
            });
        };
    }
}
