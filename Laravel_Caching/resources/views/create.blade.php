<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <div class="row">

        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="margin-top: 10%;">
            <h3>Add new post</h3>



            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Title:</label>
                    <input type="test" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="sel1">Select Category:</label>
                    <select class="form-control" id="sel1" name="category">

                        <option selected disabled>Select Category</option>

                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="pwd">Body:</label>
                    <textarea class="form-control" id="pwd" name="body" rows="4"></textarea>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-sm-3"></div>

    </div>

</div>

</body>
</html>
