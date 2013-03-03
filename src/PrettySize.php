<?php
function pretty_size($bytes)
{
    if( $bytes < 1024 )
        return $bytes . 'B';
    if( $bytes < 1024 * 1024 )
        return ((int) $bytes / 1024) . 'KB';
    if( $bytes < 1024 * 1024 * 1024 )
        return ((int) $bytes / 1024 / 1024) . 'MB';
    if( $bytes < 1024 * 1024 * 1024 * 1024 )
        return ((int) $bytes / 1024 / 1024 / 1024) . 'GB';
    return ((int) $bytes / 1024 / 1024) . 'MB';
}
