<section class="page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-2 hidden-xs hidden-sm nopadding">

                <div class="sidebar">
                    <h1 class="sidebar__title"><a href="/agent-recruitment/dashboard">Agency Recruitment System</a></h1>
                    <nav class="sidebar__nav">
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Dashboard</a></li>
                            <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-chevron-circle-right"></i> Candidate Agent</a></li>
                            <li>
                                <a href="#" onclick="return confirm('Are you sure you want to logout?');">
                                    <i class="fa fa-chevron-circle-right"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="col-xs-12 col-md-10 nopadding">

                <div class="content">

                    <div class="content__title">
                        <h2>Dashboard</h2>
                    </div>

                    <!-- TODO: http://www.bootply.com/120682 -->
                    <div class="content__grid">
                        <div class="row masonry-container">
                            
                            <div class="col-xs-12 col-sm-6 col-md-4 masonry-item">
                                <div class="content__grid__item">
                                    <div class="widget">
                                        <div class="widget__title">
                                            <h3><small>Agent Points</small><span>429</span></h3>
                                        </div>
                                        <div class="widget__content">
                                            <div class="list">
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <i class="fa fa-arrow-circle-up fa--blue"></i> 3 Points
                                                    </div>
                                                    <div class="col-xs-4 text-right">
                                                        <p class="text-muted"><small>Today</small></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <i class="fa fa-arrow-circle-down fa--red"></i> 1 Points
                                                    </div>
                                                    <div class="col-xs-4 text-right">
                                                        <p class="text-muted"><small>Yesterday</small></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <i class="fa fa-arrow-circle-up fa--blue"></i> 2 Points
                                                    </div>
                                                    <div class="col-xs-4 text-right">
                                                        <p class="text-muted"><small>08/09/2015</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/ .content__grid__item -->
                            </div>
                            
                            <div class="col-xs-12 col-sm-6 col-md-4 masonry-item">
                                <div class="content__grid__item">
                                    <div class="widget">
                                        <div class="widget__title">
                                            <h3><small>Leads</small><span>15</span></h3>
                                        </div>
                                        <div class="widget__content">
                                            <div class="list__image">
                                                <?php for( $i = 0; $i < 5; $i++ ): ?>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <img src="http://placehold.it/72x72" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="col-xs-7">
                                                        lorem ipsum...
                                                    </div>
                                                    <div class="col-xs-3 text-right">
                                                        <a href="#" class="btn btn-sm btn-block btn-primary" data-toggle="modal" data-target="#modalFollowUp">Follow Up</a>
                                                    </div>
                                                </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/ .content__grid__item -->
                            </div>
                            
                            <div class="col-xs-12 col-sm-6 col-md-4 masonry-item">
                                <div class="content__grid__item nops">
                                    <div class="widget">
                                        <div class="widget__title pl23 pr23">
                                            <h3 class="pull-left"><small>Notifications</small></h3>
                                            <div class="label label-danger pull-left">3</div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget__content nops">
                                            <ul class="list__notifications">
                                                <li>
                                                    <a href="#" class="highlight">
                                                        <span>Profile anda meningkat <strong>3 points</strong></span>
                                                        <small>Today 09:04</small>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="highlight">
                                                        <span>
                                                            <strong>Muhammad Adul</strong> meminta menjadi calon 
                                                            <strong>kandidat</strong> agen baru
                                                        </span>
                                                        <small>Today 08:15</small>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="highlight">
                                                        <span>Profile anda meningkat <strong>3 points</strong></span>
                                                        <small>Today 08:00</small>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>Profile anda menurun <strong>1 points</strong></span>
                                                        <small>Today 07:03</small>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="#" class="btn btn-primary">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/ .content__grid__item -->
                            </div>
                            <?php for($i = 0; $i < 4; $i++ ): ?>
                            <div class="col-xs-12 col-md-4 masonry-item">
                                <div class="content__grid__item">
                                    <div class="widget">
                                        <div class="widget__title">
                                            <h3><small>Blank Widget</small></h3>
                                        </div><!--/ .widget__title -->
                                        <div class="widget__content">
                                            <p>Neque porro quisquam est qui dolorem ipsum ...</p>
                                        </div><!--/ .widget__content -->
                                    </div><!--/ .widget -->
                                </div><!--/ .content__grid__item -->
                            </div>
                            <?php endfor; ?>
                            
                            <div class="col-xs-12 col-md-6 masonry-item">
                                <div class="content__grid__item">
                                    <div class="widget">
                                        <div class="widget__title">
                                            <h3><small>Blank Widget</small></h3>
                                        </div><!--/ .widget__title -->
                                        <div class="widget__content">
                                            <p>Neque porro quisquam est qui dolorem ipsum ...</p>
                                        </div><!--/ .widget__content -->
                                    </div><!--/ .widget -->
                                </div><!--/ .content__grid__item -->
                            </div>
                            
                            <div class="col-xs-12 col-md-6 masonry-item">
                                <div class="content__grid__item">
                                    <div class="widget">
                                        <div class="widget__title">
                                            <h3><small>Blank Widget</small></h3>
                                        </div><!--/ .widget__title -->
                                        <div class="widget__content">
                                            <p>Neque porro quisquam est qui dolorem ipsum ...</p>
                                        </div><!--/ .widget__content -->
                                    </div><!--/ .widget -->
                                </div><!--/ .content__grid__item -->
                            </div>
                            
                        </div><!--/ .row -->
                    </div><!--/ .content__grid -->

                    <div class="clearfix"></div>

                </div><!--/ .content -->

            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modalFollowUp" tabindex="-1" role="dialog" aria-labelledby="modalFollowUpLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalFollowUpLabel">Follow Up</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">
                    Apakah anda yakin untuk <em>follow up</em><br />
                    <strong>Calon Agen Adul</strong><br />
                    kepada agen<br />
                </p>
                <select class="form-control">
                    <option value="0">Agen Andrew</option>
                    <option value="1">Agen Anggit</option>
                    <option value="2">Agen Bimo</option>
                    <option value="3">Agen Chandra</option>
                </select>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <button type="button" class="btn btn-block btn-success mb8">Yes</button>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/ .modal -->