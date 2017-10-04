<?php

if( !function_exists( 'cache_long_ttl' ))
{
    function cache_long_ttl()
    {
        return config( 'constants.cache.ttl.long' );
    }
}
