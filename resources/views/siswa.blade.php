<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Mapel </title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <h1 class="card-title">
                    <p>ini adalah data mata pelajaran</p>
                </h1>
                <div class="card-body">
                    <br /><br />
                    <ul>
                        @foreach ($mapel as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
