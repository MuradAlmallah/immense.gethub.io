$(document).ready(function(){$('#wrapper').css({'width':'725px','height':'564px','float':'right',});$(window).on('resize',function(){if(window.innerWidth<539){$('#wrapper').css({'width':'','height':'auto','float':'none'});$('.tooltip-down-location').css('display','none');$('.tooltip-left-location').css('display','none');}else{$('#wrapper').css({'width':'725px','height':'564px','float':'right'});$('.tooltip-down-location').css('display','block');$('.tooltip-left-location').css('display','block');}});var tooltipDirection;for(i=0;i<$(".pin").length;i++){if($(".pin").eq(i).hasClass('pin-down')){tooltipDirection='tooltip-down-location';}else{tooltipDirection='tooltip-left-location';}$("#wrapper").append("<div style='left:"+$(".pin").eq(i).data('xpos')+"px;top:"+$(".pin").eq(i).data('ypos')+"px' class='"+tooltipDirection+"'><div class='tooltip-location'>"+$(".pin").eq(i).html()+"</div></div>");}$('.tooltip-left-location, .tooltip-down-location').mouseenter(function(){$(this).children('.tooltip-location').fadeIn(100);if($(this).children('.tooltip-location').find('img').attr('data-src')){var imgSrc=$(this).children('.tooltip-location').find('img').attr('data-src');$(this).children('.tooltip-location').find('img').attr('src',imgSrc);}}).mouseleave(function(){$(this).children('.tooltip-location').fadeOut(100);});if(window.innerWidth<539){$('#wrapper').css({'width':'auto','height':'auto','float':'none'});$('.tooltip-down-location').css('display','none');$('.tooltip-left-location').css('display','none');}else{$('#wrapper').css({'width':'725px','height':'564px','float':'right'});$('.tooltip-down-location').css('display','block');$('.tooltip-left-location').css('display','block');}});