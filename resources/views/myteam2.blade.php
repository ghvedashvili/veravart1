
  @include('layouts.menu')




    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>stadium</th>
                                        <th>fanclub</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @forelse ($data as $user)
                                  <li>{{ $user->name }} : {{ $user->teamuid }}</li>
                                <tbody>
                            
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{ url('/student/' . $user->id) }}" title="View Student">{{ $user->name }}</a></td>
                                        <td>{{ $user->stadium }}</td>
                                        <td>{{ $user->fanclub }}</td>
  
                                        <td>
                                            <a href="{{ url('/student/' . $user->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $user->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/student' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                            
                                </tbody>
                                @empty
                            </table>
                        </div>















<form action="/adddata" method="post">
    @csrf

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="add">
</form>

<a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>



@endforelse