@extends('layouts.admin.app')

@section('content')
    <div>
        <div class="card--container">
            <h3 class="main--title">Thống kê</h3>
            <div class="card--wrapper">
                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Số lượng danh mục</span>
                            <span class="amount--value">{{ $categorydata['categories']->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Số lượng sách</span>
                            <span class="amount--value">{{ $bookdata['books']->count() }}</span>
                        </div>
                    </div>
                </div>

                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Số người dùng</span>
                            <span class="amount--value">{{ $userdata['users']->count() }}</span>
                        </div>
                    </div>
                </div>

                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Số lượng chapter</span>
                            <span class="amount--value">{{ $chapterdata->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabular--wrapper">
            <div class="header" style="display: flex;justify-content: space-between;align-items: center;">
                <h3 class="main--title">Danh mục</h3>
                <a href="{{ route('category.index') }}" class="main--title">Xem thêm</a>
            </div>
            <div class="table--container">
                <table>
                    <thead>
                        <tr>
                            <th>Tên danh mục</th>
                            <th>Số lượng sách</th>
                            <th>Kích hoạt</th>
                            <th>Hành động</th>
                        </tr>
                    <tbody>
                        @foreach($categorydata['categories'] as $key => $category)
                            <tr>
                                <td>{{ $category['name'] }}</td>
                                <td>{{ $category->books()->count() }}</td>
                                <td>
                                    @if($category['activate'] == 0)
                                        <span class='text text-success'>Kích hoạt</span>
                                    @else
                                        <span class='text text-danger'>Không kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('category.edit', ['category' => $category['id']]) }}">Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>

        <div class="tabular--wrapper">
            <div class="header" style="display: flex;justify-content: space-between;align-items: center;">
                <h3 class="main--title">Sách</h3>
                <a href="{{ route('book.index') }}" class="main--title">Xem thêm</a>
            </div>
            <div class="table--container">
                <table>
                    <thead>
                      <tr>
                        <th scope="col">Tên sách</th>
                        <th scope="col">Số lượng chương</th>
                        <th scope="col">Số người xem</th>
                        <th scope="col">Kích hoạt</th>
                        <th scope="col">Quản lý</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $bookdata['books'] = $bookdata['books']->take(5);
                        @endphp
                        @foreach($bookdata['books'] as $key => $book)
                            <tr>
                                <td>{{ $book['title'] }}</td>
                                <td>{{ $book->chapters()->count() }}</td>
                                <td>{{ $book->views()->distinct('bookID')->count('bookID') }}</td>
                                <td>
                                    @if($book['activate'] == 0)
                                        <span class='text text-success'>Kích hoạt</span>
                                    @else
                                        <span class='text text-danger'>Không kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('book.edit', ['book' => $book['id']]) }}">Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tabular--wrapper">
            <div class="header" style="display: flex;justify-content: space-between;align-items: center;">
                <h3 class="main--title">Người dùng</h3>
                <a href="{{ route('account.index') }}" class="main--title">Xem thêm</a>
            </div>
            <div class="table--container">
                <table>
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Vai trò</th>
                        <th scope="col">Quản lý</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $userdata['users'] = $userdata['users']->take(5);
                        @endphp
                        @foreach($userdata['users'] as $key => $user)
                            <tr>
                                <th scope="row">{{ $user['id'] }}</th>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['role'] == 'admin' ? 'Người quản trị' : 'Người đọc'}}</td>
                                <td>
                                    <a href="{{ route('account.edit', ['account' => $user['id']]) }}">Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
