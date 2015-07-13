# JnAPI
A public RESTful API for all Jake &amp; Amir episodes.

--

### Using the API
```
GET api.jakeandamir.com/api/v1/episodes // Gets all episodes
GET api.jakeandamir.com/api/v1/episodes/{id} // Gets a single episode
GET api.jakeandamir.com/api/v1/episodes/{id}/extras // Gets an episode's extras
GET api.jakeandamir.com/api/v1/episodes/search/{string} // Search results (from Title & Script)

GET api.jakeandamir.com/api/v1/extras // Get all extras
GET api.jakeandamir.com/api/v1/extras/{id} // Get single extra
```

### Building the API
Built with the [Laravel](http://laravel.com/docs/5.1) framework.

Search functionality via [nicolaslopezj/searchable](https://github.com/nicolaslopezj/searchable).


1. clone this repository
1. `cd` into the project and `composer install`
1. configure the `.env` file

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)