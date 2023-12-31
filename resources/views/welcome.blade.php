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

    <div>
        <div>
            {!! QrCode::format('svg')->merge(public_path('logoku.jpg'), 0.3, true)->generate('My Name is Rochmad') !!}
            <p>Scan me to return to the original page.</p>
        </div>
        <div>
            {!! QrCode::wiFi([
                'ssid' => 'no name',
                'encryption' => 'WPA',
                'password' => 'dinaani1213',
            ]) !!}
        </div>

        <div>
            {!! QrCode::phoneNumber('+62 853-9948-3368') !!}
        </div>
        <div style="margin-top: 8rem;">
            <img src="data:image/png;base64,{{ $imageBase }}" alt="qrcode">
        </div>
    </div>
</body>

</html>
