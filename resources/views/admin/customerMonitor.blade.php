@extends('layout.app')

@section('contents')
<div class="pt-5 container">
  <form action="{{ route('customerManagement') }}" method="GET" class="mb-4">
    <div class="row">
      <div class="col-md-4">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" class="form-control" value="{{ request('start_date') }}">
      </div>
      <div class="col-md-4">
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" class="form-control" value="{{ request('end_date') }}">
      </div>
      <div class="col-md-4 align-self-end">
        <button type="submit" class="btn btn-primary">Filter</button>
      </div>
    </div>
  </form>

  @if($customers->isEmpty())
    <div class="alert alert-danger text-center">No data to show</div>
  @else
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Date Purchased</th>
        </tr>
      </thead>
      <tbody>
        @foreach($customers as $customer)
          <tr>
            <th scope="row">{{ $customer->customer_id }}</th>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->created_at->format('F j, Y') }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</div>
@endsection
