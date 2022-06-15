@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <example-component></example-component> -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Save Result of Enrolled Runner</div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th>Result</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enrolled_runners as $enrolled_runner)
                                <tr>
                                    <td>{{$enrolled_runner->runner->name}}</td>

                                    @if($enrolled_runner->result != null)
                                    <td>
                                    <div class="form-group">
                                        <input type="result" class="form-control" value="{{$enrolled_runner->result}}" disabled>
                                    </div>
                                    </td>
                                    @else

                                    <td>
                                        <div class="form-group">
                                            <input type="result" class="form-control" placeholder="Add result">
                                        </div>
                                    </td>
                                    @endif

                                    @if($enrolled_runner->result != null)
                                    <td></td>
                                    @else
                                    <td>
                                        <a href="/run-result-save" class="btn btn-primary">Add results</a>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection