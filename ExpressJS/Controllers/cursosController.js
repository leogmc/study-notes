const listaCursos = []

export const curso = (req, res)=>{
    res.json(listaCursos)
}

export const addCurso =  (req, res)=>{
    const dadosCurso = req.body
    console.log(dadosCurso)
    listaCursos.push(dadosCurso)
    res.send('Curso adicionado com sucesso!')
}

