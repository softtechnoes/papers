<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center; color: #20d8ed;"><strong>Confirmation Email</strong></h1>
    <p style="text-align: center;">
        <strong>Email confirmation<br />Thank you for your interest, we hope you find the program useful</strong>
    </p>
    <p style="text-align: center;">&nbsp;</p>
    <p><strong><img style="display: block; margin-left: auto; margin-right: auto;" src="https://1.bp.blogspot.com/-Kvxd7ogJUVw/XhQOXu8U9QI/AAAAAAAAA_Q/4WRQ-B_G3pUv2SitXndFi08Rgb2PZXpTgCLcBGAsYHQ/s1600/laravel%2Bmigrations.png" width="543" height="330" /></strong></p>
    <p>&nbsp;</p>
    <p style="text-align: center;">Hello, {{$user->name}} ! You are just one step away from your register.<br />Please click the link below to verify your email.</p>
    <p style="text-align: center;">&nbsp;</p>
    <p style="text-align: center;">
        {{-- <a style="background: orange; color: #ffffff; padding: 10px 50px; border-radius: 3px;" href="#">confirm</a> --}}
        <a href="{{url('user/verify', $user->token)}}" style="background: orange; color: #ffffff; padding: 10px 50px; border-radius: 3px;">Verify Email</a>
    </p>
    <p style="text-align: center;">&nbsp;</p>
    <p style="text-align: center; font-size: 10px;"><code>Trip Builder Pro is a registered business name of Trip Builder Pro England Limited.</code><br /><code>Registered in London as a private limited company, Company Number 4777441</code><br /><code>registered Office: Wilton Plaza, Wilton Place, London</code></p>
    <p>&nbsp;</p>
    
</body>
</html>