@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light"> Teste Dev back-end </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1>Ola Recrutadores da Creators!</h1>
                   <p>Desde ja agradeco por ter chegado ate essa etapa, de toda forma está sendo uma experiencia muito satisfatória em participar do processo.</p>
                   <a class="see" href="{{ url('posts') }}"><i class="fa fa-eye" aria-hidden="true"></i> POSTS</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
