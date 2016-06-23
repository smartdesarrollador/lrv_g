@extends('bootstrap.principal')
 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
 
                @if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                @endif
 
				@if (Session::has('message'))
				    <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif
 
				<div class="panel-body">
					@if(isset($admin))
	                      {!! Form::model($admin, ['route' => ['admin.update', $admin->id], 'method' => 'patch']) !!}
                    @else
	                      {!! Form::open(['route' => 'admin.store']) !!}
                    @endif
 
							<div class="form-group">
								{!! Form::text('title', null, ["class" => "form-control"]) !!}
							</div>
 
							<div class="form-group">
								{!! Form::textarea('body', null,
										['class'=>'form-control', 'placeholder'=>'Body'])
								!!}
							</div>
 
							<div class="form-group">
								{!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
							</div>
 
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

	<div class="row">
	<div class="col-md-3 pull-right">
		{!! Html::link(route('admin.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
       </div>
</div>
@endsection