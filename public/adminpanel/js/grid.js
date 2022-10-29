$(document).ready(function(){
    $('.main_menu a').click(function(){
        $('.main_menu').find('i.fa-chevron-down').addClass('fa-chevron-left');
        $('.main_menu .fa-chevron-down').removeClass('fa-chevron-down');

        $(this).find('i.fa-chevron-left').addClass('fa-chevron-down');
        $(this).find('i.fa-chevron-left').removeClass('fa-chevron-left');

        $('.main_menu ul').removeClass('expand');
        $(this).parent().find('.submenu').addClass('expand');
    })

    $('#sidebar_toggle').click(function(){
        $('aside').fadeToggle(300);
        $('#logo').fadeToggle(300);
        if($('header .right_side').hasClass('show')){
            $('header .right_side').animate({width:"55px"},300)
            $('header .right_side').removeClass('show')
            $('header .right_side').addClass('hide')
        }else{
            $('header .right_side').animate({width:"270px"},300)
            $('header .right_side').addClass('show')
            $('header .right_side').removeClass('hide')
        }
    });
    //show search box
    $('#search_btn').click(function(){
        $('.search_input input').animate({width:"190px"},500)
        $('.search_input').fadeIn(600);
        $(this).parent().find('.search_input').removeClass('d-none')
    });
    //hide search box
    $('.search_input .close').click(function(){
        $('.search_input input').animate({width:"0px"},500)
        $('.search_input').fadeOut(600);
        setTimeout(function(){
            $('#search_btn').parent().find('.search_input').addClass('d-none')
        },500)
    });
    //show|hide header sub menu
    $('header .left_side ul a').click(function(){
        $(this).parent().find('.submenu').fadeToggle(300)
    })
})