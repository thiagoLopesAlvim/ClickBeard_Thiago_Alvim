<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
</head>

<body>
    <form action="/agendar" method="POST">
        @csrf
        <label for="barbeiro">Barbeiro:</label>
        <select name="barbeiro_id" id="barbeiro">
            <!-- Popule com barbeiros -->
        </select>
        <label for="especialidade">Especialidade:</label>
        <select name="especialidade_id" id="especialidade">
            @foreach($especialidades as $especialidade)
            <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
            @endforeach
        </select>
        <label for="data_hora">Data e Hora:</label>
        <input type="datetime-local" name="data_hora" id="data_hora" required>
        <button type="submit">Agendar</button>
    </form>
</body>

</html>