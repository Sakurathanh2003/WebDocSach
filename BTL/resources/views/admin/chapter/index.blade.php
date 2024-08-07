@extends('layouts.admin.app')

@section('content')
<div class="tabular--wrapper" style="margin-top: 20px;">
    <a href="{{ route('chapter.create') }}" class='btn btn-primary' style="margin-bottom: 10px;">Thêm chương mới</a>
    <div class="row justify-content-center">
        <div>
            <div>
                <div class="card-body" style="padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" style="margin-bottom: 20px;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <form method="get" action="{{ route('chapter.index') }}">
                            @method('GET')
                            <div style="display: flex; align-items: center;">
                                <label for="exampleInputEmail1" class="form-label" style="margin: 0 10px 0 0;">Sách</label>
                                <select class="form-select" aria-label="Default select example" name="bookID" style="margin-right: 10px;">
                                    @foreach ($books as $book )
                                        <option value="{{ $book['id'] }}" {{ isset($bookID) && $bookID == $book['id'] ? 'selected' : '' }}>
                                            {{ $book['title'] }}
                                        </option>
                                    @endforeach                                    
                                </select>
                
                                <button type="submit" class="btn btn-primary form-label" style="margin-right: 10px;">Lọc</button>
                                <a href="{{ route('chapter.index') }}" class="btn btn-danger form-label">Xoá</a>
                            </div>
                        </form>
                    </div>
                   
                    <table style="width: 100%; margin-top: 20px; border-collapse: collapse;">
                        <thead>
                          <tr>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Mã chương</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Sách</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Chương số</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Tiêu đề chương</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($chapters as $key => $chapter)
                                <tr style="background-color: {{ $key % 2 == 0 ? '#f8f9fa' : 'white' }};">
                                    <th scope="row" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $chapter['id'] }}</th>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $chapter['bookID'] }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $chapter['order'] }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $chapter['title'] }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">
                                        <div style="display: flex; align-items: center;">
                                            <a href="{{ route('chapter.edit', ['chapter' => $chapter['id']]) }}" class="btn btn-primary" style="margin-right: 10px;">Sửa</a>
                                            <form action="{{ route('chapter.destroy', ['chapter' => $chapter['id']]) }}" method="POST" style="margin: 0;">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xoá chương này không?');">Xoá</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
