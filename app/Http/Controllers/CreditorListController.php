<?php

namespace App\Http\Controllers;

use App\Models\CreditorList;
use Illuminate\Http\Request;

class CreditorListController extends Controller
{
    public function __invoke(Request $request, string $type = 'commercial')
    {
        $creditors = CreditorList::query();
        $search = $request->query('search');

        $creditors->when($search, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('name_en', 'like', '%' . $search . '%')
                    ->orWhere('name_ar', 'like', '%' . $search . '%')
                    ->orWhere('amount', 'like', '%' . $search . '%');
            });
        });

        // Handle logic based on the $type parameter
        $creditors = $creditors->where('type', $type)->get();
        return view('table', compact('creditors', 'type'));
    }
}
