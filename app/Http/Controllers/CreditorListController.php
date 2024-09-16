<?php

namespace App\Http\Controllers;

use App\Models\CreditorList;
use Illuminate\Http\Request;

class CreditorListController extends Controller
{
    public function __invoke(Request $request, string $type = null)
    {
        // Handle logic based on the $type parameter
        $creditors = CreditorList::where('type', $type)->get();
        return view('table', compact('creditors'));
    }
}
