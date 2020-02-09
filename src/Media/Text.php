<?php


namespace Apokalipscke\FileMimer\Media;


class Text extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        'x-asm' => 'Assembler Source File',
        'plain-bas' => 'BAS Partitur Format',
        'x-c' => 'C Source File',
        'css' => 'Cascading Style Sheets (CSS)',
        'csv' => 'Comma-Seperated Values',
        'comma-separated-values' => 'Comma-Seperated Values',
        'vnd.curl' => 'Curl – Applet',
        'vnd.curl.dcurl' => 'Curl – Detached Applet',
        'vnd.curl.mcurl' => 'Curl – Manifest File',
        'vnd.curl.scurl' => 'Curl – Source Code',
        'vnd.fmi.flexstor' => 'FLEXSTOR',
        'x-fortran' => 'Fortran Source File',
        'vnd.graphviz' => 'Graphviz',
        'html' => 'HyperText Markup Language (HTML)',
        'calendar' => 'iCalendar',
        'vnd.in3d.3dml' => 'In3D – 3DML',
        'vnd.in3d.spot' => 'In3D – 3DML',
        'vnd.sun.j2me.app-descriptor' => 'J2ME App Descriptor',
        'x-java-source,java' => 'Java Source File',
        'javascript' => 'JavaScript Source File',
        'vnd.fly' => 'mod_fly / fly.cgi',
        'n3' => 'Notation3',
        'x-pascal' => 'Pascal Source File',
        'prs.lines.tag' => 'PRS Lines Tag',
        'richtext' => 'Rich Text Format (RTF)',
        'x-setext' => 'Setext',
        'sgml' => 'Standard Generalized Markup Language (SGML)',
        'tab-separated-values' => 'Tab Seperated Values',
        'plain' => 'Text File',
        'troff' => 'troff',
        'turtle' => 'Turtle (Terse RDF Triple Language)',
        'uri-list' => 'URI Resolution Services',
        'x-uuencode' => 'UUEncode',
        'x-vcalendar' => 'vCalendar',
        'x-vcard' => 'vCard',
        'vnd.wap.wml' => 'Wireless Markup Language (WML)',
        'vnd.wap.wmlscript' => 'Wireless Markup Language Script (WMLScript)',
        'yaml' => 'YAML Ain’t Markup Language / Yet Another Markup Language',
    ];
}