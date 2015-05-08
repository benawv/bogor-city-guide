<style>

    #agent-locator
    {
        position: relative;
        max-width: 100% !important;
        min-width: 100% !important;
        width: 100% !important;
        float: none;
    }

    #agent-locator #maparea
    {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        height: 480px;
    }

    #agent-locator .searchbox
    {
        margin-bottom: 20px;
    }

    #agent-locator .searchbox > input[type="search"],
    #agent-locator .searchbox > input[type="text"]
    {
        width: 100%;
        border: solid 1px #ddd;
        font-size: larger;
        padding: 12px 24px;
    }

</style>


<div class="wrapper clearfix">

    <div id="agent-locator">
        <div class="searchbox">
            <input type="search" name="search" id="search" placeholder="Cari agen terdekat dari lokasi anda">
        </div><!--/ .searchbox -->
        <div id="maparea"></div>
    </div><!--/ #agent-locator -->

    <?php //echo $this->area("mapArea", array("type" => "map-point")); ?>
    <!--
    <div id="map-shortcut">
        <h3>Pilih Jenis Kantor:</h3>
            <select class="combo kantor">
                <option value="">Pilih Semua</option>
            <?php	$jenis = Object_MarketingOfficeJenis::getList(array("orderKey" => array("jenis"), "order" => array("asc")));
                foreach($jenis as $row)
                {
            ?>
                    <option value="<?php echo $row->getId();?>"><?php echo $row->getJenis();?></option>
            <?php 	} ?>
            </select>

        <h3>Pilih wilayah:</h3>

            <select class="combo wilayah">
              <option value="-2.6806246,115.8034375,5,">Pilih Semua</option>
              <?php	$wilayah = Object_MarketingOfficeWilayah::getList(array("orderKey" => array("namaWilayah"), "order" => array("asc")));
                foreach($wilayah as $row)
                {
            ?>
                    <option value="<?php echo $row->getLatitude().",".$row->getLongitude().",".$row->getRuangLingkup().",".$row->getId();?>"><?php echo $row->getNamaWilayah();?></option>
            <?php 	} ?>
            </select>
    </div>
</div>
-->
