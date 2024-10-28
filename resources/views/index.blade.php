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

        <div class="d-flex flex-column vh-100">

            <div class="container">
                <header class="d-flex flex-wrap justify-content-center column-gap-5 py-3">
                    <a href="/" class="d-flex align-items-center me-md-auto link-body-emphasis text-decoration-none">
                        <img src="images/cropped-SciFY_logo_responsive-192x192.png" width="32" height="32" alt="SciFY Logo" class="me-2">
                        <span class="fs-4">SciFY Monitor</span>
                    </a>

                <ul class="nav nav-pills gap-3">
                    <li class="nav-item">
                        <span class="nav-link link-dark px-0"><i class="fa-solid fa-user me-1"></i> {{ auth()->user()->username }}</span>
                    </li>
                    <li>
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="nav-link link-dark px-0"><i class="fa-solid fa-door-closed me-1"></i> Log Out</button>
                        </form>
                    </li>
                </ul>
                </header>
            </div>

            <div class="custom-backdrop flex-grow-1">

                <div class="container">

                    <main class="card my-3 shadow">
                        <div class="card-body">

                            <h5 class="card-title">Assistive Technologies > Users' Activity</h5>

                            @unless(count($records) == 0)

                                <div class="table-responsive small mt-3">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                            <tr class="align-middle">
                                                <th scope="col">Exported Database ID</th>
                                                <th scope="col">Application</th>
                                                <th scope="col">Creator</th>
                                                <th scope="col">Link</th>
                                                <th scope="col">Date of creation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($records as $record)
                                                <tr>
                                                    <td class="text-center">{{ $record->exported_id }}</td>
                                                    <td>{{ $record->application }}</td>
                                                    <td>{{ $record->creator }}</td>
                                                    <td><a href="{{ $record->link }}" target="_blank" rel="noopener noreferrer">{{ $record->link_text }}</a></td>
                                                    <td>{{ $record->date_of_creation }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-2 mx-4">
                                    {{ $records->links() }}
                                </div>

                            @else

                                <p class="card-text text-center p-4">No records found</p>

                            @endunless

                        </div>
                    </main>

                </div>
            </div>
        </div>
    </body>
</html>
