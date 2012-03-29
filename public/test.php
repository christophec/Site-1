<?php
/**
 * Fichier d'exemple pour une fonction statique dans une classe
 * @category Application Front
 * @package Main
 * @copyright Moi
 * @author CHRISTOPHE <moi@mail.com>
 * @license Proprio http://monsite.com/license
 * @version Release 1 (2012-3-28)
 *
 */

/**
 * Classe qui sert a rien
 * @category Application Front
 * @package Main
 * @copyright Moi
 * @author CHRISTOPHE <moi@mail.com>
 * @license Proprio http://monsite.com/license
 * @version Release 1 (2012-3-28)
 *
 */
class Main
{
    /**
     * fct qui renvoi l'inverse de son parametre
     * @static
     * @param boolean $test
     * @return boolean
     */
    function test($test = false)
    {
        return !$test;
    }
}