@extends('admin.master')
@section('content')
@section('controller','Employee')
@section('action','Add')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error')
    <form action="{!! route('admin.empl.getAdd') !!}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Employee Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Employee Name" value="{!! old('txtName') !!}" />
        </div>
        <div class="form-group">
            <label>Employee Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription') !!}</textarea>
        </div>
        <div class="form-group">
            <label>Employee Birthday</label>
            <input type="date" value="2018-06-07" min="1800-01-01" max="2222-12-31" class="form-control" name="txtBirthDate" placeholder="Please Enter Employee Birthday" />
        </div>
        <div>
        <label>Deparement</label>
            <select class="form-control" name="sltDepa">
                <option value="">Please Choose Department</option>
                <?php depatment_name($depa,old('sltDepa')); ?>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Employee Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection