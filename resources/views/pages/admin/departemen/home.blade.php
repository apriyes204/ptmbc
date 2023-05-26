@extends('layouts.admin')

@section('title', 'Departemen')

@section('content')


    <div class="pagetitle">
        <h1>Departemen</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Departemen</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">

                <div class="card recent-sales overflow-auto">
                    <!--
                                                <div class="filter">
                                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                        <li class="dropdown-header text-start">
                                                            <h6>Filter</h6>
                                                        </li>

                                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                                    </ul>
                                                </div>
                                                -->
                    <div class="card-body">
                        <div class="row my-3 text-center">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addDepart">
                                    <i class="bi bi-plus pe-2"></i>Add Departemen
                                </button>
                            </div>
                            <div class="col-sm-12 col-md-5 mb-2"></div>
                            <div class="col-sm-12 col-md-3">
                                <form action="#" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nama Departemen"
                                            aria-label="Searching" aria-describedby="search-button-addon">
                                        <button class="btn btn-outline-primary" type="button" id="search-button-addon">
                                            <i class="bi bi-search"></i>
                                            Cari
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <table class="table table-borderless pt-3">
                            <thead>
                                <tr>
                                    <th scope="col" style="max-width: 5%">#</th>
                                    <th style="min-width: 50%">Nama Departemen</th>
                                    <th style="max-width: 10%" class="text-center">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item => $departemen)
                                    <tr>
                                        <td>
                                            {{ $item + 1 }}
                                        </td>
                                        <td>
                                            <a href="{{ route('departemen.edit', $departemen->id)}}" type="button">
                                                {{ $departemen->nama_departemen }}
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapusDepart">
                                                <i class="bi bi-trash2"></i>
                                            </button>

                                            <div class="modal fade" id="hapusDepart" tabindex="-1"
                                                aria-labelledby="hapusDataLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="hapusDataLabel">Hapus Data</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            Yakin di hapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <form action="{{route('departemen.destroy', $departemen->id)}}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                            <button type="submit" class="btn btn-danger">
                                                                Yakin
                                                            </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center text-light bg-danger" colspan="3">
                                            Data Kosong
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

    <div class="modal fade" id="addDepart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('pages.admin.departemen.create')
    </div>




@endsection
