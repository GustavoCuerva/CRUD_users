@extends('layouts.main')

@section('title', 'Cadastrar')
    
@section('title_page', 'Cadastrar Usuário')

@section('content')
@php $btn = 'Cadastrar' @endphp
<div class="d-flex align-items-center h-max mt-5 justify-content-center">
    <div class="w-100">
        <form action="{{ $user['url'] }}" method="POST" style="max-width:600px; margin:auto;" id="form-register">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="name">Nome completo:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo" value="{{ $user['name'] }}">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" value="{{ $user['email'] }}">
              </div>
              <div class="form-group col-md-6">
                <label for="date">Data Nascimento:</label>
                <input type="text" class="form-control" id="date" name="date" placeholder="dd/mm/aaaa" value="{{ $user['birth_date'] != '' ? date('d/m/Y', strtotime($user['birth_date'])) : '' }}">
                <label id="error" class="error" for="date" style="display: none;">Por favor, forneça uma data correta.</label>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword4">Senha:</label>
                <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Senha" value="{{ $user['password'] }}">
                <label id="error_senha" class="error" for="inputPassword4" style="display: none;">A senha deve conter letras maiusculas e minusculas, numeros e caracteres especiais</label>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4_">Confirma a senha</label>
                <input type="password" class="form-control" id="inputPassword4_" name="confirm_password" placeholder="Confirme a senha" value="{{ $user['password'] }}" disabled>
              </div>
            </div>

            @empty(!$user['name'])
              @method('PUT')
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="passwordBefore">Senha - Atual:</label>
                  <input type="password" class="form-control" id="passwordBefore" name="password_before" placeholder="Senha atual" value="">
                </div>
              </div>
              @php $btn = 'Editar' @endphp
            @endempty
            
            <a href="{{ route('index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary" id="cadastrar" {{ empty(!$user['name'] ? '' : 'disabled') }}>{{ $btn }}</button>
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

  {{-- Script padrão --}}
  <script src="{{ asset('/js/script.js') }}"></script>

  {{-- Script opcional --}}
  @empty(!$user['name'])
    <script>
      validation(false);
    </script>
  @else
    <script>
      validation(true);
    </script>
  @endempty
  
@endsection