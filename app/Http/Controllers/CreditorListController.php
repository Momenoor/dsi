<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditorListController extends Controller
{
    public function __invoke(Request $request, string $type): void
    {
        echo $type;
    }
}
