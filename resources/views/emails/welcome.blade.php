<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to CIASCE</title>
</head>
<body style="margin:0;padding:0;background:#eef4ea;font-family:Arial,Helvetica,sans-serif;color:#333333;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#eef4ea;padding:24px 0;">
    <tr>
      <td align="center">
        <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:14px;overflow:hidden;box-shadow:0 6px 24px rgba(20,83,45,0.12);">

          <!-- Header -->
          <tr>
            <td style="background:#1b5e20;background:linear-gradient(135deg,#2e7d32,#1b5e20);padding:30px;text-align:center;">
              <div style="color:#ffffff;font-size:24px;font-weight:bold;letter-spacing:1px;">CIASCE</div>
              <div style="color:#d7ead9;font-size:12px;margin-top:5px;">Canadian International Academy of Skills &amp; Career Excellence</div>
              <div style="color:#ffd75e;font-style:italic;font-size:13px;margin-top:10px;">&ldquo;We believe in nature!&rdquo;</div>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:34px 34px 8px;">
              <h1 style="color:#1b5e20;font-size:21px;margin:0 0 4px;">Welcome to CIASCE! &#127807;</h1>
              <p style="font-size:15px;line-height:1.65;margin:16px 0;">Dear <strong>{{ $registration->full_name }}</strong>,</p>
              <p style="font-size:15px;line-height:1.65;margin:16px 0;">Thank you for registering with the <strong>Canadian International Academy of Skills and Career Excellence (CIASCE)</strong>. It is my pleasure to personally welcome you to our growing community of learners, professionals, and changemakers who believe in knowledge, sustainability, and excellence.</p>

              @if(!empty($registration->certification_name))
              <p style="font-size:15px;line-height:1.65;margin:16px 0;">Your registration for the <strong>{{ $registration->certification_name }}</strong> program has been received successfully.</p>
              @endif

              <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background:#f1f8f1;border-left:4px solid #2e7d32;border-radius:6px;margin:20px 0;">
                <tr>
                  <td style="padding:14px 18px;font-size:14px;color:#33403a;">
                    <strong style="color:#1b5e20;">Registration No.</strong> &nbsp;{{ $registration->form_number }}
                  </td>
                </tr>
              </table>

              <p style="font-size:15px;line-height:1.65;margin:16px 0;">Our team will get in touch with you shortly regarding the next steps. If you have any questions, simply reply to this email or reach us at <a href="mailto:info@ciasce.com" style="color:#2e7d32;text-decoration:none;">info@ciasce.com</a>.</p>

              <p style="font-size:15px;line-height:1.65;margin:24px 0 6px;">Warm regards,</p>
              <p style="font-size:15px;line-height:1.5;margin:0 0 6px;">
                <strong style="color:#1b5e20;">Prof. Dr. Muhammad Saleem Haider</strong><br>
                <span style="color:#667085;font-size:13px;">CEO, CIASCE &mdash; Former Dean, Faculty of Agricultural Sciences,<br>University of the Punjab, Lahore</span>
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="padding:22px 30px 28px;">
              <hr style="border:none;border-top:1px solid #e2ede0;margin:0 0 16px;">
              <div style="font-size:12px;color:#7a8a80;line-height:1.8;">
                &#128222; +1 647 786 6307 (Canada) &nbsp;&bull;&nbsp; &#9993;&#65039; info@ciasce.com<br>
                &#128205; 59 Long Drive, Whitby, ON, Canada &#127464;&#127462; &nbsp;&bull;&nbsp; &#127760; ciasce.com
              </div>
              <div style="font-size:11px;color:#a7b0aa;margin-top:12px;">Empowering Skills. Building Careers. Cultivating Excellence.</div>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
