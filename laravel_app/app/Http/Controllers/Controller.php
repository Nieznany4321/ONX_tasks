<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function searchDatabase( Request $request )
{
    $employee = DB::table('employees')
        ->where([
            ["description", 'LIKE', "%{$request->input('query')}%"]
        ])
        ->limit(5)
        ->get();

    return response()->json($foo);
}
}
