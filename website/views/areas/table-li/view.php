<style>
       
        @media (min-width: 768px) {
          .container {
            width: 750px !important;
          }
        }
        @media (min-width: 992px) {
          .container {
            width: 970px !important;
          }
        }
        @media (min-width: 1200px) {
          .container {
            width: 1170px !important;
          }
        }
        h1 {
          font-size: 2.7em !important;
          margin: 0.67em 0 !important;
          font-weight: 400 !important;
          line-height: 1.5em !important;
        }
        h4{
          font-size: 1em !important;
        }            
        ol{
            font-size: 1.7em !important;
        }
        h3{
            font-size: 2.2em !important;          
        }
            
        h5{
            font-size: 1.8em !important;
        }
</style>

<header>
    
    <div class="background">
        <?php $asets=Asset::getByPath('/ajfc/background/bgkebijakan.jpg');?>
        <img src="<?php echo $asets; ?>" alt="background kebijakan" class="img-responsive" />
    </div><!--/ .background -->
    
</header>

<div class="page-wrapper-outer">

<section class="page-wrapper mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 pr0">
                
                <div class="main-content">
                    
                    <div class="main-content--header">
                        <h1 class="mb12"><?php echo $this->input('judulSyarat'); ?></h1>
                        <?php echo $this->wysiwyg('descriptSyarat'); ?>
                    </div><!--/ .main-content--header -->
                    
                    <div class="main-content--inner mt16">
                    
                        <ol>
			    <?php while ($this->block("rowTable")->loop()) { ?>
				<li>
				    <?php echo $this->wysiwyg('description')?>
				</li>
			    <?php } ?>
                        </ol>
                        
                        <?php echo $this->wysiwyg('description-li')?>
                        
                    </div><!--/ .main-content--inner -->
                    
                </div><!--/ .main-content -->
                
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-4 pl0">
                
<div class="sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item--header mb16">
                            <h3><?php echo $this->input('title_page_tanyajawab')?></h3>
                        </div><!--/ .sidebar-item--header -->
                        <div class="sidebar-item--content">
                            
                            <?php if($this->editmode) { ?>
                                <div class="alert alert-info" style="height: 75px">
                                    <div class="col-xs-12">
                                        Berapa item yang ditampilkan?

                                        <?php
                                            // prepare the store
                                            $selectStore = [];
                                            for($i=2; $i<30; $i++) {
                                                $selectStore[] = [$i, $i];
                                            }
                                        ?>
                                        <?php echo $this->select("slides",[
                                            "store" => $selectStore,
                                            "reload" => true
                                        ]); ?>
                                    </div>
                                </div>

                                <style type="text/css">
                                    .gallery .item {
                                        min-height: 377px;
                                    }
                                #best-products{
                                    height : auto !important;
                                }
                                </style>
                            <?php } ?>
                            <?php 
                                $id = "banner-".uniqid();
                                $slides = 2;
                                if(!$this->select("slides")->isEmpty()){
                                    $slides = (int) $this->select("slides")->getData();
                                }
                            ?>
                            <ul>
                            <?php for($i=0;$i<$slides;$i++) { ?>
                                <li><h5 class="mb12"><?php echo $this->link("linkedlist_".$i); ?></h5></li>
                            <?php } ?>
			                 </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->
                    
                </div><!--/ .sidebar -->
                
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->
