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

        <table>
            <tr align="center" style="background-color: #EB5A58;">
                <td style="padding: 20px;">Customer name</td>
                <td style="padding: 20px;">Email</td>
                <td style="padding: 20px;">Subject of message</td>
                <td style="padding: 20px;">Message</td>
                <td style="padding: 20px;">Delete</td>

            </tr>

            @foreach($contactform as $contactforms)
            <tr align="center" style="background-color:#FFDFDE;">
                <td style="padding: 20px; color:black;">{{$contactforms->name}}</td>
                <td style="padding: 20px; color:black;">{{$contactforms->email}}</td>
                <td style="padding: 20px; color:black;">{{$contactforms->subject}}</td>
                <td style="padding: 20px; color:black;">{{$contactforms->message}}</td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="{{url('deletecontactform', $contactforms->id)}}">Delete</a></td>

            </tr>
            @endforeach

        </table>

        </div>
    </div>

    @include('admin.script')


  </body>
</html>