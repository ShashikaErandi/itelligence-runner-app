@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Enroll Runner</h5>
                                <a href="/runner-enroll" class="btn btn-primary">Click Here</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Save Runner Results</h5>
                                <a href="/run-result" class="btn btn-primary">Click Here</a>
                            </div>
                            </div>
                        </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
