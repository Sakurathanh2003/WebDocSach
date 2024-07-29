<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Sach;

class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $danhSachSach = Sach::with('danhmuc')->get();
        return view('admin.sach.index')->with(compact('danhSachSach'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $danhSachDanhMuc = DanhMuc::all();
        return view('admin.sach.create')->with(compact(('danhSachDanhMuc')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'tensach' => 'required|unique:sach|max:255',
                'motasach' => 'required',
                'kichhoat' => 'required',
                'danhmucsach' => 'required',
                'hinhanh' => 'required|image',
                'filesach' => 'required'
            ],
            [
                'tensach.required' => 'Vui lòng nhập tên sách!',
                'tensach.unique' => 'Tên sách đã tồn tại, vui lòng nhập tên khác!',
                'motasach.required' => 'Vui lòng nhập mô tả sách!',
                'kichhoat.required' => 'Vui lòng chọn kích hoạt hay không!',
                'danhmucsach.required' => 'Vui lòng chọn danh mục sách!',
                'hinhanh.required' => 'Vui lòng chọn hình ảnh!',
                'filesach.required' => 'Vui lòng chọn file sách!',
            ]
        );

        $sach = new Sach();
        $sach->TenSach = $data['tensach']; 
        $sach->DanhMucID = $data['danhmucsach'];
        $sach->MoTa = $data['motasach']; 
        $sach->KichHoat = $data['kichhoat'];

        $get_image = $data['hinhanh'];
        $path = "public/uploads/sach/";
        $newImageName = $data['tensach'].'.'.$get_image->getClientOriginalName();
        $get_image->move($path, $newImageName);
        $sach->HinhAnh = $newImageName;

        $get_file = $data['filesach'];
        $newFileName = $data['tensach'].'.'.$get_file->getClientOriginalName();
        $get_file->move($path, $newFileName);
        $sach->FileSach = $newFileName;
        $sach->save();

        return redirect()->back()->with('status', 'Thêm sách thành công'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $danhSachDanhMuc = DanhMuc::all();
        $sach = Sach::find($id);
        return view('admin.sach.edit')->with(compact('sach', 'danhSachDanhMuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sach = Sach::find($id);
        $imageFile = "public/uploads/sach/".$sach['HinhAnh'];
        $file = "public/uploads/sach/".$sach['FileSach'];

        if (file_exists($imageFile)) {
            unlink($imageFile);
        }

        if (file_exists($file)) {
            unlink($file);
        }

        Sach::find($id)->delete();
        return redirect()->back()->with('status', 'Xoá sách thành công!');  
    }
}