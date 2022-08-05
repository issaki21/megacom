@extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Ingresar</h4>
	<p class="">Hola, Bienvenido a tu Cuenta.</p>
	<div class="social-sign-in outer-top-xs">
		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Ingresar con Facebook</a>
		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Ingresar con Twitter</a>
	</div>
	
    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
			
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
		    <input type="email" id="email" name="email" class="form-control unicase-form-control text-input" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
		    <input type="password" id="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
		</div>
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Recuerdamelo!
		  	</label>
		  	<a href="{{ route('password.request') }}" class="forgot-password pull-right">Perdistes tu Password?</a>
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Ingresar</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Cree una Nueva Cuenta</h4>
	<p class="text title-tag-line">Crea tu Nueva Cuenta.</p>
	<form method="POST" action="{{ route('register') }}">
            @csrf
		
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Nombre <span>*</span></label>
		    <input type="text" id="name" name="name" class="form-control unicase-form-control text-input" >
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
		</div>
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Celular<span>*</span></label>
		    <input type="text" id="phone" name="phone" class="form-control unicase-form-control text-input">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
		</div>
        <div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email<span>*</span></label>
	    	<input type="email" id="email" name="email" class="form-control unicase-form-control text-input" >
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
	  	</div>      
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="password" id="password" name="password" class="form-control unicase-form-control text-input">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirmar Password <span>*</span></label>
		    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control unicase-form-control text-input">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Registrar</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

@include('frontend.body.brands')

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->

</div><!-- /.body-content -->


@endsection