<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/14//contact/contact.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><div class="container">
    <div class="contact-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php if(is_array($data['content']['breadcrumbs'])) { foreach($data['content']['breadcrumbs'] as $k => $v) { ?>

                <li><a href="<?=$v['href']?>"><?=$v['text']?></a></li>

                <?php } } ?>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="box-news-title col-md-12">
            <h3 style="text-align: center"><?php echo lang('title_heading');?></h3>
        </div>

        <div class="contact-info col-md-12">
            
                <?php if(isset($data['content']['info'])) { ?><?=$data['content']['info']?><?php } ?>


        </div>


        <div class="box-contact col-md-6">
            <form class="form-horizontal no-padding" action="" id="form_contact" method="POST" name="register">
                <div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtName"><?php echo lang('name');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <input id="txtName" name="txtName" type="text" placeholder="<?php echo lang('nhap_ho_ten');?>"
                                   class="form-control input-md">
                            <div class="warning" id="nameError" style="display:none"><span style="color: red;"><?php echo lang('name_null');?></span>
                            </div>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtPhone"><?php echo lang('phone');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <input id="txtPhone" name="txtPhone" type="text" placeholder="<?php echo lang('phone_number');?>"
                                   class="form-control input-md" class='number'>
                            <div class="warning" id="phoneError" style="display:none"><span style="color: red;"><?php echo lang('phone_null');?></span>
                            </div>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtEmail"><?php echo lang('email');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <input id="txtEmail" name="txtEmail" type="text" placeholder="<?php echo lang('pla_email');?>"
                                   class="form-control input-md">
                            <div class="warning" id="emailError" style="display:none"><span style="color: red;"><?php echo lang('mail_error');?></span>
                            </div>
                            <div class="warning" id="emailNull" style="display:none"><span style="color: red;"><?php echo lang('mail_null');?></span>
                            </div>


                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtAddress"><?php echo lang('address');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <input id="txtAddress" name="txtAddress" type="text" placeholder="<?php echo lang('pla_adress');?>"
                                   class="form-control input-md">
                            <div class="warning" id="addressError" style="display:none"><span
                                    style="color: red;"><?php echo lang('address_null');?></span></div>

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtContent"><?php echo lang('content');?><span
                                style="color:red"> * </span></label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="txtContent" name="txtContent"></textarea>
                            <div class="warning" id="contentError" style="display:none"><span
                                    style="color: red;"><?php echo lang('content_null');?></span></div>
                        </div>
                    </div>

                    <div class="form-group check_capcha" <?php if(isset($data['content']['check_captcha_url'])) { ?>check_capcha=
                    "<?=$data['content']['check_captcha_url']?>"<?php } ?> >
                        <label class="col-md-3 control-label" for="textinput"><?php echo lang('captcha');?></label>
                        <div class="col-md-9">
                            <img id="capt_img_ct" src="<?=$_B['captcha']?>"/>
                            <img title="<?php echo lang('tai_lai_ma_bao_ve');?>" id="f5capt_cha" src="<?=$web['static_temp_mod']?>/resource/img/view-refresh-small.png"/>
                            <div style="float: left; padding: 1px 5px 0 0; width: 40%;">
                                <input type="text"  class="form-control" id="captcha_cha" value=""/>
                            </div>
                            <div class="warning" id="capchaError" style="display:none"><span style="color: red;"><?php echo lang('capcha_null');?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="btnSent"></label>
                        <div class="col-md-9 ">
                            <button id="btnSent" type="submit" name="action" class="btn btn-primary" value="addContat"><?php echo lang('sent_contact');?>
                            </button>
                            <button type="reset" id="btnCancel" name="btnSent" class="btn btn-primary"><?php echo lang('cancel');?>
                            </button>

                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="col-md-6 ">

            <div class="video-container ">

                <?=$data['content']['maps']?>

            </div>
        </div>
    </div>

</div>

<script src="<?=$web['static_temp_mod']?>/resource/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?=$web['static_temp_mod']?>/resource/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?=$web['static_temp_mod']?>/resource/js/contact.js" type="text/javascript"></script>
<script src="<?=$web['static_temp_mod']?>/resource/assets/bootstrap/js/bootstrap.min.js"></script>
<link href="<?=$web['static_temp_mod']?>/resource/assets/bootstrap-dialog/css/bootstrap-dialog.min.css" rel="stylesheet"
      type="text/css"/>
<script src="<?=$web['static_temp_mod']?>/resource/assets/bootstrap-dialog/js/bootstrap-dialog.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        Contact.init();
    })
</script>