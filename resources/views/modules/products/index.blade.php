@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Estoque</h2>
    <ul id="tabsJustified" class="nav nav-tabs">
        <li class="nav-item"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase">Home</a></li>
        <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase active">Profile</a></li>
        <li class="nav-item"><a href="" data-target="#messages1" data-toggle="tab" class="nav-link small text-uppercase">Messages</a></li>
    </ul>
    <div id="tabsJustifiedContent" class="tab-content">
        <div id="home1" class="tab-pane fade">
            <div class="list-group"><a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">51</span> Home Link</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">8</span> Link 2</a>                            <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">23</span> Link 3</a> <a href="" class="list-group-item d-inline-block text-muted">Link n..</a></div>
        </div>
        <div id="profile1" class="tab-pane fade active show">
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
