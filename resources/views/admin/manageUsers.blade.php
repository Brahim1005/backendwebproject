<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>

    @include('admin.sidebar')

    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    {{ session()->get('message') }}
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    {{ session()->get('error') }}
                </div>
            @endif

            <br>
            <h1>Manage Users</h1>
            <br>
            <!-- Table to manage existing users -->
            <table>
                <tr style="background-color: #4C4C4D;">
                    <td style="padding: 20px;">Name</td>
                    <td style="padding: 20px;">Email</td>
                    <td style="padding: 20px;">User Type</td>
                    <td style="padding: 20px;">Promote</td>
                    <td style="padding: 20px;">Delete</td>
                </tr>

                @foreach($users as $user)
                <tr align="center" style="background-color: #989899;">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->usertype == '1' ? 'Admin' : 'User' }}</td>
                    <td>
                        @if($user->usertype != '1')
                        <a class="btn btn-primary" href="{{ url('promoteUser', $user->id) }}">Promote to Admin</a>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ url('deleteUser', $user->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>

            <!-- Form to create a new admin user -->
            <div style="margin-top: 50px;">
    <h1>Create New Admin User</h1>
    <br>
    <form action="{{ url('createUser') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" style="background-color: white; color: black;" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" style="background-color: white; color: black;" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" style="background-color: white; color: black;" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" style="background-color: white; color: black;" required>
        </div>

        <button type="submit" class="btn btn-success">Create Admin</button>
    </form>
</div>


        </div>
    </div>

    @include('admin.script')

  </body>
</html>
