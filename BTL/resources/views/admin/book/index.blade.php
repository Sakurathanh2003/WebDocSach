@extends('layouts.admin.app')

@section('content')
<div class="tabular--wrapper">
    <a href="{{ route('book.create') }}" class='btn btn-primary' style="margin-bottom: 10px;">Thêm sách</a>

    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                        <thead>
                          <tr>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Mã sách</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Tên sách</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Hình ảnh</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Số lượng chương</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Số lượt xem</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Kích hoạt</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left; font-weight: bold;">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $key => $book)
                                <tr>
                                    <td scope="row" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $book['id'] }}</th>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $book['title'] }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;"><img src="{{ asset('public/uploads/sach/'.$book['image']) }}" alt="" width="50%"></td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $book->chapters()->count() }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $book->views()->count() }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">
                                        @if($book['activate'] == 0)
                                            <span class='text text-success'>Kích hoạt</span>
                                        @else
                                            <span class='text text-danger'>Không kích hoạt</span>
                                        @endif
                                    </td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">
                                        <div style="display: flex; align-items: center;">
                                            <a href="{{ route('book.edit', ['book' => $book['id']]) }}" class='btn btn-primary' style="margin-right: 10px;">Sửa</a>
                                            <form action="{{ route('book.destroy', ['book' => $book['id']]) }}" method="POST" style="margin: 0;">
                                                @method('DELETE')
                                                @CSRF
                                                <button class='btn btn-danger' onclick="return confirm('Bạn có chắc chắn muốn xoá sách này không?');">Xoá</button>
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
