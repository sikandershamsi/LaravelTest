<form>
  <div class="form-group">
    <label>URL:</label>
    <input type="text" class="form-control" placeholder="Enter URL" wire:model="domain">
    @error('domain') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <div class="form-group">
    <label>Domain:</label>
    <select class="form-control" wire:model="user_id">
    	<option value="">Select Admin User</option>
        @foreach($users as $user)
    	<option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    @error('domain_id') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
