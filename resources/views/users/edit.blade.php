@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <a class="text-success" href="{{ route('user.index') }}">&leftarrow; Voltar para a listagem</a>

                        @if($errors)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger mt-4" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post" class="mt-4"
                              autocomplete="off">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nome do usuário</label>
                                <input type="text" class="form-control" id="name" placeholder="Atualize o nome do usuário"
                                       name="name" value="{{ old('name') ?? $user->name }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Atualize o email"
                                       name="email" value="{{ old('email') ?? $user->email }}">
                            </div>

                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="password" placeholder="Atualize a senha"
                                       name="password" value="">
                            </div>

                            <button type="submit" class="btn btn-block btn-success">Atualizar Usuário</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
