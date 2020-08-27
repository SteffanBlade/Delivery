{{-- Extent App --}}
@extends('layouts.app2')


{{-- Content section --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News !</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <h1>Some message here</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
