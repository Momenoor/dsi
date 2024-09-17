<?php

namespace App\Http\Controllers;

use App\Imports\CreditorListImport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CreditorListImportController extends Controller
{
    public function import(Request $request): RedirectResponse
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        // Perform the import with the correct reader type
        Excel::import(new CreditorListImport, $request->file('file'));

        return redirect()->back()->with('success', 'Creditor List imported successfully!');
    }
}
