<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
              integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Registration Form</h1>
            <form action="{{url('/register')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>
                        Name:
                    </label>
                    <input type="text" name="name" class="form-control" maxlength="190" required>
                </div>
                <div class="form-group">
                    <label>
                        E-Mail:
                    </label>
                    <input type="email" name="email" class="form-control" maxlength="190" required>
                </div>
                <div class="form-group">
                    <label>
                        Password:
                    </label>
                    <input type="password" name="password" class="form-control" minlength="6" maxlength="32" required>
                </div>
                <button type="submit" class="btn btn-primary">
                    Register & login
                </button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
