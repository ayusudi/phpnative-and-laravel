@extends('layouts.app')
@section('content')
<body>
  <section class="container" id="PageListUser">
    <h1>List User</h1>
    <table class="table">
      <thead>
          <th class="p-1">No.</th>
          <th class="p-1">Name</th>
          <th class="p-1">Phone Number</th>
          <th class="p-1">Email</th>
          <th class="p-1">NIK</th>
          <th class="p-1">DOB</th>
          <th class="p-1">Role</th>
          <th class="p-1">Role Description</th>
          <th class="p-1">Action</th>
      </thead>
      <tbody>
        @foreach ($data as $user)
          <tr>
            <td class="p-1">{{ $loop->iteration }}</td>
            <td class="p-1">{{ $user->name }}</td>
            <td class="p-1">{{ $user->phoneNumber }}</td>
            <td class="p-1">{{ $user->email }}</td>
            <td class="p-1">{{ $user->nik }}</td>
            <td class="p-1">{{ $user->dateOfBirth }}</td>
            <td class="p-1">{{ $user->role->roleName }}</td>
            <td class="p-1">{{ $user->role->description }}</td>
            <td class="p-1">
              <button style="cursor: not-allowed;" class="btn btn-warning m-1" >Update</button>
              <br/>
              <button style="cursor: not-allowed;" class="btn btn-danger m-1"  >Delete</button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>
</body>
@endsection
