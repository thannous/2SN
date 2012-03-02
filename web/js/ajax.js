/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(function($){
    $("#moreact").click(function(){
        /*$("#moreact").fadeOut(normal, function(){
            $("#anime").show();
        });
        /*var user_id = $("#user_id").val();
        var lignede = $("#lignede").val();
        var lignenb = $("#lignenb").val();*/

        $.ajax({
            type:"POST",
            url:"{{ path('MysnInterfaceBundle_ajax_more_actu') }}",
            //data:"user_id"+user_id+"&lignede="+lignede+"&lignenb="+lignenb,
            cache:"false",
            sucess:function(data){
                $("#actualite").append(data);
            }
        });
        
        return false;
    });
});
