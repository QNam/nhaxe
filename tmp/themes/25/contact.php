<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/25//contact.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="clearfix"></div>
   <?php if(isset($data['content']['breadcrumbs'])) { ?>
   <div class="productbreadcrumb">

<ol class="breadcrumb">
     <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>
        
        <li ><a href="<?=$v['href']?>"><?=$v['text']?></a></li>
         
        <?php } } ?>
   
</ol>
</div>
    <div class="clearfix"></div>
    <?php } ?>

<div class="clearfix"></div>
<div class="f-module-page">
  <div class="f-module-page-title"> <i></i><span><?php echo lang('title_heading');?></span> </div>
  <div class="f-module-page-body padding-10">
    <div class="clearfix"></div>
    <div class="f-contact-page">
      <?php if(isset($data['content']['success'])) { ?>
      <?php include $_B['temp']->load('contact/notifyAction') ?>
      <?php } ?>
      <div class="f-contact-page-info">
        <h5 align="center">
          <?php if(isset($data['content']['info'])) { ?><?=$data['content']['info']?><?php } ?> 
        </h5>                           
      </div>
      <div class="f-contact-form row">

       <div class="col-md-6 no-padding">
        <form class="form-horizontal no-padding" action="" id="form_contact"  method="POST" name="register">

          <fieldset >

            <!-- Form Name -->


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="txtName"><?php echo lang('name');?><span style="color:red"> * </span></label>  
              <div class="col-md-9">
                <input id="txtName" name="txtName" type="text" placeholder="<?php echo lang('nhap_ho_ten');?>" class="form-control input-md" >
                <div class="warning" id="nameError"  style="display:none" ><span style="color: red;"><?php echo lang('name_null');?></span></div>

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="txtPhone"><?php echo lang('phone');?><span style="color:red"> * </span></label>  
              <div class="col-md-9">
                <input id="txtPhone" name="txtPhone" type="text" placeholder="<?php echo lang('phone_number');?>" class="form-control input-md"  class ='number'>
                <div class="warning" id="phoneError"  style="display:none" ><span style="color: red;"><?php echo lang('phone_null');?></span></div>

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="txtEmail"><?php echo lang('email');?><span style="color:red"> * </span></label>  
              <div class="col-md-9">
                <input id="txtEmail" name="txtEmail" type="text" placeholder="<?php echo lang('pla_email');?>" class="form-control input-md"  >
                <div class="warning" id="emailError"  style="display:none" ><span style="color: red;"><?php echo lang('mail_error');?></span>
                </div>
                <div class="warning" id="emailNull"  style="display:none" ><span style="color: red;"><?php echo lang('mail_null');?></span>
                </div>


              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="txtAddress"><?php echo lang('address');?><span style="color:red"> * </span></label>  
              <div class="col-md-9">
                <input id="txtAddress" name="txtAddress" type="text" placeholder="<?php echo lang('pla_adress');?>" class="form-control input-md" >
                <div class="warning" id="addressError"  style="display:none" ><span style="color: red;"><?php echo lang('address_null');?></span></div>

              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="txtContent"><?php echo lang('content');?><span style="color:red"> * </span></label>
              <div class="col-md-9" >                     
                <textarea class="form-control" id="txtContent" name="txtContent"></textarea>
                <div class="warning" id="contentError"  style="display:none" ><span style="color: red;"><?php echo lang('content_null');?></span></div>
              </div>

            </div>

            <div class="form-group check_capcha" <?php if(isset($data['content']['check_captcha_url'])) { ?>check_capcha= "<?=$data['content']['check_captcha_url']?>"<?php } ?> >
                <label class="col-md-3 control-label" for="textinput"><?php echo lang('captcha');?></label>
                <input type="hidden" name="captcha" id="cap_md" value="0" />
                <div class="col-md-9">
                    <img id="capt_img_ct" src="<?=$_B['captcha']?>" /> <img title="<?php echo lang('tai_lai_ma_bao_ve');?>" id="f5capt_cha" src="<?=$web['static_temp_mod']?>/resource/img/view-refresh-small.png" /> 
                    <div style="float: left; padding: 1px 5px 0 0; width: 40%;"><input type="text" class="form-control" id="captcha_cha" value="" /></div>
                    <div class="warning" id="capchaError"  style="display:none" ><span style="color: red;"><?php echo lang('capcha_null');?></span></div>
                </div>


            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="btnSent"></label>
              <div class="col-md-9 ">
                <button id="btnSent" type="submit" name="action" class="btn btn-primary" value="addContat" ><?php echo lang('sent_contact');?></button>
                <button type="reset" id="btnCancel" name="btnSent" class="btn btn-primary"><?php echo lang('cancel');?></button>

              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="col-md-6 ">

        <div class="video-container ">

          <iframe width="425" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Seattle,+WA&amp;aq=0&amp;oq=seattle&amp;sll=37.822293,-85.76824&amp;sspn=6.628688,16.907959&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Seattle,+King,+Washington&amp;z=11&amp;ll=47.60621,-122.332071&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Seattle,+WA&amp;aq=0&amp;oq=seattle&amp;sll=37.822293,-85.76824&amp;sspn=6.628688,16.907959&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Seattle,+King,+Washington&amp;z=11&amp;ll=47.60621,-122.332071" style="color:#0000FF;text-align:left"><?php echo lang('view_larger_map');?></a></small>

        </div>
      </div>


    </div>
  </div>
  <div class="clearfix"></div>
</div>
</div>
<!--/VIDEO -->
</div>
<script src="<?=$web['static_temp_mod']?>/resource/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?=$web['static_temp_mod']?>/resource/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?=$web['static_temp_mod']?>/resource/js/contact.js" type="text/javascript"></script>
<script src="<?=$web['static_temp_mod']?>/resource/assets/bootstrap/js/bootstrap.min.js"></script>
<link href="<?=$web['static_temp_mod']?>/resource/assets/bootstrap-dialog/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<script src="<?=$web['static_temp_mod']?>/resource/assets/bootstrap-dialog/js/bootstrap-dialog.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){       
  Contact.init();
})
</script>