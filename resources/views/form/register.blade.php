

<link rel="stylesheet" href="{{asset('form/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('form/styleRe.css')}}">

<div id="logreg-forms">
    <form class="form-horizontal" action='{{route('signup.post')}}' method="POST" enctype="multipart/form-data">
        @csrf

            <div class="text-center mb-3">
                <a href="/"><img src="./../pages/assets/images/open_logo.png" alt="" width="120px"></a>
            </div>
          @if (session('message'))
              <div class="alert alert-primary" role="alert">
                 {{session('message')}}
              </div>
          @endif
          <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="username">Tên tài khoản</label>
            <div class="controls">
              <input type="text" id="name" name="name" placeholder="" class="input-xlarge" required>
            @if ($errors->has('name'))
            <p class="help-block">{{$errors->first('name')}}</p>
            @endif
            </div>
          </div>

          <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">Điạ chỉ Email</label>
            <div class="controls">
              <input type="text" id="email" name="email" placeholder="" class="input-xlarge" required>
              @if ($errors->has('email'))
              <p class="help-block">{{$errors->first('email')}}</p>
              @endif
            </div>
          </div>

          <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Mật khẩu</label>
            <div class="controls">
              <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>
              @if ($errors->has('password'))
              <p class="help-block">{{$errors->first('password')}}</p>
              @endif
            </div>
          </div>

          <div class="control-group">
            <!-- Password -->
            <label class="control-label"  for="password_confirm">Nhập lại mật khẩu</label>
            <div class="controls">
              <input type="password" id="password" name="password_confirmation" placeholder="" class="input-xlarge" required>
            </div>
          </div>
          <div class="control-group">
            <!-- role -->
            <div class="controls">
                <label for=""></label>
              <input type="hidden" id="role" name="role" value="0" placeholder="" class="input-xlarge" >
            </div>
          </div>

          <div class="control-group">
            <!-- Button -->
            <div class="controls">
              <button class="btn btn-success">Đăng kí</button>
            </div>
          </div>

      </form>
    <span class="register d-flex align-items-center justify-content-center pb-3" >Nếu đã có tài khoản đăng nhập tại đây <a class="p-2 register--link text-uppercase" href="{{route('auth.login')}}" >đăng nhập</a></span>
</div>

@include('./../pages/_javascript')
<script src="{{asset('form/main.js')}}"></script>


