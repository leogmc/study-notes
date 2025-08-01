
//Carrega todos os elementos HTML antes de carregar os elementos que estão dentro do escopo
//$(document).load()

//FORMA PADRÃO DE INICIALIZAR O jQUERY
//Carrega o DOM antes de rodar o script
// $(document).ready(function (){
//     $(".jquery_essentials").html("jQuery Iniciado!");
// });


// FORMA PADRÃO DE INICIALIZAR O jQUERY SIMPLIFICADA
$(function(){
    $(".jquery_essentials").html("jQuery Iniciado com gatilho!");
});


//CARREGANDO ANTES DE OUTRA LIB
// jQuery(function ($){
//     $(".jquery_essentials").html("jQuery antes de outra lib!");
// });

//CARREGANDO DEPOIS DE OUTRA LIB
//     var $j = jQuery.noConflict();
//     $j(document).ready(function(){
//         $j(".jquery_essentials").html("jQuery depois de outra lib!");
//     });