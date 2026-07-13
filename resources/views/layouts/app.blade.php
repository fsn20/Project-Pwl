<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ITBSS Academic System</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


<style>


body{

    transition:.3s;

}





/* =========================
   DARK MODE PURPLE
========================= */


.dark-mode{

    background:#211033 !important;

    color:white !important;

}





/* CARD */

.dark-mode .card{

    background:#352052;

    color:white;

    border-color:#9b59ff;

}



.dark-mode .card-header{

    background:#8e44ff !important;

    color:white !important;

}





/* TEXT FIX */

.dark-mode h1,
.dark-mode h2,
.dark-mode h3,
.dark-mode h4,
.dark-mode h5,
.dark-mode h6,
.dark-mode p,
.dark-mode span,
.dark-mode label,
.dark-mode td,
.dark-mode th,
.dark-mode li{

    color:white !important;

}



.dark-mode .text-dark{

    color:white !important;

}



.dark-mode .text-muted{

    color:#dccbff !important;

}





/* TABLE */

.dark-mode .table{

    color:white;

}



.dark-mode .table td,
.dark-mode .table th{

    border-color:#9b59ff;

}



.dark-mode .table-dark{

    background:#352052;

    color:white;

}





/* FORM */

.dark-mode .form-control,
.dark-mode .form-select{

    background:#432765;

    color:white;

    border-color:#a855ff;

}



.dark-mode .form-control::placeholder{

    color:#dfcfff;

}





/* DROPDOWN */

.dark-mode .dropdown-menu{

    background:#352052;

}



.dark-mode .dropdown-item{

    color:white !important;

}



.dark-mode .dropdown-item:hover{

    background:#8e44ff;

}





/* FOOTER */

.dark-mode footer{

    background:#160824 !important;

}





/* =========================
   BUTTON DARK MODE
========================= */


.btn-purple{


    background:linear-gradient(
        135deg,
        #d18aff,
        #8e44ff
    );


    color:white;

    border:none;

    border-radius:12px;

    padding:7px 16px;

    transition:.3s;

}



.btn-purple:hover{


    background:linear-gradient(
        135deg,
        #e0aaff,
        #a855ff
    );


    color:white;

    transform:translateY(-3px);

}





/* CARD HOVER */


.card{

    transition:.3s;

}



.card:hover{

    transform:translateY(-5px);

}





</style>


</head>




<body id="body" class="bg-light">





<!-- NAVBAR -->


<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">


<div class="container">


<a class="navbar-brand fw-bold" href="/">

🎓 ITBSS Academic System

</a>




<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbar">


<span class="navbar-toggler-icon"></span>


</button>





<div class="collapse navbar-collapse" id="navbar">



<ul class="navbar-nav me-auto">


<li class="nav-item">

<a class="nav-link" href="/">

Dashboard

</a>

</li>



@auth



@if(Auth::user()->role == 'admin')


<li class="nav-item dropdown">


<a class="nav-link dropdown-toggle"
href="#"
data-bs-toggle="dropdown">

Master Data

</a>



<ul class="dropdown-menu">


<li>
<a class="dropdown-item" href="/mahasiswa">

Mahasiswa

</a>
</li>



<li>
<a class="dropdown-item" href="/dosen">

Dosen

</a>
</li>



<li>
<a class="dropdown-item" href="/jurusan">

Jurusan

</a>
</li>



<li>
<a class="dropdown-item" href="/matakuliah">

Mata Kuliah

</a>
</li>



<li>
<a class="dropdown-item" href="/kelas">

Kelas

</a>
</li>



<li><hr class="dropdown-divider"></li>



<li>
<a class="dropdown-item" href="/krs">

KRS

</a>
</li>



<li>
<a class="dropdown-item" href="/krs-detail">

KRS Detail

</a>
</li>


</ul>


</li>


@endif





@if(Auth::user()->role == 'mahasiswa')


<li class="nav-item">

<a class="nav-link" href="/krs">

KRS

</a>

</li>



<li class="nav-item">

<a class="nav-link" href="/krs-detail">

Detail KRS

</a>

</li>


@endif





@if(Auth::user()->role == 'dosen')


<li class="nav-item">

<a class="nav-link" href="/krs">

Approval KRS

</a>

</li>



<li class="nav-item">

<a class="nav-link" href="/krs-detail">

Detail KRS

</a>

</li>


@endif



@endauth



</ul>







@auth


<div class="d-flex align-items-center">


<span class="text-white me-3">


<strong>

{{ Auth::user()->name }}

</strong>


|

{{ strtoupper(Auth::user()->role) }}


</span>






<button
id="themeToggle"
class="btn btn-purple me-2">


🌙


</button>






<form action="{{ route('logout') }}"
method="POST">


@csrf


<button class="btn btn-outline-light">


Logout


</button>


</form>




</div>


@endauth





</div>


</div>


</nav>






<!-- CONTENT -->


<div class="container mt-4">



@if(session('success'))


<div class="alert alert-success alert-dismissible fade show">


{{ session('success') }}


<button type="button"
class="btn-close"
data-bs-dismiss="alert">

</button>


</div>


@endif





@if(session('error'))


<div class="alert alert-danger alert-dismissible fade show">


{{ session('error') }}


<button type="button"
class="btn-close"
data-bs-dismiss="alert">

</button>


</div>


@endif





@yield('content')



</div>






<!-- FOOTER -->


<footer class="bg-dark text-white text-center py-3 mt-5">


© {{ date('Y') }} ITBSS Academic Information System


</footer>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>





<script>


const body = document.getElementById("body");

const button = document.getElementById("themeToggle");



if(button){


if(localStorage.getItem("theme") === "dark"){


body.classList.add("dark-mode");

button.innerHTML="☀️";


}





button.addEventListener("click",function(){


body.classList.toggle("dark-mode");



if(body.classList.contains("dark-mode")){


localStorage.setItem("theme","dark");

button.innerHTML="☀️";


}else{


localStorage.setItem("theme","light");

button.innerHTML="🌙";


}



});


}



</script>




</body>

</html>