---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_bfde98c293e056e599c1ca6781f05074 -->
## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/airlock/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/airlock/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET airlock/csrf-cookie`


<!-- END_bfde98c293e056e599c1ca6781f05074 -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## api/auth/login
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/login`


<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_ff6d656b6d81a61adda963b8702034d2 -->
## api/auth/user
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/auth/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/auth/user`


<!-- END_ff6d656b6d81a61adda963b8702034d2 -->

<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
## api/auth/logout
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/logout`


<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->

<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Display a listing of the User.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_4bf6e6d3497dbfaa1032662aefa64aab -->
## Display a listing of the Subject.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/subjects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/subjects`


<!-- END_4bf6e6d3497dbfaa1032662aefa64aab -->

<!-- START_43272bbfe03b16b2a8825261845f6f29 -->
## Store a newly created Subject in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/subjects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/subjects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/subjects`


<!-- END_43272bbfe03b16b2a8825261845f6f29 -->

<!-- START_e98c7bbd4c50edae6cb0f79873b7e602 -->
## Display the specified Subject.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/subjects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/subjects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/subjects/{subject}`


<!-- END_e98c7bbd4c50edae6cb0f79873b7e602 -->

<!-- START_7e0530486433a18a0d3d2cd4f5fdbb30 -->
## Update the specified Subject in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/subjects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/subjects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/subjects/{subject}`

`PATCH api/subjects/{subject}`


<!-- END_7e0530486433a18a0d3d2cd4f5fdbb30 -->

<!-- START_775668ab35c1b90b39dc084da6492c2f -->
## Remove the specified Subject from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/subjects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/subjects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/subjects/{subject}`


<!-- END_775668ab35c1b90b39dc084da6492c2f -->

<!-- START_f605dcf2ca92a58323db87f649ac1dae -->
## Display the specified Question.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/questions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/questions/{question}`


<!-- END_f605dcf2ca92a58323db87f649ac1dae -->

<!-- START_1bebccad423fb430073b434655c9df9e -->
## Update the specified Question in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/questions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/questions/{question}`

`PATCH api/questions/{question}`


<!-- END_1bebccad423fb430073b434655c9df9e -->

<!-- START_cb5299e7a9fce3c463c5f52278e9fae0 -->
## Remove the specified Question from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/questions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/questions/{question}`


<!-- END_cb5299e7a9fce3c463c5f52278e9fae0 -->

<!-- START_4f55dfa66543949481f1033f91a1a938 -->
## Display a listing of the Question in a Subject.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/subjects/1/questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/subjects/1/questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/subjects/{subject}/questions`


<!-- END_4f55dfa66543949481f1033f91a1a938 -->

<!-- START_2aac6a232fd6c11b2e18c01889df4a8c -->
## Store a newly created Question for a Subject in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/subjects/1/questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/subjects/1/questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/subjects/{subject}/questions`


<!-- END_2aac6a232fd6c11b2e18c01889df4a8c -->

<!-- START_2b390d72350a482fc19b0e8670afe9c4 -->
## Display the specified Answer.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/answers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/answers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/answers/{answer}`


<!-- END_2b390d72350a482fc19b0e8670afe9c4 -->

<!-- START_09fd9e8518c9b604d36eb4242512829d -->
## Update the specified Answer in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/answers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/answers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/answers/{answer}`

`PATCH api/answers/{answer}`


<!-- END_09fd9e8518c9b604d36eb4242512829d -->

<!-- START_c04468caefc10a779cf1380faeb8d92c -->
## Remove the specified Answer from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/answers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/answers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/answers/{answer}`


<!-- END_c04468caefc10a779cf1380faeb8d92c -->

<!-- START_c62321bd8a21519aef8cb5053dbcda11 -->
## Display a listing of the Answer in a Question.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/questions/1/answers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/answers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/questions/{question}/answers`


<!-- END_c62321bd8a21519aef8cb5053dbcda11 -->

<!-- START_d765a79114a96ad09c9b3e1487aca92d -->
## Store a newly created Answer for a Question in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/questions/1/answers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/questions/1/answers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/questions/{question}/answers`


<!-- END_d765a79114a96ad09c9b3e1487aca92d -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->


