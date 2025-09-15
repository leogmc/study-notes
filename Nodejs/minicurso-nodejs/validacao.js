import Joi from 'joi';

export const modeloTime = Joi.object({
    nome: Joi.string().min(3).required(),
    sigla: Joi.string().length(3).required(),
    pontos: Joi.number().min(0).required(),
    vitorias: Joi.number().min(0).required(),
    empates: Joi.number().min(0).required(),
    derrotas: Joi.number().min(0).required(),
    golsMarcados: Joi.number().min(0).required(),
    golsSofridos: Joi.number().min(0).required(),
    saldoGols: Joi.number().required(),
});

export const modeloAtualizacaoTime = Joi.object({
    nome: Joi.string().min(3),
    sigla: Joi.string().length(3),
    pontos: Joi.number().min(0),
    vitorias: Joi.number().min(0),
    empates: Joi.number().min(0),
    derrotas: Joi.number().min(0),
    golsMarcados: Joi.number().min(0),
    golsSofridos: Joi.number().min(0),
    saldoGols: Joi.number(),
}).min(1);
