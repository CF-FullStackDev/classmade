
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });


$(function(){
    function modal_show() {
        var $this = $('.open-modal'),
            modal = $($this).data("modal");

        $("body").addClass("modal-open");
        $(".modal-dialog").scrollTop(0);
        $(modal).parents(".modal-dialog").addClass("open");
        setTimeout( function(){
            $(modal).addClass("open");
        }, 350);

        $(document).on('click', function(e) {
            var target = $(e.target);
            if ($(target).hasClass("modal-dialog")) {
                $(target).find(".modal-body").each( function(){
                    $(this).removeClass("open");
                });
                setTimeout( function(){
                    $(target).removeClass("open");
                    $("body").removeClass("modal-open");
                }, 350);
            }
        });
    }

    if ($('#modal-login-error').text() != '') {
        modal_show();
    }

    $('li.dropdown > a').on('click',function(e) {
        e.preventDefault()
        $(this).parent().find('ul').first().toggle();
        $(this).parent().siblings().find('ul').hide(200);
        $(this).parent().find('ul').mouseleave(function(){
            var thisUI = $(this);
            $('html').click(function(){
                thisUI.hide();
                $('html').unbind('click');
            });
        });
    });

    $('ul.account-tabs li').click(function() {
        var tab = $(this).attr('data-tab');

        $('ul.account-tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab).addClass('current');
    })

    $(".open-modal").on('click', function(e) {
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
            modal = $($this).data("modal");

        $("body").addClass("modal-open");
        $(".modal-dialog").scrollTop(0);
        $(modal).parents(".modal-dialog").addClass("open");
        setTimeout( function(){
            $(modal).addClass("open");
        }, 350);

        $(document).on('click', function(e) {
            var target = $(e.target);
            if ($(target).hasClass("modal-dialog")) {
                $(target).find(".modal-body").each( function(){
                    $(this).removeClass("open");
                });
                setTimeout( function(){
                    $(target).removeClass("open");
                    $("body").removeClass("modal-open");
                }, 350);
            }
        });
    });

    $(".close-modal").on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
            modal = $($this).data("modal");

        $(modal).removeClass("open");
        setTimeout( function(){
            $(modal).parents(".modal-dialog").removeClass("open");
            $("body").removeClass("modal-open");
        }, 350);
    });

    $(".transcript-upload").click(function() {
        $("#transcript-file").click();
    });

    $("#signup-container .upload-default").click(function() {
        $("#profile-file-id").click();
    });

    $("#authentication-select").change(function() {
        var selected = $("select option:selected").text();
        if (selected == 'Personal Email') {
            $('.auth-options').removeClass('selected');
            $('#auth-personal-email').addClass('selected');
        }
        else if (selected == 'School Authentication Email') {
            $('.auth-options').removeClass('selected');
            $('#auth-school-email').addClass('selected');
        }
        else {
            $('.auth-options').removeClass('selected');
        }
    });

    //Angelo
    function showHighlightVideo(){
        $(".highlight-video").show();
        $(".highlight-photo").hide();
        $(".change-photo").show();
        $(".change-video").hide();
    }

    function showHighlightPhoto(){
        $(".highlight-video").hide();
        $(".highlight-photo").show();
        $(".change-photo").hide();
        $(".change-video").show();
    }

    $(document).on('click',".change-video",function(){
        showHighlightVideo();
    });

    $(document).on('click','.change-photo',function(){
        showHighlightPhoto();
    });

    $(document).on('click','#highlight-photo-button',function(){
        showHighlightPhoto();
    });
    $(document).on('click','#highlight-video-button',function(){
        showHighlightVideo();
    });

    $(document).on('click',"#rookie-link",function(e){
        e.preventDefault();
        $("#rookie-link").addClass('active');
        $("#intermediate-link").removeClass('active');
        $("#pro-link").removeClass('active');

        $(".rookie-section").css('display','block');
        $(".intermediate-section").css('display','none');
        $(".pro-section").css('display','none');

        $(".menu-line").css('left','61px');
        $(".menu-line").css('width',$(this).css('width'));
    });

    $(document).on('click','#intermediate-link',function(e){
        e.preventDefault();
        $("#rookie-link").removeClass('active');
        $("#intermediate-link").addClass('active');
        $("#pro-link").removeClass('active');

        $(".rookie-section").css('display','none');
        $(".intermediate-section").css('display','block');
        $(".pro-section").css('display','none');

        $(".menu-line").css('left','345px');
        $(".menu-line").css('width',$(this).css('width'));
    });

    $(document).on('click','#pro-link',function(e){
        e.preventDefault();
        $("#rookie-link").removeClass('active');
        $("#intermediate-link").removeClass('active');
        $("#pro-link").addClass('active');

        $(".rookie-section").css('display','none');
        $(".intermediate-section").css('display','none');
        $(".pro-section").css('display','block');

        $(".menu-line").css('left','680px');
        $(".menu-line").css('width',$(this).css('width'));
    });
    //End of Angelo

    //For Demo
    $(document).on('click', '.target-section', function() {
        var data = $(this).data('id');
        $('.section-one, .section-two, .section-three, .section-four').hide();
        $('.section-'+data).show();
    });

    $(document).on('click', '.target-section', function() {
        var data = $(this).data('id');
        $('.transcript-section1, .transcript-section2').hide();
        $('.transcript-section'+data).show();
    });

    //NEW ANGELO JS

    $('.highlight-photo-slick').slick({
        arrows: true,
        dots: true
    });

    function readURL(input, tar) {
        if (input.files && input.files[0]) { // got sth


        // Clear image container
        $("." + tar).removeAttr('src');

        $.each(input.files, function(index, ff) // loop each image 
            {

            var reader = new FileReader();

            // Put image in created image tags
            reader.onload = function(e) {
                $('.' + tar).attr('src', e.target.result);
            }

            reader.readAsDataURL(ff);

            });
        }
    }

    $(document).on('click', '.upload-image', function(){
        var input = $(this).data('input');
        $(input).click();
    });

    $('input[type="file"]').change(function(){
        var input = this;
        if ($(input).hasClass('upload-image-input')){
            var container = $(input).data('container');
            alert(container);
            $(container).html('<img class="file-upload">');
            readURL(input,'file-upload');
        }
    });

    $(document).on('keydown',".word-count-input",function(){
        var input = this;
        var label = $(this).data('count');
        var length = $(input).val().length;
        var limit = $(label).data('length');
        $(label).html(parseInt(limit) - parseInt(length));
    });

    $(document).on('keyup',".word-count-input",function(){
        var input = this;
        var label = $(this).data('count');
        var length = $(input).val().length;
        var limit = $(label).data('length');
        $(label).html(parseInt(limit) - parseInt(length));
    });

    // END OF NEW ANGELO JS

});
