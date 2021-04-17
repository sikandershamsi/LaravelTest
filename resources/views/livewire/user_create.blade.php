<form>
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" wire:model="name">
    @error('name') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <div class="form-group">
    <label>Role:</label>
    <select class="form-control" wire:model="role">
    	<option value="">Select Role</option>
    	<option value="super_admin">Super Admin</option>
    	<option value="admin">Admin</option>
    </select>
    @error('role') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" wire:model="email">
    @error('email') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control" placeholder="Enter Password" wire:model="password">
    @error('password') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <div class="form-group">
    <label>Confirm Password:</label>
    <input type="password" class="form-control" placeholder="Confirm Password" wire:model="password_confirmation">
    @error('password_confirmation') <span class="text-danger">{{ $message }}</span>@enderror 
  </div>
  <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
