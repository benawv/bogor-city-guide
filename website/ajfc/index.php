<?php

    /**
     * ./index.php
     * Created by Falmesino Abdul Hamid(http://be.net/falmesino)
     */

    $project_name  = 'Allianz Junior Football Camp';
    $page          = 'home';

    if( isset( $_GET[ 'p' ] ) ) $page = trim( strtolower( $_GET[ 'p' ] ) );

    $include_dir    = './includes/';
    $include_ext    = '.php';
    $include_file   = $include_dir . 'page-' . $page . $include_ext;
    $include_404    = $include_dir . 'page-404' . $include_ext;
    $page_title     = ucwords( str_replace( '-', ' ', $page ) ) . ' | ' . $project_name;

    if( !file_exists( $include_file ) ) $include_file = $include_404;
    
    include_once( $include_dir . 'header' . $include_ext );

    include_once( $include_file );

    include_once( $include_dir . 'footer' . $include_ext );

?>