<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

### Create database file
```touch database/database.sqlite```

### Copy and create environment file
```cp env.example env```

### Change your database for sqlite
```
DB_CONNECTION=sqlite
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=laravel
#DB_USERNAME=root
#DB_PASSWORD=
```

## Eloquent base Graphql Example

![](screens/Screen Shot 2022-07-31 at 22.50.26.png)


#### ```graphql/schema.graphql```
```graphql
type User {
    id: ID!
    name: String!
    email: String!
    posts: [Post!]! @hasMany
}

type Post {
    id: ID!
    name: String!
    content: String!
    user: [User!]! @belongsTo
}

type Query {
    allUsers: [User!]! @all
    users: [User!]! @paginate
    posts: [Post!]! @paginate
}
```
