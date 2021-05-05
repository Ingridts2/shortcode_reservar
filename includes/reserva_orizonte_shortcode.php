<?php

add_shortcode('reserva_orizonte', 'reserva_orizonte_codigo_gerado');
function reserva_orizonte_codigo_gerado()
{
 return '<div class = "reservawidget small"> 
            <form action novalidate>
	            <h3>Booking Times</h3>
                <select name="Tipo" id="tipo">
                <option value="23">​Quinta do Peru</option>
                <option value="24">​Aroeira I</option>
                <option value="25">​Aroeira II</option>
                <option value="1">​Ribagolfe I</option>
                <option value="16">​Ribagolfe II</option>
                <option value="26">​Oeiras Golf</option>
                </select>
                <input type="date" name="" id="" required >
                <button>
                <a target="_blank" href=http://localhost/wordpress/teste-shortcode> Reservar </a> 
                </button>
              </form>
          </div>';
}