<?php
    if($this->artikel->o_className == "tasbihNews")
    {
?>
        <h3>
            <?php
                echo $this->artikel->getTitle();
            ?>
        </h3>
        <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $this->artikel->o_key."-".$this->artikel->o_id?>"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
<?php
    }
    
    elseif($this->artikel->o_className == "communityTips")
    {
?>
        <h3>
            <?php
                echo $this->artikel->getTitle();
            ?>
        </h3>
        <a href="<?php echo $this->url(array($this->artikel->getO_key(),$this->artikel->getO_id(),$this->artikel->getTemplate()),"community-detail");?>"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
<?php
    }
?>