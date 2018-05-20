@extends('layouts.app')

@section('content')


<div class="col-md-6">
    <div class="card">
        <div class="card-header">Usuários</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Nome
                        </td>
                        <td>
                            Sobrenome
                        </td>
                        <td>
                            Empresa
                        </td>
                        <td>
                            Email
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            {{@$user->id}}
                        </td>
                        <td>
                            {{@$user->name}}
                        </td>
                        <td>
                            {{@$user->surname}}
                        </td>
                        <td>
                            {{@$user->companies->name}}
                        </td>
                        <td>
                            {{@$user->email}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">Empresas</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Nome
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>
                            {{@$company->id}}
                        </td>
                        <td>
                            {{@$company->name}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
