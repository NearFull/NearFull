
const express = require('express');
const cors = require('cors');
const app = express();
app.use(cors({
  origin: 'http://api.printful.com/'
}));
const port = 3000
function getProducts(){
    let headers = new Headers();

    headers.append('Content-Type', 'application/json');
    headers.append('Accept', 'application/json');
    headers.append('Origin','http://api.printful.com/');

    const APIURL = "http://api.printful.com/store/products";
            fetch(APIURL, {
                mode: 'no-cors',
               method: "GET",
               withCredentials: true,
               headers: {
                'Accept': 'application/json',
               'Content-Type': 'application/json',
                Authorization: 'Bearer {QH0iYmOvjvh5hy7OzTMoFo0Tp0QawPzFjh4rdfau}'
                
                


              }
            })
              .then(resp => resp.json())
              .then(function(data) {
                console.log(data);
              })
              .catch(function(error) {
                console.log(error);
              });
}