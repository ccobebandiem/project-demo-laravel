@extends('admin.master')
@section('content')
@section('controller','Department')
@section('action','Edit')
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Deparement Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Deparement Name" value="{!! old('txtName', isset($data) ? $data['name'] : null) !!}" />
        </div>
        <div class="form-group">
            <label>Deparement Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', isset($data) ? $data['description'] : null) !!}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Deparement Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection