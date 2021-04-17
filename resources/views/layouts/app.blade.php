<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	@livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href="/dashboard">API Data</a> </li>
        @if(Auth::user()->role == 'super_admin')
        <li class="nav-item"> <a class="nav-link" href="/domains">Domains</a> </li>
        <li class="nav-item"> <a class="nav-link" href="/users">Users</a> </li>
        @endif
        <li class="nav-item"> <a class="nav-link" href="/logout">Logout</a> </li>
      </ul>
    </nav>
	@yield('content')
	@livewireScripts
</body>
</html>