@extends('admin.master')
@section('controller','Employee')
@section('action','List')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Birthday</th>
            <th>Deparement</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0 ?>
        @foreach($data as $item)
        <?php $stt = $stt + 1 ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>{!! $item["name"] !!}</td>
            <td>{!! $item["description"] !!}</td>
            <td>{!! \Carbon\Carbon::parse($item["birthDate"])->format('d F Y') !!}</td>
            <td>
                <?php $depa = DB::table('department_new')->where('id',$item["department_id"])->first(); ?>
                @if (!empty($depa->name))
                    {!! $depa->name !!}
                @endif
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.empl.getEdit',$item['id']) !!}">Edit</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a onclick="return confirmDelete('Are you sure to Delete ?')" href="{!! URL::route('admin.empl.getDelete',$item['id']) !!}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection                