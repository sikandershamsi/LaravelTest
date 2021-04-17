<div> @if (session()->has('message'))
  <div class="alert alert-success"> {{ session('message') }} </div>
  @endif
  <table class="table table-bordered mt-2">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th width="150px">Action</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email}}</td>
      <td>{{ ucwords(str_replace('_',' ',$user->role)) }}</td>
      <td><button wire:click="edit({{ $user->id }})" class="btn btn-primary btn-sm">Edit</button>
        <button wire:click="delete({{ $user->id }})" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    @endforeach
    </tbody>
  </table>
  <hr>
  @if($updateMode)
  	@include('livewire.user_update')
  @else
  	@include('livewire.user_create')
  @endif
  
</div>