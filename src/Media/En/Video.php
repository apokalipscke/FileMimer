<?php


namespace Apokalipscke\FileMimer\Media\En;


use Apokalipscke\FileMimer\Media\AbstractMedia;

/**
 * Class Video
 * @package Apokalipscke\FileMimer\Media\En
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class Video extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        '3gpp' => '3GP',
        '3gpp2' => '3GP2',
        'x-msvideo' => 'Audio Video Interleave (AVI)',
        'vnd.dece.hd' => 'DECE High Definition Video',
        'vnd.dece.mobile' => 'DECE Mobile Video',
        'vnd.uvvu.mp4' => 'DECE MP4',
        'vnd.dece.pd' => 'DECE PD Video',
        'vnd.dece.sd' => 'DECE SD Video',
        'vnd.dece.video' => 'DECE Video',
        'vnd.fvt' => 'FAST Search & Transfer ASA',
        'x-f4v' => 'Flash Video',
        'x-flv' => 'Flash Video',
        'x-fli' => 'FLI/FLC Animation Format',
        'h261' => 'H.261',
        'h263' => 'H.263',
        'h264' => 'H.264',
        'jpm' => 'JPEG 2000 Compound Image File Format',
        'jpeg' => 'JPGVideo',
        'x-m4v' => 'M4v',
        'x-ms-asf' => 'Microsoft Advanced Systems Format (ASF)',
        'vnd.ms-playready.media.pyv' => 'Microsoft PlayReady Ecosystem Video',
        'x-ms-wm' => 'Microsoft Windows Media',
        'x-ms-wmx' => 'Microsoft Windows Media Audio/Video Playlist',
        'x-ms-wmv' => 'Microsoft Windows Media Video',
        'x-ms-wvx' => 'Microsoft Windows Media Video Playlist',
        'mj2' => 'Motion JPEG 2000',
        'vnd.mpegurl' => 'MPEG Url',
        'mpeg' => 'MPEG Video',
        'mp4' => 'MPEG-4 Video',
        'ogg' => 'Ogg Video',
        'webm' => 'Open Web Media Project – Video',
        'quicktime' => 'Quicktime Video',
        'x-sgi-movie' => 'SGI Movie',
        'vnd.vivo' => 'Vivo',
    ];
}