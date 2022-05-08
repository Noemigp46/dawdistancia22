<?php
/**
 * @author Noemí Guerrero Pintado
 * @version 1.0
 * {@internal ESta información no aparecerá en la documentación}
 */

/**
 * Función media
 *
 * Esta función realizará una media entre las tres notas introducidas.
 * Devolverá la media aritmética de las notas del alumno.
 *
 * @param int $nota1 Primera nota del alumno
 * @param int $nota2 Segunda nota del alumno
 * @param int $nota3 Tercera nota del alumno
 *
 * @return int Nota media del alumno
 *
 */
function media ($nota1, $nota2, $nota3){
        $notaMedia = ($nota1+$nota3+$nota3)/3;
        return $notaMedia;
}

/**
 * Función resumen
 *
 * Esta función proporcionará un resumen de la información del alumno.
 * Recibirá el nombre y apellidos del alumno, así como su nota
 * y devolverá una cadena de texto estándar para estos datos:
 * El alumno XXXX, XXXX XXXX tiene una nota media de XXXX
 *
 * @param string $nombre Nombre del alumno
 * @param string $apellido Apellido del alumno
 * @param int $nota Nota media del alumno
 *
 * @return string Cadena resumen de la información del alumno
 *
 */
function resumen ($nombre, $apellido, $nota){
        $cadena = "El alumno $nombre, $apellido tiene una nota media de $nota";
        return $cadena;
}
?>
