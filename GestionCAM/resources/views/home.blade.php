<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dojo-panel {
            border: 1px solid black;
            border-radius: 15px;
            text-align: center;
            padding: 20px;
            margin: 20px;
        }
    </style>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="text-center my-4">
            <img src="{{ asset('images/Kanji-Aikido.png') }}" alt="Kanji Aikido" class="img-fluid" style="width: 100px; height: 100px;">
        </div>
        <div class="row">
            @foreach($dojos as $dojo)
                <div class="col-md-4 dojo-panel">
                    <img src="{{ asset('storage/' . $dojo->img) }}" alt="Logo Dojo" class="img-fluid" style="width: 50px; height: 50px;">
                    <h3>{{ $dojo->nombre }}</h3>
                    <p><strong>Dojo-Cho:</strong> {{ $dojo->dojicho->name }} {{ $dojo->dojicho->apellido1 }}</p>
                    <p><strong>Shihan:</strong> {{ $dojo->shihan->name }} {{ $dojo->shihan->apellido1 }}</p>
                    <p><strong>Alumnos:</strong> {{ $dojo->alumnos->count() }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>