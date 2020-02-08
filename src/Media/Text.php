<?php


namespace Apokalipscke\FileMimer\Media;


class Text extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        'comma-separated-values' => 'kommaseparierte Datendateien',
        'css' => 'CSS Stylesheet-Dateien',
        'html' => 'HTML-Dateien',
        'javascript' => 'JavaScript-Dateien',
        'plain' => 'reine Textdateien',
        'richtext' => 'Richtext-Dateien',
        'rtf' => 'RTF-Dateien',
        'tab-separated-values' => 'tabulator-separierte Datendateien',
        'vnd.wap.wml' => 'WML-Dateien (WAP)',
        'vnd.wap.wmlscript' => 'WML-Scriptdateien (WAP)',
        'xml' => 'XML-Dateien',
        'xml-external-parsed-entity' => 'extern geparste XML-Dateien',
        'x-setext' => 'SeText-Dateien',
        'x-sgml' => 'SGML-Dateien',
        'x-speech' => 'Speech-Dateien',
    ];
}