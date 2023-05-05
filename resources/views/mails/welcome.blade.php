<html>
    <head>
        <title>Welcome Email</title>
        <style>
            body {
                color: #000000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                line-height: 1.5em;
            }
            
           h3 {
             color: #CC0000;
             font-weight:lighter;
           }
        </style>
    </head>

    <body>
        <h3>Welcome to the SyntraPXL {{$validatedData['name']}}</h3>
        <br/>
            <p>Dear {{$validatedData['name']}},</p>

            <p>Welcome to [Your Course Name]! We're thrilled to have you on board and look forward to helping you achieve your goals. Your e-mail adress: <b>{{$validatedData['name']}}</b></p>

            <p>With our [Course Features], we're confident that you'll gain the skills and knowledge you need to succeed. Whether you're looking to [Course Benefits], or simply want to learn something new, we're here to support you every step of the way.</p>

            <p>These are courses you enrolled in:</p>
            @foreach ($courses as $course)
                {{$course->name}}<hr>
            @endforeach

            <p>If you have any questions or concerns, please don't hesitate to reach out to us at [Your Contact Information]. We're always happy to help.</p>

            <p>Once again, welcome to [Your Course Name]!</p>

            <p>Best regards,
            [Your Name/Your Team Name]</p>

    </body>
</html>