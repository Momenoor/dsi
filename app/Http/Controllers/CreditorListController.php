<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditorListController extends Controller
{
    public function __invoke(Request $request, string $type = null)
    {
        // Handle logic based on the $type parameter
        return response()->json([
            'list_type' => $type,
            'message' => "This is the {$type} list.",
        ]);
    }
}
