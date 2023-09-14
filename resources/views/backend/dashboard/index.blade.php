@extends('backend.layout.app')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard text-center">
      <img src="{{asset('asset/images/bluelagoon/bluelagoon.png')}}" alt="c" srcset="" width="200px">
      <h1 style="font-weight:600;" class = "mt-4">Welcome to The Blue Lagoon </h1>
      <h3>Select Left Side Menu to Operate Admin</h3>
    </section>

  </main>


@endsection