@extends('layouts.app')

@section('content')
    <div class="row">
    @include('components.sidebar')
        <div class="d-flex flex-column col-10">
            <div class="row">
                <div class="col-12 justify-content-between">
                    <a href="{{ route('compounds.create') }}" class="btn btn-primary">
                        Create compound
                    </a>
                    <button class="btn btn-secondary"><span class="fas filter"></span></button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 bg-light">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
