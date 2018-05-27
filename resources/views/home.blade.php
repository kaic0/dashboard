@extends('layouts.app')

@section('content')

<div class="row mb-4">
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
</div>
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">Categorias</div>

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
                        @foreach($productCategories as $category)
                        <tr>
                            <td>
                                {{$category->id}}
                            </td>
                            <td>
                                {{$category->name}}
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
            <div class="card-header">Produtos</div>

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
                                Descrição
                            </td>
                            <td>
                                Quantidade
                            </td>
                            <td>
                                Categoria
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                {{$product->id}}
                            </td>
                            <td>
                                {{$product->name}}
                            </td>
                            <td>
                                {{$product->description}}
                            </td>
                            <td>
                                {{$product->quantity}}
                            </td>
                            <td>
                                {{$product->categories->name}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    @endsection
