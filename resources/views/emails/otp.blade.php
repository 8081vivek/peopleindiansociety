<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Verification OTP</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f3f7f4; padding:20px;">

<div style="
    max-width:600px;
    background:#ffffff;
    margin:auto;
    padding:25px;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
">

    <h2 style="text-align:center; color:#1b5e20;">
        🌱 People of Indian Society
    </h2>

    <hr>

    <p>Dear User,</p>

    <p>
        Thank you for registering with
        <strong>People of Indian Society</strong>.
    </p>

    <p>
        To complete your <strong>registration verification</strong>,
        please use the OTP given below:
    </p>

    <div style="text-align:center; margin:30px 0;">
        <span style="
            display:inline-block;
            font-size:32px;
            letter-spacing:6px;
            font-weight:bold;
            color:#ffffff;
            background:#2e7d32;
            padding:12px 30px;
            border-radius:6px;
        ">
            {{ $otp }}
        </span>
    </div>

    <p>
        This OTP is valid for <strong>5 minutes</strong>.
        Please do not share this OTP with anyone.
    </p>

    <p>
        If you did not initiate this registration,
        please ignore this email.
    </p>

    <br>

    <p>
        Warm regards,<br>
        <strong>People of Indian Society Team</strong>
    </p>

    <hr>

    <p style="font-size:12px; color:#777; text-align:center;">
        This is an auto-generated email. Please do not reply.
    </p>

</div>

</body>
</html>
