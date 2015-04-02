<?php

    /**
     * ./ajax.date.php
     * Example of JSON data required by Zabuto Calendar
     * https://github.com/zabuto/calendar
     */
    
    /**
     * The JSON data has to be an array of events in a specified format.
     * {date: yyyy-mm-dd, badge: boolean, title: string, body: string: footer: string, classname: string}
     */

    $array_date = array(
        array(
            'date' => '2015-04-01',
            'badge' => true,
            'title' => 'April Fools Day',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut orci metus, interdum non ipsum nec, vulputate euismod metus. Morbi eget sem sed orci interdum lacinia quis ac orci. Mauris pretium lorem non leo faucibus, id semper nisl placerat. Nulla maximus tempor metus, a pretium velit tempus et',
            'footer' => '',
            'classname' => ''
        ),
        array(
            'date' => '2015-04-02',
            'badge' => true,
            'title' => 'Post-April Fools Day',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut orci metus, interdum non ipsum nec, vulputate euismod metus. Morbi eget sem sed orci interdum lacinia quis ac orci. Mauris pretium lorem non leo faucibus, id semper nisl placerat. Nulla maximus tempor metus, a pretium velit tempus et',
            'footer' => '',
            'classname' => ''
        ),
    );

    $json = json_encode( $array_date );

    /*
    echo '<pre>';
    print_r( $json );
    echo '</pre>';
    */

    echo $json;

?>