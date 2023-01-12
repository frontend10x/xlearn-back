<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Asignación de cursos</title>
</head>
<body style="text-align: center">

    <img src="https://xlearn.com.co/wp-content/uploads/2021/10/cropped-logo-xlearn.png" alt="logo-xleran">

    <p>Hola! este es un correo de notificacion de pruebas.</p>
    <p>Le informamos que su lider ha creado la ruta de cursos a desarrollar</p>
    
    <table>
        <td align="center" width="250" height="40" bgcolor="#5887f5" style="border-radius:5px;color:#ffffff;display:block">
            <a href="{{ $urlConfimation }}" id="activate" style="color:#ffffff;font-size:16px;font-family:Helvetica,sans-serif;font-size:18px;text-decoration:none;line-height:40px;width:100%;display:inline block" target="_blank" data-saferedirecturl="{{$urlConfimation}}">
                Iniciar sesión            
            </a>
        </td>
    </table>
    <br>
    Si no funciona, copie y pegue el siguiente enlace en un navegador: <br>{{ $urlConfimation }}.

</body>
</html>