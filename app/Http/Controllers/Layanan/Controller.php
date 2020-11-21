<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
}
