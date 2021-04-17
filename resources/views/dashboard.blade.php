@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2>API Data</h2>
        </div>
        <div class="card-body">
          <table class="table table-bordered mt-2">
            <thead>
              <tr>
                <th>User ID</th>
                <th>ID</th>
                <th>Title</th>
                <th>Completed</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach($records as $record)
            <tr>
              <td>{{ $record->userId }}</td>
              <td>{{ $record->id }}</td>
              <td>{{ $record->title }}</td>
              <td>{{ $record->completed == 1 ? 'Yes' : 'No' }}</td>
            </tr>
            @endforeach
              </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection