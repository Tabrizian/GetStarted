const Hapi = require('hapi');
const Vision = require('vision');
const Inert = require('inert');

const server = new Hapi.Server();

server.connection({
    port: 8000
});

const handler = function(request, reply) {

    reply.view('index', {
        title: 'examples/views/handlebars/layout.js | Hapi ' + request.server.version,
        message: 'Hello World!\n'
    });
};

server.register([Vision, Inert], (err) => {

    if (err) {
        throw err;
    }

    server.views({
        engines: {
            html: require('handlebars')
        },
        path: __dirname + '/resources/views',
        layout: true
    });

    server.route({
        method: 'GET',
        path: '/',
        handler: handler
    });

    server.route({
        method: 'GET',
        path: '/js/app.js',
        handler: {
            file: 'public/js/app.js'
        }
    });

    server.start((err) => {

        if (err) {
            throw err;
        }

        console.log('Server is listening at ' + server.info.uri);
    });
});
