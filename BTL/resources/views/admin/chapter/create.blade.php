@extends('layouts.admin.app')

@section('content')
<div class="container tabular--wrapper">
    <a href="{{ route('chapter.index') }}" class='btn btn-primary' style="margin-bottom: 10px;">Quay lại</a>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">                
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

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                        
                    <form method="POST" action="{{ route('chapter.store') }}" enctype="multipart/form-data">
                        @CSRF
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tiêu đề chương</label>
                          <input type="text" class="form-control" value="{{ old('title') }}" name="title" placeholder="Tiêu đề chương...">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Chương số</label>
                          <input type="text" class="form-control" value="{{ old('order') }}" name="order" placeholder="Chương số...">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                            <textarea id="" class="form-control" name="content" value="{{ old('content') }}"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Thuộc sách</label>
                            <select class="form-select" aria-label="Default select example" name="bookID" value="{{ old('bookID') }}">
                                @foreach ($books as $book )
                                    <option value="{{ $book['id'] }}">{{ $book['title'] }}</option>
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
