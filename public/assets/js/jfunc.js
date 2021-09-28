$(document).ready(function(){
	
	$(".movie-image").hover(function(){
		$(this).find(".play").show();

	},
	function()
	{
		$(this).find(".play").hide();
	});


	$(".blink").focus(function() {
            if(this.title==this.value) {
                this.value = '';
            }
        })
        .blur(function(){
            if(this.value=='') {
                this.value = this.title;                    
			}
		});
      


        $(".log_inp").focus(function(){
            $(".log_inp").css("border-bottom","1px solid white");
            $(this).css("border-bottom","1px solid yellow");
        })
        $(".log_inp").focusout(function(){
            $(".log_inp").css("border-bottom","1px solid white");
        })
        $(".reg_inp").focus(function(){
            $(".reg_inp").css("border-bottom","1px solid white");
            $(this).css("border-bottom","1px solid yellow");
        })
        $(".reg_inp").focusout(function(){
            $(".reg_inp").css("border-bottom","1px solid white");
        })

        $(".upload_filmname").focus(function(){
            $(".upload_filmname").css("border-bottom","1px solid white");
            $(this).css("border-bottom","1px solid yellow");
        })
        $(".upload_filmname").focusout(function(){
            $(".upload_filmname").css("border-bottom","1px solid white");
        })

    
});

    