@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit config</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('configuration.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br>
            <ul>
                @foreach ($errors-> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="panel panel-widget forms-panel">
				<div class="forms">
					<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
						<div class="form-body">
							<form action="{{ route('configuration.update', ['id' => $config->id]) }}" method="POST">
							{{ csrf_field() }}
								<div class="form-group">
									<label for="exampleInputEmail1">Title</label> 
									<input type="text" name="title" value="{{ $config->title }}" class="form-control" id="exampleInputEmail1" placeholder="Title"> 
								</div> 
                                <div class="form-group">
									<label for="exampleInputEmail1">Phone number</label> 
									<input type="text" name="phonenumber" value="{{ $config->phonenumber }}" class="form-control" id="exampleInputEmail1" placeholder="Phone number"> 
								</div>
                                <div class="form-group">
									<label for="exampleInputEmail1">Email</label> 
									<input type="text" name="email" value="{{ $config->email }}" class="form-control" id="exampleInputEmail1" placeholder="Email"> 
								</div> 
                                <div class="form-group">
									<label for="exampleInputEmail1">Website</label> 
									<input type="text" name="website" value="{{ $config->website }}" class="form-control" id="exampleInputEmail1" placeholder="Website"> 
								</div> 
                                <div class="form-group">
									<label for="exampleInputEmail1">Hotline</label> 
									<input type="text" name="hotline" value="{{ $config->hotline }}" class="form-control" id="exampleInputEmail1" placeholder="Hotline"> 
								</div> 
								<div class="form-group">
									<label for="exampleInputEmail1">Address</label> 
									<textarea  name="address" class="form-control" id="exampleInputEmail1" placeholder="Adress"> {{ $config->address }} </textarea>
								</div>
								<button type="submit" class="btn btn-default">Edit</button> 
							</form> 
						</div>
					</div>
				</div>
			</div>


@endsection
