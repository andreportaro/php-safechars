<?php

namespace HtmlChar;

/**
 * Substitui caracteres especiais por sua vers�o segura para web.
 **/
class HtmlChar
{

    protected static $arrTable =[
'�'=> '&Aacute;',
'�'=> '&aacute;',
'�'=> '&Acirc;',
'�'=> '&acirc;',
'�'=> '&Agrave;',
'�'=> '&agrave;',
'�'=> '&Aring;',
'�'=> '&aring;',
'�'=> '&Atilde;',
'�'=> '&atilde;',
'�'=> '&Auml;',
'�'=> '&auml;',
'�'=> '&AElig;',
'�'=> '&aelig;',
'�'=> '&Eacute;',
'�'=> '&eacute;',
'�'=> '&Ecirc;',
'�'=> '&ecirc;',
'�'=> '&Egrave;',
'�'=> '&egrave;',
'�'=> '&Euml;',
'�'=> '&euml;',
'�'=> '&ETH;',
'�'=> '&eth;',
'�'=> '&Iacute;',
'�'=> '&iacute;',
'�'=> '&Icirc;',
'�'=> '&icirc;',
'�'=> '&Igrave;',
'�'=> '&igrave;',
'�'=> '&Iuml;',
'�'=> '&iuml;',
'�'=> '&Oacute;',
'�'=> '&oacute;',
'�'=> '&Ocirc;',
'�'=> '&ocirc;',
'�'=> '&Ograve;',
'�'=> '&ograve;',
'�'=> '&Oslash;',
'�'=> '&oslash;',
'�'=> '&Otilde;',
'�'=> '&otilde;',
'�'=> '&Ouml;',
'�'=> '&ouml;',
'�'=> '&Uacute;',
'�'=> '&uacute;',
'�'=> '&Ucirc;',
'�'=> '&ucirc;',
'�'=> '&Ugrave;',
'�'=> '&ugrave;',
'�'=> '&Uuml;',
'�'=> '&uuml;',
'�'=> '&Ccedil;',
'�'=> '&ccedil;',
'�'=> '&Ntilde;',
'�'=> '&ntilde;',
'&'=> '&amp;',
'"'=> '&quot;',
'�'=> '&reg;',
'�'=> '&copy;',
'�'=> '&Yacute;',
'�'=> '&yacute;',
'�'=> '&THORN;',
'�'=> '&thorn;',
'�'=> '&szlig;',
//'<'=> '&lt;',
//'>'=> '&gt;',
];

    public static function filter($str){
        return str_replace(array_keys(self::$arrTable),array_values(self::$arrTable), $str);
    }
}