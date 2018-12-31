@extends('main')

@section('title', 'laravel | create new post')

@section('content')
    <div class="row">
        <div class="col-md-8 col-offset-2">
            <h1>Create new Post</h1>
            <hr>
            {{-- <form>
                <div class="form-group">
                        <label name="title">Title</label>
                        <input id="title" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                            <label name="Body">Body</label>
                            <textarea id="body" name="body" class="form-control" value="enter details"></textarea>
                        </div>
                        
                <input type="submit" value="Submit" class="btn btn-success">
            </div>
            </form> --}}
           
            {{-- using laravelcollective 'route' => 'posts.store' --}}

            {!! Form::open(['action' => 'PostController@store']) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class'=> 'form-control'] ) }}

                {{ Form::label('body', 'Post Body:') }}
                {{ Form::textarea('body', null, ['class'=> 'form-control'] ) }}

                {{ Form::submit('Create Project', ['class'=> 'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 20px' ])}}
    
            {!! Form::close() !!}

    </div>
    </div>
@endsection
