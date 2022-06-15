@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enroll Runner</div>
                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                        {{$errors->first()}}
                        </div>
                    @endif

                    @if (session('messege'))
                        <div class="alert alert-success">
                            {{ session('messege') }}
                        </div>
                    @endif

                    <form action="/runner-enroll" method="POST">
                        @csrf
                        <!-- Select runner dropdown -->
                        <div class="form-group">
                            <label for="run">Select Run</label>
                            <select class="form-control" id="run" name='run'>
                                @foreach($runs as $run)
                                <option value="{{$run->id}}">{{$run->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Select runner dropdown -->
                        <div class="form-group  mt-2">
                            <label for="runner">Select Runner</label>
                            <select class="form-control" id="runner" name='runner'>
                                @foreach($runners as $runner)
                                <option value="{{$runner->id}}">{{$runner->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Enroll button -->
                        <button type="submit" class="btn btn-primary mt-2">Primary</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection