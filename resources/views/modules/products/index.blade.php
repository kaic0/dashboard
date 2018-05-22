@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <ul id="tabsJustified" class="nav nav-tabs">
        <li class="nav-item tab-title">Estoque</li>
        <li class="nav-item ml-auto"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase active ">Produtos</a></li>
        <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase">Cadastrar</a></li>
        <li class="nav-item"><a href="" data-target="#messages1" data-toggle="tab" class="nav-link small text-uppercase">Messages</a></li>
    </ul>
    <div id="tabsJustifiedContent" class="tab-content">
        <div id="home1" class="tab-pane fade active show">
            <div class="list-group">
                <table class="table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Nome</td>
                            <td>Descrição</td>
                            <td>Quantidade</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if($products)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->quantity}}</td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td>Nenhum produto cadastrado</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div id="profile1" class="tab-pane fade">
            <div class="row pb-2">
                <div class="col-md-7">
                    <p>Tabs can be used to contain a variety of content &amp; elements. They are a good way to group <a href="" class="link">relevant content</a>. Display initial content in context to the user. Enable the user to flow through
                        <a href="" class="link">more</a> information as needed.
                    </p>
                </div>
            </div>
        </div>
        <div id="messages1" class="tab-pane fade">
            <div class="list-group"><a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">44</span> Message 1</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">8</span> Message 2</a>                            <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">23</span> Message 3</a> <a href="" class="list-group-item d-inline-block text-muted">Message n..</a></div>
        </div>
    </div>
</div>

@endsection
