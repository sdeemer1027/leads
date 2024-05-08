<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch and display all categories
    }

    public function create()
    {
        // Show the category creation form
    }

    public function store(Request $request)
    {
        // Validate and store the new category
    }

    public function show(Category $category)
    {
        // Display category details
    }

    public function edit(Category $category)
    {
        // Show the category editing form
    }

    public function update(Request $request, Category $category)
    {
        // Validate and update the category
    }

    public function destroy(Category $category)
    {
        // Delete the category
    }
}
