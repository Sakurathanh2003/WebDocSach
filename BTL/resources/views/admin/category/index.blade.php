@extends('layouts.admin.app')

@section('content')
<div class="tabular--wrapper">
    <a href="{{ route('category.create') }}" class='btn btn-primary' style="margin-bottom: 10px;">Thêm danh mục</a>

    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <table>
                        <thead>
                          <tr>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Mã danh mục</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Tên danh mục</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Số lượng sách</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Kích hoạt</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $key => $category)
                                <tr>
                                    <th scope="row" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $category['id'] }}</th>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $category['name'] }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $category->books()->count() }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">
                                        @if($category['activate'] == 0)
                                            <span class='text text-success'>Kích hoạt</span>
                                        @else
                                            <span class='text text-danger'>Không kích hoạt</span>
                                        @endif
                                    </td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">
                                        <div style="display: flex; align-items: center;">
                                             <a href="{{ route('category.edit', ['category' => $category['id']]) }}" class='btn btn-primary' style="margin-right: 10px;">Sửa</a>
                                            <form action="{{ route('category.destroy', ['category' => $category['id']]) }}" method="POST" style="margin: 0;">
                                                @method('DELETE')
                                                @CSRF
                                                <button class='btn btn-danger' onclick="return confirm('Bạn có chắc chắn muốn xoá danh mục này không?');">Xoá</button>
                                
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
