import express from 'express'
import { userLogin, userSignup } from './Controllers/userController.js'
import { addCurso, curso } from './Controllers/cursosController.js'

const router = express.Router()

router.get('/login', userLogin)
router.get('/signup', userSignup)

// Cursos
router.get('/curso', curso )
router.post('/curso/adiciona', addCurso)


export default router