const express = require('express')
const db_connect=require('./db/mysql_connect')
require("dotenv/config")
const app = express()

app.get('/', function (req, res) {
  res.send('anasayfa')
})
app.get('/app', function (req, res) {
  res.send('app sayfası')
 })

app.listen(process.env.PORT)