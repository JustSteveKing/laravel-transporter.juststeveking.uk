---
title: Faking a Request
description: While testing your application, you can use our built in faking methods to make testing easier.
extends: _layouts.documentation
section: content
---

# Faking {#faking}

While testing your application, you can use our built in faking methods to make testing easier.

To send a Faked request:

```php
JustSteveKing\Transporter\Request::fake();

$response = TestRequest::build()
    ->withToken('your-test-token')
    ->withFakeData([
        'data' => 'fake-data-returned',
    ])->send();
```

We are actively looking to improve how we can test Transporter requests to be closer aligned to how Laravels `Http::fake()` works.
