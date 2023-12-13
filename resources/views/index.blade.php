@extends('layouts.admin') 
@section('contenido')
@if(Session::has('Mensaje')){{
    
    Session::get('Mensaje')
}}
@endif
@can('administradores')
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-green">
      <span class="info-box-icon"><i class="fa-solid fa-ticket fa"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Ticket's Abiertos</span>
        <span class="info-box-number">7</span>
        <div class="progress">
          <div class="progress-bar" style="width: 100%"></div>
        </div>
        <span class="progress-description">
        100% ticket´s pendientes
        </span>
      </div>
    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-yellow">
      <span class="info-box-icon"><i class="fa-solid fa-ticket fa"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">TICKET'S CERRADOS</span>
        <span class="info-box-number">0</span>
        <div class="progress">
          <div class="progress-bar" style="width: 0%"></div>
        </div>
        <span class="progress-description">
        0%
        </span>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-red">
      <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">CONVERSACIONES CERRADAS</span>
        <span class="info-box-number">7</span>
        <div class="progress">
          <div class="progress-bar" style="width: 100%"></div>
        </div>
        <span class="progress-description">
        100%
        </span>
      </div>
    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-aqua">
      <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">CONVERSACIONES ABIERTAS</span>
        <span class="info-box-number">0</span>
        <div class="progress">
          <div class="progress-bar" style="width: 0%"></div>
        </div>
        <span class="progress-description">
        0%
        </span>
      </div>
    </div>
  </div>
</div>

<hr/>
<div class="row">
  <div class="col-lg-12">
    <div class="card" >
      <div class="card-header">
        Información de conversaciones
      </div>
      <div class="table-responsive ">
        <table id="tabla" class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <th>Id Conversación</th>
            <th>Nombre de Contacto</th>
            <th>Nro. Tel.</th>
            <th>Oficina</th>
            <th>Estado</th>
          </thead>
            <tr>
              <td>1</td>
              <td>Rocio Tussa</td>
              <td>543816672919</td>
              <td>Unidad fiscal de atentados contra las personas 1</td>
              <td>Cerrada</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Florencia Minic</td>
              <td>543815225225</td>
              <td>Unidad fiscal de homicidios 1</td>
              <td>Cerrada</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Lourdes Beltran</td>
              <td>54381142328</td>
              <td>Oficina de informática (Sistemas)</td>
              <td>Cerrada</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Leandro Galindes</td>
              <td>543816786512</td>
              <td>Oficina de informática (Sistemas)</td>
              <td>Cerrada</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Andres Peralta</td>
              <td>543815886060</td>
              <td>Oficina de informática (Sistemas)</td>
              <td>Cerrada</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Sofia Perera</td>
              <td>543814122587</td>
              <td>Oficina de informática (Sistemas)</td>
              <td>Cerrada</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Leandro Galindes</td>
              <td>543816641050</td>
              <td>Fiscalía de cámara penal II (conclusional)</td>
              <td>Cerrada</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
</div>
 <hr/>
