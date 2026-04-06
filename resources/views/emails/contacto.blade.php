<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { padding: 20px; border: 1px solid #eee; border-radius: 10px; }
        h1 { color: #2563eb; }
        .label { font-bold: bold; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Tenés un nuevo mensaje de contacto!</h1>
        <p><span class="label">Nombre:</span> {{ $data['nombre'] }}</p>
        <p><span class="label">Email:</span> {{ $data['email'] }}</p>
        <hr>
        <p><span class="label">Mensaje:</span></p>
        <p>{{ $data['mensaje'] }}</p>
    </div>
</body>
</html>