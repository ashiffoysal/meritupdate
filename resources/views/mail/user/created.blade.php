<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <title>Merit Tutors</title>
  </head>
  <body
    style="
      font-family: Inter, sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
      font-size: 15px;
      line-height: 1.5;
    "
  >
    <style>
      .hoverbtn {
        padding: 8px 24px !important;
        font-size: 14px;
      }
      .hoverbtn:hover {
        background-color: #096d25 !important;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      }
      .hover:hover {
        opacity: 0.8;
      }
      @media all and (max-width: 575px) {
        table {
          padding: 20px 30px 30px 30px !important;
        }
        .hoverbtn {
          margin: 20px 0 !important;
        }
        .logostyle {
          padding: 15px 0px 10px 0px !important;
        }
        .logostyle a img {
            width: 140px !important;
        }
        .logostyle table{
          padding: 15px 0px 15px 0px !important;
        }
        .header {
          padding-bottom: 12px !important;
          font-size: 24px !important;
        }
        p {
          font-size: 13px !important;
        }
        .paddingBottom {
          padding-bottom: 18px !important;
        }
        .icons {
          padding: 10px 0 !important;
          border-top: 1px solid #d9d9d9 !important;
          border-bottom: 1px solid #d9d9d9 !important;
        }
        .copyright {
          margin-top: 15px !important;
          margin-bottom: 25px !important;
        }
        .copyrightBottom p {
          font-size: 11px !important;
        }
      }
    </style>

    <table
      width="100%"
      align="center"
      style="
        background: #ffffff;
        max-width: 767px;
        padding: 40px 50px 50px 50px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      "
    >
      <!-- Logo -->
      <tr>
        <td class="logostyle" style="padding: 20px 0px 35px 0px;">
          <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td align="right">
                <a href="https://merittutors.co.uk">
                  <img
                    style="width: 190px; height: auto"
                    src="https://merittutors.co.uk/frontend/update-design/assets/images/home/logo.png"
                    alt="logo"
                  />
                </a>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <!-- Body -->
      <tr>
        <td>
          <p style="margin: 0; color: #333; font-size: 22px; font-weight: 500">
            Dear {{ $user['name'] }},
          </p>

          <p style="margin: 20px 0; color: #333; font-size: 15px;">
            We hope you're doing well. We're following up regarding the
            <strong>training videos</strong> in your Merit Tutors account.
            Despite prior reminders, we’ve noticed that some tutors have yet to
            complete all the required videos. These tutorials have been
            specifically designed to enhance your teaching methods, engage your
            students more effectively, and maximise your use of our resources.
          </p>

          <p style="margin: 0 0 20px 0; color: #333; font-size: 15px;">
            <strong>Please ensure the training videos are completed by the end
              of this week.</strong>
          </p>

          <p style="margin: 20px 0; color: #333; font-size: 15px;">
            We understand that you have a busy schedule, but completing this
            training is essential for providing high-quality tutoring sessions.
            If you’ve encountered any issues accessing or completing the videos,
            don’t hesitate to get in touch. We are here to assist you.
          </p>

          <h3
            style="
              font-size: 16px;
              font-weight: 600;
              margin: 20px 0 10px 0;
              color: #247e3d;
            "
          >
            How to Access Your Training Videos:
          </h3>
          <ul
            style="
              margin: 0 0 20px 20px;
              padding: 0;
              color: #333;
              font-size: 15px;
            "
          >
            <li>
              ⿡ Log in to your Merit Tutors account:
              <a
                href="https://www.merittutors.co.uk/login"
                style="color: #247e3d; text-decoration: underline;"
                >Log In Here</a
              >
            </li>
            <li>
              ⿢ Select your subjects:
              <a
                href="https://merittutors.co.uk/tutor/subjects"
                style="color: #247e3d; text-decoration: underline;"
                >Select Subjects</a
              >
            </li>
            <li>
              ⿣ Watch the training videos:
              <a
                href="https://merittutors.co.uk/video/tutorial"
                style="color: #247e3d; text-decoration: underline;"
                >Watch Videos</a
              >
            </li>
          </ul>

          <h3
            style="
              font-size: 16px;
              font-weight: 600;
              margin: 20px 0 10px 0;
              color: #247e3d;
            "
          >
            Login Details:
          </h3>
          <p style="margin: 0; font-size: 15px; color: #333;">
            ✉ Email: <strong>{{ $user['email'] }}</strong><br />
            🔑 Password:
            <strong>123456</strong> (If you’ve changed your password, please use
            the updated one instead.)
          </p>

          <p style="margin: 20px 0; color: #333; font-size: 15px;">
            We truly appreciate your commitment to improving the learning
            experience for your students. Completing these videos will help you
            develop your skills and ensure you're fully prepared for your
            upcoming tutoring sessions.
          </p>

          <p style="margin: 20px 0; color: #333; font-size: 15px;">
            If you experience any difficulties or need further assistance, feel
            free to reach out. We’re more than happy to help!
          </p>

          <p style="margin: 20px 0; color: #333; font-size: 15px;">
            Thank you for your continued dedication!
          </p>

          <p
            class="paddingBottom"
            style="
              margin: 0;
              color: #333;
              font-size: 15px;
              font-weight: 400;
              padding-bottom: 30px;
            "
          >
            Best Regards,<br />
            <span style="color: #247e3d; font-weight: 500;">Merit Tutors Team</span>
          </p>
        </td>
      </tr>

      <!-- Social icons -->
      <tr>
        <td
          class="icons"
          style="
            text-align: center;
            padding: 18px 0;
            border-top: 1.5px solid #d9d9d9;
            border-bottom: 1.5px solid #d9d9d9;
          "
        >
          <a
            href="{{ $social->facebook }}"
            class="hover"
            style="margin: 0 2px; display: inline-block; border-radius: 50px"
          >
            <img
              src="https://i.postimg.cc/76KTDD41/facebook.png"
              alt="Facebook"
              width="34"
            />
          </a>
          <a
            href="{{ $social->instagram }}"
            class="hover"
            style="margin: 0 2px; display: inline-block; border-radius: 50px"
          >
            <img
              src="https://i.postimg.cc/d3XkkBLL/instagram.png"
              alt="Instagram"
              width="34"
            />
          </a>
          <a
            href="{{ $social->twitter }}"
            class="hover"
            style="margin: 0 2px; display: inline-block; border-radius: 50px"
          >
            <img
              src="https://i.postimg.cc/ZKByk1M3/x.png"
              alt="Twitter"
              width="34"
            />
          </a>
          <a
            href="{{ $social->linkend }}"
            class="hover"
            style="margin: 0 2px; display: inline-block; border-radius: 50px"
          >
            <img
              src="https://i.postimg.cc/j2CnS9qp/linkedin.png"
              alt="LinkedIn"
              width="34"
            />
          </a>
        </td>
      </tr>

      <!-- Footer -->
      <tr class="copyrightBottom">
        <td style="text-align: center; font-size: 12px; color: #888; padding: 0px">
          <p
            class="copyright"
            style="
              font-size: 11px;
              color: #000;
              margin-top: 18px;
              margin-bottom: 32px;
            "
          >
            &copy; {{ date('Y') }} Merit Tutors. All rights reserved.
          </p>

          <tr>
            <td style="text-align: center; padding: 0px">
              <a
                href="https://www.merittutors.co.uk/privacy-policy"
                style="
                  color: #333333;
                  font-size: 11px;
                  text-decoration: underline;
                  font-weight: 400;
                "
                >Privacy policy</a
              >
              <img
                style="width: 6px; margin: 0 1.5px"
                src="https://i.postimg.cc/xjFb40tn/dots.png"
                alt="dots"
              />
              <a
                href="https://www.merittutors.co.uk/terms-condition"
                style="
                  color: #333333;
                  font-size: 11px;
                  text-decoration: underline;
                  font-weight: 400;
                "
                >Terms of service</a
              >
              <img
                style="width: 6px; margin: 0 1.5px"
                src="https://i.postimg.cc/xjFb40tn/dots.png"
                alt="dots"
              />
              <a
                href="https://www.merittutors.co.uk/contact"
                style="
                  color: #333333;
                  font-size: 11px;
                  text-decoration: underline;
                  font-weight: 400;
                "
                >Help center</a
              >
            </td>
          </tr>
        </td>
      </tr>
    </table>
  </body>
</html>
