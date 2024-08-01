@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm chương</div>
                
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        
                    <form method="POST" action="{{ route('chuong.store') }}" enctype="multipart/form-data">
                        @CSRF
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tiêu đề chương</label>
                          <input type="text" class="form-control" value="{{ old('tieude') }}" name="tieude" placeholder="Tiêu đề chương...">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Chương số</label>
                          <input type="text" class="form-control" value="{{ old('chuongso') }}" name="chuongso" placeholder="Chương số...">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                            <textarea id="" class="form-control" name="noidung" value="{{ old('noidung') }}"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Thuộc sách</label>
                            <select class="form-select" aria-label="Default select example" name="sachID" value="{{ old('sachID') }}">
                                @foreach ($listSach as $sach )
                                    <option value="{{ $sach['id'] }}">{{ $sach['TenSach'] }}</option>
                                @endforeach                                
                            </select>
                        </div>

                        <button type="submit" name="themchuong" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
