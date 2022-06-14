@extends('layouts.main')

@section('title', 'Main page')

@section('content')

<div class="container">
    <div id="app">
        <div class="row mt-4">
            <h1 class="text-center">Table Employees</h1>

            <div class="row mt-3">
                <form-create></form-create>
            </div>

        </div>
    </div>
</div>

@endsection
