<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Motos #{{ $moto->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição das motinhas: nº {{ $moto->id }}</h1>
            <form method="POST" action="{{ route('motos.update', $moto->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $moto->nome }}">
                </div>

                <div class="mb-3">
                    <label>Marca</label>
                    <input type="text" name="marca" class="form-control" value="{{ $moto->marca }}">
                </div>

                <div class="mb-3">
                    <label>Caracteristicas</label>
                    <input type="text" name="caracteristicas" class="form-control" value="{{ $moto->caracteristicas }}">
                </div>
                <div class="mb-3">
                    <label>Ano</label>
                    <input type="text" name="ano" class="form-control" value="{{ $moto->ano }}">
                </div>
                <div>
                    <input type="submit" value="Atualizar a motinha" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
