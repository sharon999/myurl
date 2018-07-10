$(document).ready(function(){
//call create function in shorturl controller
	
    $("#submitbtn").click(
        function(){
            var url=$("#url").val();

            if(url!='')
            {
                $.ajax({
                    type: "POST",
                    url: base_url + "index.php/shorturl/create",
                    data: "url="+url,
                    cache:false,
                    success:
                    function(data){
                        $("#short_url").html(data);
                    }
                });
            }

            return false;

        });


});