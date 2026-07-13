@extends('layouts.app')

@section('content')


<style>


/* =========================
   FOTO PMB
========================= */


.banner-img{

    width:100%;

    height:380px;

    object-fit:cover;

    border-radius:25px;

    box-shadow:0 10px 25px rgba(0,0,0,.2);

}






/* =========================
   CARD STATISTIK
========================= */


.stat-card{

    border:none;

    border-radius:20px;

    transition:.3s;

}



.stat-card:hover{

    transform:translateY(-8px);

    box-shadow:0 15px 30px rgba(0,0,0,.2);

}



.stat-icon{

    font-size:40px;

}






/* =========================
   MENU
========================= */


.menu-card{

    border:none;

    border-radius:20px;

    transition:.3s;

}



.menu-card:hover{

    transform:translateY(-8px);

    box-shadow:0 15px 30px rgba(0,0,0,.2);

}



</style>








<div class="container-fluid py-4">






<!-- =========================
     WELCOME CARD
========================= -->


<div class="card border-0 shadow rounded-4 mb-4"
style="background:linear-gradient(135deg,#0d6efd,#6f42c1);">



<div class="card-body p-4 text-white">



<div class="row align-items-center">





<div class="col-md-8">



<h4 class="fw-bold mb-2">


👋 Selamat Datang,

{{ Auth::user()->name ?? 'User' }}


</h4>





<h5 class="fw-bold">


ITBSS Academic System


</h5>





<p class="mb-3">


Sistem Informasi Akademik ITBSS
untuk mengelola data mahasiswa,
dosen, jurusan, mata kuliah,
kelas, dan KRS.


</p>





<span class="badge bg-light text-primary px-3 py-2">


{{ strtoupper(Auth::user()->role ?? 'ADMIN') }}


</span>





</div>








<div class="col-md-4 text-center">


<img src="{{ asset('images/Logo-ITBSS.png') }}"
     width="140"
     class="img-fluid">



</div>





</div>


</div>


</div>









<!-- =========================
     FOTO PMB
========================= -->


<div class="mb-5">


<img src="{{ asset('images/Website-PMB-26-27.jpg') }}"
     class="banner-img">


</div>









<!-- =========================
     STATISTIK
========================= -->


<h4 class="fw-bold mb-4">


📊 Ringkasan Akademik


</h4>







<div class="row g-4 mb-5">





@php

$statistics=[


[
'icon'=>'👨‍🎓',
'title'=>'Mahasiswa',
'value'=>$totalMahasiswa,
'color'=>'text-primary'
],


[
'icon'=>'👨‍🏫',
'title'=>'Dosen',
'value'=>$totalDosen,
'color'=>'text-success'
],


[
'icon'=>'🏢',
'title'=>'Jurusan',
'value'=>$totalJurusan,
'color'=>'text-danger'
],


[
'icon'=>'📚',
'title'=>'Mata Kuliah',
'value'=>$totalMatakuliah,
'color'=>'text-warning'
],


[
'icon'=>'🏫',
'title'=>'Kelas',
'value'=>$totalKelas,
'color'=>'text-info'
],


[
'icon'=>'📝',
'title'=>'KRS',
'value'=>$totalKrs,
'color'=>'text-primary'
],


[
'icon'=>'⏳',
'title'=>'Pending KRS',
'value'=>$pendingKrs,
'color'=>'text-warning'
],


[
'icon'=>'✅',
'title'=>'Approved KRS',
'value'=>$approvedKrs,
'color'=>'text-success'
]


];


@endphp








@foreach($statistics as $item)



<div class="col-md-3">


<div class="card stat-card shadow h-100">


<div class="card-body text-center p-4">



<div class="stat-icon">

{{ $item['icon'] }}

</div>




<h5 class="fw-bold">


{{ $item['title'] }}


</h5>




<h2 class="fw-bold {{ $item['color'] }}">


{{ $item['value'] }}


</h2>




<p class="text-muted">


Total Data


</p>




</div>


</div>


</div>




@endforeach






</div>









<!-- =========================
     MENU AKADEMIK
========================= -->


<h4 class="fw-bold mb-4">


🎓 Menu Akademik


</h4>








<div class="row g-4">





@php

$menus=[


[
'icon'=>'👨‍🎓',
'title'=>'Mahasiswa',
'desc'=>'Kelola data mahasiswa',
'url'=>'/mahasiswa'
],


[
'icon'=>'👨‍🏫',
'title'=>'Dosen',
'desc'=>'Kelola data dosen',
'url'=>'/dosen'
],


[
'icon'=>'🏢',
'title'=>'Jurusan',
'desc'=>'Kelola jurusan',
'url'=>'/jurusan'
],


[
'icon'=>'📚',
'title'=>'Mata Kuliah',
'desc'=>'Kelola mata kuliah',
'url'=>'/matakuliah'
],


[
'icon'=>'🏫',
'title'=>'Kelas',
'desc'=>'Kelola kelas',
'url'=>'/kelas'
],


[
'icon'=>'📝',
'title'=>'KRS',
'desc'=>'Kelola KRS',
'url'=>'/krs'
]


];


@endphp








@foreach($menus as $menu)



<div class="col-md-4">



<a href="{{ $menu['url'] }}"
class="text-decoration-none">



<div class="card menu-card shadow h-100">



<div class="card-body text-center p-4">



<h1>

{{ $menu['icon'] }}

</h1>




<h5 class="fw-bold text-dark">

{{ $menu['title'] }}

</h5>




<p class="text-muted">

{{ $menu['desc'] }}

</p>




</div>


</div>


</a>


</div>



@endforeach






</div>






</div>


@endsection