@extends('layouts.app')

@section('content')

    <div class="row">
        @include('components.sidebar')
        <div class="d-flex flex-column col-10">
            <div class="row">
                <div class="col-6 bg-light">
                    <h2>Project statistics</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Projects</th>
                                <td>{{ $projects }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6 bg-light">
                    <h2>Recent additions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 bg-light">
                    <h2>Project statistics</h2>
                </div>
                <div class="col-6 bg-light">
                    <h2>Recent additions</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
