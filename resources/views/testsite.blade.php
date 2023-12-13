@extends('layouts.master')

@section('title', 'laravel_noddt_jet01')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-4 bg-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
        <div class="col-4 bg-warning">
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    name=""
                    id=""
                    aria-describedby="emailHelpId"
                    placeholder="abc@mail.com"
                />
                <small id="emailHelpId" class="form-text text-muted"
                    >Help text</small
                >
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