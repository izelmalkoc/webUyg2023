const express = require('express')
const app = express()

app.get('/app', function (req, res) {
  res.send('Hello World')
})

app.listen(5000)