




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login sicicza 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>


  <body class="login-img3-body">

    <div class="container">
        
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Regitrarse!!</strong> para poder entrar 
        </div>
        
        
       

      <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}     
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
             <div class="input-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            
              <span class="input-group-addon"><i class="icon_profile"></i></span>

                      
              <input type="email" id="email" class="form-control" name="email"   value="{{ old('email') }}" required autofocus>
                
            </div>
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} input-group">
            
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password" type="password" class="form-control" name="password" required placeholder="contraseña">
                

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <label class="checkbox">
                <input type="hidden" value="remember-me"> 
               
                <span class="pull-right"> <a href="{{ url('/password/reset') }}"> Olvidaste tu contraseña?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
            <!--button class="btn btn-info btn-lg btn-block" type="submit">Signup</button-->
        </div>
      </form>
    <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                
            </div>
        </div>
    </div>


  </body>
</html>
