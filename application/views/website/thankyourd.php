<div class="container profiler">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6  text-center">
            <div class="contents1">
                <h5>Thank you.</h5>

                <p class="h10">
                    <?php echo $this->input->get("msg");?>
                </p>

            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var rdurl="<?php echo $this->input->get("rd");?>";
        if(rdurl!="")
        {
            var delay = 5000; //Your delay in milliseconds

            setTimeout(function () {
                window.location = rdurl;
            }, delay);
            
        }
       
    });
</script>
