---
title: Basic Usage
description: Transporter Requests are an extention of Laravels PendingRequest, so they should feel very familiar.
extends: _layouts.documentation
section: content
---

# Introduction {#introduction}

Transporter Requests are an extenstion of Laravels `PendingRequest` so all of the methods available usually on a Pending Request are available to you on any Transporter Request.

When you send a Transporter Request, you will receive an `Illuminate\Http\Client\Response` back, allowing you to interact with the response in a familiar way - using methods such as `collect($key)` and `json()` or `failed()` very easily.

All we are doing with Laravel Transporter is shifting the way we construct and send requests in Laravel, to a more Object Oriented approach using classes.

# An Example Request {#example-request}

Here is an example Laravel Transporter Request

```php
$response = TestRequest::build()
    ->withToken('your-api-token')
    ->withData([
        'title' => 'Build a package',
    ])->send();
```

This request above will send a request with the payload `['title' => 'Build a package']` using the HTTP header `Authorization Bearer your-api-token`. Obviously this is not an actual request, but one used to demonstrate how the library works.

# Building a Request {#building-a-request}

When building your request to send, you can override the following:

- **Request Data** using `withData(array $data)`
- **Request Query Parameters** using `withQuery(array $query)`
- **Request Path** using `setPath(string $path)`
- **Request Base URL** using `setBaseUrl(string $baseUrl)`
