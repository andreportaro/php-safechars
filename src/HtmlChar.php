<?php

namespace HtmlChar;

/**
 * Substitui caracteres especiais por sua versão segura para web.
 **/
class HtmlChar
{

    protected static $arrTable =[
'Á'=> '&Aacute;',
'á'=> '&aacute;',
'Â'=> '&Acirc;',
'â'=> '&acirc;',
'À'=> '&Agrave;',
'à'=> '&agrave;',
'Å'=> '&Aring;',
'å'=> '&aring;',
'Ã'=> '&Atilde;',
'ã'=> '&atilde;',
'Ä'=> '&Auml;',
'ä'=> '&auml;',
'Æ'=> '&AElig;',
'æ'=> '&aelig;',
'É'=> '&Eacute;',
'é'=> '&eacute;',
'Ê'=> '&Ecirc;',
'ê'=> '&ecirc;',
'È'=> '&Egrave;',
'è'=> '&egrave;',
'Ë'=> '&Euml;',
'ë'=> '&euml;',
'Ğ'=> '&ETH;',
'ğ'=> '&eth;',
'Í'=> '&Iacute;',
'í'=> '&iacute;',
'Î'=> '&Icirc;',
'î'=> '&icirc;',
'Ì'=> '&Igrave;',
'ì'=> '&igrave;',
'Ï'=> '&Iuml;',
'ï'=> '&iuml;',
'Ó'=> '&Oacute;',
'ó'=> '&oacute;',
'Ô'=> '&Ocirc;',
'ô'=> '&ocirc;',
'Ò'=> '&Ograve;',
'ò'=> '&ograve;',
'Ø'=> '&Oslash;',
'ø'=> '&oslash;',
'Õ'=> '&Otilde;',
'õ'=> '&otilde;',
'Ö'=> '&Ouml;',
'ö'=> '&ouml;',
'Ú'=> '&Uacute;',
'ú'=> '&uacute;',
'Û'=> '&Ucirc;',
'û'=> '&ucirc;',
'Ù'=> '&Ugrave;',
'ù'=> '&ugrave;',
'Ü'=> '&Uuml;',
'ü'=> '&uuml;',
'Ç'=> '&Ccedil;',
'ç'=> '&ccedil;',
'Ñ'=> '&Ntilde;',
'ñ'=> '&ntilde;',
'&'=> '&amp;',
'"'=> '&quot;',
'®'=> '&reg;',
'©'=> '&copy;',
'İ'=> '&Yacute;',
'ı'=> '&yacute;',
'Ş'=> '&THORN;',
'ş'=> '&thorn;',
'ß'=> '&szlig;',
//'<'=> '&lt;',
//'>'=> '&gt;',
];

    public static function filter($str){
        return str_replace(array_keys(self::$arrTable),array_values(self::$arrTable), $str);
    }
}