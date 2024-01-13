<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
        .title
        {
            color:white; 
            padding-top: 25px; 
            font-size: 25px;

        }

        label
        {
            display: inline-block;
            width: 200px;


        }
    </style>
    
    <base href="/public">
    @include('admin.css')

  </head>
  <body>

    @include('admin.sidebar')

    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            
            <h1 class="title">Update Question and Answer</h1>

            @if(session()->has('message'))
            <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            {{session()->get('message')}}

            </div>
            @endif

            <form action="{{url('updatefaq', $faq->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="padding:15px;">
                <label for="">Question</label>
                <input style="color:black;" type="text" name="question" value="{{$faq->question}}" required="">
            </div>

            <div style="padding:15px;">
                <label for="">Answer</label>
                <input style="color:black;" type="text" name="answer" value="{{$faq->answer}}" required="">
            </div>

            <div style="padding:15px;">
                <input style="color:black; background-color: #78CA68" class="btn btn-success" type="submit">
            </div>
            </form>
            
        </div>    
    </div>

    @include('admin.script')


  </body>
</html>