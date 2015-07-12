# JnAPI
A public RESTful API for all Jake &amp; Amir episodes.
--

### Using the API
```
GET api.jakeandamir.com/api/v1/episodes
GET api.jakeandamir.com/api/v1/episodes/{id}
GET api.jakeandamir.com/api/v1/episodes/{id}/extras


GET api.jakeandamir.com/api/v1/extras
GET api.jakeandamir.com/api/v1/extras/{id}
```

### Building the API
Built with Laravel's LUMEN framework.

1. clone this repository
1. `cd` into the project and `composer install`
1. configure the `.env` file (copy config settings below)

### .env
Your `.env` file should look like this

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=9L{G+D6}GL6ycwR2JhU%8pdtX9bZ&y(G

APP_LOCALE=en
APP_FALLBACK_LOCALE=en

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=janda
DB_USERNAME=root
DB_PASSWORD=mysql

CACHE_DRIVER=memcached
SESSION_DRIVER=memcached
QUEUE_DRIVER=database

# MAIL_DRIVER=smtp
# MAIL_HOST=mailtrap.io
# MAIL_PORT=2525
# MAIL_USERNAME=null
# MAIL_PASSWORD=null
# MAIL_FROM_ADDRESS=null
# MAIL_FROM_NAME=null

# FILESYSTEM_DRIVER=local
# FILESYSTEM_CLOUD=s3

# S3_KEY=null
# S3_SECRET=null
# S3_REGION=null
# S3_BUCKET=null

# RACKSPACE_USERNAME=null
# RACKSPACE_KEY=null
# RACKSPACE_CONTAINER=null
# RACKSPACE_REGION=null
```