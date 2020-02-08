<?php


namespace Apokalipscke\FileMimer\Media;


class Video extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        'mpeg' => 'MPEG-Videodateien',
        'mp4' => 'MP4-Videodateien',
        'ogg' => 'OGG-Dateien',
        'quicktime' => 'Quicktime-Dateien',
        'vnd.vivo' => 'Vivo-Dateien',
        'webm' => 'Webm-Videodateien',
        'x-msvideo' => 'Microsoft AVI-Dateien',
        'x-sgi-movie' => 'Movie-Dateien',
    ];
}