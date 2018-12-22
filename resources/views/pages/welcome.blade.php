@extends('main')

@section('title', '| Homepage')
@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                    
                <h1>Welcome to laravel blog.</h1>
                
                <p>It will show the most important posts.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio adipisci dolorum temporibus quae dolorem labore deserunt, sapiente omnis doloribus beatae ullam! Eius at quam quae, rem eos possimus dolor. Molestiae.</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <hr>

            <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio adipisci dolorum temporibus quae dolorem labore deserunt, sapiente omnis doloribus beatae ullam! Eius at quam quae, rem eos possimus dolor. Molestiae.</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr>

            <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio adipisci dolorum temporibus quae dolorem labore deserunt, sapiente omnis doloribus beatae ullam! Eius at quam quae, rem eos possimus dolor. Molestiae.</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr>
        </div>
        <div class="col-md-3 col-md-offset-1" >Sidebar
        </div>
    
@endsection