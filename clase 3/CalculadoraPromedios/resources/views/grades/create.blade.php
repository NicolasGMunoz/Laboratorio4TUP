<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Calificaciones</title>
</head>
<body>
    <h1>Ingresar Calificaciones</h1>
    <form action="{{ route('grades.store') }}" method="POST">
        @csrf
        <div id="grades">
            <div>
                <label for="grades[0]">Calificación 1:</label>
                <input type="number" name="grades[]" step="0.01" required>
            </div>
        </div>
        <button type="button" onclick="addGrade()">Agregar otra calificación</button>
        <br><br>
        <button type="submit">Calcular Promedio</button>
    </form>

    <script>
        function addGrade() {
            const gradesDiv = document.getElementById('grades');
            const gradeCount = gradesDiv.children.length;

            const newGrade = document.createElement('div');
            newGrade.innerHTML = `
                <label for="grades[${gradeCount}]">Calificación ${gradeCount + 1}:</label>
                <input type="number" name="grades[]" step="0.01" required>
            `;
            gradesDiv.appendChild(newGrade);
        }
    </script>
</body>
</html>
