<?php

/* add_filter( 'wp_mail_from', function( $email ) {
  return 'noreply@ltco.com.br';
} );

add_filter( 'wp_mail_from_name', function( $name ) {
  return 'LTCO';
} ); */

function ltco_mailer( $phpmailer ) {
  $phpmailer->isSMTP();
  $phpmailer->SMTPAuth = true;
  $phpmailer->Host = LTCO_SMTP_HOST;
  $phpmailer->Port = LTCO_SMTP_PORT;
  $phpmailer->Username = LTCO_SMTP_USER;
  $phpmailer->Password = LTCO_SMTP_PASS;
}
add_action( 'phpmailer_init', 'ltco_mailer' );

/* function ltco_contact_sender_scripts() {
  wp_enqueue_script( 'ltco_contact_sender', ltco_path('scripts').'/ltco_contact_sender.js', array( 'jquery' ), '1.0.0', true );

  wp_localize_script( 'ltco_contact_sender', 'ltco_options', array(
    'ajax_url' => admin_url( 'admin-ajax.php' ),
    'nonce' => wp_create_nonce( 'ltco_nonce' )
  ) );
} */
// add_action( 'init', 'ltco_contact_sender_scripts' );
// add_action( 'wp_enqueue_scripts', 'ltco_contact_sender_scripts' );

/* function ltco_contact_sender_func() {
  $to = 'contato@ltco.com.br';
  $title = "[LTCO] Contato via formulário";
  $headers = array('Content-Type: text/html; charset=UTF-8');

  $request = json_decode($_REQUEST, true);

  check_ajax_referer( 'ltco_nonce', 'nonce' );

  $fields = $request['data'];

  $ltco_html_body = null;

  foreach ( $fields as $field ) {
    $ltco_html_body .= "<b>$field[0]</b>: $field[1]<br>";
  }

  $send_mail = wp_mail($to, $title, $ltco_html_body, $headers);

  $responses = array(
    array(
      "ok" => true,
      "class" => "success",
      "message" => "Mensagem enviada com sucesso!"
    ),
    array(
      "ok" => false,
      "class" => "danger",
      "message" => "Não foi possível enviar a mensagem. Tente novamente, mais tarde."
    )
  );

  $response = ($send_mail) ? $responses[0] : $responses[1];

  echo json_encode($response);

  die();
}
add_action('wp_ajax_ltco_contact_sender', 'ltco_contact_sender_func', 0);
add_action('wp_ajax_nopriv_ltco_contact_sender', 'ltco_contact_sender_func', 0); */
