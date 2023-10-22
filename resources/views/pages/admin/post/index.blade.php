@extends('layouts.app')

@section('body')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Post</h1>
        <a href="{{ route('post-create') }}" class="btn-sm btn-primary shadow-sm"></a>
        <i class="fa-plus fa-sm text-white-50"> Tambah Post</i>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">

                </table>
            </div>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

@endsection

