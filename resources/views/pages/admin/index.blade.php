@extends('layouts.app')

@section('body')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard  {{ Auth::user()->name }}</h1>
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

</div>
<!-- /.container-fluid -->

@endsection

