<?php

namespace App\Http\Controllers;

use App\Models\TravelTrip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TravelTripController extends Controller
{
    public function index()
    {
        $travelTrips = TravelTrip::all();
        return view('travelTrips.index', compact('travelTrips'));
    }
    public function showTravelTrip()
    {
        $Trips = TravelTrip::all();
        return view('gui.travelTrip', ['Trips' => $Trips]);
    }

    public function create()
    {
        return view('travelTrips.create');
    }

    public function store(Request $request)
    {   
        
        $validated = $request->validate([
            'title' => 'required|max:255',
            'titleDetail' => 'required|max:255',
            'titleName' => 'required|max:255',
            'titleLocation' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'figcaption' => 'required|max:255',
        ]);

        if ($request->hasFile('image')) {
            try {
            
                $imageFile = $request->file('image');
                $imageName = time() . '_' . $imageFile->getClientOriginalName(); // Thêm thời gian vào tên tệp
                $destinationPath = public_path('images/travelTrip');
                $imageFile->move($destinationPath, $imageName);
                
                // Xóa các số ở đầu tên tệp (nếu cần, nhưng đảm bảo lưu đúng tên tệp vào cơ sở dữ liệu)
                $validated['image'] = 'images/travelTrip/' . $imageName;
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Failed to upload image.']);
            }
        } else {
            $validated['image'] = null; 
        }
        TravelTrip::create($validated);
        return redirect()->route('travelTrips.index')->with('success', 'TravelTrip created successfully.');
    }



    public function edit($id)
    {
        $travelTrips = TravelTrip::findOrFail($id); 
        return view('travelTrips.edit', compact('travelTrips'));
    }

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'title' => 'required|max:255',
        'titleDetail' => 'required|max:255',
        'titleName' => 'required|max:255',
        'titleLocation' => 'required|max:255',
        'content' => 'required',
        'image' => 'nullable|image|max:2048',
        'figcaption' => 'required|max:255',
    ]);

    $travelTrips = TravelTrip::findOrFail($id);

    if ($request->hasFile('image')) {
        // Xóa hình ảnh cũ nếu tồn tại
        if ($travelTrips->image && file_exists(public_path($travelTrips->image))) {
            unlink(public_path($travelTrips->image));
        }

        // Lưu hình ảnh mới
        $imageFile = $request->file('image');
        $imageName = time() . '_' . $imageFile->getClientOriginalName();
        $destinationPath = public_path('images/travelTrip');
        $imageFile->move($destinationPath, $imageName);
        
        $validated['image'] = 'images/travelTrip/' . $imageName;
    } else {
        // Nếu không tải lên hình ảnh mới, giữ nguyên hình ảnh cũ
        $validated['image'] = $travelTrips->image;
    }

    // Cập nhật blog với dữ liệu mới
    $travelTrips->update($validated);

    return redirect()->route('travelTrips.index')->with('success', 'TravelTrip updated successfully.');
}


    public function destroy($id)
{

    $travelTrips = TravelTrip::find($id);
    $travelTrips->delete();


    $this->resetAutoIncrement();

    return redirect()->route('travelTrips.index');
}

private function resetAutoIncrement()
{
    DB::statement('ALTER TABLE blogs AUTO_INCREMENT = 1;');
}
}
