<?php


namespace Apokalipscke\FileMimer\Media;

/**
 * Class Application
 * @package Apokalipscke\FileMimer\Media
 */
class Application extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        'acad' => 'AutoCAD-Dateien (nach NCSA)',
        'applefile' => 'AppleFile-Dateien',
        'astound' => 'Astound-Dateien',
        'dsptype' => 'TSP-Dateien',
        'dxf' => 'AutoCAD-Dateien (nach CERN)',
        'force-download' => 'Registrierungsdateien',
        'futuresplash' => 'Flash Futuresplash-Dateien',
        'gzip' => 'GNU Zip-Dateien',
        'javascript' => 'serverseitige JavaScript-Dateien',
        'json' => 'enthält einen String in JavaScript-Objekt-Notation',
        'listenup' => 'Listenup-Dateien',
        'mac-binhex40' => 'Macintosh Binärdateien',
        'mbedlet' => 'Mbedlet-Dateien',
        'mif' => 'FrameMaker Interchange Format Dateien',
        'msexcel' => 'Microsoft Excel Dateien',
        'mshelp' => 'Microsoft Windows Hilfe Dateien',
        'mspowerpoint' => 'Microsoft Powerpoint Dateien',
        'msword' => 'Microsoft Word Dateien',
        'octet-stream' => 'Nicht näher spezifizierte Daten, z.B. ausführbare Dateien',
        'oda' => 'Oda-Dateien',
        'pdf' => 'PDF-Dateien',
        'postscript' => 'PostScript-Dateien',
        'rtc' => 'RTC-Dateien',
        'rtf' => 'RTF-Dateien',
        'studiom' => 'Studiom-Dateien',
        'toolbook' => 'Toolbook-Dateien',
        'vocaltec-media-desc' => 'Vocaltec Mediadesc-Dateien',
        'vocaltec-media-file' => 'Vocaltec Media-Dateien',
        'vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'Excel (OpenOffice Calc)',
        'vnd.openxmlformats-officedocument.wordprocessingml.document' => 'Word (OpenOffice Writer)',
        'vnd.wap.wmlc' => 'WMLC-Dateien (WAP)',
        'vnd.wap.wmlscriptc' => 'WML-Script-C-dateien (WAP)',
        'xhtml+xml' => 'XHTML-Dateien',
        'xml' => 'XML-Dateien',
        'x-bcpio' => 'BCPIO-Dateien',
        'x-compress' => 'zlib-komprimierte Dateien',
        'x-cpio' => 'CPIO-Dateien',
        'x-csh' => 'C-Shellscript-Dateien',
        'x-director' => 'Macromedia Director-Dateien',
        'x-dvi' => 'DVI-Dateien',
        'x-envoy' => 'Envoy-Dateien',
        'x-gtar' => 'GNU tar-Archivdateien',
        'x-hdf' => 'HDF-Dateien',
        'x-httpd-php' => 'PHP-Dateien',
        'x-latex' => 'LaTeX-Quelldateien',
        'x-macbinary' => 'Macintosh Binärdateien',
        'x-mif' => 'FrameMaker Interchange Format Dateien',
        'x-netcdf' => 'Unidata CDF-Dateien',
        'x-nschat' => 'NS Chat-Dateien',
        'x-sh' => 'Bourne Shellscript-Dateien',
        'x-shar' => 'Shell-Archivdateien',
        'x-shockwave-flash' => 'Flash Shockwave-Dateien',
        'x-sprite' => 'Sprite-Dateien',
        'x-stuffit' => 'Stuffit-Dateien',
        'x-supercard' => 'Supercard-Dateien',
        'x-sv4cpio' => 'CPIO-Dateien',
        'x-sv4crc' => 'CPIO-Dateien mit CRC',
        'x-tar' => 'tar-Archivdateien',
        'x-tcl' => 'TCL Scriptdateien',
        'x-tex' => 'TeX-Dateien',
        'x-texinfo' => 'Texinfo-Dateien',
        'x-troff' => 'TROFF-Dateien (Unix)',
        'x-troff-man' => 'TROFF-Dateien mit MAN-Makros (Unix)',
        'x-troff-me' => 'TROFF-Dateien mit ME-Makros (Unix)',
        'x-troff-ms' => 'TROFF-Dateien mit MS-Makros (Unix)',
        'x-ustar' => 'tar-Archivdateien (Posix)',
        'x-wais-source' => 'WAIS Quelldateien',
        'x-www-form-urlencoded' => 'HTML-Formulardaten an CGI',
        'zip' => 'ZIP-Archivdateien',
    ];
}