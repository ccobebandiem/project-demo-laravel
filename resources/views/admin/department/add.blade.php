@extends('admin.master')
@section('content')
@section('controller','Department')
@section('action','Add')
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="{!! route('admin.depa.getAdd') !!}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Deparement Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Deparement Name" />
        </div>
        <div class="form-group">
            <label>Deparement Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription') !!}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Deparement Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection