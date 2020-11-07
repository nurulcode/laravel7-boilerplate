<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

function activeSubMenu($uri = '') {
    $active = '';
    if (Request::segment(1) === $uri) {
        $active = 'mm-show';
    }
    return $active;
}

function activeMenu($uri = '') {
    $active = '';
    if (Request::segment(1) === $uri) {
        $active = 'mm-active';
    }
    return $active;
}

// function customTanggal($date,$date_format){
//     return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
// }
