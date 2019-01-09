@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        <div style="text-align: center;" id="mynetwork"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    @include('js.network')
@endpush

@push('css')
    <style type="text/css">
        #mynetwork {
            width: 600px;
            height: 400px;
            border: 1px solid lightgray;
        }
    </style>
@endpush
