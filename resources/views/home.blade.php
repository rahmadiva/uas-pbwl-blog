@extends('layouts.app')

@section('content')

@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Homepage</div>
                
                <div class="card-body">
           <marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"> 
           <h1 style=" color: black">WELCOME TO MY BLOG! </h1>                      
              </marquee>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
