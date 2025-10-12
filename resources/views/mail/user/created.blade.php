<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Merit Tutors - Training Reminder</title>
  <style>
    /* General Styles */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Helvetica Neue', Arial, sans-serif;
      background-color: #f4f6f9;
      color: #4a4a4a;
    }

    /* Container */
    .container {
      width: 100%;
       max-width: 100%;
      margin: 30px auto;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    /* Header */
    .header {
      background-color: #2c3e50;  /* Dark Gray Header */
      color: #fff;
      padding: 30px 40px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect for header */
    }

    .header img {
      width: 180px;
      margin-bottom: 15px;
    }

    /* Body Content */
    .body {
      padding: 30px;
    }

    h1, h2 {
      font-size: 24px;
      color: #004aad;
      margin-bottom: 15px;
    }

    p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 20px;
      color: #4a4a4a;
    }

    .title {
      color: #004aad;
      font-size: 18px;
      font-weight: bold;
      margin-top: 20px;
    }

    /* Button */
    .button {
      display: inline-block;
      background-color: #004aad;
      color: white;
      padding: 12px 25px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
      margin-top: 15px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #003b8d;
    }

    /* Footer */
    .footer {
        width: 100%;
       max-width: 100%;
      background-color: #34495e; /* Dark Gray Footer */
      color: #ffffff;
      padding: 20px 40px;
      text-align: center;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
      box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect for footer */
    }

    .footer p {
      font-size: 14px;
      line-height: 1.6;
    }

    .footer a {
      color: #ffffff;
      text-decoration: none;
      font-weight: bold;
    }

    ul {
      list-style: none;
      padding: 0;
      margin-bottom: 25px;
    }

    li {
      margin-bottom: 12px;
    }

  </style>
</head>
<body>

  <div class="container">
    <!-- Header Section -->
    <div class="header">
      <img src="https://merittutors.co.uk/frontend/update-design/assets/images/home/logo.png" alt="Merit Tutors Logo">
    </div>

    <!-- Body Section -->
    <div class="body">
      <h1>Hello {{ $user->name }},</h1>

      <p>We hope you're doing well. We're following up regarding the <strong>training videos</strong> in your Merit Tutors account. Despite prior reminders, we’ve noticed that some tutors have yet to complete all the required videos. These tutorials have been specifically designed to enhance your teaching methods, engage your students more effectively, and maximize your use of our resources.</p>

      <p><span class="title">Please ensure the training videos are completed by the end of this week.</span></p>

      <p>We understand that you have a busy schedule, but completing this training is essential for providing high-quality tutoring sessions. If you’ve encountered any issues accessing or completing the videos, don’t hesitate to get in touch. We are here to assist you.</p>

      <h2>How to Access Your Training Videos:</h2>
      <ul>
        <li>⿡ Log in to your Merit Tutors account: 
          <a href="https://www.merittutors.co.uk/login" class="button">Log In Here</a>
        </li>
        <li>⿢ Select your subjects: 
          <a href="https://merittutors.co.uk/tutor/subjects" class="button">Select Subjects</a>
        </li>
        <li>⿣ Watch the training videos: 
          <a href="https://merittutors.co.uk/video/tutorial" class="button">Watch Videos</a>
        </li>
      </ul>

      <h2>Login Details:</h2>
      <ul>
        <li>✉ Email: {{ $user->email }}</li>
        <li>🔑 Password: 123456 (If you’ve changed your password, please use the updated one instead.)</li>
      </ul>

      <p>We truly appreciate your commitment to improving the learning experience for your students. Completing these videos will help you develop your skills and ensure you're fully prepared for your upcoming tutoring sessions.</p>

      <p>If you experience any difficulties or need further assistance, feel free to reach out. We’re more than happy to help!</p>

      <p>Thank you for your continued dedication!</p>

      <p>Best regards,<br>
      Merit Tutors</p>
    </div>

    <!-- Footer Section -->
    <div class="footer">
      <p style="color:#fff">Merit Tutors Ltd | 54 Upton Lane, London E7 9LN<br>
      Phone: 0208 616 2526 | <a href="mailto:info@merittutors.co.uk">info@merittutors.co.uk</a></p>
      <p><a href="https://www.merittutors.co.uk">www.merittutors.co.uk</a></p>
    </div>
  </div>

</body>
</html>
