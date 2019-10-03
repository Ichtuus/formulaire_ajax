$("#contactForm").validator().on("submit",function(event){
    if (event.isDefaultPrevented()) {
        submitMSG(false, "Avez-vous rempli le formulaire correctement?");
    }
    else{
        event.preventDefault();
        submitForm();
    }
});

function submitForm(){
    var datas = {
        lastname: $("#lastname").val(),
        firstname: $("#firstname").val(),
        gsm: $('#gsm').val(),
        email: $("#email").val(),
        adresse: $("#adresse").val(),
        optionMarque: $(".marque").val(),
        optionModele: $(".modele").val(),
        service: $(".service").val(),
        traitement: $("#traitement").is(':checked'),
        lustrage: $("#lustrage").is(':checked'),
        decontamination: $("#decontamination").is(':checked'),
        degoudronage: $("#degoudronage").is(':checked'),
        poils: $("#poils").is(':checked'),
        moquette: $("#moquette").is(':checked'),
        sieges: $("#sieges").is(':checked'),
        ciel: $("#ciel").is(':checked'),
        cuir: $("#cuir").is(':checked'),
        nourrissant: $("#nourrissant").is(':checked'),
        reconditionnement: $("#reconditionnement").is(':checked'),
        vapeur: $("#vapeur").is(':checked'),
        nettoyage: $('#nettoyage').is(':checked')
    }

    $.ajax({
        type: "POST",
        url: "assets/process/form-process.php",
        data:datas,
        success : function(text){
            if (text == "success"){
                formSuccess();
                  window.location.href = 'https://tenor.com/view/hangover-thumbs-up-zach-galifianakis-gif-3576876' ;
            } else {
                submitMSG(false, "Problème lors de l\'envoi");
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message envoyé !")
}

// function formError(){
//     $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
//         $(this).removeClass();
//     });
// }

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}


$(document).ready(function(){
    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allPrevBtn = $('.prevBtn'),
        nextBtnStep1 = $('#step-1').find('.nextBtn'),
        nextBtnStep2 = $('#step-2').find('.nextBtn'),
        marque = $('.marque'),
        modele = $('.modele'),
        service = $('.service');
        next = $('.next');

    allWells.hide();

    $("#lastname").val("");
    $("#firstname").val("");
    $('#gsm').val("");
    $("#email").val("");
    $("#adresse").val("");
    $(".marque").val("");
    $(".modele").val("");
    $(".service").val("");
    $("#traitement").prop('checked', false);
    $("#lustrage").prop('checked', false);
    $("#decontamination").prop('checked', false);
    $("#degoudronage").prop('checked', false);
    $("#poils").prop('checked', false);
    $("#moquette").prop('checked', false);
    $("#sieges").prop('checked', false);
    $("#ciel").prop('checked', false);
    $("#cuir").prop('checked', false);
    $("#nourrissant").prop('checked', false);
    $("#reconditionnement").prop('checked', false);
    $("#nettoyage").prop('checked', false);


    $("#firstname").prop('disabled', true);
    $('#gsm').prop('disabled', true);
    $("#email").prop('disabled', true);
    $("#adresse").prop('disabled', true);
    nextBtnStep2.prop('disabled', true);
    nextBtnStep1.prop('disabled', true);
    service.prop('disabled', true);

    $(marque).on('change', function(){
        service.removeAttr('disabled');
    });

    $(service).on('change', function(){
        var dStep2 = {
            optionMarque: $(".marque").val(),
            optionModele: $(".modele").val(),
            service: $(".service").val()
        };
        console.log('rr');
        if(dStep2.optionMarque.length > 0 || dStep2.optionModele.length > 0 ){
            console.log('undisbaled');
            nextBtnStep2.removeAttr('disabled');
        }
    });

    $("#lastname").change(function(e){
        console.log('al');
        if($("#lastname").val().length > 0){
            console.log('ici');
            $("#firstname").removeAttr('disabled');
        }
        $("#firstname").change(function(e){
            console.log('first');
            if($("#firstname").val().length > 0){
                $("#gsm").removeAttr('disabled');
            }
            $("#gsm").change(function(e){
                console.log('deuz');
                if($("#gsm").val().length > 0){
                    $("#email").removeAttr('disabled');
                }
                $("#email").change(function(e){
                    console.log('deuz');
                    var m = $("#email").val();
                    if($("#email").val().length > 0){
                        if(validateEmail(m)) {
                            console.log('cond');
                            $('.requis').remove();
                            $("#adresse").removeAttr('disabled');
                            e.preventDefault();
                        }else{
                            var msgClasses = "h3 text-center text-danger";
                           $(".ermsg").text("<h3 class='requis'>champs mail invalide!</h3>");
                           $('.requis').addClass(msgClasses);
                        }
                    }
                    $("#adresse").change(function(e){
                        console.log('dernz');
                        if($("#adresse").val().length > 0){
                            $(nextBtnStep1).removeAttr('disabled');
                        }
                    });
                });
            });
        });

        // var m = $("#email").val();
        // if($.trim(m).length == 0 || $("#lastname").val()=="" || $("#firstname").val()=="" || $("#gsm").val()=="" || $("#adresse").val()==""){
        //     console.log('al');
        //     if (!validateEmail(m)) {
        //         console.log('cond');
        //         e.preventDefault();
        //     }
        //     else{
        //         return true;
        //     }
        //     var msgClasses = "h3 text-center text-danger";
        //     $(".next").prop('disabled', true);
        //     $(".next").after("<h3 class='requis'>À cette étape, tous les champs sont requis!</h3>");
        //     $('.requis').addClass(msgClasses);
        //     e.preventDefault();
        // }


    });


    function validateEmail(m) {
        console.log('reegx');
        var regex = /^[\w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
        if (regex.test(m)) {
            return true;
        }
        else {
            return false;
        }
    }



    navListItems.click(function(e){
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if(!$item.hasClass('disabled')){
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
            prevStepWizard.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function(){
        var d = {
            lastname: $("#lastname").val(),
            firstname: $("#firstname").val(),
            email: $("#email").val(),
            adresse: $("#adresse").val()
        };
        var step1 = $('#step-1'),
            step2 = $('#step-2');

        // if(d.lastname.length <= 0 || d.firstname.length <= 0 || d.email.length <= 0 || d.adresse.length <= 0){
        //     console.log('if');
        //     var msgClasses = "h3 text-center text-danger";
        //     $(".nextBtn").after("<h3 class='requis'>À cette étape, tous les champs sont requis!</h3>");
        //     $('.requis').addClass(msgClasses);
        // }
        // else{
            $('.requis').remove();
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        // }
    });

    $('div.setup-panel div a.btn-primary').trigger('click');


    var url = window.location.href + "assets/datas.json";
    $.getJSON(url,function(datasJson){
        //for marque
        for(var keyOfMarque in datasJson['marque']) {
            $.each(datasJson, function(keyLoop, oneData){
                $('.marque').append("<option id='" +this[keyOfMarque].label+ "' value="+this[keyOfMarque].label+">" +this[keyOfMarque].label+"</option>");
            });
        }
        $('.marque').on('change', function(){
            $('.modele').children().remove();
            var d = [];
            var valueOfMarque = $(this).val();
            $.each(datasJson['marque'], function(keyLoopModel, oneDataModel){
                if(valueOfMarque == oneDataModel.label){
                    d.push(oneDataModel.modele);
                    $.each(d, function(k,vModel){
                        function compare( a, b ){
                            if(a.name < b.name){
                                return -1;
                            }
                            if(a.name > b.name){
                                return 1;
                            }
                            return 0;
                        }
                        vModel.sort( compare );
                        $.each(vModel, function(cle,last){
                            console.log(last);
                            $('.modele').append("<option id='" +last.name+ "' value='"+last.name+"'>" +last.name+"</option>");
                        });

                    });
                }
            });
        });
    });



});
