<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Cloudsana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="" name="description" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://cloudsana.com/" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.0.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&amp;display=swap" rel="stylesheet">
</head>

<body style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400;">
    <div style="margin-top: 50px;">
        <table cellpadding="0" cellspacing="0"
            style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
            <thead>
                <tr
                    style="background-color: #4f46e5; padding: 3px 0; line-height: 68px; text-align: center; color: #fff; font-size: 24px; font-weight: 700; letter-spacing: 1px;">
                    <th scope="col">
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td style="padding: 24px 24px;">
                        <div
                            style="padding: 8px; color: #dc2626; background-color: rgba(219, 38, 38, 0.05); border: 1px solid rgba(219, 38, 38, 0.05); border-radius: 6px; text-align: center; font-size: 16px; font-weight: 600;">
                            Warning: You're have been contacted by {{ $name }} with phone {{ $phone }}.
                        </div>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 0 24px 15px; color: #8492a6;">
                        {{ $message }}
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 24px;">
                        <a href="mailto:{{ $email }}"
                            style="padding: 8px 20px; outline: none; text-decoration: none; font-size: 16px; letter-spacing: 0.5px; transition: all 0.3s; font-weight: 600; border-radius: 6px; background-color: #4f46e5; border: 1px solid #4f46e5; color: #ffffff;">
                            Reply The Email
                        </a>

                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 24px 0; color: #8492a6;">
                        Thanks for choosing reading this message.
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 24px 15px; color: #8492a6;">
                        Cloudsana <br> Support Team
                    </td>
                </tr>

                <tr>
                    <td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">
                        © {{ date('Y') }} Cloudsan Inc.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
