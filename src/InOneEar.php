<?php

namespace GeneralSystemsVehicle\InOneEar;

use GeneralSystemsVehicle\InOneEar\Models\Language;

class InOneEar
{
    protected $languages;

    public function __construct()
    {
        $this->languages = Language::hydrate(
            config('in-one-ear.languages', [])
        );
    }

    public function all()
    {
        return $this->languages;
    }

    public function findByShort(string $short)
    {
        return $this->findByFieldValue('short', $short);
    }

    public function findByLong(string $long)
    {
        return $this->findByFieldValue('long', $long);
    }

    public function findByEnglish(string $english)
    {
        return $this->findByFieldValue('english', $english);
    }

    public function findByNative(string $native)
    {
        return $this->findByFieldValue('native', $native);
    }

    protected function findByFieldValue(string $field, string $value)
    {
        return $this->languages->where($field, $value)->first();
    }
}
