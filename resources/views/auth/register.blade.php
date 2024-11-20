<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Ký</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Đăng Ký</h3>
            <form action="{{ route('auth.doregister'); }}" method="post">
                @csrf
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                
                <div class="form-group">
                    <label for="name">Tên đầy đủ</label>
                    <input name='name' class="form-control" id="name" placeholder="Nhập tên đầy đủ" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span style='color: red'>*{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input name='email' class="form-control" id="email" placeholder="Nhập email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span style='color: red'>*{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input name='password' type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                    @if ($errors->has('password'))
                        <span style='color: red'>*{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Xác nhận mật khẩu</label>
                    <input name='password_confirmation' type="password" class="form-control" id="password_confirmation" placeholder="Nhập lại mật khẩu">
                    @if ($errors->has('password_confirmation'))
                        <span style='color: red'>*{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
                <div class="text-center mt-3">
                    <a href="{{ route('auth.index'); }}">Bạn đã có tài khoản -> Đăng nhập</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Link Bootstrap JS (Optional for additional features like modal, dropdown) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
