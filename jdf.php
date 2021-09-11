<?php

 $ts=$T_sec+(($timestamp==='')?time():tr_num($timestamp));
 $date=explode('_',date('H_i_j_n_O_P_s_w_Y',$ts));
 list($j_y,$j_m,$j_d)=gregorian_to_jalali($date[8],$date[3],$date[2]);
 $doy=($j_m<7)?(($j_m-1)*31)+$j_d-1:(($j_m-7)*30)+$j_d+185;
 $kab=(((($j_y%33)%4)-1)==((int)(($j_y%33)*0.05)))?1:0;
 $sl=strlen($format);
 $out='';
 for($i=0; $i<$sl; $i++){
  $sub=substr($format,$i,1);
  if($sub=='\\'){
	$out.=substr($format,++$i,1);
	continue;
  }
	break;

	case'B':case'e':case'g':
	case'G':case'h':case'I':
	case'T':case'u':case'Z':
	break;

	
}

