var mongodb = require('mongodb');

var uri = 'mongodb://localhost:27017/example';
mongodb.MongoClient.connect(uri, function(error, db) {

    if (error) {
        console.log(error);
        process.exit(1);
    }

    var doc = {
        title: 'Jaws',
        year: 1975,
        director: 'Steven Spielberg',
        rating: 'PG'
    };

    db.collection('movies').insert(doc, function(error, result) {
        if (error) {
            console.log(error);
            process.exit(1);
        }

        db.collection('movies').find().toArray(function(error, docs) {
            if (error) {
                console.log(error);
                process.exit(1);
            }

            docs.forEach(function(doc) {
                console.log(JSON.stringify(doc));
            });
            process.exit(0);
        });

    });
});
