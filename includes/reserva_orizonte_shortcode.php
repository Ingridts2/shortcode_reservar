<?php

add_shortcode('reserva_orizonte', 'reserva_orizonte_codigo_gerado');
function reserva_orizonte_codigo_gerado()
{
$atual = data_atual();

 return '<div class = "reservawidget small"> 
            <form action novalidate>
	            <h3>Horários de reserva</h3>
                <select name="Tipo" id="tipo">
                <option value="23">​Quinta do Peru</option>
                <option value="24">​Aroeira I</option>
                <option value="25">​Aroeira II</option>
                <option value="1">​Ribagolfe I</option>
                <option value="16">​Ribagolfe II</option>
                <option value="26">​Oeiras Golf</option>
                </select>
                <input id="checkreservationdate" type="date" min= "'.$atual .'" value="'.$atual . '" >
                <input id="checkreservation" type="submit" value="Reservar" class="btn small">   
              </form>
          </div>';
} 

function data_atual()
{ 
   setlocale (LC_ALL, 'pt_BR');
   $data = date('Y-m-d');
   return $data;
} 

?>