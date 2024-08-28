<!DOCTYPE html>
<html lang="es">

<head>
<title> DIEGO PAPSOTE MARTINEZ GARCIA </title>
<meta name = "viewport" content="width=device-width, initial-scale=1" />
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery-3.7.1.min.js" ></script>
<script src="js/bootstrap.bundle.min.js" ></script>
</head>

<body>
<h1> Hola nena </h1>
<div class= "container-fluid">
    <div class= "contenedor">
        <div class= "row align-items-center h-100">
            <div class= "col"></div>
            <div class= "col">
                <div class= "align-items-center">
                    <p> Diego Fernando Martínez García </p>
                    <form name= "frm_login" id= "frm_login" action="core/process.php"></form>
                    <img src="https://i.ytimg.com/vi/Ezqc0_Ym0NY/maxresdefault.jpg" height="400px" width="700px">
                    <table>
                        <thead>
                            <tr>
                                <th class= "parrafo_centrado">Inicio de sesion: </th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class= "form-row">
                                        <div class= "form_group col-mf-6">
                                            <label for= "txt_usuario">USUARIO: </label>
                                            <input type= "text" class= "form-control" name= "txt_usuario" id= "txt_usuario" maxlength= "15" aria-describedby= "txt_user_help" required/>
                                            <small id="txt_user_help" class= "form-text text muted">El usuario es obligatorio</small>
                                        </div>
                                        <div class= "form-group col-md-6">
                                            <label for= "txt_password">CONTRASEÑA: </label>
                                            <input type= "password" class="form-control" name="txt_password" id="txt_password" maxlength= "15" aria-describedby= "txt_password_help" required/>
                                            <small id="txt_password_help" class= "form-text text muted">la contraseña es obligatoria</small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <button type="button" class=" btn btn-primary" name="btn_entrar" id="bnt_entrar"></button>
                                    <div class="mensaje"></div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</body>

</html>