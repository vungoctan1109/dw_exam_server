<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function storeFurniture(StoreEventRequest $request)
    {
        $data = $request->all();
        Furniture::create($data);
        echo "Create event success";
    }
}
