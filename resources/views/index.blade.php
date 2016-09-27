@extends ('layouts.master')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
              		@foreach ($news as $new) 
              			<div id="newsbox">
    						{{$new->title}}
    						<hr>
    						{{$new->body}}
    					</div>
					
					@endforeach
                <div class="panel-body">
               
                </div>
            </div>
        </div>
    </div>

@endsection