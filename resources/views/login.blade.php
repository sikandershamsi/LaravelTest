<!DOCTYPE html>
<html>
<head>
<title>Laravel Livewire</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
@livewireStyles
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h2>Login Form</h2>
        </div>
        <div class="card-body"> 
          @if (session()->has('message'))
          <div class="alert alert-success"> {{ session('message') }} </div>
          @endif
          @livewire('login') 
        </div>
      </div>
    </div>
  </div>
</div>
@livewireScripts
</body>
</html>