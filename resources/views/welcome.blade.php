@extends('layouts.main')

@section('title', 'Lista')

@section('content')

    <div class="text-center mt-5">
        <h1>Lista de Usuários</h1>
    </div>

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
                <tr>
                <th class="align-middle" scope="row">1</th>
                <td class="align-middle">Mark</td>
                <td class="align-middle">Otto@gmail.com</td>
                <td class="align-middle">18/11/2022</td>
                <td class="text-center align-middle">
                    <button type="button" class="btn btn-danger mt-1"> <i class="bi bi-trash-fill"></i> Excluir</button> 
                    <a href="/" class="btn btn-primary mt-1"> <i class="bi bi-pencil-square"></i> Editar</a></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton@gmail.com</td>
                <td>18/11/2022</td>
                <td><button type="button" class="btn btn-danger">Excluir</button> <a href="/" class="btn btn-primary">Editar</a></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird@gmail.com</td>
                <td>18/11/2022</td>
                <td><button type="button" class="btn btn-danger">Excluir</button> <a href="/" class="btn btn-primary">Editar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection