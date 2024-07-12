<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Uso de Sala de Juntas</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Pacifico&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Registro Uso de Sala de Juntas</h1>
        <p>Este formulario no es un apartado de uso de la sala de juntas. Solo es un registro para tomar la información de las personas que usan la sala de juntas y ver cómo se podría mejorar, ordenar u organizar de mejor manera. La sala de juntas está en el openlab de la carrera de ISND.</p>
        <form action="process_form.php" method="POST">
            <div class="form-group">
                <div>
                    <label for="idiest">ID IEST:  <img src="./media/q.png" title="Escribir su IDIEST" width="15px"></label>
                    <input type="text" id="idiest" name="idiest" required>
                </div>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div>
                    <label for="semestre">Semestre:</label>
                    <input type="text" id="semestre" name="semestre" required>
                </div>
                <div>
                    <label for="hora_entrada">Hora de entrada:</label>
                    <input type="time" id="hora_entrada" name="hora_entrada" required>
                </div>
                <div>
                    <label for="hora_salida">Hora de salida:</label>
                    <input type="time" id="hora_salida" name="hora_salida" required>
                </div>
                <div>
                    <label for="motivo">Motivo:</label>
                    <select id="motivo" name="motivo" required>
                        <option value="estudio">Estudio</option>
                        <option value="hora libre">Hora Libre</option>
                        <option value="proyecto">Proyecto</option>
                        <option value="junta">Junta</option>
                    </select>
                </div>
                <div class="full-width">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" required></textarea>
                </div>
                <div>
                    <label for="uso_tele">Uso de la tele:</label>
                    <select id="uso_tele" name="uso_tele" required>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div>
                    <label for="uso_multicontacto">Uso del multicontacto:</label>
                    <select id="uso_multicontacto" name="uso_multicontacto" required>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div>
                    <label for="uso_ethernet">Uso del puerto Ethernet:</label>
                    <select id="uso_ethernet" name="uso_ethernet" required>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div>
                    <label for="uso_plumones">Uso de los plumones:</label>
                    <select id="uso_plumones" name="uso_plumones" required>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div>
                    <label for="cable_hdmi">Cable HDMI:</label>
                    <select id="cable_hdmi" name="cable_hdmi" required>
                        <option value="sala de juntas">Sala de Juntas</option>
                        <option value="propio">Propio</option>
                    </select>
                </div>
                <div>
                    <label for="cable_ethernet">Cable Ethernet:</label>
                    <select id="cable_ethernet" name="cable_ethernet" required>
                        <option value="sala de juntas">Sala de Juntas</option>
                        <option value="propio">Propio</option>
                    </select>
                </div>
                <div class="full-width">
                    <label for="comentarios">Comentarios:</label>
                    <textarea id="comentarios" name="comentarios"></textarea>
                </div>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
