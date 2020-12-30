<?php

namespace App\Controllers\Partials;

trait Images
{
    public function images()
    {
        return get_field('banner_title');
    }
}