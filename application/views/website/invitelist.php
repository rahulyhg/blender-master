
            <div class="content-center">
                <div class="follows">
                    <h5><span class="gold"><?php echo sizeOf($posts)+595;?> </span>people are going to the bpft </h5>
                    <p>read/view their style statements below.</p>
                </div>
            </div>




    <div class="section top" style="background:none;">
        <div class="container">

            <div class="row">
               <?php foreach($posts as $post) { // print_r($post); ?>
                <div class="col-md-3 col1 posts">
                    <div class="panel">
                        <div class="panel-heading">
                            <img class="circular" src="<?php echo $post->userlogo;?>"><span class="top-text"><?php echo $post->firstname." ".$post->lastname;?></span>
                            <img src="<?php echo base_url("webassets");?>/img/rect.png" class="rect">

                        </div>
                        <?php if($post->image!="") { ?>
                        <div class="panel-body">
                            <a href="#">
                                    <img src="<?php echo base_url("uploads");?>/<?php echo $post->image;?>" width="100%">
                                </a>
                        </div>
                        <?php } if($post->text!=""){ ?>

                        <div class="panel-body body-text">
                            <p>
                                <?php echo $post->text;?></p>
                        </div>
                        <?php } ?>

                        <div class="panel-footer">
                            <div class="pull-right">
                                <a href="" class="sharee"><i class="fa fa-facebook"></i></a>
                                <a href="" class="twitterbutton"></a>
                                <!-- <a href="#"> <i class="fa fa-google-plus"></i>
                                </a> -->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a href="#">
                <div class="foot-text">
                    <p>
                        View All Entries
                    </p>
                </div>
            </a>
        </div>
    </div>