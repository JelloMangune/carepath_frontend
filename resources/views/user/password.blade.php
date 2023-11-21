<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/logo.png') }}">
    <link href="{{ asset('css/user/sidebar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/user/index.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/sidebar.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/2eead9cc17.js" crossorigin="anonymous"></script>
    <title>My Account</title>
</head>
<body>

@include('user/sidebar')
    <div class="container content createRecord mt-5">
        <div class="row mb-5 mt-3">
            <div class="col-12 fs-2 text-center">
                My Account       
            </div>
        </div>
        <form action="{{ route('user.update-password') }}" method="POST">
        @csrf
        @method('PUT')
        @if(session('error'))
                <div class="alert alert-danger" id="error-message">
                    {{ session('error') }}
                </div>

                <script>
                    setTimeout(function() {
                        document.getElementById('error-message').style.display = 'none';
                    }, 3000);
                </script>
            @endif
            @if(session('success'))
            <div class="alert alert-success" id="success-message">
                {{ session('success') }}
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById('success-message').style.display = 'none';
                }, 3000);
            </script>
            @endif
        <div class="row">
            <div class="col-12 col-md-7 mb-3">
                <label for="currentPassword" class="form-label">New Password:</label>
                <input class="form-control" type="password" name="password" placeholder="Password" aria-label="currentPassword">
            </div>
            <div class="col-12 col-md-7 mb-3">
                <label for="currentPassword" class="form-label">Confirm Password:</label>
                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" aria-label="currentPassword">
            </div>
        </div>
        <div class="row mb-4 mt-5 justify-content-center text-center">
            <div class="col-md-3 col-lg-2 mt-1">
                <a href="{{ route('user.account') }}"><button type="button" class="btn btn-secondary cancelButton">Cancel</button></a>
            </div>
            <div class="col-md-3 col-lg-2 mt-1">
                <button type="submit" class="btn submitButton">Submit</button>
            </div>
        </div>
        </form>
    </div>



    





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>