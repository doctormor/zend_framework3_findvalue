
    $(".menu ul li a").each(function(){

    	alet('mor : '+$(this).attr("href"));

        if($(this).attr("href")=="test")
            $(this).addClass("active");
    })
