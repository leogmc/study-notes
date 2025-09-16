import express from 'express'
import db from './models/index.js'

const app= express()
const PORT = 3000

app.get('/', (req, res) =>{
    res.send('Hello Express')
})

db.sequelize.sync().then(()=>{
    console.log('Conectado com o banco de dados.')
})


app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});