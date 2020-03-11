<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/6//contact/blocks/blockcontact.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?> <link rel="stylesheet" type="text/css" href="<?=$web['static_temp_mod']?>/resource/css/style.css">

 <div class="f-block">
  <div class="f-block-title"> <i></i><span><?=$block['title']?></span> </div>
  <div class="f-block-body padding-10" >
    <?php if(isset($data['content']['success'])) { ?>
    <?php include $_B['temp']->load('contact/notifyAction') ?>
    <?php } ?>
    <div class="f-contact-page-info">
      <h5 align="center">
        
        <?=$data['info']?>
        
      </h5>                           
    </div>       
    
    <form class="form-horizontal no-padding" action="" id=""  method="POST" name="register">
      
      <fieldset >

        <!-- Form Name -->


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-3 control-label block-laber" for="name_block"><?php echo lang('name');?><span style="color:red"> * </span></label>  
          <div class="col-md-9 col-sm-9 col-xs-9">
            <input id="name_block" name="name_block" type="text" class="form-control input-md block-control-input"  class ='number'>
            <div class="warning" id="name_Error"  style="display:none" ><small style="color: red;"><?php echo lang('name_null');?></small></div>
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-3 control-label block-laber" for="phone_block"><?php echo lang('phone');?><span style="color:red"> * </span></label>  
          <div class="col-md-9 col-sm-9 col-xs-9">
            <input id="phone_block" name="phone_block" type="text" class="form-control input-md block-control-input"  class ='number'>
            <div class="warning" id="phone_Error"  style="display:none" ><small style="color: red;"><?php echo lang('phone_null');?></small></div>
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-3 control-label block-laber" for="email_block"><?php echo lang('email');?><span style="color:red"> * </span></label>  
          <div class="col-md-9 col-sm-9 col-xs-9">
            <input id="email_block" name="email_block" type="text"class="form-control input-md block-control-input"  >
            <div class="warning" id="email_Error"  style="display:none" ><small style="color: red;"><?php echo lang('mail_error');?></small></div>
            <div class="warning" id="email_Null"  style="display:none" ><small style="color: red;"><?php echo lang('mail_null');?></small></div>

            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-3 control-label block-laber" for="address_block"><?php echo lang('address');?><span style="color:red"> * </span></label>  
          <div class="col-md-9 col-sm-9 col-xs-9">
            <input id="address_block" name="address_block" type="text"class="form-control input-md block-control-input" >
            <div class="warning" id="address_Error"  style="display:none" ><small style="color: red;"><?php echo lang('address_null');?></small></div>
            
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-3 control-label block-laber" for="content_block"><?php echo lang('content');?><span style="color:red"> * </span></label>
          <div class="col-md-9 col-sm-9 col-xs-9" >                     
            <textarea class="form-control block-control-input" id="content_block" name="content_block"></textarea>
            <div class="warning" id="content_Error"  style="display:none" ><span style="color: red;"><?=content_null?></span></div>
          </div>
          
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-3 col-sm-3 col-xs-3 control-label" for="btnSent"></label>
          <div class="col-md-9 col-sm-9 col-xs-9 ">
            <button id="gui" type="submit" name="action_block" class="btn btn-primary btn-block-primary" style="text-align: center;" value="addContat" ><small><?php echo lang('sent_contact');?></small></button>
            <button type="reset" id="huy" name="btnSent" class="btn btn-primary btn-block-primary" style="text-align: center;"><small><?php echo lang('cancel');?></small></button>

          </div>
        </div>
      </fieldset>
    </form>
    
  </div>
</div>
<script src="<?=$web['static_temp_mod']?>/resource/js/contact.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){       
  Contact.init();
})
</script>
