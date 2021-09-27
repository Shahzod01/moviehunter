
$(function(){


        $(".films_cat").click(function(){
            if($(this).find("i").attr("class")=="ui icon angle right"){   
                $(this).find("i").attr("class","ui icon angle down")
            }else{
                $(this).find("i").attr("class","ui icon angle right")
            }
        });


})