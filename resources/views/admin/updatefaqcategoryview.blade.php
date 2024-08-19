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
        <form action="{{ url('updateFaqCategory', $category->id) }}" method="POST">
            @csrf
            <div style="padding: 15px;">
                <label for="name">Category Name</label>
                <input type="text" name="name" value="{{ $category->name }}" style="color:black" required>
            </div>
            <div style="padding: 15px;">
                <label for="description">Category Description</label>
                <textarea name="description" style="color:black" required>{{ $category->description }}</textarea>
            </div>
            <div style="padding: 15px;">
                <input type="submit" class="btn btn-primary" value="Update Category">
            </div>
        </form>
    </div>
</div>

@include('admin.script')

</body>
</html>
