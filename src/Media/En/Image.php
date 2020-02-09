<?php


namespace Apokalipscke\FileMimer\Media\En;

use Apokalipscke\FileMimer\Media\AbstractMedia;

/**
 * Class Image
 * @package Apokalipscke\FileMimer\Media
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class Image extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        'vnd.dxf' => 'AutoCAD DXF',
        'bmp' => 'Bitmap Image File',
        'prs.btif' => 'BTIF',
        'vnd.dvb.subtitle' => 'Close Captioning – Subtitle',
        'x-cmu-raster' => 'CMU Image',
        'cgm' => 'Computer Graphics Metafile',
        'x-cmx' => 'Corel Metafile Exchange (CMX)',
        'vnd.dece.graphic' => 'DECE Graphic',
        'vnd.djvu' => 'DjVu',
        'vnd.dwg' => 'DWG Drawing',
        'vnd.fujixerox.edmics-mmr' => 'EDMICS 2000',
        'vnd.fujixerox.edmics-rlc' => 'EDMICS 2000',
        'vnd.xiff' => 'eXtended Image File Format (XIFF)',
        'vnd.fst' => 'FAST Search & Transfer ASA',
        'vnd.fastbidsheet' => 'FastBid Sheet',
        'vnd.fpx' => 'FlashPix',
        'vnd.net-fpx' => 'FlashPix',
        'x-freehand' => 'FreeHand MX',
        'g3fax' => 'G3 Fax Image',
        'gif' => 'Graphics Interchange Format',
        'x-icon' => 'Icon Image',
        'ief' => 'Image Exchange Format',
        'jpeg' => 'JPEG Image',
        'vnd.ms-modi' => 'Microsoft Document Imaging Format',
        'ktx' => 'OpenGL Textures (KTX)',
        'x-pcx' => 'PCX Image',
        'vnd.adobe.photoshop' => 'Photoshop Document',
        'x-pict' => 'PICT Image',
        'x-portable-anymap' => 'Portable Anymap Image',
        'x-portable-bitmap' => 'Portable Bitmap Format',
        'x-portable-graymap' => 'Portable Graymap Format',
        'png' => 'Portable Network Graphics (PNG)',
        'x-portable-pixmap' => 'Portable Pixmap Format',
        'svg+xml' => 'Scalable Vector Graphics (SVG)',
        'x-rgb' => 'Silicon Graphics RGB Bitmap',
        'tiff' => 'Tagged Image File Format',
        'vnd.wap.wbmp' => 'WAP Bitamp (WBMP)',
        'webp' => 'WebP Image',
        'x-xbitmap' => 'X BitMap',
        'x-xpixmap' => 'X PixMap',
        'x-xwindowdump' => 'X Window Dump',
    ];
}