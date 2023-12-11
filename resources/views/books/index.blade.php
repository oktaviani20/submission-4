<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BOOKS</title>
</head>
<body>
    <h1 class="text-center mb-4">Data Buku</h1>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card border-0">
                    <div class="card-body">
                        @if (session('status'))
                            <h4>{{ session('status') }}</h4>
                        @endif
                        <form name="book-save-form" id="book-save-form" action="{{ url('/books/save-book') }}"
                            method="post">
                            @csrf
                            <table>
                                <tr>
                                    <td>ID</td>
                                    <td><input type="text" name="id" id="id"></td>

                                </tr>
                                <tr>
                                    <td>Book Name</td>
                                    <td><input type="text" name="book_name" id="book_name"></td>

                                </tr>
                                <tr>
                                    <td>Author</td>
                                    <td><input type="text" name="author" id="book_name"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-borderedcls">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Published Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $b)
                        <tr>
                            <td>{{ $b['id'] }}</td>
                            <td>{{ $b['book_name'] }}</td>
                            <td>{{ $b['author'] }}</td>
                            <td>{{ $b['published_at'] }}</td>
                            <td>
                                <form action="{{ url('/books/delete-book?id=') . $b['id'] }}" method="get">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>
</html>
