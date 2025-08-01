$(function () {

    $("p:not('.p')").css("font-weight", "bold");

    $("p:first").css("color", "red");
    $("p:last").css("color", "blue");

    $("p").css("background", "#eee");

    $("p:even").css("background", "brown");
    $("p:odd").css("background", "yellow");

    $("p:eq(4)").text("Testando");

    //TODOS ACIMA DA POSIÇÃO SELECIONADA RECEBEM
    $("p:gt(4)").text("0000000");

    //TODOS ACIMA DA POSIÇÃO SELECIONADA RECEBEM
    $("p:lt(4)").text("1111111");

    //PRECISA DO ESPAÇO
    $(".list :header").css({
        "font-size": "1.4rem",
        color: "green",
    })

    $(".list :header span").css("color", "red");


});