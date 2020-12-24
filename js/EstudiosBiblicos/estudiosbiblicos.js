$(document).ready(function(){
                $("ul#estudios li a").click(function(e) {
                    e.preventDefault();

                    $("#estu").attr("src", $(this).attr("href"));
                });
            });

