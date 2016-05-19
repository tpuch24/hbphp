/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){

    
    $("#cat").change(function(){
        if ($(this).val()!== 0){
            $("#result").html('Veuillez :)');

            $.ajax({
                url: "ajax.listes.requete.php",
                data: {id: $(this).val()},
                error: function(){
                    $("#result").empty();
                    alert('erreur');
                },
                success: function(data){
                    
                    var data2 =  jQuery.parseJSON(data);
                   console.log(data2);
                   var $result=$('#result');
                   var liste =$('<select></select>');
                   //data = [{"id":"2","titre":"Voici un beau titre de bouquin"},{"id":"3","titre":"Produit X+1"},{"id":"4","titre":"Produit X + 2"}];
                    
                    
                    //console.log(liste);
                    for(var item in data2){
                       console.log(item);
                       liste.append('<option value="'+data2[item].id+'">'+data2[item].titre+'</option>');
                       //console.log(data[item].id);
                    }
                    $result.html(liste);
                },
                datatype: "json"
            });
        }
        else {$("#result").empty();}
    });
});
