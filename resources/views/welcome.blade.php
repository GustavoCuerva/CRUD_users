@extends('layouts.main')

@section('title', 'Lista')

@section('title_page', 'Lista de Usuários')

@section('content')
    <div class="table-responsive w-100">
        <table class="table table-striped table-bordered table-hover mt-5">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Data de criação</th>
                <th class="col-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th class="align-middle" scope="row">{{ $loop->index + 1 }}</th>
                        <td class="align-middle">{{ $user['name'] }}</td>
                        <td class="align-middle">{{ $user['email'] }}</td>
                        <td class="align-middle">{{ date("d/m/Y", strtotime($user['created_at'])) }}</td>
                        <td class="text-center align-middle">
                            <button type="button" class="btn btn-danger mt-1"> <i class="bi bi-trash-fill"></i> Excluir</button> 
                            <a href="/" class="btn btn-primary mt-1"> <i class="bi bi-pencil-square"></i> Editar</a></td>
                        </tr>
                    <tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection