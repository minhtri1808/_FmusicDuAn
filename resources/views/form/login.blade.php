

<link rel="stylesheet" href="{{asset('form/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('form/style.css')}}">

<div id="logreg-forms">
    <form class="form-signin" action="{{route('auth.post')}}" method="POST">
        @csrf
        <div class="text-center mb-3">
            <a href="/"><img src="./../pages/assets/images/open_logo.png" alt="" width="120px"></a>
        </div>
        @if (session('message'))
        <div class="alert alert-primary" role="alert">
           {{session('message')}}
        </div>
        @endif
        <div class="social-login">
            <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Đăng nhập Facebook</span> </button>
            <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Đăng nhập Google+</span> </button>
        </div>
        <p style="text-align:center">Hoặc </p>
        <input type="email"class="form-control" placeholder="Nhập email" required="" autofocus="" name="email">
        @if ($errors->has('email'))
        <p class="help-block">{{$errors->first('email')}}</p>
        @endif
       <div class="d-lex">
            <input type="password" class="form-control" placeholder="Nhập mật khẩu" required="" name="password">
            @if ($errors->has('password'))
            <p class="help-block">{{$errors->first('password')}}</p>
            @endif
       </div>
    <div class="row align-items-center justify ml-1 p-1">
        <input type="checkbox" class="remember mr-2" name="remember" checked>Remember?
    </div>
        <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Đăng nhập</button>
        <a href="#" id="forgot_pswd">Quên mật khẩu?</a>
        <hr>
       <span class="register d-flex align-items-center justify-content-center" >Nếu chưa có tài khoản đăng kí tại đây <a class="p-1 register--link text-uppercase" href="{{route('signup.index')}}" > đăng kí</a></span>
    </form>

</div>

@include('./../pages/_javascript')
<script src="{{asset('form/main.js')}}"></script>
