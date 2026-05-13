<?php
namespace App\Http\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\report_issue as ticket;

class ticketController extends Controller
{
    // Methods for handling API requests related to reports to issues will go here
    public function index()
    {
        // Return a list of tickets
        $tickets = ticket::all();
        return response()->json($tickets);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'desktop_id' => 'required|integer',
            'technical_id' => 'nullable|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|string|in:low,medium,high',
            'status' => 'required|string|in:open,closed,in_progress',
        ]);

        // Create a new ticket
        $ticket = ticket::create($validatedData);

        // Return a response with the created ticket
        return response()->json(['ticket' => $ticket], 201);
    }

    public function show($id)
    {
        // Find the ticket by ID
        $ticket = ticket::find($id);

        // Check if the ticket exists
        if (!$ticket) {
            return response()->json(['message' => 'Ticket not found'], 404);
        }

        // Return a response with the ticket data
        return response()->json(['ticket' => $ticket]);
    }

    public function update(Request $request, $id)
    {
        // Find the ticket by ID
        $ticket = ticket::find($id);

        // Check if the ticket exists
        if (!$ticket) {
            return response()->json(['message' => 'Ticket not found'], 404);
        }

        // Validate the request data
        $validatedData = $request->validate([
            'desktop_id' => 'sometimes|required|integer',
            'technical_id' => 'sometimes|nullable|integer',
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'priority' => 'sometimes|required|string|in:low,medium,high',
            'status' => 'sometimes|required|string|in:open,closed,in_progress',
        ]);

        // Update the ticket with the validated data
        $ticket->update($validatedData);

        // Return a response with the updated ticket
        return response()->json(['ticket' => $ticket]);
    }

    public function destroy($id)
    {
        // Find the ticket by ID
        $ticket = ticket::find($id);

        // Check if the ticket exists
        if (!$ticket) {
            return response()->json(['message' => 'Ticket not found'], 404);
        }

        // Delete the ticket
        $ticket->delete();

        // Return a response indicating successful deletion
        return response()->json(['message' => 'Ticket deleted successfully']);
    }

}