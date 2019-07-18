<!doctype html>
<html lang="en">
<body>
<div>
    <p>Dear {{ $user->username }},</p>
    <p>Your account has been created. Please click the following link ato activate your account:</p>
    <a href="{{ route('verify', $user->email_verification_token) }}">
        click here
    </a>

    <br/>

    <p>Thanks!</p>
</div>
</body>
</html>