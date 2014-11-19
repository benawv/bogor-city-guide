<?php echo $this->template("includes/inv/header.php")?>

<div class="header_page bg_future">
	<div class="container">
		<?php 

            //sementara harus panggil class  public function investment_id($id)
                        
            $id=$this->data->category;
           echo $this->data->title 
              
        ?>
	</div>
</div>

<div class="main_wrap">

	<div class="container">

		<div class="row">
			<div class="bread">
				<a href="/investasi/investment-homepage/">Home</a>  
				<i class="fa fa-angle-right"></i> 
				<a href="/investment/investment-category/<?php echo str_replace(",","",$this->entries[0]['investment']); ?>">Article</a>

				<i class="fa fa-angle-right"></i>
				<a href="/investment/investment-article-list/<?php echo str_replace(",","",$this->entries[0]['investment']); ?>_1">Artikel Index <?php echo $id; ?></a>
				<i class="fa fa-angle-right"></i>
				<?php echo $this->data->title ?>

			</div>
		</div>

		<div class="row tag">

            <div class="left">

                <p>
                    <strong>Tag :</strong>&nbsp;
                    <a href="/investment/investment-article-list/<?php echo str_replace(",","",$this->entries[0]['investment']); ?>_1">
                   <?php foreach ($this->data->investment as $inv) { echo $inv->investment;}  ?>
                    </a>
                </p>

            </div><!--/ .col-xs-6 -->

            <div class="right">

                <p>
                    <strong>Share: </strong>&nbsp;
                    <a href="#"><i class="fa fa-facebook"></i></a>&nbsp;
                    <a href="#"><i class="fa fa-google-plus"></i></a>&nbsp;
                    <a href="#"><i class="fa fa-twitter"></i></a>&nbsp;
                </p>

            </div><!--/ .col-xs-6 -->

        </div><!--/ .row -->

	</div>
	<!-- container end -->

	<div class="row">
		<div class="container">
			<div class="long_text">
                <?php echo $this->data->content ?>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="container">

			<div class="title_section">
				Artikel Lainnya
			</div>

			<div class="listarticle">

				<ul>
                    <?php

                        $a_entries = new Object_InvestmentArticle_List();
                        $a_entries->setCondition('investment like "%'.$id.'%"'); 
                        $a_entries->setLimit(3);
                    foreach($a_entries as $a_entrie){
                    ?>
                        <li class="bg_future">
                            <h3><?php  echo $a_entrie->title; ?> </h3>
                            <p>Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada.</p>

                            <a href="investment/investment-article<?php echo $a_entrie->getO_key()."_".$a_entrie->getO_id()."_1";?>">Selengkapnya <i class="fa fa-angle-right"></i></a>

                        </li>
                    <?php } ?>
					
				</ul>

			</div>
			<!-- listarticle end -->			

		</div>
		<!-- container end -->

	</div>
	<!-- row end -->

</div>
<!-- homebanner end -->


<?php echo $this->template("includes/inv/footer.php")?>