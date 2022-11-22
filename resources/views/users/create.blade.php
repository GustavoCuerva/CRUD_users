@extends('layouts.main')

@section('title', 'Cadastrar')
    
@section('title_page', 'Cadastrar Usuário')

@section('content')
<div class="d-flex align-items-center h-max mt-5 justify-content-center">
    <div class="w-100">
        <form action="{{ route('user.store') }}" method="POST" style="max-width:600px; margin:auto;" id="form-register">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="name">Nome completo:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="date">Data Nascimento:</label>
                <input type="text" class="form-control" id="date" name="date" placeholder="dd/mm/aaaa">
                <label id="error" class="error" for="date" style="display: none;">Por favor, forneça uma data correta.</label>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword4">Senha:</label>
                <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Senha">
                <label id="error_senha" class="error" for="inputPassword4" style="display: none;">A senha deve conter letras maiusculas e minusculas, numeros e caracteres especiais</label>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4_">Confirma a senha</label>
                <input type="password" class="form-control" id="inputPassword4_" name="confirm_password" placeholder="Confirme a senha" disabled required>
              </div>
            </div>
            <a href="{{ route('index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary" id="cadastrar" disabled>Cadastrar</button>
          </form>
    </div>
</div>
@endsection

@section('scripts')
  {{-- Jquery --}}
  <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('/js/additional-methods.min.js') }}"></script>
  <script src="{{ asset('/js/localization/messages_pt_BR.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.mask.min.js') }}"></script>

  <script src="{{ asset('/js/script.js') }}"></script>
@endsection