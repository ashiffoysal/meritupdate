<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #0078d4;
            text-align: center;
            padding: 20px;
        }
        .email-header img {
            max-height: 60px;
            margin-bottom: 10px;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
            color: #ffffff;
        }
        .email-body {
            padding: 20px;
            font-size: 16px;
            color: #333333;
            line-height: 1.6;
        }
        .email-body h2 {
            font-size: 20px;
            color: #0078d4;
            margin-bottom: 10px;
        }
        .email-body p {
            margin: 0 0 15px;
        }
        .email-footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px;
            border-top: 1px solid #e0e0e0;
        }
        .email-footer img {
            max-height: 40px;
            margin-bottom: 10px;
        }
        .email-footer p {
            font-size: 14px;
            color: #777777;
            margin: 5px 0 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <img src="https://merittutors.co.uk/uploads/logo/logo_1648033550.png" alt="Merit Tutors Logo">
            <h1>Merit Tutors</h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            <h2>Tutorial: {{ $data['title'] }}</h2>
            <p>Dear Admin,</p>
            <p>Tutor {{ $data['name'] }} has successfully completed the {{ $data['title'] }}. Please review and provide feedback as necessary.</p>
            <p>Thank you for your attention to this matter.</p>
            <p>Kind regards,</p>
            
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <img src="https://merittutors.co.uk/uploads/logo/logo_1648033550.png" alt="Merit Tutors Logo">
            <p>© {{ Carbon\Carbon::now()->format('Y'); }} Merit Tutors. All rights reserved.</p>
            <p>54 Upton Lane London E7 9LN  | info@merittutors.co.uk</p>
        </div>
    </div>
</body>
</html>
