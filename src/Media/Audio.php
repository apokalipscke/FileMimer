<?php


namespace Apokalipscke\FileMimer\Media;

/***
 * Class Audio
 * @package Apokalipscke\FileMimer\Media
 */
class Audio extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        'basic' => 'Sound-Dateien',
        'echospeech' => 'Echospeed-Dateien',
        'mpeg' => 'MP3-Dateien',
        'mp4' => 'MP4-Dateien',
        'ogg' => 'OGG-Dateien',
        'tsplayer' => 'TS-Player-Dateien',
        'voxware' => 'Vox-Dateien',
        'wav' => 'WAV-Dateien',
        'x-aiff' => 'AIFF-Sound-Dateien',
        'x-dspeeh' => 'Sprachdateien',
        'x-midi' => 'MIDI-Dateien',
        'x-mpeg' => 'MPEG-Audiodateien',
        'x-pn-realaudio' => 'RealAudio-Dateien',
        'x-pn-realaudio-plugin' => 'RealAudio-Plugin-Dateien',
        'x-qt-stream' => 'Quicktime-Streaming-Dateien',
    ];
}