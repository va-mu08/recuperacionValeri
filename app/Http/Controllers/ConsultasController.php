<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Copy;
use App\Models\Book;
use App\Models\Author;
use App\Models\Editorial;


use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function consulta41()
    {
        return Customer::with('copies')->get();
    }

    public function consulta42()
    {
        return Author::with('books.editorial')->get();
    }

    public function consulta43()
    {
        return Editorial::with('books.copies')->get();
    }
}
