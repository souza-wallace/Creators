@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light">Atualizar Post</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Request::is('*/edit'))
                    <form method="POST" action="{{url('posts/update')}}/{{ $post->id }}">
                        @csrf
                        <input type="hidden" id="registro_cad" value="">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="select_eventos">Titulo</label><br />
                                <input class="form-control" id="titulo" name="titulo" style="width:100%!important" value="{{ $post->titulo }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="select_grupos">Descricao</label><br />
                                <input class="form-control" id="descricao" name="descricao" style="width:100%!important" value="{{ $post->descricao }}">
                            </div>
                        </div>
                        <div style="margin-left: 550px;">
                            <a href="{{ url('posts') }}" class="btn btn-primary pull-left">Voltar</a>
                            <button type="submit" class="btn btn-success pull-right">Salvar</button>
                        </div>
                    </form>

                    @else
                        <form method="POST" action="{{ url('posts/add') }}">
                            @csrf
                            <input type="hidden" id="registro_cad" value="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="select_eventos">Titulo</label><br />
                                    <input class="form-control" id="titulo" name="titulo" style="width:100%!important" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="select_grupos">Descricao</label><br />
                                    <input class="form-control" id="descricao" name="descricao" style="width:100%!important" value="">
                                </div>
                            </div>
                            <div style="margin-left: 550px;">
                                <a href="{{ url('posts') }}" class="btn btn-primary pull-left">Voltar</a>
                                <button type="submit" class="btn btn-success pull-right">Salvar</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