<div class="row">
  <div class="col-lg-12">
    <div class="card" >
      <div class="card-header">
        Informacion de conversaciones
      </div>
      <div class="table-responsive ">
        <table id="tabla1" class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <th>Id Inc.</th>
            <th>Fecha y Hora</th>
            <th>Asunto</th>
            <th>Asignado a</th>
            <th>Oficina</th>
            <th>Empleado</th>
            <th>Estado</th>
            <th>Reasignar</th>
          </thead>
            <tr>
              <td>8032</td>
              <td>13/11/2023 10:59 PM</td>
              <td>Problemas de impresora y escaner: problema de impresión</td>
              <td>Mariano Delgado</td>
              <td>Unidad fiscal de atentados contra las personas 1</td>
              <td>Rocio Tussa</td>
              <td>
                <select name="select">
                  <option value="Procesado" selected>Asignado</option>
                  <option value="Cerrar">Cerrar</option>
                  <option value="Procesado" >Procesado</option>
                  <option value="Resuelto">Resuelto</option>
                </select>
              </td>
              <td>
                <select name="select">
                  <option value="agianuzzi" selected>Seleccionar técnico</option>
                  <option value="agianuzzi">Alejandro Gianuzzi</option>
                  <option value="Reasignado">José Ruiz</option>
                  <option value="Reasignado">Mariano Delgado</option>
                  <option value="Reasignado">Miguel Angel Furlan</option>
                  <option value="Procesado">Santiago Marco Rocha</option>
                  <option value="Reasignado">Rodrigo Masaguer</option>
                </select>
              </td>
            </tr>
           <tr>
              <td>8033</td>
              <td>13/11/2023 11:02 PM</td>
              <td>Problema de impresora y escaner: problema de impresión</td>
              <td>Santiago Marco Rocha</td>
              <td>Unidad fiscal de homicidios 1</td>
              <td>Florencia Minic</td>
              <td>
                <select name="select">
                  <option value="Procesado" selected>Asignado</option>
                  <option value="Cerrar">Cerrar</option>
                  <option value="Procesado" >Procesado</option>
                  <option value="Resuelto">Resuelto</option>
                </select>
              </td>
              <td>
                <select name="select">
                  <option value="agianuzzi" selected>Seleccionar técnico</option>
                  <option value="agianuzzi">Alejandro Gianuzzi</option>
                  <option value="Reasignado">José Ruiz</option>
                  <option value="Reasignado">Mariano Delgado</option>
                  <option value="Reasignado">Miguel Angel Furlan</option>
                  <option value="Procesado">Santiago Marco Rocha</option>
                  <option value="Reasignado">Rodrigo Masaguer</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>8034</td>
              <td>13/11/2023 11:18 PM</td>
              <td>Problema de impresora y escaner: problema de impresión</td>
              <td>Rodrigo Masaguer</td>
              <td>Oficina de informática (Sistemas)</td>
              <td>Lourdes Beltran</td>
              <td>
                <select name="select">
                  <option value="Procesado" selected>Asignado</option>
                  <option value="Cerrar">Cerrar</option>
                  <option value="Procesado" >Procesado</option>
                  <option value="Resuelto">Resuelto</option>
                </select>
              </td>
              <td>
                <select name="select">
                  <option value="agianuzzi" selected>Seleccionar técnico</option>
                  <option value="agianuzzi">Alejandro Gianuzzi</option>
                  <option value="Reasignado">José Ruiz</option>
                  <option value="Reasignado">Mariano Delgado</option>
                  <option value="Reasignado">Miguel Angel Furlan</option>
                  <option value="Procesado">Santiago Marco Rocha</option>
                  <option value="Reasignado">Rodrigo Masaguer</option>
                </select>
              </td>
            </tr>
           <tr>
              <td>8036</td>
              <td>13/11/2023 11:31 PM</td>
              <td>Problema con el PC: No tengo internet</td>
              <td>Miguel Angel Furlan</td>
              <td>Oficina de informática (Sistemas)</td>
              <td>Leandro Galindes</td>
              <td>
                <select name="select">
                  <option value="Procesado" selected>Asignado</option>
                  <option value="Cerrar">Cerrar</option>
                  <option value="Procesado" >Procesado</option>
                  <option value="Resuelto">Resuelto</option>
                </select>
              </td>
              <td>
                <select name="select">
                  <option value="agianuzzi" selected>Seleccionar técnico</option>
                  <option value="agianuzzi">Alejandro Gianuzzi</option>
                  <option value="Reasignado">José Ruiz</option>
                  <option value="Reasignado">Mariano Delgado</option>
                  <option value="Reasignado">Miguel Angel Furlan</option>
                  <option value="Procesado">Santiago Marco Rocha</option>
                  <option value="Reasignado">Rodrigo Masaguer</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>8037</td>
              <td>13/11/2023 11:33 PM</td>
              <td>Problema de impresora y escaner: problema de impresión</td>
              <td>Santiago Marco Rocha</td>
              <td>Oficina de informática (Sistemas)</td>
              <td>Andres Peralta</td>
              <td>
                <select name="select">
                  <option value="Procesado" selected>Asignado</option>
                  <option value="Cerrar">Cerrar</option>
                  <option value="Procesado" >Procesado</option>
                  <option value="Resuelto">Resuelto</option>
                </select>
              </td>
              <td>
                <select name="select">
                  <option value="agianuzzi" selected>Seleccionar técnico</option>
                  <option value="agianuzzi">Alejandro Gianuzzi</option>
                  <option value="Reasignado">José Ruiz</option>
                  <option value="Reasignado">Mariano Delgado</option>
                  <option value="Reasignado">Miguel Angel Furlan</option>
                  <option value="Procesado">Santiago Marco Rocha</option>
                  <option value="Reasignado">Rodrigo Masaguer</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>8038</td>
              <td>14/11/2023 12:51 AM</td>
              <td>Problema de impresora y escaner: problema de conexión</td>
              <td>José Ruiz</td>
              <td>Oficina de informática (Sistemas)</td>
              <td>Sofia Perera</td>
              <td>
                <select name="select">
                  <option value="Procesado" selected>Asignado</option>
                  <option value="Cerrar">Cerrar</option>
                  <option value="Procesado" >Procesado</option>
                  <option value="Resuelto">Resuelto</option>
                </select>
              </td>
              <td>
                <select name="select">
                  <option value="agianuzzi" selected>Seleccionar técnico</option>
                  <option value="agianuzzi">Alejandro Gianuzzi</option>
                  <option value="Reasignado">José Ruiz</option>
                  <option value="Reasignado">Mariano Delgado</option>
                  <option value="Reasignado">Miguel Angel Furlan</option>
                  <option value="Procesado">Santiago Marco Rocha</option>
                  <option value="Reasignado">Rodrigo Masaguer</option>
                </select>
              </td>
            </tr>
             <tr>
              <td>8039</td>
              <td>14/11/2023 12:58 AM</td>
              <td>Problema de impresora y escaner: problema de impresión</td>
              <td>Miguel Angel Furlan</td>
              <td>Fiscalía de cámara penal II (conclusional)</td>
              <td>Leandro Galindes</td>
              <td>
                <select name="select">
                  <option value="Procesado" selected>Asignado</option>
                  <option value="Cerrar">Cerrar</option>
                  <option value="Procesado" >Procesado</option>
                  <option value="Resuelto">Resuelto</option>
                </select>
              </td>
              <td>
                <select name="select">
                  <option value="agianuzzi" selected>Seleccionar técnico</option>
                  <option value="agianuzzi">Alejandro Gianuzzi</option>
                  <option value="Reasignado">José Ruiz</option>
                  <option value="Reasignado">Mariano Delgado</option>
                  <option value="Reasignado">Miguel Angel Furlan</option>
                  <option value="Procesado">Santiago Marco Rocha</option>
                  <option value="Reasignado">Rodrigo Masaguer</option>
                </select>
              </td>
            </tr>
            
          </table>
        </div>
      </div>
    </div>
</div>


@endcan

  @endsection