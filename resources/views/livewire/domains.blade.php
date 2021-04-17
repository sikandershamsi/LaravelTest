<div> @if (session()->has('message'))
  <div class="alert alert-success"> {{ session('message') }} </div>
  @endif
  <table class="table table-bordered mt-2">
    <thead>
      <tr>
        <th>No.</th>
        <th>URL</th>
        <th>User</th>
        <th width="150px">Action</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach($domains as $domain)
    <tr>
      <td>{{ $domain->id }}</td>
      <td>{{ $domain->domain_url }}</td>
      <td>{{ $domain->name }}</td>
      <td><button wire:click="edit({{ $domain->id }})" class="btn btn-primary btn-sm">Edit</button>
        <button wire:click="delete({{ $domain->id }})" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    @endforeach
    </tbody>
  </table>
  <hr>
  @if($updateMode)
  	@include('livewire.domain_update')
  @else
  	@include('livewire.domain_create')
  @endif
  
</div>