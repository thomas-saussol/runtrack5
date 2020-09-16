const http = require('http');
const fs= require ('fs')
const port = 3000;

const server = http.createServer((req, res) => {

    fs.readFile('index.html', (err, data) => {
        if (err) throw err;

        if (req.url == '/') {
            res.write('Hello World!');
            res.end(data);
        }
        console.log();
    });



});
 server.listen(port);
 console.log('server is starting');