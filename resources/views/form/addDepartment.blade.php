@if (count($errors) > 0)
	<ul>
		@foreach ($errors->all() as $errors)
		<li>{!! $errors !!}</li>
		@endforeach
	</ul>
@endif
<form action="{!! route('postAdd') !!}" method="POST" name="frmAdd">
	{{ csrf_field() }}
	<table>
		<tr>
			<td>Name</td>
			<td>			
				<input type="text" name="txtName">	
				<!-- {!! $errors->first('txtName') !!} -->
			</td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="txtDescription">
				<!-- {!! $errors->first('txtDescription') !!} -->
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btnSubmit" value="Add"></td>
		</tr>
	</table>
</form>