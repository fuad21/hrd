<?php
    function set_active($uri, $output = 'active')
    {
        if (is_array($uri)) {
            foreach ($uri as $u){
                if (Route::is($u)){
                    return $output;
                }
            }
        }else{
            if(route::is($uri)){
                return $output;
            }
        }
    }
?>