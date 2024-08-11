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
                            <span class="amount--value">{{ $categorydata['categories']->get()->count() }}</span>
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
                            <th style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Tên danh mục</th>
                            <th style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Số lượng sách</th>
                            <th style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Kích hoạt</th>
                            <th style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Hành động</th>
                        </tr>
                    <tbody>
                        @foreach($categorydata['categories']->take(5)->get() as $key => $category)
                            <tr>
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
                        <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Tên sách</th>
                        <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Số lượng chương</th>
                        <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Số lượt xem</th>
                        <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Kích hoạt</th>
                        <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Quản lý</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $bookdata['books'] = $bookdata['books']->take(5);
                        @endphp
                        @foreach($bookdata['books'] as $key => $book)
                            <tr>
                                <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $book['title'] }}</td>
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
                        <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Tên</th>
                        <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Email</th>
                        <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Vai trò</th>
                        <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Quản lý</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $userdata['users'] = $userdata['users']->take(5);
                        @endphp
                        @foreach($userdata['users'] as $key => $user)
                            <tr>
                                <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $user['name'] }}</td>
                                <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $user['email'] }}</td>
                                <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $user['role'] == 'admin' ? 'Người quản trị' : 'Người đọc'}}</td>
                                <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">
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
