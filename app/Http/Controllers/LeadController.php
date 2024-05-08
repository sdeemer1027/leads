<?php
namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

use App\Models\Category;

class LeadController extends Controller
{
   public function index(Category $category)
    {
        $leads = $category->leads()->get();
        return view('leads.index', compact('leads'));
    }

    public function create()
    {
        // Show the lead creation form
    }

    public function store(Request $request)
    {
        // Validate and store the new lead
    }

    public function show(Lead $lead)
    {
        // Display lead details
    }

    public function edit(Lead $lead)
    {
        // Show the lead editing form
    }

    public function update(Request $request, Lead $lead)
    {
        // Validate and update the lead
    }

    public function destroy(Lead $lead)
    {
        // Delete the lead
    }
}
