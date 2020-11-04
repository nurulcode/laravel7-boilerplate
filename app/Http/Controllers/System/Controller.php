<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct()
    {
        $this->middleware(['auth', 'permission:system-list']);
    }
}
