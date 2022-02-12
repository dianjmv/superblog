@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Crear Articulos
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Titulo</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                        <input type="file" name="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Contenido</label>
                                    <textarea name="body" cols="30" rows="10" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Contenido Embebido</label>
                                    <textarea name="iframe" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    @csrf
                                    <input type="submit" class="btn btn-sm btn-primary" value="Enviar">
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
