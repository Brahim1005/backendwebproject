<!-- resources/views/admin/createfaqview.blade.php -->

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
        <form action="{{ url('storefaq') }}" method="POST">
            @csrf

            <div style="padding: 15px;">
                <label for="category_id">Category</label>
                <select name="category_id" style="color: black;" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div style="padding: 15px;">
                <label for="question">Question</label>
                <input type="text" name="question" style="color: black;"  required>
            </div>
            <div style="padding: 15px;">
                <label for="answer">Answer</label>
                <textarea name="answer" style="color: black;" required></textarea>
            </div>
            <div style="padding: 15px;">
                <input type="submit" class="btn btn-primary" value="Create FAQ">
            </div>
        </form>
    </div>
</div>

@include('admin.script')

</body>
</html>
