<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 8px 8px;
            border: 1px solid #dee2e6;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #495057;
            display: block;
            margin-bottom: 5px;
        }
        .field-value {
            background-color: white;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .message-field {
            background-color: white;
            padding: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            white-space: pre-wrap;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>💼 Nuevo Mensaje de Contacto</h1>
        <p>Álvaro Diego Prendes - Portafolio</p>
    </div>

    <div class="content">
        <div class="field">
            <span class="field-label">👤 Nombre:</span>
            <div class="field-value">{{ $data['name'] }}</div>
        </div>

        <div class="field">
            <span class="field-label">📧 Email:</span>
            <div class="field-value">
                <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
            </div>
        </div>

        <div class="field">
            <span class="field-label">📋 Asunto:</span>
            <div class="field-value">{{ $data['subject'] }}</div>
        </div>

        <div class="field">
            <span class="field-label">💬 Mensaje:</span>
            <div class="message-field">{{ $data['message'] }}</div>
        </div>
    </div>

    <div class="footer">
        <p>Este mensaje fue enviado desde tu portafolio web.</p>
        <p><strong>Fecha:</strong> {{ date('d/m/Y H:i:s') }}</p>
        <p>
            <a href="https://portafolio-alvaro-prendes.up.railway.app">
                Visitar portafolio
            </a>
        </p>
    </div>
</body>
</html>
