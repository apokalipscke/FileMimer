<?php


namespace Apokalipscke\FileMimer\Media\En;

use Apokalipscke\FileMimer\Media\AbstractMedia;

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
        'adpcm' => 'Adaptive differential pulse-code modulation',
        'x-aac' => 'Advanced Audio Coding (AAC)',
        'x-aiff' => 'Audio Interchange File Format',
        'vnd.dece.audio' => 'DECE Audio',
        'vnd.digital-winds' => 'Digital Winds Music',
        'vnd.dra' => 'DRA Audio',
        'vnd.dts' => 'DTS Audio',
        'vnd.dts.hd' => 'DTS High Definition Audio',
        'vnd.rip' => 'Hit’n’Mix',
        'vnd.lucent.voice' => 'Lucent Voice',
        'x-mpegurl' => 'M3U (Multimedia Playlist)',
        'vnd.ms-playready.media.pya' => 'Microsoft PlayReady Ecosystem',
        'x-ms-wma' => 'Microsoft Windows Media Audio',
        'x-ms-wax' => 'Microsoft Windows Media Audio Redirector',
        'midi' => 'MIDI – Musical Instrument Digital Interface',
        'mpeg' => 'MPEG Audio',
        'mp4' => 'MPEG-4 Audio',
        'vnd.nuera.ecelp4800' => 'Nuera ECELP 4800',
        'vnd.nuera.ecelp7470' => 'Nuera ECELP 7470',
        'vnd.nuera.ecelp9600' => 'Nuera ECELP 9600',
        'ogg' => 'Ogg Audio',
        'webm' => 'Open Web Media Project – Audio',
        'x-pn-realaudio' => 'Real Audio Sound',
        'x-pn-realaudio-plugin' => 'Real Audio Sound',
        'basic' => 'Sun Audio – Au file format',
        'x-wav' => 'Waveform Audio File Format (WAV)',
    ];
}