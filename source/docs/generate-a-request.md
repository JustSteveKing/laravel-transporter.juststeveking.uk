---
title: Generate a Request
description: Using the Artisan command to generate a new Transporter Request
extends: _layouts.documentation
section: content
---

# Generate a Request {#generate-a-request}

Generating a Transporter request is super simple as there is an artisan command which will handle this for you:

```bash
php artisan make:api-request NameOfYourRequest
```

This will be published by default in: `app/Transporter/Requests/NameOfYourRequest.php`.
