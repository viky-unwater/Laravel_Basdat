@extends('contacts.layout')
@section('content')
<div class="card mt-5">
  <h2 class="card-header" style="text-align: center;">Contacts</h2>
  <div class="card-body">
          
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('contacts.create') }}"> <i class="fa fa-plus"></i> Create New Contact</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone_num }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('contacts.show', $contact->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('contacts.edit', $contact->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">There are no data.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {!! $contacts->links() !!}
  </div>
</div>  
@endsection
