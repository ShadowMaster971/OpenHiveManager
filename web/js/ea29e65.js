$(function(){$(".styled").uniform();if(!$("input:checkbox:checked").val()){$("#bouton_submit").hide()}});$("input:checkbox").change(function(){if($("input:checkbox:checked").val()){$("#bouton_submit").show("slow")}else{$("#bouton_submit").hide("slow")}});