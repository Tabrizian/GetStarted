'use strict';

const Boom = require('boom');
const uuid = require('node-uuid');
const Joi = require('joi');

exports.register = function(server, options, next) {

    const db = server.app.db;


    server.route({
        method: 'GET',
        path: '/books',
        handler: function (request, reply) {

            db.books.find((err, docs) => {

                if (err) {
                    return reply(Boom.wrap(err, 'Internal MongoDB error'));
                }

                reply(docs);
            });

        }
    });
    return next();
};

exports.register.attributes = {
    name: 'routes-books'
};
