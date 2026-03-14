<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$seo = [
    'title'       => 'Contact SLS Group | Engineering Excellence – Get in Touch',
    'description' => 'Contact SLS Group for engineering projects, business enquiries, and service information. Reach our Coimbatore office or submit an online enquiry form.',
];

/* ── cURL helper functions ── */

function curl_post(string $url, string $postData, array $headers = []): string|false
{
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL            => $url,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $postData,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_SSL_VERIFYPEER => true,
    ]);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        error_log('cURL POST Error (' . $url . '): ' . curl_error($ch));
        curl_close($ch);
        return false;
    }
    curl_close($ch);
    return $response;
}

function curl_get(string $url, array $headers = []): string|false
{
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL            => $url,
        CURLOPT_HTTPGET        => true,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_SSL_VERIFYPEER => true,
    ]);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        error_log('cURL GET Error (' . $url . '): ' . curl_error($ch));
        curl_close($ch);
        return false;
    }
    curl_close($ch);
    return $response;
}

function curl_put(string $url, string $body, array $headers = []): string|false
{
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL            => $url,
        CURLOPT_CUSTOMREQUEST  => 'PUT',
        CURLOPT_POSTFIELDS     => $body,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_SSL_VERIFYPEER => true,
    ]);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        error_log('cURL PUT Error (' . $url . '): ' . curl_error($ch));
        curl_close($ch);
        return false;
    }
    curl_close($ch);
    return $response;
}

