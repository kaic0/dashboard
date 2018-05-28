@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <ul id="tabsJustified" class="nav nav-tabs">
        <li class="nav-item tab-title"><i class="fa fa-box-open"></i> Estoque</li>
        <li class="nav-item ml-auto"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase active ">Produtos</a></li>
        <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase">Cadastrar</a></li>
        <li class="nav-item"><a href="" data-target="#messages1" data-toggle="tab" class="nav-link small text-uppercase">Messages</a></li>
    </ul>
    <div id="tabsJustifiedContent" class="tab-content">
        <div id="home1" class="tab-pane fade active show">
            <div class="row">
                @include('modules.products.list')
            </div>
        </div>
        <div id="profile1" class="tab-pane fade">
            <div class="row pb-2">
                @include('modules.products.create')
            </div>
        </div>
        <div id="messages1" class="tab-pane fade">
            <div class="list-group"><a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">44</span> Message 1</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">8</span> Message 2</a>                            <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">23</span> Message 3</a> <a href="" class="list-group-item d-inline-block text-muted">Message n..</a></div>
        </div>
    </div>
</div>

@endsection
