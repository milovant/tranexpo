@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            {{Form::open(['route'=>'pages.store','class'=>'form'])}}
                            <div class="form-group">
                                {{Form::label('title', 'Title',['class'=>'form-label'])}}
                                {{Form::text('title',null,['class'=>'form-control title','id'=>'title'])}}
                            </div>
                           <div class="form-group">
                            {{Form::label('slug', 'Slug',['class'=>'form-label'])}}
                            {{Form::text('slug',null,['class'=>'form-control slug','id'=>'slug'])}}
                           </div>
                           <div class="form-group">
                            {{Form::label('body','Body',['class'=>'form-label'])}}
                            {{Form::textarea('body',null,['class'=>'form-control'])}}
                           </div>
                            
                           {{Form::submit('Click Me!')}}
                            {{Form::close()}}
                           
                        </div>
                    </div>                       
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
    <script>
    (function() {
        var title = document.getElementById("title");
        title.addEventListener('blur',function(){
            document.getElementById('slug').value = string_to_slug(title.value);
        })
     })();
      
    </script>
@endpush('scripts')

