@extends('layouts.master')

@section('title', 'laravel_noddt_jet01')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-4 bg-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
        <div class="col-4 bg-warning">
            <div class="mb-3">
                <label for="filterWord" class="form-label">Filter by Contains Word:</label>
                <input type="text" class="form-control" id="filterWord">
            </div>
            <div class="mb-3">
                <label for="filterTimestamp" class="form-label">Filter by Timestamp:</label>
                <input type="text" class="form-control" id="filterTimestamp">
            </div>
            <div class="mb-3">
                <label for="filterTags" class="form-label">Filter by Tags:</label>
                <input type="text" class="form-control" id="filterTags">
            </div>
        </div>
        <div class="col-4 bg-danger">
            <button
                type="button"
                class="btn btn-primary"
            >
                Button
            </button>
        </div>
    </div>
</div>
@endsection