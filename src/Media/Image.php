<?php


namespace Apokalipscke\FileMimer\Media;

/**
 * Class Image
 * @package Apokalipscke\FileMimer\Media
 */
class Image extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        'bmp' => 'Windows Bitmap-Datei',
        'x-bmp' => 'Windows Bitmap-Datei',
        'x-ms-bmp' => 'Windows Bitmap-Datei',
        'cis-cod' => 'CIS-Cod-Dateien',
        'cmu-raster' => 'CMU-Raster-Dateien',
        'fif' => 'FIF-Dateien',
        'gif' => 'GIF-Dateien',
        'ief' => 'IEF-Dateien',
        'jpeg' => 'JPEG-Dateien',
        'png' => 'PNG-Dateien',
        'svg+xml' => 'SVG-Dateien',
        'tiff' => 'TIFF-Dateien',
        'vasa' => 'Vasa-Dateien',
        'vnd.wap.wbmp' => 'Bitmap-Dateien (WAP)',
        'x-freehand' => 'Freehand-Dateien',
        'x-icon' => 'Icon-Dateien (z.B. Favoriten-Icons)',
        'x-portable-anymap' => 'PBM Anymap Dateien',
        'x-portable-bitmap' => 'PBM Bitmap Dateien',
        'x-portable-graymap' => 'PBM Graymap Dateien',
        'x-portable-pixmap' => 'PBM Pixmap Dateien',
        'x-rgb' => 'RGB-Dateien',
        'x-windowdump' => 'X-Windows Dump',
        'x-xbitmap' => 'XBM-Dateien',
        'x-xpixmap' => 'XPM-Dateien',
    ];
}