<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CuisineController extends Controller
{
    public function index()
    {
        $cuisines = Cuisine::all();
        return view('cuisines.index', compact('cuisines'));
    }
    public function showCuisine()
    {
        $cuisines = Cuisine::all();
        return view('gui.cuisine',['cuisines'=>$cuisines]);
    }

    public function create()
    {
        return view('cuisines.create');
    }

    public function store(Request $request)
    {   
        
        $validated = $request->validate([
            'title' => 'required|max:255',
            'titleLocation' => 'required|max:255',        
            'image' => 'nullable|image|max:2048',
            'figcaption' => 'required|max:255',       
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            try {
            
                $imageFile = $request->file('image');
                $imageName = time() . '_' . $imageFile->getClientOriginalName(); // Thêm thời gian vào tên tệp
                $destinationPath = public_path('images/Cuisine');
                $imageFile->move($destinationPath, $imageName);
                
                // Xóa các số ở đầu tên tệp (nếu cần, nhưng đảm bảo lưu đúng tên tệp vào cơ sở dữ liệu)
                $validated['image'] = 'images/Cuisine/' . $imageName;
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Failed to upload image.']);
            }
        } else {
            $validated['image'] = null; 
        }
        Cuisine::create($validated);
        return redirect()->route('cuisines.index')->with('success', 'Cuisine created successfully.');
    }



    public function edit($id)
    {
        $cuisine = Cuisine::findOrFail($id); 
        return view('cuisines.edit', compact('cuisine'));
    }

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'title' => 'required|max:255',
        'titleLocation' => 'required|max:255',        
        'image' => 'nullable|image|max:2048',
        'figcaption' => 'required|max:255',  
        'content' => 'required',
    ]);

    $cuisine = Cuisine::findOrFail($id);

    if ($request->hasFile('image')) {
        // Xóa hình ảnh cũ nếu tồn tại
        if ($cuisine->image && file_exists(public_path($cuisine->image))) {
            unlink(public_path($cuisine->image));
        }

        // Lưu hình ảnh mới
        $imageFile = $request->file('image');
        $imageName = time() . '_' . $imageFile->getClientOriginalName();
        $destinationPath = public_path('images/cuisine');
        $imageFile->move($destinationPath, $imageName);
        
        $validated['image'] = 'images/cuisine/' . $imageName;
    } else {
        // Nếu không tải lên hình ảnh mới, giữ nguyên hình ảnh cũ
        $validated['image'] = $cuisine->image;
    }

    // Cập nhật blog với dữ liệu mới
    $cuisine->update($validated);

    return redirect()->route('cuisines.index')->with('success', 'Cuisine updated successfully.');
}


    public function destroy($id)
{

    $cuisine = Cuisine::find($id);
    $cuisine->delete();


    $this->resetAutoIncrement();

    return redirect()->route('cuisines.index');
}

private function resetAutoIncrement()
{
    DB::statement('ALTER TABLE blogs AUTO_INCREMENT = 1;');
}
}
