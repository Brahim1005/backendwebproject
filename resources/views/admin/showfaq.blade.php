<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>
        .show-questions {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .show-questions thead tr {
            background-color: #9C9696;
            color: #ffffff;
            text-align: left;
        }

        .show-questions th,
        .show-questions td {
            padding: 12px 15px;
        }

        .show-questions tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .show-questions tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .show-questions tbody tr:last-of-type {
            border-bottom: 2px solid #9C9696;
        }
    </style>
  </head>
  <body>

    @include('admin.sidebar')

    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">

        <div class="show-questions">
        <table>
            <thead>
                <tr align="center">
                    <td>Asked Questions</td>
                    <td>Answer</td>
                    <td>Update/Answer the question</td>
                    <td>Delete Question</td>
                </tr>
            </thead>

            @foreach($faq as $faqs)
            <tbody>
                <tr align="center">
                    <td>{{$faqs->question}}</td>
                    <td>{{$faqs->answer}}</td>
                    <td><a class="btn btn-primary" href="{{url('updatefaqview', $faqs->id)}}">Update / Answer the question</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="{{url('deletefaq', $faqs->id)}}">Delete</a></td>

                </tr>
            </tbody>
            @endforeach
        </table>
        </div>

        </div>
    </div>

    @include('admin.script')


  </body>
</html>