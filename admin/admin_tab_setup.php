<?php inframe_url ();?>
<form method="post" action="">

    <h4 class="mt-3">Social</h4>
    <div class="row pt-2">
        <div class="col-md-2"><label>Facebook Link</label></div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="setup_facebook" value="<?php echo  $get_setup_facebook; ?>"/>     
        </div> 
    </div>

    <div class="row pt-2">
        <div class="col-md-2"><label>Instagram Link</label></div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="setup_instagram" value="<?php echo  $get_setup_instagram; ?>"/>     
        </div> 
    </div>

    <div class="row pt-2">
        <div class="col-md-2"><label>Twitter Link</label></div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="setup_twitter" value="<?php echo  $get_setup_twitter; ?>"/>     
        </div> 
    </div>
    
    <!-- Button -->
    <p><input type="submit" name="save-option-settings" class="btn btn-danger" value="Save Options"/></p>  
</form>