<?php

namespace App\Services;

use App\Product;

class Slug
{
    /**
     * @param $title
     * @param int $id
     * @return string
     * @throws \Exception
     */
    public function createSlug($title, $id = 0)
    {
        $slug = str_slug($title.' '.$id);
        return $slug;
    }
}