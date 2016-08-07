var http = require('http');
server = http.createServer( function(req, res){
    res.writeHead(200, {'content-type': 'text/plain'});
    res.end('Hello World');
});

server.listen(3333, '127.0.0.1');
