<?php
function ltco_formater_phone( $phone, $params = null ) {

  $phone = preg_replace( "/[^0-9]/", "", $phone );

  $tam = strlen( $phone );

  $strongTagOpen = ( $params['strong'] == true ) ? '<strong>' : '';
  $strongTagClose = ( $params['strong'] == true ) ? '</strong>' : '';

  if ( $params['href'] == true ) {

    if ( $tam === 11 || $tam === 10 ) { // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS e 9 ou 8 dígitos
      return "55" . $phone;
    } else {
      return $phone;
    }
  }
  else {

    if ( $tam == 13 ) { // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS e 9 dígitos

      if ( $params['strong'] == true ) {
        return "+" . substr( $phone, 0, $tam-11 ) . " $strongTagOpen" . substr( $phone, $tam-11, 2 ) . " " . substr( $phone, $tam-9 ,5 ) . "-" . substr( $phone, -4 ) . $strongTagClose;
      } else {
        return "+" . substr( $phone, 0, $tam-11 ) . " " . substr( $phone, $tam-11, 2 ) . " " . substr( $phone, $tam-9 ,5 ) . "-" . substr( $phone, -4 );
      }
    }

    if ( $tam == 12 ) { // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS

      if ( $params['strong'] == true ) {
        return "+" . substr( $phone, 0, $tam-10 ) . " $strongTagOpen" . substr( $phone, $tam-10, 2 ) . " " . substr( $phone, $tam-8, 4 ) . "-" . substr( $phone, -4 ) . $strongTagClose;
      } else {
        return "+" . substr( $phone, 0, $tam-10 ) . " " . substr( $phone, $tam-10, 2 ) . " " . substr( $phone, $tam-8, 4 ) . "-" . substr( $phone, -4 );
      }
    }



    if ( $tam == 11 ) { // COM CÓDIGO DE ÁREA NACIONAL e 9 dígitos
      return substr( $phone, 0, 2 ) . " " . substr( $phone, 2, 5 ) . "-" . substr( $phone, 7, 11 );
    }

    if ( $tam == 10 ) { // COM CÓDIGO DE ÁREA NACIONAL
      return substr( $phone, 0, 2 ) . " " . substr( $phone, 2, 4 ) . "-" . substr( $phone, 6, 10 );
    }

    if ( $tam <= 9 ) { // SEM CÓDIGO DE ÁREA
      return substr( $phone, 0, $tam-4 ) . "-" . substr( $phone, -4 );
    }
  }
}
