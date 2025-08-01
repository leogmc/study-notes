$(function () {
    //ESTÁ PEGANDO O ELEMENTO P DENTRO DA DIV
    // $("div p").css("color", "red");

    //PEGANDO O ELEMENTO FILHO DIRETO DO ARTICLE
    $("article > p").css("color", "blue");

    //PEGANDO TODOS OS FILHOS DIRETOS
    $("article > *").css("color", "gray");

    //PEGANDO OS ELEMENTOS IMEDIATAMENTE ANTERIORES E POSTERIORES
    $("div + p").css("background", "yellow");



});