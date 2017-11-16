<?php

if( !function_exists( 'cache_long_ttl' ))
{
    function cache_long_ttl()
    {
        return config( 'constants.cache.ttl.long' );
    }
}

if( !function_exists( 'cache_medium_ttl' ))
{
    function cache_medium_ttl()
    {
        return config( 'constants.cache.ttl.medium' );
    }
}
