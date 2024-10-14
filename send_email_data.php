<?php

if (isset($_POST['submit_form'])) {
    $mailto = "shubhamt@websaritsolutions.com";
    // $mailto = "adinathd@websaritsolutions.com";
    $CompanyName = $_POST['CompanyName'];
    $contact_person = $_POST['contact_person'];
    $telNo = $_POST['telNo'];
    $email = $_POST['email'];
    $Address = $_POST['Address'];
    $country = $_POST['country'];
    $file = $_POST['file'];
    $requirement_details = $_POST['requirement_details'];

    $subject = "For Contact  Inquiry";

    $message = "Company Name : " . $CompanyName . "\n"
        . "Person Name  : " . $contact_person . "\n"
        . "Tel No       : " . $telNo . "\n"
        . "Email        : "  . $email . "\n"
        . "Address      : "  . $Address . "\n"
        . "Country      : "  . $country . "\n"
        . "Requirements : "  . $requirement_details;

    $headers = "From: " . $email;

    // File attachment handling
    $file_attached = false;

    if ($_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
        $file_attached = true;
        $file_name = $_FILES['attachment']['name'];
        $file_tmp_name = $_FILES['attachment']['tmp_name'];
        $file_type = $_FILES['attachment']['type'];
        $file_size = $_FILES['attachment']['size'];

        $attachment = chunk_split(base64_encode(file_get_contents($file_tmp_name)));

        $boundary = md5(time());

        $headers .= "\r\nMIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n\r\n";
        $message = "--" . $boundary . "\r\n" .
            "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n" .
            "Content-Transfer-Encoding: 7bit\r\n\r\n" .
            $message . "\r\n\r\n" .
            "--" . $boundary . "\r\n" .
            "Content-Type: " . $file_type . "; name=\"" . $file_name . "\"\r\n" .
            "Content-Transfer-Encoding: base64\r\n" .
            "Content-Disposition: attachment\r\n\r\n" .
            $attachment . "\r\n\r\n" .
            "--" . $boundary . "--";
    }

    $result1 = mail($mailto, $subject, $message, $headers);

   if ($result1) {
    $success = "Your Message was sent Successfully!";
  header('Location: thankyou-page.html');
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
}

?>
