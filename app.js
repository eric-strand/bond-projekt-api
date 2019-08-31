var SerpWow = require('google-search-results-serpwow')

// create the serpwow object, passing in our API key
let serpwow = new SerpWow('B29D906044534056910C9F4B713D340F')

// set up the search parameters
var params = {
    q: 'pizza'
}

// retrieve the search results as JSON
serpwow.json(params)
    .then(result => {

        // pretty-print the JSON result
        var a = JSON.stringify(result, 0, 2));
        return a;

    })
    .catch(error => {
        console.log(error);
    });