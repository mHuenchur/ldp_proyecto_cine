<?php
//PARA TENER A LA FECHA Y TIEMPO COMO VALORES SEPARADOS DEL DATETIME
//SELECT DATE(fecha_inicio) as mydate, TIME(fecha_inicio) as mytime FROM `horario`; 

//LO MISMO SIN EL NOMBRE DE VARIABLE
//SELECT DATE(column), TIME(column) FROM table

//SELECT CONCAT(usuario.nombre,', ',apellido) AS usuario, usuarioID, nombreUsuario, clave, correo, perfil.nombre AS perfil FROM `usuario` INNER JOIN perfil ON usuario.usuarioID = perfil.perfilID WHERE `nombreUsuario` = "mHuenchur";
