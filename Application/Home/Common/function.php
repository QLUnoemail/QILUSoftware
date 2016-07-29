<?php
/**
 * 邮件发送函数
 */
function sendMail($to, $subject, $content) {
    vendor('PHPMailer.class#phpmailer');
    $mail = new PHPMailer();
    // 装配邮件服务器
    if (C('MAIL_SMTP')) {
        $mail->IsSMTP(); 
    }
    $mail->Host = C('MAIL_HOST');
    $mail->SMTPAuth = C('MAIL_SMTPAUTH');
    $mail->Username = C('MAIL_USERNAME');
    $mail->Password = C('MAIL_PASSWORD');
    $mail->SMTPSecure = C('MAIL_SECURE');
    $mail->CharSet = C('MAIL_CHARSET');
    // 装配邮件头信息
    $mail->From = 'h498352276@163.com';
    $mail->AddAddress($to);
    $mail->FromName = 'Husky';
    $mail->IsHTML(C('MAIL_ISHTML'));
    // 装配邮件正文信息
    $mail->Subject = $subject;
    $mail->Body = $content;
    // 发送邮件
    if (!$mail->Send()) {
        return FALSE;
    } else {
        return TRUE;
    }
}
?>