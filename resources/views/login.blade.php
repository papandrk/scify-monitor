<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SciFY Monitor</title>
        <link rel="icon" type="image/png" href="images/cropped-SciFY_logo_responsive-32x32.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="custom-backdrop container-fluid vh-100 d-flex flex-column justify-content-center">

            <main class="row justify-content-center p-3">
                <div class="card custom-login-card m-3 shadow">
                    <div class="card-body p-5">
                    
                        <div class="text-center mb-3 p-3 rounded custom-scifi-img-container">
                            <img src="images/logo-scify-header@2x.png" alt="SciFY logo" />
                        </div>

                        <h2 class="text-center mb-2">SciFY Monitor</h2>

                        <form method="POST" action="/users/authenticate">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" />
                                <div class="form-text text-danger">
                                    @error('username'){{ $message }}@enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" />
                                <div class="form-text text-danger">
                                    @error('password'){{ $message }}@enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-4">Log In</button>
                        </form>

                    </div>
                </div>
            </main>

        </div>
    </body>
</html>
