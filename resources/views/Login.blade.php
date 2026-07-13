@extends('layouts.app')

@section('content')

<h1 style="color:red;text-align:center">
TEST LOGIN ITBSS
</h1>

<style>

body{

    background-image:
    linear-gradient(
        rgba(13,110,253,.75),
        rgba(80,20,150,.75)
    ),
    url('{{ asset("images/Website-PMB-26-27.jpg") }}');


    background-size:cover;

    background-position:center;

    min-height:100vh;

}



.login-container{

    min-height:85vh;

    display:flex;

    justify-content:center;

    align-items:center;

}



.login-card{

    width:420px;

    border:none;

    border-radius:25px;

    background:rgba(255,255,255,.95);

    box-shadow:0 15px 40px rgba(0,0,0,.3);

}



.login-logo img{

    width:120px;

}



.form-control{

    border-radius:12px;

    padding:12px;

}



.btn-login{


    background:linear-gradient(
        135deg,
        #0d6efd,
        #8e44ff
    );


    color:white;

    border:none;

    border-radius:12px;

    padding:12px;


}



.btn-login:hover{


    background:linear-gradient(
        135deg,
        #8e44ff,
        #0d6efd
    );


    color:white;

}



</style>





<div class="login-container">



<div class="card login-card p-4">



<div class="text-center login-logo">


<img src="{{ asset('images/Logo-ITBSS.png') }}">



<h3 class="fw-bold mt-3">

ITBSS Academic System

</h3>



<p class="text-muted">

Silahkan login untuk masuk ke sistem

</p>



</div>





<form method="POST"
action="{{ route('login') }}">


@csrf





<div class="mb-3">


<label class="fw-bold">

Email

</label>


<input type="email"
name="email"
class="form-control"
placeholder="Masukkan email"
required>


</div>






<div class="mb-3">


<label class="fw-bold">

Password

</label>


<input type="password"
name="password"
class="form-control"
placeholder="Masukkan password"
required>


</div>






<div class="d-grid">


<button class="btn btn-login">

Login

</button>


</div>



</form>



</div>



</div>


@endsection