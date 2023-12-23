<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <h1>Hai, Call me Alex.</h1>

    <p>Please Fill Captcha code below:</p>

    <div
        style="display: flex; flex-direction: column; gap: 1rem; border: solid 1px black; padding: 1rem; border-radius: 0.75rem;">
        <img src="{{ $captchaPath }}" style="width: 150px;" alt="captcha code">
        <input placeholder="write code here..." />
    </div>
</body>

</html>
