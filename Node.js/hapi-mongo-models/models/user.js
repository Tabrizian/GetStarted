var Joi = require('joi');
var BaseModel = require('hapi-mongo-models').BaseModel;

var User = BaseModel.extend({
    // instance prototype
});

Cat._collection = 'users'; // the mongo collection name

Cat.schema = Joi.object().keys({
    name: Joi.string().required()
});

Cat.staticFunction = function () {

  // static class function
};

module.exports = Cat;
