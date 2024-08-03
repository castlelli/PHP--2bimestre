@extends('layout.site')
@section('titulo','Login')
@section('conteudo')
<divclass="container">
    <h3class="center">Entrar</h3>
        <divclass="row">
            <form class=""action="{{route('login.entrar')}}" method="post">
                {{ csrf_field() }}
                <div class="input-field">
                    <input type="text" name="email">
                        <label>E-mail</label>
                        </div>
                        <div class="input-field">
                            <input type="password"name="senha">
                                <label>Senha</label>
                                </div>
                                <button class="btn-deep-orange">Entrar</button>
                                    </form>
                                    </div>
                                    </div>
@endsection