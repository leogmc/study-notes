$(function () {

        //SELETOR DE ELEMENTO
        $("b").text("jQuery Essentials");

        $("jquery").css("color", "orange");

        //SELECIONA TODOS OS ELEMENTOS
        $("*").css("border", "1px solid green");

        //SELECIONA OS ELEMENTOS FILHOS DE UMA DIV
        $("div *").css("border", "4px solid #ccc");

        //SELETOR MÚLTIPLO
        $(".jquery, b").css({
            background: "blue",
            color: "red",
            'border-radius': "4px",
            'font-size': "1.5rem",
        });



});