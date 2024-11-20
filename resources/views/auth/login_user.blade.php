<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
   
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Đăng Nhập</h3>
            <form action="{{ route('auth.dologin'); }} " method="post">
                @csrf
                @session('error')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                </div>
                @endsession

                @session('success')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
                @endsession
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name='email' class="form-control" id="email" placeholder="Nhập email" value="{{ old('email'); }}">
                    @if ($errors->has('email'))
                    <span style = 'color: red'>*{{ $errors->first('email'); }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input name='password' type="password" class="form-control" id="password"
                        placeholder="Nhập mật khẩu">
                    @if ($errors->has('password'))
                    <span style = 'color: red'>*{{ $errors->first('password'); }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                <div class="text-center mt-3">
                    <a href="{{ route('auth.register'); }}">Đăng ký</a>
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