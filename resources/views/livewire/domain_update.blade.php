<form>
  <input type="hidden" wire:model="domain_id">
  <div class="form-group">
    <label>URL:</label>
    <input type="text" class="form-control" placeholder="Enter URL" wire:model="domain">
    @error('domain') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <div class="form-group">
    <label>Users:</label>
    <select class="form-control" wire:model="user_id">
    	<option value="">Select Admin User</option>
        @foreach($users as $user)
    	<option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    @error('user_id') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
  <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
