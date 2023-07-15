@extends('layout.admin.default')
@section('content')
<div class="container-fluid py-4">
<form action="{{ route('app-generator.setting.update', $record->id) }}" method="POST">
    @csrf
    @method('PUT')    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $record->name }}">
    </div>    <div class="form-group">
        <label for="address">address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $record->address }}">
    </div>    <div class="form-group">
        <label for="mobile">mobile</label>
        <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $record->mobile }}">
    </div>    <div class="form-group">
        <label for="nid">nid</label>
        <input type="text" class="form-control" id="nid" name="nid" value="{{ $record->nid }}">
    </div>    <button type="submit" class="btn btn-primary">Update</button>
</form>
 </div>
@stop
