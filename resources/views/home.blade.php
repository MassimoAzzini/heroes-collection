<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Heroes D&D</title>
</head>

<body>

    <div class="container my-4">

        <h1 class="mb-4 text-center text-success fw-bold mt-4">Dungeons & Dragons Characters</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NOME</th>
                    <th scope="col">CA</th>
                    <th scope="col">FOR</th>
                    <th scope="col">DES</th>
                    <th scope="col">COS</th>
                    <th scope="col">INT</th>
                    <th scope="col">SAG</th>
                    <th scope="col">CAR</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                    <tr>
                        <th scope="row" class=" text-capitalize ">{{ $character->name }}</th>
                        <td>{{ $character->armor_class }}</td>
                        <td>{{ $character->strength }}</td>
                        <td>{{ $character->dexterity }}</td>
                        <td>{{ $character->constitution }}</td>
                        <td>{{ $character->intelligence }}</td>
                        <td>{{ $character->wisdom }}</td>
                        <td>{{ $character->charism }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
