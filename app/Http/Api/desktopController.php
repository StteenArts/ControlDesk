<?php
namespace App\Http\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\desktop as device;

class desktopController extends Controller
{
    // Methods for handling API requests related to desktops will go here
    public function index()
    {
        // Return a list of desktops
        $desktops = device::all();
        return response()->json($desktops);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'code' => 'required|string|max:255',
            'brand' => 'required|string',
            'model' => 'required|string',
            'processor' => 'required|string',
            'ram' => 'required|string',
            'storage' => 'required|string',
        ]);

        // Create a new desktop
        $desktop = device::create($validatedData);

        // Return a response with the created desktop
        return response()->json(['desktop' => $desktop], 201);
    }

    public function show($id)
    {
        // Find the desktop by ID
        $desktop = device::find($id);

        // Check if the desktop exists
        if (!$desktop) {
            return response()->json(['message' => 'Desktop not found'], 404);
        }

        // Return a response with the desktop data
        return response()->json(['desktop' => $desktop]);
    }
    
}