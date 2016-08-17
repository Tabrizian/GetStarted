var data = [
    {
        "first_name" : "Asghar",
        "last_name" : "Gholi"
    },
    {
        "first_name" : "Mammad",
        "last_name" : "Akbari"
    },
    {
        "first_name" : "Asghar",
        "last_name" : "Gholi"
    },
];

var my_callback = function (my_string) {
    console.log(my_string);
};

function get_data(id, attr, callback) {
    var to_be_printed = data[id][attr];
    callback(to_be_printed);
}

get_data(1, "last_name", my_callback);
