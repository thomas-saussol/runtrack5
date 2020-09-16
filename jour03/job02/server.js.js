const http = require('http');

const port = 3000;

const server = http.createServer((req, res) => {

    if(req.url=='/'){
        res.write('Hello World!');
        res.end();
    }

});
 server.listen(port);
 console.log('server is starting');