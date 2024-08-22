<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //tra ve cac view page
    
    public function home()
    {
        return view('home');
    }
    public function travelTrip()
    {
        return view('gui.travelTrip');
    }
    public function travelTour()
    {
        return view('gui.travelTour');
    }

    public function cuisine()
    {
        return view('gui.cuisine');
    }

    public function gallery()
    {
        return view('gui.gallery');
    }

    //detail
    public function thacDatanla()
    {
        return view('gui.thacDatanla');
    }
    public function quangTruongLamVien()
    {
        return view('gui.quangTruongLamVien');
    }
    public function hoTuyenLam()
    {
        return view('gui.hoTuyenLam');
    }
    public function dinhLangBiang()
    {
        return view('gui.dinhLangBiang');
    }
    public function phongCachSong()
    {
        return view('gui.phongCachSong');
    }

    //end detail
    //show theo id
    public function show($id)
{
    $blog = Blog::findOrFail($id);
    return view('blogs.show', compact('blog'));
}

    
    public function showBlog()
    {
        $blogs = Blog::all();
        return view('home', ['blogs'=>$blogs]);
    }
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }
    public function test()
    {
        $blogs = Blog::all();
        return view('try.test', compact('blogs'));
    }
    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {   
        
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|max:2048',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            try {
            
                $imageFile = $request->file('image');
                $imageName = time() . '_' . $imageFile->getClientOriginalName(); // Thêm thời gian vào tên tệp
                $destinationPath = public_path('images');
                $imageFile->move($destinationPath, $imageName);
                
                // Xóa các số ở đầu tên tệp (nếu cần, nhưng đảm bảo lưu đúng tên tệp vào cơ sở dữ liệu)
                $validated['image'] = 'images/' . $imageName;
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Failed to upload image.']);
            }
        } else {
            $validated['image'] = null; 
        }
        Blog::create($validated);
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }



    public function edit($id)
    {
        $blog = Blog::findOrFail($id); 
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'title' => 'required|max:255',
        'image' => 'nullable|image|max:2048', // Không bắt buộc, chỉ khi có tải lên hình ảnh mới
        'content' => 'required',
    ]);

    $blog = Blog::findOrFail($id);

    if ($request->hasFile('image')) {
        // Xóa hình ảnh cũ nếu tồn tại
        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }

        // Lưu hình ảnh mới
        $imageFile = $request->file('image');
        $imageName = time() . '_' . $imageFile->getClientOriginalName();
        $destinationPath = public_path('images');
        $imageFile->move($destinationPath, $imageName);
        
        $validated['image'] = 'images/' . $imageName;
    } else {
        // Nếu không tải lên hình ảnh mới, giữ nguyên hình ảnh cũ
        $validated['image'] = $blog->image;
    }

    // Cập nhật blog với dữ liệu mới
    $blog->update($validated);

    return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
}


    public function destroy($id)
{

    $blog = Blog::find($id);
    $blog->delete();


    $this->resetAutoIncrement();

    return redirect()->route('blogs.index');
}

private function resetAutoIncrement()
{
    DB::statement('ALTER TABLE blogs AUTO_INCREMENT = 1;');
}
}
