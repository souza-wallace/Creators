@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a title="Adicionar um Post" class="add d-flex flex-row-reverse" href="{{ url('posts/new') }}"><h1 id="plus"><b>+</b></h1></a>
                    <input type="text" class="form-control form_search" placeholder="pesquisar no blog">
                </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   {{-- <hr> --}}
                   @foreach ($posts as $p)
                    <div class="top-area">
                        
                            <p>Criado em: {{ date('d/m/Y', strtotime($p->created_at));    }}</p>
                            <div class="row">
                                <a class="col-md-4" id="edit" href="posts/{{ $p->id }}/edit"> <i class="far fa-edit"></i></a>
                                <form  class="col-md-4" action="posts/delete/{{ $p->id }}" method="get">
                                    @csrf
                                    @method('delete')
                                    <a id="delete" class="text-danger" href="posts/delete/{{ $p->id }}"><i class="far fa-trash"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="title-area">
                            <h1>{{$p->titulo}}</h1>
                        </div>
                        <div class="descricao">
                            <p>
                        {{$p->descricao}}
                            </p>
                        </div>    
                        <hr>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
