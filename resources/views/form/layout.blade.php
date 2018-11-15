{!! Form::open(array('route'=>'sendEmail','files'=>true)) !!}

{!! Form::label('hoten', 'Họ Tên') !!}
{!! Form::text('txtHoten','', array('class'=>'input', 'placeholder'=>'Vui lòng nhập')) !!} <br /><br />


{!! Form::label('email', 'Email') !!}
{!! Form::email('txtEmail','', array('class'=>'input', 'placeholder'=>'Vui lòng nhập')) !!} <br /><br />

{!! Form::label('thongtin', 'Thông tin') !!}
{!! Form::textarea('txtThongtin','', array('class'=>'input', 'rows'=>'5', 'placeholder'=>'Vui lòng nhập')) !!}<br /><br />

{!! Form::label('hinhanh', 'Hình ảnh') !!}
{!! Form::file('fImage') !!}

{!! Form::submit('Gửi') !!}
{!! Form::button('OK') !!}
{!! Form::reset('Xóa') !!}

{!! Form::close() !!}