<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\Document; // Import the Document model
use App\Http\Requests\StoreDocumentRequest;

class DocumentController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }


        // Fetch documents for the logged-in user
        $documents = Auth::user()->documents; // Assumes 'documents' relationship in User model
        return view('user.document', compact('documents'));
    }

    public function show($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        // Find the document for the logged-in user
        $document = Auth::user()->documents()->find($id); // Assumes 'documents' relationship in User model
        {
            return view('document.show', compact('documents'));
        }
    }

    public function upload(StoreDocumentRequest $request)//as i have made validation on form request do the validation path been asigned here
    {
        if (!Auth::check()) {
            return redirect('login');
        }



        // Save the document
        $path = $request->file('file')->store('documents','public');

        // Create the document record
        Auth::user()->documents()->create([
            'name' => $request->name,
            'file_path' => $path,
        ]);

        return redirect()->route('user.document')->with('success', 'Document uploaded successfully!');
    }

    public function delete($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        // Find the document
        $document = Auth::user()->documents()->find($id); // Assumes 'documents' relationship in User model



        // Delete the document
        $document->delete();

        return redirect()->route('user.document')->with('success', 'Document deleted successfully!');
    }
}
