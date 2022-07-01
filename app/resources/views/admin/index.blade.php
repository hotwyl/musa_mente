@extends('layout')

@section('title', 'Admin Dash')

@section('content')
    <section class="my-5">
        <div class="card">

            <div class="card-header text-center">
                <h3 class="card-title">Painel Administrativo</h3>
            </div>

            <div class="card-body p-5">

                <p class="card-text"> </p>

                <table class="table table-striped table-hover table-bordered" id="data_Table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">NOME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">FONE</th>
                            <th scope="col">DATA</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resultado as $key => $value)
                            <tr>
                                <td>{{ $value->nome }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->fone }}</td>
                                <td>{{ $value->data }}</td>
                                <td class="d-flex justify-content-evenly">
                                    <a class="btn btn-secondary btn-sm" href="{{ route('cliente.show', ['chave' => $value->chave, 'protocolo' => $value->protocolo]) }}" title="Exibir" target="_blank" role="button"><i
                                            class="bi bi-eye"></i></a>
                                    <a class="btn btn-secondary btn-sm" href="#" role="button"><i
                                            class="bi bi-envelope-open"></i></a>
                                    <a class="btn btn-secondary btn-sm" href="#" role="button"><i
                                            class="bi bi-whatsapp"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="text-center">
                            <th scope="col">NOME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">FONE</th>
                            <th scope="col">DATA</th>
                            <th scope="col"></th>
                        </tr>
                    </tfoot>
                </table>

            </div>

            <div class="card-footer"></div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@stop

@section('js1')

@stop

@section('js2')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/script.js"></script>
@stop
