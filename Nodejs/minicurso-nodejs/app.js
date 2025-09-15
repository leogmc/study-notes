import tabela2025 from "./tabela.js";
import express from "express";
import { modeloTime, modeloAtualizacaoTime } from "./validacao.js";

const app = express();

app.use(express.json());


app.get("/", (requisicao, resposta) => {
    resposta.status(200).send(tabela2025);
})

app.get('/:sigla', (requisicao, resposta) => {
    const siglaInformada = requisicao.params.sigla.toUpperCase();
    const time = tabela2025.find((infoTime) => infoTime.sigla === siglaInformada);

    if (!time) {
        resposta.status(404).send({ erro: "Time procurado não encontrado" });
        return;
    }
    resposta.status(200).send(time);
});

app.put('/:sigla', (req, res) => {
    const siglaInformada = req.params.sigla.toUpperCase();
    const timeSelecionado = tabela2025.find(t => t.sigla === siglaInformada);
    if(!timeSelecionado){
        res.status(404).send({ erro: "Time procurado não encontrado" });
        return;
    }
    const { error } = modeloAtualizacaoTime.validate(req.body);

    if(error){
        res.status(400).send({ erro: error.message });
        return;
    }
    const resultadoAvaliacao = modeloAtualizacaoTime.validate(req.body);
    console.log(resultadoAvaliacao);
    const campos = Object.keys(req.body);
    for(let campo of campos){
        timeSelecionado[campo] = req.body[campo]
    }
    res.status(200).send(timeSelecionado);

})

app.post('/', (req, res) => {
    const novoTime = req.body;
    const {error} = modeloTime.validate(novoTime);
    if(error){
        res.status(400).send({ erro: error.message });
        return;
    }
    tabela2025.push(novoTime);
    res.status(201).send(novoTime);
});

app.delete('/:sigla', (req, res) => {
    const siglaInformada = req.params.sigla.toUpperCase();
    const indiceTimeSelecionado = tabela2025.findIndex(t => t.sigla === siglaInformada);
    if(indiceTimeSelecionado === -1){
        res.status(404).send({ erro: "Time procurado não encontrado" });
        return;
    }
    const timeRemovido = tabela2025.splice(indiceTimeSelecionado,1);
    res.status(200).send(timeRemovido);

})

app.listen(300, () => console.log("Servidor rodando com sucesso"));