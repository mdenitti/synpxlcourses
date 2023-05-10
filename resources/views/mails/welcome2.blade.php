<html>
    <head>
        <title>Welcome Email</title>
        <style>
            body {
                color: #000000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                line-height: 1.5em;
                margin: 0;
                padding: 0;
            }
            
            h3 {
                color: #CC0000;
                font-weight: lighter;
            }
            
            .wrapper {
                background-color: #f2f2f2;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .content {
                width: 80%;
                background-color: #ffffff;
                padding: 20px;
            }
            
            .sidebar {
                width: 20%;
                background-color: #f2f2f2;
                padding: 20px;
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <div class="sidebar"></div>
            <div class="content">
                <img src="https://www.syntrapxl.be/themes/custom/sassy/assets/images/syntra/logo.svg" width="200px">
                <h3>Welcome to the SyntraPXL {{$order->email}}</h3>
                <br/>
                <p>Dear ,</p>

                <p>Welcome to [Your Course Name]! We're thrilled to have you on board and look forward to helping you achieve your goals. Your e-mail adress: <b>{{$order->email}}</b></p>

                <p>With our [Course Features], we're confident that you'll gain the skills and knowledge you need to succeed. Whether you're looking to [Course Benefits], or simply want to learn something new, we're here to support you every step of the way.</p>

                <p>These are courses you enrolled in:</p>
               

                <p>If you have any questions or concerns, please don't hesitate to reach out to us at [Your Contact Information]. We're always happy to help.</p>

                <p>Once again, welcome to [Your Course Name]!</p>

                <p>Best regards,
                [Your Name/Your Team Name]</p>
            </div>
            <div class="sidebar"></div>
        </div>
    </body>
</html>
