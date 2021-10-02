<div class="container">
    <form action="<?php echo base_url(); ?>tmt_online/verify_mobile_number" method="POST" class="form-horizontal" role="form">
        <h1>Verify Your Mobile Number</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">PIN</label>
            <div class="col-sm-9">
                <input type="hidden" name="user_id" value="<?php echo $select_user->user_id; ?>">
                <input type="hidden" name="mobile" value="<?php echo $select_user->user_mobile; ?>">
                <input type="tel" name="pin" required value="<?php echo set_value('pin'); ?>" placeholder="Enter Your Received PIN" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-dark">Verify</button>
            </div>
        </div>
    </form>
</div>