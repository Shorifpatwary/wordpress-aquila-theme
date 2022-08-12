<?php
$excerpt = wp_strip_all_tags(get_the_excerpt());
        $excerpt = substr( $excerpt , 0 , $trim_character_count );
        // striping uncomplete charecter from the last
        $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
        // concatinate excerpt text with '[...]' this 
        $excerpt .= ' [...]';
        // print this 
        echo $excerpt;