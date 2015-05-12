<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css-ajfc/hotspot/ajfc.hotspot.css">

<!--<link rel="stylesheet" href="/website/ajfc/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/website/ajfc/css/bootstrap-custom-wcm/bootstrap.css">
<link rel="stylesheet" href="/website/ajfc/css/font-awesome.min.css">
<link rel="stylesheet" href="/website/ajfc/css/style.css">
<link rel="stylesheet" href="/website/ajfc/css/main.css">

<script src="/website/ajfc/js/zabuto_calendar.min.js"></script>
<script src="/website/ajfc/js/javascripts.js"></script>

<?php echo $this->areablock(
    'halaman-tasbih',
    array(
        'allowed' => array(
            'sudah-submit',
            'pendaftaran',
            'daftar-peserta',
            'thanks-page',
            'expire-page',
            'home-tasbih',
            'table-text',
            'table-li',
            'proses-seleksi',
            'galeri-ajfc',
            'cari-agen-syariah',
            'inquiry-form',
            'tasbih-news'
        )
    )
);
?>
