@extends('layouts.main')

@section('title', 'Lista')

@section('content')
<div class="container mt-3">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Data de criação</th>
            <th class="col-2"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto@gmail.com</td>
            <td>18/11/2022</td>
            <td><button type="button" class="btn btn-danger mt-1">Excluir</button> <a href="/" class="btn btn-primary mt-1">Editar</a></td>
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