/* ── POST handler ── */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = htmlspecialchars(trim($_POST['first_name'] ?? ''));
    $last_name  = htmlspecialchars(trim($_POST['last_name']  ?? ''));
    $email      = htmlspecialchars(trim($_POST['email']      ?? ''));
    $phone      = htmlspecialchars(trim($_POST['phone']      ?? ''));
    $division   = htmlspecialchars(trim($_POST['division']   ?? ''));
    $message    = htmlspecialchars(trim($_POST['message']    ?? ''));

    if ($first_name && $last_name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {

        $admin_email  = 'tawheedyahya0@gmail.com';
        $site_name    = 'SLS Group';
        $subject      = 'New Enquiry from ' . $first_name . ' ' . $last_name . ' – ' . $site_name;
        $division_map = [
            'construction'  => 'Construction',
            'blue_metals'   => 'Blue Metals',
            'agency'        => 'Agency',
            'marriage_hall' => 'Marriage Hall',
            'farm'          => 'Farm',
        ];
        $division_label = $division ? ($division_map[$division] ?? ucfirst($division)) : '—';
        $submitted_at   = date('d M Y, h:i A');

        ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#f4f6f5;font-family:Arial,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f5;padding:32px 16px;">
    <tr><td align="center">
      <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
        <tr>
          <td style="background:#1a4a2e;padding:32px 40px;text-align:center;">
            <h1 style="margin:0;color:#ffffff;font-size:22px;font-weight:700;">SLS Group</h1>
            <p style="margin:6px 0 0;color:rgba(255,255,255,0.75);font-size:13px;">New Enquiry Received</p>
          </td>
        </tr>
        <tr>
          <td style="padding:36px 40px;">
            <p style="margin:0 0 24px;color:#374a40;font-size:15px;line-height:1.6;">A new enquiry has been submitted through the contact form. Details are below.</p>
            <table width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e2e8e4;border-radius:10px;overflow:hidden;">
              <tr style="background:#e8f5ee;">
                <td colspan="2" style="padding:12px 20px;color:#1a4a2e;font-size:13px;font-weight:700;letter-spacing:0.5px;text-transform:uppercase;">Enquiry Details</td>
              </tr>
              <tr style="border-top:1px solid #e2e8e4;">
                <td style="padding:14px 20px;color:#6b7c74;font-size:13px;font-weight:600;width:38%;border-right:1px solid #e2e8e4;">Full Name</td>
                <td style="padding:14px 20px;color:#1c2b22;font-size:14px;"><?= $first_name . ' ' . $last_name ?></td>
              </tr>
              <tr style="background:#fafafa;border-top:1px solid #e2e8e4;">
                <td style="padding:14px 20px;color:#6b7c74;font-size:13px;font-weight:600;border-right:1px solid #e2e8e4;">Email Address</td>
                <td style="padding:14px 20px;font-size:14px;"><a href="mailto:<?= $email ?>" style="color:#2d6a4f;text-decoration:none;"><?= $email ?></a></td>
              </tr>
              <tr style="border-top:1px solid #e2e8e4;">
                <td style="padding:14px 20px;color:#6b7c74;font-size:13px;font-weight:600;border-right:1px solid #e2e8e4;">Phone Number</td>
                <td style="padding:14px 20px;color:#1c2b22;font-size:14px;"><?= $phone ?: '—' ?></td>
              </tr>
              <tr style="background:#fafafa;border-top:1px solid #e2e8e4;">
                <td style="padding:14px 20px;color:#6b7c74;font-size:13px;font-weight:600;border-right:1px solid #e2e8e4;">Division of Interest</td>
                <td style="padding:14px 20px;font-size:14px;">
                  <span style="background:#e8f5ee;color:#1a4a2e;padding:3px 10px;border-radius:20px;font-size:13px;font-weight:600;"><?= $division_label ?></span>
                </td>
              </tr>
              <tr style="border-top:1px solid #e2e8e4;">
                <td style="padding:14px 20px;color:#6b7c74;font-size:13px;font-weight:600;border-right:1px solid #e2e8e4;vertical-align:top;">Message</td>
                <td style="padding:14px 20px;color:#1c2b22;font-size:14px;line-height:1.7;"><?= nl2br($message) ?></td>
              </tr>
              <tr style="background:#fafafa;border-top:1px solid #e2e8e4;">
                <td style="padding:14px 20px;color:#6b7c74;font-size:13px;font-weight:600;border-right:1px solid #e2e8e4;">Submitted At</td>
                <td style="padding:14px 20px;color:#6b7c74;font-size:13px;"><?= $submitted_at ?></td>
              </tr>
            </table>
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:28px;">
              <tr>
                <td align="center">
                  <a href="mailto:<?= $email ?>?subject=Re: Your Enquiry – SLS Group"
                     style="display:inline-block;background:#1a4a2e;color:#ffffff;text-decoration:none;padding:12px 32px;border-radius:8px;font-size:14px;font-weight:600;">
                    Reply to <?= $first_name ?>
                  </a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td style="background:#f4f6f5;padding:20px 40px;text-align:center;border-top:1px solid #e2e8e4;">
            <p style="margin:0;color:#6b7c74;font-size:12px;">This email was sent automatically from the SLS Group contact form.</p>
          </td>
        </tr>
      </table>
    </td></tr>
  </table>
</body>
</html>
<?php $html = ob_get_clean();

        $mail = new PHPMailer(true);
        $mail_sent = false;

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'soulcreationzclientmbs@gmail.com';
            $mail->Password   = 'mrrytoqhhdvldgmd';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            $mail->CharSet    = 'UTF-8';

            $mail->setFrom('soulcreationzclientmbs@gmail.com', 'SLS Group');
            $mail->addAddress($admin_email);
            $mail->addReplyTo($email, $first_name . ' ' . $last_name);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $html;
            $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $html));

            $mail->send();
            $mail_sent = true;

        } catch (Exception $e) {
            error_log('Mailer Error: ' . $mail->ErrorInfo);
            $mail_sent = false;
        }

        /* ── Google Sheets API ── */
        $sheet_id  = '1hLtI4mF3mXhVNUe-WYfFPX25_45LUxHjSkTrk8Q7-8o';
        $sheet_tab = 'Sheet1';
        $creds_file = __DIR__ . '/../config/sls-service-account.json';

        try {
            $creds     = json_decode(file_get_contents($creds_file), true);
            $now       = time();
            $jwt_header  = base64_encode(json_encode(['alg'=>'RS256','typ'=>'JWT']));
            $jwt_claim   = base64_encode(json_encode([
                'iss'   => $creds['client_email'],
                'scope' => 'https://www.googleapis.com/auth/spreadsheets',
                'aud'   => 'https://oauth2.googleapis.com/token',
                'exp'   => $now + 3600,
                'iat'   => $now,
            ]));
            $jwt_input = $jwt_header . '.' . $jwt_claim;
            openssl_sign($jwt_input, $signature, $creds['private_key'], 'SHA256');
            $jwt = $jwt_input . '.' . base64_encode($signature);

            $token_resp = curl_post(
                'https://oauth2.googleapis.com/token',
                http_build_query([
                    'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
                    'assertion'  => $jwt,
                ]),
                ['Content-Type: application/x-www-form-urlencoded']
            );
            $access_token = json_decode($token_resp, true)['access_token'] ?? null;

            if ($access_token) {
                $auth_header = 'Authorization: Bearer ' . $access_token;

                $range_check = urlencode($sheet_tab . '!A1');
                $check_resp  = curl_get(
                    "https://sheets.googleapis.com/v4/spreadsheets/{$sheet_id}/values/{$range_check}",
                    [$auth_header]
                );
                $check_data = json_decode($check_resp, true);
                $has_header = !empty($check_data['values'][0][0]);

                if (!$has_header) {
                    $header_payload = json_encode([
                        'values' => [['#', 'Submitted At', 'First Name', 'Last Name', 'Email', 'Phone', 'Division', 'Message']],
                    ]);
                    curl_put(
                        "https://sheets.googleapis.com/v4/spreadsheets/{$sheet_id}/values/" . urlencode($sheet_tab . '!A1') . "?valueInputOption=RAW",
                        $header_payload,
                        [$auth_header, 'Content-Type: application/json']
                    );
                }

                $count_resp = curl_get(
                    "https://sheets.googleapis.com/v4/spreadsheets/{$sheet_id}/values/" . urlencode($sheet_tab . '!A:A'),
                    [$auth_header]
                );
                $count_data = json_decode($count_resp, true);
                $next_row   = count($count_data['values'] ?? []) + 1;

                $row_payload = json_encode([
                    'values' => [[
                        $next_row - 1,
                        $submitted_at,
                        $first_name,
                        $last_name,
                        $email,
                        $phone ?: '—',
                        $division_label,
                        $message,
                    ]],
                ]);
                curl_put(
                    "https://sheets.googleapis.com/v4/spreadsheets/{$sheet_id}/values/" . urlencode($sheet_tab . '!A' . $next_row) . "?valueInputOption=RAW",
                    $row_payload,
                    [$auth_header, 'Content-Type: application/json']
                );
            }
        } catch (\Throwable $e) {
            error_log('Sheets Error: ' . $e->getMessage());
        }

        if ($mail_sent) {
            $_SESSION['contact_success'] = 'Thank you, ' . $first_name . '! Your enquiry has been submitted. We\'ll be in touch soon.';
        } else {
            $_SESSION['contact_success'] = 'Thank you! Your enquiry was received, but the notification email could not be sent. We\'ll follow up shortly.';
        }

        header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
        exit;
    }
}

