$(function(){
    var i = 0;
    var token = 'dc1ff7019b0d4fc79d0aa72bd3dce5fc';
    var packageId,
    customerName ,
    dob,
    citizenId,
    gender,
    email,
    phoneNumber,
    partnerName,
    partnerDob,
    partnerCitizenId,
    partnerGender,
    paymentTyped,
    txnType = 0;


    $.ajax({
        url: 'https://baohiemtinhyeu.vn:8443/pti/packages',
        type: 'GET',
        contentType: 'application/json',success: function(data) {
            var result = data.responseData;
            $.each(result, function (key, item) {
                
                var html = '<div data-packages='+item.id+' class="grid-item clickChangePackages" >';
                    html += '<div class="inner">';
                    html += '<img src="https://interbuslines.com/themes/20/statics/insurrancelove/images/programming.png" alt="">';
                    html += '<span>'+item.packageName+'</span>'; 
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                                       
               
                $("#packages").append(html);
            });
        }
    });


    function customMiliseconds(date){
        var d = new Date(date);
        var miliseconds = d.getTime();
        return miliseconds;

    };


    $("#formValidate").validate({
        onfocusout:true,
        rules: {
            customerName: "required",
            citizenId: "required",
            gender: "required",
            email : "required",
            phoneNumber : "required",
            partnerName: "required",
            partnerCitizenId: "required",
            partnerGender: "required",

        },
        messages: {
            customerName: "Bạn chưa nhập họ và tên",
            citizenId : "Bạn chưa nhập CMT/Căn cước/Hộ chiếu",
            gender : "Bạn chưa chọn giới tính",
            email: "Bạn chưa nhập email",
            phoneNumber: "Bạn chưa nhập số điện thoại",
            partnerName: "Bạn chưa nhập họ và tên",
            partnerCitizenId: "Bạn chưa nhập CMT/Căn cước/Hộ chiếu",
            partnerGender: "Bạn chưa chọn giới tính"
        }
    })

	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex >= 1 ) {
                $('.actions ul').addClass('actions-next');
            } else {
                $('.actions ul').removeClass('actions-next');
            }
            return true; 
        },
        labels: {
            finish: "Thanh toán",
            next: "Tiếp tục",
            previous: "Quay lại"
        }
    });
    // Custom Steps 
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });

    // Custom Button Jquery Step
    
    $('.forward').click(function(){
        console.log(i);
        console.log(packageId);
        if(typeof packageId !== "undefined" ){
            if($("#formValidate").valid()){

                $("#wizard").steps('next');
                
            }
        }else{
            $.alert({
                title: 'Cảnh báo!',
                type: 'red',
                typeAnimated: true,
                content: 'Bạn chưa chọn gói bảo hiểm !',
            });
        }

    	
    });
    
    $('.finish').click(function(){
        customerName =  $("#customerName").val();
        citizenId  =  $("#citizenId").val();
        gender =  $("#gender").val();
        email =  $("#email").val();
        phoneNumber =  $("#phoneNumber").val();
        partnerName =  $("#partnerName").val();
        partnerCitizenId =  $("#partnerCitizenId").val();
        partnerGender =  $("#partnerGender").val();
        paymentTyped = $("input[name='paymentTyped']:checked").val();

        console.log(paymentTyped);

        $.ajax({
            url: 'https://baohiemtinhyeu.vn:8443/pti/agency/contract',
            type: 'POST',
            headers: { 'AV-Auth-Token': token },
            contentType: 'application/json',
            data: JSON.stringify({packageId: packageId, customerName: customerName, citizenId: citizenId, gender: gender, phoneNumber: phoneNumber, dob: dob, email: email, partnerName:  partnerName, partnerCitizenId: partnerCitizenId, partnerGender: partnerGender, partnerDob: partnerDob, txnType: txnType}),
            success: function(result) {
                if(paymentTyped == 1){
                    $.ajax({
                        url: 'https://baohiemtinhyeu.vn:8443/pti/contract/transact/napas',
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({contractId: result.responseData.contract.id, ip: userip} ),
                        success: function(result) {
                            if (result.successMessage == 'success') {
                                var url = result.responseData;


                                window.location.href = result.responseData;
                            }

                        }
                    })
                }else if(paymentTyped == 2){
                   
                   
                   $.ajax({
                        url: 'https://baohiemtinhyeu.vn:8443/pti/contract/transact/vtc-pay',
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({contractId: result.responseData.contract.id} ),
                        success: function(result) {
                            if(result.successMessage == 'success'){
                               var url = result.responseData;

                                window.location.href = url;
                            }
                            
                        }
                    })
                }
            },
            error: function () {
                $.alert({
                    title: 'Cảnh báo!',
                    type: 'red',
                    typeAnimated: true,
                    content: 'Thao tác không thành công !',
                });
            }
        });
    })
    $('.backward').click(function(){
        if(i > 0){
            i --;
        }
        
        console.log(i);
        $("#wizard").steps('previous');
    });
    // Input Focus
    $('.form-holder').delegate("input", "focus", function(){
        $('.form-holder').removeClass("active");
        $(this).parent().addClass("active");
    });
    $('body').on('click','.clickChangePackages',function () {
        packageId = $(this).attr("data-packages");
        $('.clickChangePackages').removeClass('active');
        $(this).addClass('active');
        console.log(packageId);
        
    });

    $('#dob').datepicker({
        changeYear: true,
        changeMonth: true,
        onSelect: function (dateStr) {
            dob = customMiliseconds(dateStr);
            console.log(dob);
        }
    });
    $('#partnerDob').datepicker({
        changeYear: true,
        changeMonth: true,
        onSelect: function (dateStr) {
            partnerDob = customMiliseconds(dateStr);
            console.log(partnerDob);
        }
    });
    
});

