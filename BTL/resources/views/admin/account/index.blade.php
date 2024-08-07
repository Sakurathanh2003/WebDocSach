@extends('layouts.admin.app')

@section('content')
<div class="tabular--wrapper">
    <a href="{{ route('account.create') }}" class='btn btn-primary' style="margin-bottom: 10px;">Tạo tài khoản</a>
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
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">ID</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Tên</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Email</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Vai trò</th>
                            <th scope="col" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                                <tr>
                                    <th scope="row" style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $user['id'] }}</th>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $user['name'] }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $user['email'] }}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">{{ $user['role'] == 'admin' ? 'Người quản trị' : 'Người đọc'}}</td>
                                    <td style="padding: 10px; border: 1px solid #dee2e6; text-align: left;">
                                        <div style="display: flex; align-items: center;">
                                            <a href="{{ route('account.edit', ['account' => $user['id']]) }}" class='btn btn-primary' style="margin-right: 10px;">Sửa</a>
                                            <form action="{{ route('account.destroy', ['account' => $user['id']]) }}" method="POST" style="margin: 0;">
                                                @method('DELETE')
                                                @CSRF
                                                <button class='btn btn-danger' onclick="return confirm('Bạn có chắc chắn muốn xoá tài khoản này không?');">Xoá</button>
                                
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
