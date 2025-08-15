<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::latest()->paginate(10);

        return response()->json($publications);
    }

    public function show($id)
    {
        $publication = Publication::findOrFail($id);

        return response()->json($publication);
    }
}
