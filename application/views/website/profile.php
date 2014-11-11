
<div class="st-container" id="st-container">
  
                      <nav class="st-menu st-effect-11" id="menu-11">
                <h2 class="">menu</h2>
                <ul>
                    <li><a class="" href="#">SCHEDULE</a>
                    </li>
                    <li><a class="" href="blender-style.html">STYLE BLENDERS</a>
                    </li>
                    <li><a class="" href="invite-list.html">INVITE LIST</a>
                    </li>
                    <li><a class="" href="#">ARCHIVE SITE</a>
                    </li>

                </ul>
            </nav>
             <div class="st-pusher">
                <div class="st-content-inner">
                    <div class="st-content">
                      <div class="profile-head">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="menu" id="st-trigger-effects">
                        <button data-effect="st-effect-11">
                            <img src="<?php echo base_url("webassets");?>/img/menu.png"><i class="menu-text">menu</i>
                        </button>
                    </div>




                </div>
                <div class="col-md-3">
                    <div class="navbar-header">

                        <a class="navbar-brands" href="#">
                            <img src="<?php echo base_url("webassets");?>/img/logo.png" alt="bootstrapwizard logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 social-link">
                    <?php $this->load->view("loginview");?>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a> 
                        <a href="#"> <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#"><i class="fa fa-youtube-square"></i></a> 
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <img src="<?php echo base_url("webassets");?>/img/profile_pic.png" class="profile-pic">

                </div>
                <div class="col-md-4">
                    <div class="profile-details">
                        <h4><?php echo $user->firstname;?></h4>
                        <h4><?php echo $user->lastname;?></h4>
                        <img src="<?php echo base_url("webassets");?>/img/envolap.png"><span class="id-text"><?php echo $user->email;?></span>
                        <br>
                        <img src="<?php echo base_url("webassets");?>/img/location.png"><span class="location-text"><?php echo $user->accesskey; ?></span>
                    </div>

                    <a href="#"><span class="edit-pro">edit profile</span></a>
                </div>
                <div class="col-md-4">
                    <div class="count-num">
                        <h4><?php echo $user->points;?></h4>
                        <h6>points</h6>
                    </div>
                    <div class="social-pro">
                        <p>social media accounts</p>
                    </div>
                    <div class="social-icon">
                       <a href="#"> <i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"> <i class="fa fa-instagram"></i></a>
                        <a href="#"> <img src="<?php echo base_url("webassets");?>/img/add.png" class="add"> </a>       
                    </div>
                </div>
            </div>
        </div>
    </div>
                 </div>
            </div>
        </div>
    </div>


    <div class="mid-content">
        <div class="container">
            <div class="text-center pro-head">
                <h6>We have received your style statement and our moderators are reviewing it.</h6>
                <a href="#"><h4>Your Style Statements</h4></a>
            </div>
            <?php
                foreach($posts as $post)
                {
            ?>
            <div class="row ">
                <div class="col-md-1"></div>
                <div class="col-md-11 pro-desc2">


                    <div class="col-md-2">
                        <div class="pro-karsh">
                            <img src="<?php echo base_url("webassets");?>/img/<?php echo $post->proimage;?>" style="width:100%;" class="karsh-img">
                            <p><?php echo $post->name;?></p>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="pro-data">
                            <h5><?php echo $post->timestamp;?></h5>
                            <p><?php echo $post->text;?></p>
                        </div>

                    </div>
                    <?php 
                    if($post->image!="")
                    {
                    ?>
                    <div class="col-md-2">

                        <img src="<?php echo base_url("webassets");?>/img/<?php echo $post->image;?>" style="width:100%;">
                    </div>
                    <?php
                    }
                    if($post->type==1)
                    {
                    ?>
                    <div class="col-md-2 approve">
                        <a href="#"><img src="<?php echo base_url("webassets");?>/img/shape.png"></a>
                        <p>Approved</p>
                    </div>
                    <?php 
                    }else{
                    ?>
                    <div class="col-md-2 approve">
                        <a href="#"><img src="<?php echo base_url("webassets");?>/img/rejected.png"></a>
                        <p>rejected</p>
                    </div>
                    <?php
                    }
                    ?>

                </div>
                <div class="col-md-2"></div>

            </div>
            <?php 
                }
            ?>

                       
        </div>
    </div>