/* ── Flash message ── */
$success = '';
if (!empty($_SESSION['contact_success'])) {
    $success = $_SESSION['contact_success'];
    unset($_SESSION['contact_success']);
}

require __DIR__ . '/../layouts/app.php';

?>

<style>
    /* ── Hero ── */
    .contact-hero {
        background: #1a4a2e;
        text-align: center;
        padding: clamp(2.5rem, 6vw, 4.5rem) 1.25rem clamp(2rem, 5vw, 3.5rem);
    }
    .contact-hero h1 { font-weight: 700; color: #fff; letter-spacing: -.5px; line-height: 1.15; }
    .contact-hero p  { color: rgba(255,255,255,.78); max-width: 560px; margin: .9rem auto 0; line-height: 1.65; }

    /* ── Layout ── */
    .contact-wrapper {
        max-width: 1160px;
        margin: 0 auto;
        padding: clamp(2rem, 5vw, 4rem) 1.25rem clamp(3rem, 6vw, 5rem);
        display: grid;
        grid-template-columns: 1fr 1.6fr;
        gap: clamp(1.5rem, 4vw, 3.5rem);
        align-items: start;
    }

    /* ── Contact Details ── */
    .contact-details h2 { font-weight: 700; color: #1a4a2e; margin-bottom: 1.6rem; }
    .detail-item {
        display: flex; gap: .85rem; align-items: flex-start;
        padding: 1rem 0; border-bottom: 1px solid #e2e8e4;
    }
    .detail-item:last-of-type { border-bottom: none; }
    .detail-icon {
        flex-shrink: 0; width: 40px; height: 40px;
        background: #e8f5ee; border-radius: 50%;
        display: flex; align-items: center; justify-content: center; color: #2d6a4f;
    }
    .detail-icon svg { width: 18px; height: 18px; }
    .detail-text strong { display: block; font-weight: 600; color: #374a40; margin-bottom: .2rem; }
    .detail-text span, .detail-text a { color: #6b7c74; text-decoration: none; line-height: 1.5; }
    .detail-text a:hover { color: #2d6a4f; }

    /* ── Map ── */
    .map-link {
        display: block; margin-top: 1.5rem; border-radius: 10px; overflow: hidden;
        border: 1px solid #e2e8e4; text-decoration: none; position: relative;
        background: #e8f5ee; min-height: 180px;
        transition: box-shadow .2s, transform .2s;
    }
    .map-link:hover { box-shadow: 0 6px 24px rgba(26,74,46,.18); transform: translateY(-2px); }
    .map-link img { width: 100%; height: 180px; object-fit: cover; display: block; }
    .map-overlay {
        position: absolute; inset: 0; background: rgba(26,74,46,.45);
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        gap: .4rem; color: #fff; opacity: 0; transition: opacity .2s;
    }
    .map-link:hover .map-overlay { opacity: 1; }
    .map-overlay span { font-weight: 600; letter-spacing: .3px; }
    .map-overlay svg { width: 22px; height: 22px; }
    .map-static {
        width: 100%; height: 180px; display: flex; flex-direction: column;
        align-items: center; justify-content: center; gap: .5rem; color: #2d6a4f;
        background: #e8f5ee;
    }
    .map-static svg { opacity: .6; }
    .map-static span { font-weight: 600; color: #374a40; }
    .map-static small { color: #6b7c74; }

    /* ── Card ── */
    .enquiry-card {
        background: #fff; border: 1px solid #e2e8e4;
        border-radius: 14px; padding: clamp(1.5rem, 4vw, 2.5rem);
        box-shadow: 0 4px 24px rgba(26,74,46,.10);
    }

    /* ── Form ── */
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
    .form-group { display: flex; flex-direction: column; gap: .4rem; margin-bottom: 1.1rem; }
    .form-group label { font-weight: 600; color: #374a40; }
    .form-group input,
    .form-group select,
    .form-group textarea {
        font-family: inherit; width: 100%; padding: .7rem 1rem;
        border: 1.5px solid #e2e8e4; border-radius: 10px;
        color: #1c2b22; background: #fff; outline: none;
        transition: border-color .2s, box-shadow .2s;
        appearance: none; -webkit-appearance: none;
    }
    .form-group input::placeholder,
    .form-group textarea::placeholder { color: #aab7b0; }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #2d6a4f;
        box-shadow: 0 0 0 3px rgba(45,106,79,.12);
    }
    .form-group input.is-invalid,
    .form-group select.is-invalid,
    .form-group textarea.is-invalid {
        border-color: #e53e3e;
        box-shadow: 0 0 0 3px rgba(229,62,62,.1);
    }
    .field-error { color: #e53e3e; font-weight: 500; margin-top: .25rem; display: none; }
    .field-error.show { display: block; }

    .select-wrap { position: relative; }
    .select-wrap::after {
        content: ''; position: absolute; right: 1rem; top: 50%;
        transform: translateY(-50%); border: 5px solid transparent;
        border-top-color: #6b7c74; pointer-events: none;
    }
    .form-group select { padding-right: 2.5rem; cursor: pointer; }
    .form-group textarea { resize: vertical; min-height: 120px; line-height: 1.6; }

    /* ── Toast ── */
    /* ── Toast ── */
.toast {
    display: none;
    padding: .85rem 1.1rem;
    border-radius: 10px;
    font-weight: 500;
    position: fixed;
    top: 1.25rem;
    right: 1.25rem;
    z-index: 9999;
    min-width: 280px;
    max-width: 420px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.12);
    animation: slideIn .3s ease;
}
.toast.show { display: block; }
.toast-success { background: #d1fadf; color: #1a6635; border: 1px solid #6ee7a0; }
.toast-error   { background: #fde8e8; color: #9b1c1c; border: 1px solid #f8b4b4; }

@keyframes slideIn {
    from { opacity: 0; transform: translateX(40px); }
    to   { opacity: 1; transform: translateX(0); }
}

    /* ── Button ── */
    .btn-submit {
        width: 100%; padding: .9rem 1.5rem; background: #1a4a2e; color: #fff;
        font-family: inherit; font-weight: 600; border: none; border-radius: 10px;
        cursor: pointer; display: flex; align-items: center; justify-content: center;
        gap: .55rem; transition: background .2s, transform .15s, opacity .2s; letter-spacing: .3px;
    }
    .btn-submit:hover:not(:disabled)  { background: #3a7d5a; transform: translateY(-1px); }
    .btn-submit:active:not(:disabled) { transform: translateY(0); }
    .btn-submit svg    { width: 17px; height: 17px; }

    /* ── Spinner ── */
    @keyframes spin { to { transform: rotate(360deg); } }
    #btnSpinner {
        width: 20px; height: 20px;
        display: none;
        animation: spin .75s linear infinite;
        flex-shrink: 0;
    }

    /* ── Responsive ── */
    @media (max-width: 900px) { .contact-wrapper { grid-template-columns: 1fr; } }
    @media (max-width: 560px) { .form-row { grid-template-columns: 1fr; } }
</style>

<!-- Hero Banner -->
<section class="contact-hero fade-up fade-delay-1" aria-label="Contact page header">
    <h1>Get in Touch</h1>
    <p>Have a project in mind or need information about our services? We're here to help you power your vision.</p>
</section>

<!-- Main Content -->
<main class="contact-wrapper">

    <!-- Left: Contact Details -->
    <aside aria-label="Contact information">
        <div class="contact-details fade-up fade-delay-2">
            <h2>Contact Details</h2>

            <div class="detail-item">
                <div class="detail-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div class="detail-text">
                    <strong>Main Office</strong>
                    <span>123 Corporate Plaza, Engineering District, Coimbatore, Tamil Nadu, India</span>
                </div>
            </div>

            <div class="detail-item">
                <div class="detail-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.1 1.18 2 2 0 012.07.01h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
                </div>
                <div class="detail-text">
                    <strong>Call Us</strong>
                    <a href="tel:+914423456789">+91 44 2345 6789</a>
                </div>
            </div>

            <div class="detail-item">
                <div class="detail-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <div class="detail-text">
                    <strong>Email Us</strong>
                    <a href="mailto:info@slsgroup.com">info@slsgroup.com</a>
                </div>
            </div>

            <div class="detail-item">
                <div class="detail-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div class="detail-text">
                    <strong>Working Hours</strong>
                    <span>Mon – Sat: 9:00 AM – 6:00 PM</span>
                </div>
            </div>

            <!-- Map -->
            <a class="map-link"
               href="https://www.google.com/maps/search/?api=1&query=123+Corporate+Plaza+Engineering+District+Coimbatore+Tamil+Nadu+India"
               target="_blank" rel="noopener noreferrer"
               aria-label="Open location in Google Maps">

                <div class="map-static">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>SLS Group – Coimbatore</span>
                    <small>123 Corporate Plaza, Engineering District</small>
                </div>

                <div class="map-overlay" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>View on Google Maps</span>
                </div>
            </a>

        </div>
    </aside>

    <!-- Right: Enquiry Form -->
    <section aria-label="Enquiry form">
        <div class="enquiry-card">

            <div id="formToast" class="toast<?php echo $success ? " show toast-success" : ""; ?>" role="alert" aria-live="polite"><?php echo htmlspecialchars($success); ?></div>

            <form id="enquiryForm" method="POST" action="" novalidate class="fade-up fade-delay-3">

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name <span aria-hidden="true">*</span></label>
                        <input type="text" id="first_name" name="first_name"
                               placeholder="John"
                               value="<?= htmlspecialchars($_POST['first_name'] ?? '') ?>"
                               autocomplete="given-name">
                        <span class="field-error" id="err_first_name">Please enter your first name.</span>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name <span aria-hidden="true">*</span></label>
                        <input type="text" id="last_name" name="last_name"
                               placeholder="Doe"
                               value="<?= htmlspecialchars($_POST['last_name'] ?? '') ?>"
                               autocomplete="family-name">
                        <span class="field-error" id="err_last_name">Please enter your last name.</span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Address <span aria-hidden="true">*</span></label>
                        <input type="email" id="email" name="email"
                               placeholder="john@example.com"
                               value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                               autocomplete="email">
                        <span class="field-error" id="err_email">Please enter a valid email address.</span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                               placeholder="+91 00000 00000"
                               value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>"
                               autocomplete="tel">
                        <span class="field-error" id="err_phone">Please enter a valid phone number.</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="division">Business Division of Interest</label>
                    <div class="select-wrap">
                        <select id="division" name="division">
                            <option value="" disabled <?= empty($_POST['division']) ? 'selected' : '' ?>>Select a division</option>
                            <option value="construction">Construction</option>
                            <option value="blue_metals">Blue Metals</option>
                            <option value="agency">Agency</option>
                            <option value="marriage_hall">Marriage Hall</option>
                            <option value="farm">Farm</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Your Message <span aria-hidden="true">*</span></label>
                    <textarea id="message" name="message"
                              placeholder="Please describe your requirements..."><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                    <span class="field-error" id="err_message">Please enter your message.</span>
                </div>

                <!-- Submit button with spinner -->
                <button type="submit" class="btn-submit" id="submitBtn">
                    <!-- Default state: label + send icon -->
                    <span id="btnContent" style="display:flex;align-items:center;justify-content:center;gap:.55rem;">
                        <span id="btnLabel">Submit Enquiry</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </span>
                    <!-- Submitting state: spinner only -->
                    <svg id="btnSpinner" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="10" stroke-opacity=".3"/>
                        <path d="M12 2a10 10 0 0 1 10 10"/>
                    </svg>
                </button>

            </form>
        </div>
    </section>
</main>

<?php include '../aravind/layouts/footer.php'; ?>

<script>
(function () {
    const form       = document.getElementById('enquiryForm');
    const toast      = document.getElementById('formToast');
    const submitBtn  = document.getElementById('submitBtn');
    const btnContent = document.getElementById('btnContent');
    const btnSpinner = document.getElementById('btnSpinner');

    /* ── Spinner toggle ── */
    function setSubmitting(on) {
        submitBtn.disabled          = on;
        submitBtn.style.opacity     = on ? '.7' : '';
        submitBtn.style.cursor      = on ? 'not-allowed' : '';
        btnContent.style.display    = on ? 'none' : 'flex';
        btnSpinner.style.display    = on ? 'block' : 'none';
    }
    function showToast(msg, type) {
    toast.textContent = msg;
    toast.className   = 'toast show toast-' + type;
    setTimeout(() => { toast.className = 'toast'; }, 5000);
}

    /* ── helpers ── */
    function showError(fieldId, errId, show) {
        const field = document.getElementById(fieldId);
        const err   = document.getElementById(errId);
        if (!field || !err) return;
        field.classList.toggle('is-invalid', show);
        err.classList.toggle('show', show);
    }

    function isValidEmail(v) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
    }

    function isValidPhone(v) {
        return v === '' || /^[+\d\s\-().]{7,20}$/.test(v);
    }

    function showToast(msg, type) {
        toast.textContent = msg;
        toast.className   = 'toast show toast-' + type;
        toast.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        setTimeout(() => { toast.className = 'toast'; }, 5000);
    }

    /* ── live clear on input ── */
    ['first_name', 'last_name', 'email', 'phone', 'message'].forEach(function (id) {
        var el = document.getElementById(id);
        if (el) el.addEventListener('input', function () {
            el.classList.remove('is-invalid');
            var err = document.getElementById('err_' + id);
            if (err) err.classList.remove('show');
        });
    });

    /* ── submit ── */
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        var first   = document.getElementById('first_name').value.trim();
        var last    = document.getElementById('last_name').value.trim();
        var email   = document.getElementById('email').value.trim();
        var phone   = document.getElementById('phone').value.trim();
        var message = document.getElementById('message').value.trim();

        var valid = true;

        if (!first)               { showError('first_name', 'err_first_name', true);  valid = false; }
        else                      { showError('first_name', 'err_first_name', false); }

        if (!last)                { showError('last_name',  'err_last_name',  true);  valid = false; }
        else                      { showError('last_name',  'err_last_name',  false); }

        if (!isValidEmail(email)) { showError('email',      'err_email',      true);  valid = false; }
        else                      { showError('email',      'err_email',      false); }

        if (!isValidPhone(phone)) { showError('phone',      'err_phone',      true);  valid = false; }
        else                      { showError('phone',      'err_phone',      false); }

        if (!message)             { showError('message',    'err_message',    true);  valid = false; }
        else                      { showError('message',    'err_message',    false); }

        if (!valid) {
            showToast('Please fix the errors above before submitting.', 'error');
            return;
        }

        /* All valid — show spinner then submit */
        setSubmitting(true);
        form.submit();
    });
})();
</script>