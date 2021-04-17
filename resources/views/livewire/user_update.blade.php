<form>
  <input type="hidden" wire:model="post_id">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" wire:model="name">
    @error('name') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" wire:model="email">
    @error('email') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
  <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
