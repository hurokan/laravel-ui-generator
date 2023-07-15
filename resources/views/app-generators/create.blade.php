@extends('layout.admin.default')
@section('content')
<!-- Breadcrumb-->
<div class="bg-gray-200 text-sm">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 py-3">
                <li class="breadcrumb-item"><a class="fw-light" href="#">Home</a></li>
                <li class="breadcrumb-item active fw-light" aria-current="page">Module</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Forms Section-->
<section class="pb-5">
    <div class="container-fluid">
        <div class="row">
            <!-- Basic Form-->
            <div class="row">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="h4 mb-0">Create App
                            <a href="{{ route('app-generator.index') }}">Back</a></h3>
                        </h3>
                        <div id="alert-container" class="container">
                            @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('warning'))
                                <div class="alert alert-warning" role="alert">
                                    {{ session('warning') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="createItemForm">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label required-label" for="tableName" data-toggle="tooltip" data-placement="top" title="write your module name">Table Name</label>
                                <input class="form-control" id="name" name="name" type="text" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label required-label" for="fieldName">Field Name</label>
                                    <input class="form-control" id="fieldName" name="field_name[]" type="text" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label required-label" for="levelName">Level Name</label>
                                    <input class="form-control" id="levelName" name="level_name[]" type="text" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label required-label" for="dataType">Data Type
                                        <i class="fa fa-info-circle" title="select data type"></i></label>
                                    <select class="form-select" id="dataType" name="data_type[]" required>
                                        <option value="" selected disabled>Choose...</option>
                                       @foreach($dataTypes as $parent=>$types)
                                            <optgroup label="{{$parent}}">
                                               @foreach($types as $type=>$length)
                                                   <option value="{{$type}}">{{$type}} - {{json_encode($length)}}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label class="form-label" for="fieldSize">Field Size</label>
                                    <input class="form-control" id="fieldSize" name="field_size[]" type="text">
                                </div>
                                <div class="col-md-1">
                                    <label class="form-label" for="default">Default</label>
                                    <input class="form-control" id="default" name="default[]" type="text">
                                </div>
                                <div class="col-md-1 mb-3">
                                    <label class="form-label" for="nullable">Nullable</label>
                                    <select class="form-select" id="nullable" name="nullable[]">
                                        <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label required-label" for="inputType">Input Type</label>
                                    <select class="form-select" id="inputType" name="input_type[]" required>
                                        <option value="" selected disabled>Choose...</option>
                                        @foreach($htmlInputElements as $key=>$value)
                                          <option value="{{$value}}">{{$key}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    <button class="btn btn-primary" type="button" id="addItemBtn">+</button>
                                </div>
                            </div>
                            <div id="itemRows"></div>
                            <div class="mt-1">
                                <button type="submit" class="btn btn-primary" id="createItemForm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('myscript')
<script>
    $(document).ready(function() {
        $('#addItemBtn').click(function() {
            var html = `
                    <div class="row mb-3 item">
                                <div class="col-md-3">
                                    <input class="form-control" id="fieldName" name="field_name[]" type="text" required>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" id="levelName" name="level_name[]" type="text" required>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id="dataType" name="data_type[]" required>
                                        <option value="" selected disabled>Choose...</option>
                                         @foreach($dataTypes as $parent=>$types)
            <optgroup label="{{$parent}}">
                                               @foreach($types as $type=>$length)
            <option value="{{$type}}">{{$type}} - {{json_encode($length)}}</option>
                                                @endforeach
            </optgroup>
@endforeach
            </select>
        </div>
        <div class="col-md-1">
            <input class="form-control" id="fieldSize" name="field_size[]" type="text">
        </div>
        <div class="col-md-1">
            <input class="form-control" id="default" name="default[]" type="text">
        </div>
        <div class="col-md-1 mb-3">
            <select class="form-select" id="nullable" name="nullable[]">
                <option value="Y">Yes</option>
                <option value="N">No</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-select" id="inputType" name="input_type[]" required>
                <option value="" selected disabled>Choose...</option>
@foreach($htmlInputElements as $key=>$value)
            <option value="{{$value}}">{{$key}}</option>
                                        @endforeach
            </select>
        </div>
        <div class="col-md-1">
            <button class="btn btn-danger removeItemBtn" type="button">X</button>
        </div>
    </div>
`;
            $('#itemRows').append(html);
            $('.removeItemBtn').click(function() {
                var parentDiv = $(this).closest('.item');
                parentDiv.remove();
            })
        });
        $('#createItemForm').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            // Make an AJAX request to submit the form data
            $.ajax({
                url: '{{ route('app-generator.store') }}',
                type: 'POST',
                data: formData,
                // success: function(response) {
                //     // Handle the success response
                //     var message = response.data;
                //     console.log('here success',response)
                //     displayAlert(message, 'success');
                // },
                // error: function(xhr, status, error) {
                //     console.log('here erros')
                //     // Handle the error response
                //     // displayAlert(xhr.responseJSON.data[0], 'danger');
                // }
                success: function(response) {
                    // Check if the response has the 'data' property
                    if (response.hasOwnProperty('data')) {
                        // Success response
                        var dataValue = response.data;
                        // Use the dataValue as needed
                        console.log(dataValue);
                    } else {
                        // Error response
                        console.error('Error: Invalid response format');
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    // Error handling
                    console.log('error');
                    // console.error('AJAX error:', textStatus, errorThrown);
                }
        });
        });
    });

</script>
@stop
