<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index() {
        $data = new Genre(); // ambil model
        $genres = $data->getGenres(); // ambil data

        return view('genres', ['genres' => $genres]); // kirim ke view
    }
}