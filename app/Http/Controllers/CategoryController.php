<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);
        return view('categories.index', compact('categories'));
    }


    public function showCategoryBlogContent()
    {
        $categories = Category::all();
        return view('home', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        Category::create($validated);
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $category->update($validated);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
