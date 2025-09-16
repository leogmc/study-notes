
import sequelize from '../config/sequelize.js'
import Sequelize from 'sequelize'
import Curso from './curso.js'

const curso = Curso(sequelize, Sequelize.DataTypes)

const db = {
    curso,
    sequelize
}

export default db