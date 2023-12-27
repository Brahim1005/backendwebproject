<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

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
</head>
    <body>
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            
            <h1 class="title">Add product</h1>

            <div style="padding:15px;">
                <label for="">Product name</label>
                <input type="text" name="name" placeholder="Give a product name" required="">
            </div>

            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

                @csrf

            <div style="padding:15px;">
                <label for="">Price</label>
                <input type="number" name="price" placeholder="Give a pprice" required="">
            </div>

            <div style="padding:15px;">
                <label for="">Description</label>
                <input type="text" name="description" placeholder="Give a description" required="">
            </div>

            <div style="padding:15px;">
                <label for="">Quantity</label>
                <input type="text" name="quantity" placeholder="Product quantity" required="">
            </div>

            <div style="padding:15px;">
                <input type="file" name="file">
            </div>

            <div style="padding:15px;">
                <input class="btn btn-success" type="submit">
            </div>
            </form>
            
        </div>    
    </div>

    @include('admin.script')




  </body>
</html>