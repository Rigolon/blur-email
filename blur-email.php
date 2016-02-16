function blur_email( $str ) {

  $str = mb_convert_encoding($str , 'UTF-32', 'UTF-8'); //big endian
  $split = str_split($str, 4);

  $res = "";
  foreach ($split as $c)
  {
    $cur = 0;
    
    for ($i = 0; $i < 4; $i++)
    {
      $cur |= ord($c[$i]) << (8*(3 - $i));
    }
    
    $res .= "&#" . $cur . ";";
    
    }
    
    return $res;
  
}
