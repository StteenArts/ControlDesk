<?php
namespace App\Http\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\technical;

class TechnicalController extends Controller
{
    // Methods for handling API requests related to technicals will go here
    public function index()
    {
        // Return a list of technicals
        $technicals = technical::all();
        return response()->json($technicals);
    }
}