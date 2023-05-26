@extends('layouts.admin')

@section('title', 'Asset')

@section('content')


    <div class="pagetitle">
        <h1>Asset</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Asset</li>
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
                        </ul>
                    </div>
                    -->
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-sm my-3" data-bs-toggle="modal"
                            data-bs-target="#addDepart">
                            <i class="bi bi-plus pe-2"></i>Add Asset
                        </button>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <table class="table table-borderless datatable pt-3">
                            <thead>
                                <tr>
                                    <th scope="col" style="max-width: 5%">#</th>
                                    <th>Type</th>
                                    <th>Model</th>
                                    <th>Serial Number</th>
                                    <th style="max-width: 5%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($asset as $item => $data_asset)
                                    <tr>
                                        <td>
                                            {{ $item + 1 }}
                                        </td>
                                        <td>
                                            {{ $data_asset->data_type_assets->nama_type }}
                                        </td>
                                        <td>
                                            <a href="{{ route('asset.edit', $data_asset->id) }}" type="button">
                                                {{ $data_asset->model }}
                                            </a>
                                        </td>
                                        <td>
                                            {{$data_asset->serial_number}}
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
                                                            <form action="{{route('asset.destroy', $data_asset->id)}}" method="POST" class="d-inline">
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
                                        <td class="text-center text-light bg-danger" colspan="4">
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

    <div class="modal fade" id="addDepart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        @include('pages.admin.asset.create')
    </div>

@endsection
