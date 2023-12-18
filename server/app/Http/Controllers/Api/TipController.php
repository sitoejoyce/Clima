<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TipResource;
use App\Models\Tip;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  TipResource::collection(Tip::all());
    }
}
