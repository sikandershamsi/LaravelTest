@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2>Domains</h2>
        </div>
        <div class="card-body"> 
          @if (session()->has('message'))
          <div class="alert alert-success"> {{ session('message') }} </div>
          @endif
          @livewire('domains') 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection