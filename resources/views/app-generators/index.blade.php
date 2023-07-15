@extends('layout.admin.default')
@section('content')
    <!-- Breadcrumb-->
    <div class="bg-gray-200 text-sm">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                    <li class="breadcrumb-item"><a class="fw-light">Home</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Module </li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="tables">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="h4 mb-0">Module List
                                <a href="{{ route('app-generator.create') }}">Create New Module</a></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-9 justify-content-start">
                                        Showing  from {{$records->firstItem()}} to {{$records->lastItem()}} of {{$records->total()}} entries
                                    </div>
                                <div class="col-md-3 justify-content-end">
                                    {{ $records->links() }}
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-sm mb-0 table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($records as $record)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $record->name }}</td>
                                            <td>
                                                <a href="{{ route('app-generator.setting', $record->id) }}"><i class="fas fa-wrench"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
