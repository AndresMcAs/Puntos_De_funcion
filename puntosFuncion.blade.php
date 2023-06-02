<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .custom-input {
      width: 80px;
    }
    .col-custom {
      width: 100px;
    }
    #tipo{
        width: 230px;
    }
    #dias, #horas,{
      width: 50px;
    }
    .alert{
      position: fixed;
  top: 10px;
  left: 50%;
  transform: translateX(-50%);
  padding: 10px;
  background-color: #f8d7da;
  color: #721c24;
  border: 1px solid #f5c6cb;
  border-radius: 4px;
  display: none;
   
    }
    .alert.show {
  display: block;
}
    #meses, #horasHombre{
      width:50px
    }
    
    h1 {
        color:  #960803 ;
        font-family: Times New Roman;
        font-size: 50px;
        margin: 0 auto;
        text-align: center;
        font-style: italic;
       
        }
        
    h2 {
        color:  #181716  ;
        font-family: Times New Roman;
        font-size: 40px;
        margin: 0 auto;
        text-align: left;
        font-style: italic;
       
    }
    h3 {
        color:  #181716  ;
        font-family: Times New Roman;
        font-size: 30px;
        margin: 0 auto;
        text-align: left;
        font-style: italic;
       
    }
    td, input,th{
        font-family: Times New Roman;
       
    }
  </style>
  <title>Puntos de Función</title>
</head>
<body>
    <h1>Puntos de Función </h1>
    <br>
<section>
  <hr>
  <div class="container">
    <h2>Tabla de Puntos de Función Con y Sin Ajuste</h2>
    <br>
    <table class="table table-striped table-hover ">
      <thead class="table-dark">
        <tr>
          <th scope="col" id="tipo">Tipo de Archivo</th>
          <th scope="col" class="col-custom"> Complejidad Alta</th>
          <th scope="col" class="col-custom"> Complejidad Media</th>
          <th scope="col" class="col-custom">Complejidad Baja</th>
          <th scope="col" class="col-custom" width="50px">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Archivos Lógicos Internos (ILF)</td>
          <td>
            <input type="number" id="ilf-complejidad-alta" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="ilf-complejidad-media" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="ilf-complejidad-baja" class="form-control custom-input" min="0" value="0">
          </td>
          
          <td id="ilf-puntos"></td>
        </tr>
        <tr>
          <td>Archivos Lógicos Externos (ELF)</td>
          <td>
            <input type="number" id="elf-complejidad-alta" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="elf-complejidad-media" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="elf-complejidad-baja" class="form-control custom-input" min="0" value="0">
          </td>
          
          <td id="elf-puntos"></td>
        </tr>
        <tr>
          <td>Archivos de Datos de Entrada (EI)</td>
          <td>
            <input type="number" id="ei-complejidad-alta" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="ei-complejidad-media" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="ei-complejidad-baja" class="form-control custom-input" min="0" value="0">
          </td>
          
          <td id="ei-puntos"></td>
        </tr>
        <tr>
          <td>Archivos de Datos de Salida (EO)</td>
          <td>
            <input type="number" id="eo-complejidad-alta" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="eo-complejidad-media" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="eo-complejidad-baja" class="form-control custom-input" min="0" value="0">
          </td>
         
          <td id="eo-puntos"></td>
        </tr>
        <tr>
          <td>Archivos de Datos de Consulta (EQ)</td>
          <td>
          <input type="number" id="eq-complejidad-alta" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="eq-complejidad-media" class="form-control custom-input" min="0" value="0">
          </td>
          <td>
            <input type="number" id="eq-complejidad-baja" class="form-control custom-input" min="0" value="0">
          </td>
        
          <td id="eq-puntos"></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4" class="text-end"><strong>Total de Puntos de Función sin ajuste:</strong></td>
          <td id="total-puntos"></td>
        </tr>
        <tr>
        <td colspan="4" class="text-end"><strong>Total de los grados de influencia:</strong</td>
        <td>
            <input type="number" id="valor-ajuste" class="form-control custom-input" min="0" value="0">
        </td>
    </tr>
        <td colspan="4" class="text-end"><strong>Valor del Factor de ajuste:</strong</td>
        <td id="total-valor-ajuste"></td>
        <tr>
          <td colspan="4" class="text-end"><strong>Total de Puntos de Función con ajuste:</strong></td>
          <td id="total-ajuste"></td>
        </tr>
      </tfoot>
    </table>
  </div>
</section><br>
<section>
  <hr>
  <div class="container">
    <h2> Estimaciones</h2><br>
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col" class="col-custom">Estimación</th>
          <th scope="col" class="col-custom"> C </th>
          <th scope="col" class="col-custom"> PF </th>
          <th scope="col" class="col-custom">E</th>
          <th scope="col" class="col-custom" >Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Esfuerzo</td>
          <td>
            <input type="number" step="0.001" id="cEsfuerzo" class="form-control custom-input" min="0" value="0">
          </td>
          <td id="pfEsfuerzo"></td>
          <td>
            <input type="number"step="0.001"  id="eEsfuerzo" class="form-control custom-input" min="0" value="0">
          </td>
          <td id="esfuerzo"></td><td id="horasHombre">Horas/Hombre</td>
        </tr>
        <tr>
          <td>Duración</td>
          <td>
            <input type="number" step="0.001" id="cDuracion" class="form-control custom-input" min="0" value="0">
          </td>
          <td id="pfDuracion">
            
          </td>
          <td>
            <input type="number"step="0.001"  id="eDuracion" class="form-control custom-input" min="0" value="0">
          </td>
          <td id="duracion"></td><td id="meses">Meses</td>
        </tr>
        
      </tbody>
       <tfoot>
        <tr>
         <td id="dias">Dias de Trabajo<input type="number"  id="dias-trabajo" class="form-control custom-input" min="1" value="1"> </td> 
         <td id ="horas">Horas Trabajo<input type="number"  id="horas-trabajo" class="form-control custom-input" min="1" value="1"> </td>  
         <td colspan="1"><strong>Cantidad de Personas:</strong></td>
          <td id="total-personas"></td>
        </tr>
        <tr>
        <td>Salario/hora<input type="number" step="0.01" id="salario-hora" class="form-control custom-input" min="1" value="1"> </td>
        <td colspan="1"><strong>Coste: $</strong</td>
        <td id="total-coste"></td>
           
    </tr>
        <td colspan="1" ><strong>Productividad (Hora/PF):</strong</td>
        <td id="total-productividad"></td>
        <tr>
          <td colspan="1" ><strong>Velocidad de Entrega(PF/Mes):</strong></td>
          <td id="velocidad"></td>
        </tr>
        <tr>
          <td>
          <button type="button" class="btn btn-primary" id="btn-calcular">Calcular</button>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</section>
<section><br>
<hr>
 <div class="container">
  <h2> Estimación por fase del ciclo de vida</h2><br>
  <div class="container">
  <button type="button" class="btn btn-primary" id="btn-calcular-ciclo">Calcular Estimación Por Fase</button>
  <div id="alert-container"></div> 
  <h3> Esfuerzo</h3>
<table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col" class="col-custom">Planificación</th>
          <th scope="col" class="col-custom"> Especificación </th>
          <th scope="col" class="col-custom"> Diseño </th>
          <th scope="col" class="col-custom">Construcción</th>
          <th scope="col" class="col-custom" >Pruebas</th>
          <th scope="col" class="col-custom" >Implantación</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td id="planificacion-esfuerzo"></td>
          <td id="especificacion-esfuerzo"></td>
          <td id="diseno-esfuerzo"></td>
          <td id="construccion-esfuerzo"></td>
          <td id="pruebas-esfuerzo"></td>
          <td id="Implantacion-esfuerzo"></td>
        </tr>
        
      </tbody>
    </table>
    </div> <hr>
    <div class="container">
    <h3> Duración</h3>
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col" class="col-custom">Planificación</th>
          <th scope="col" class="col-custom"> Especificación </th>
          <th scope="col" class="col-custom"> Diseño </th>
          <th scope="col" class="col-custom">Construcción</th>
          <th scope="col" class="col-custom" >Pruebas</th>
          <th scope="col" class="col-custom" >Implantación</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td id="planificacion-duracion"></td>
          <td id="especificacion-duracion"></td>
          <td id="diseno-duracion"></td>
          <td id="construccion-duracion"></td>
          <td id="pruebas-duracion"></td>
          <td id="Implantacion-duracion"></td>
        </tr>
        
      </tbody>
    </table>
    </div><hr>

    <div class="container">
    <h3> Coste</h3>
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col" class="col-custom">Planificación</th>
          <th scope="col" class="col-custom"> Especificación </th>
          <th scope="col" class="col-custom"> Diseño </th>
          <th scope="col" class="col-custom">Construcción</th>
          <th scope="col" class="col-custom" >Pruebas</th>
          <th scope="col" class="col-custom" >Implantación</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td id="planificacion-coste"></td>
          <td id="especificacion-coste"></td>
          <td id="diseno-coste"></td>
          <td id="construccion-coste"></td>
          <td id="pruebas-coste"></td>
          <td id="Implantacion-coste"></td>
        </tr>
        
      </tbody>
    </table>
    </div>
 </div>
</section><hr>

  <script>
    const ilfComplejidadAltaInput = document.getElementById('ilf-complejidad-alta');
    const ilfComplejidadMediaInput = document.getElementById('ilf-complejidad-media');
    const ilfComplejidadBajaInput = document.getElementById('ilf-complejidad-baja');
    const ilfPuntosCell = document.getElementById('ilf-puntos');

    const elfComplejidadAltaInput = document.getElementById('elf-complejidad-alta');
    const elfComplejidadMediaInput = document.getElementById('elf-complejidad-media');
    const elfComplejidadBajaInput = document.getElementById('elf-complejidad-baja');
    const elfPuntosCell = document.getElementById('elf-puntos');

    const eiComplejidadAltaInput = document.getElementById('ei-complejidad-alta');
    const eiComplejidadMediaInput = document.getElementById('ei-complejidad-media');
    const eiComplejidadBajaInput = document.getElementById('ei-complejidad-baja');
    const eiPuntosCell = document.getElementById('ei-puntos');

    const eoComplejidadAltaInput = document.getElementById('eo-complejidad-alta');
    const eoComplejidadMediaInput = document.getElementById('eo-complejidad-media');
    const eoComplejidadBajaInput = document.getElementById('eo-complejidad-baja');
    const eoPuntosCell = document.getElementById('eo-puntos');

    const eqComplejidadAltaInput = document.getElementById('eq-complejidad-alta');
    const eqComplejidadMediaInput = document.getElementById('eq-complejidad-media');
    const eqComplejidadBajaInput = document.getElementById('eq-complejidad-baja');
    const eqPuntosCell = document.getElementById('eq-puntos');
    const totalPuntosCell = document.getElementById('total-puntos');
     
    const valorAjusteInput = document.getElementById('valor-ajuste');
    const totalValorAjusteCell = document.getElementById('total-valor-ajuste');
    const totalAjusteCell = document.getElementById('total-ajuste');

    // Estimaciones 
    // esfuerzo 
    const totalEsfuerzoCell = document.getElementById('esfuerzo');
    const puntosFuncionEsfuerzo = document.getElementById('pfEsfuerzo');
    const cImputEsfuerzo = document.getElementById('cEsfuerzo');
    const eImputEsfuerzo = document.getElementById('eEsfuerzo');
    
    // duracion
    const totalDuracionCell = document.getElementById('duracion');
    const puntosFuncionDuracion = document.getElementById('pfDuracion');
    const cImputDuracion = document.getElementById('cDuracion');
    const eImputDuracion = document.getElementById('eDuracion');
    // personas
    const totalPersonasCell = document.getElementById('total-personas');
    const diasTrabajoInput = document.getElementById('dias-trabajo');
    const horasTrabajoInput = document.getElementById('horas-trabajo');
    //coste
    const totalCosteCell = document.getElementById('total-coste');
    const salarioHoraInput = document.getElementById('salario-hora');

    // productividad
    const totalProductividadCell = document.getElementById('total-productividad');
    //velocidad de entrega 
    const totalVelocidadCell = document.getElementById('velocidad');
    const botonCalcular = document.getElementById('btn-calcular');

    // estimacion por fase
    // esfuerzo
    const botonCalcularCiclo = document.getElementById('btn-calcular-ciclo');
    const planificacionEsfuerzoCell = document.getElementById('planificacion-esfuerzo');
    const especificacionEsfuerzoCell = document.getElementById('especificacion-esfuerzo');
    const disenoEsfuerzoCell = document.getElementById('diseno-esfuerzo');
    const construccionEsfuerzoCell = document.getElementById('construccion-esfuerzo');
    const pruebasEsfuerzoCell = document.getElementById('pruebas-esfuerzo');
    const implantacionEsfuerzoCell = document.getElementById('Implantacion-esfuerzo');
    //Duracion
    const planificacionDuracionCell = document.getElementById('planificacion-duracion');
    const especificacionDuracionCell = document.getElementById('especificacion-duracion');
    const disenoDuracionCell = document.getElementById('diseno-duracion');
    const construccionDuracionCell = document.getElementById('construccion-duracion');
    const pruebasDuracionCell = document.getElementById('pruebas-duracion');
    const implantacionDuracionCell = document.getElementById('Implantacion-duracion');
    // costo
    const planificacionCosteCell = document.getElementById('planificacion-coste');
    const especificacionCosteCell = document.getElementById('especificacion-coste');
    const disenoCosteCell = document.getElementById('diseno-coste');
    const construccionCosteCell = document.getElementById('construccion-coste');
    const pruebasCosteCell = document.getElementById('pruebas-coste');
    const implantacionCosteCell = document.getElementById('Implantacion-coste');   
    let totalPuntos;
    let totalPuntosConAjuste;
    let esfuerzo;
    let duracion;
    let coste;

    function calcularPuntosFuncion() {
      const ilfComplejidadAlta = parseInt(ilfComplejidadAltaInput.value);
      const ilfComplejidadMedia = parseInt(ilfComplejidadMediaInput.value);
      const ilfComplejidadBaja = parseInt(ilfComplejidadBajaInput.value);
      

      const elfComplejidadAlta = parseInt(elfComplejidadAltaInput.value);
      const elfComplejidadMedia = parseInt(elfComplejidadMediaInput.value);
      const elfComplejidadBaja = parseInt(elfComplejidadBajaInput.value);
     

      const eiComplejidadAlta = parseInt(eiComplejidadAltaInput.value);
      const eiComplejidadMedia = parseInt(eiComplejidadMediaInput.value);
      const eiComplejidadBaja = parseInt(eiComplejidadBajaInput.value);
     

      const eoComplejidadAlta = parseInt(eoComplejidadAltaInput.value);
      const eoComplejidadMedia = parseInt(eoComplejidadMediaInput.value);
      const eoComplejidadBaja = parseInt(eoComplejidadBajaInput.value);
      

      const eqComplejidadAlta = parseInt(eqComplejidadAltaInput.value);
      const eqComplejidadMedia = parseInt(eqComplejidadMediaInput.value);
      const eqComplejidadBaja = parseInt(eqComplejidadBajaInput.value);
     

      // Calcular puntos de función para cada tipo de archivo
      //ILF
      const ilfPuntos = (ilfComplejidadAlta * 15) + (ilfComplejidadMedia * 10) + (ilfComplejidadBaja * 7);
      ilfPuntosCell.textContent = ilfPuntos;
     //ELF
      const elfPuntos = (elfComplejidadAlta * 10) + (elfComplejidadMedia * 7) + (elfComplejidadBaja * 5);
      elfPuntosCell.textContent = elfPuntos;
     //EI
      const eiPuntos = (eiComplejidadAlta * 6) + (eiComplejidadMedia * 4) + (eiComplejidadBaja * 3);
      eiPuntosCell.textContent = eiPuntos;
      //EO
      const eoPuntos = (eoComplejidadAlta * 7) + (eoComplejidadMedia * 5) + (eoComplejidadBaja * 4);
      eoPuntosCell.textContent = eoPuntos;
     //EQ
      const eqPuntos = (eqComplejidadAlta * 6) + (eqComplejidadMedia * 4) + (eqComplejidadBaja * 3);
      eqPuntosCell.textContent = eqPuntos;

      // Calcular el total de puntos de función
       totalPuntos = ilfPuntos + elfPuntos + eiPuntos + eoPuntos + eqPuntos;
      totalPuntosCell.textContent = totalPuntos;
    }

    function calcularPuntosFuncionConAjuste() {
      if(!isNaN(totalPuntos)){
        
        const valorAjuste = parseFloat(valorAjusteInput.value);
      const totalValorAjuste = 0.65+(valorAjuste * (0.01));
      
      totalValorAjusteCell.textContent = totalValorAjuste.toFixed(2);
      totalPuntosConAjuste = totalPuntos *totalValorAjuste;
      totalAjusteCell.textContent = totalPuntosConAjuste.toFixed(2);
      // son para mostrar los valores en la tabla de estimaciones
      puntosFuncionEsfuerzo.textContent = totalPuntosConAjuste.toFixed(2);
      puntosFuncionDuracion.textContent = totalPuntosConAjuste.toFixed(2);
    
      } else {
        let alerta = document.createElement('div');
       alerta.classList.add('alert');
       alerta.textContent = '¡Debes calcular primero los puntos de funcion!';

       document.getElementById('alert-container').appendChild(alerta);

      setTimeout(function() {
        alerta.classList.add('show');
        setTimeout(function() {
        alerta.remove();
         }, 5000);
      }, 100);
      }
     
    }
  
    function calcularEsfuerzo(){

      if(!isNaN(totalPuntosConAjuste)) {
        const valorC = parseFloat(cImputEsfuerzo.value);
        const valorE = parseFloat(eImputEsfuerzo.value);
        esfuerzo = valorC * (Math.pow(totalPuntosConAjuste,valorE));
        totalEsfuerzoCell.textContent=esfuerzo.toFixed(2);
      } else {

        let alerta = document.createElement('div');
       alerta.classList.add('alert');
       alerta.textContent = '¡Debes calcular primero los puntos de funcion!';

       document.getElementById('alert-container').appendChild(alerta);

      setTimeout(function() {
        alerta.classList.add('show');
        setTimeout(function() {
        alerta.remove();
         }, 5000);
      }, 100);
        
      }

    }

    function calcularDuracion(){
      if(!isNaN(totalPuntosConAjuste)) {
        const valorCDuracion = parseFloat(cImputDuracion.value);
        const valorEDuracion = parseFloat(eImputDuracion.value);
        duracion = valorCDuracion * (Math.pow(esfuerzo,valorEDuracion));
        totalDuracionCell.textContent=Math.round(duracion);
      } else {

        let alerta = document.createElement('div');
       alerta.classList.add('alert');
       alerta.textContent = '¡Debes calcular primero los puntos de funcion!';

       document.getElementById('alert-container').appendChild(alerta);

      setTimeout(function() {
        alerta.classList.add('show');
        setTimeout(function() {
        alerta.remove();
         }, 5000);
      }, 100);
      
      }
    }

   function calcularPersonal(){

    if(isNaN(esfuerzo)){
      let alerta = document.createElement('div');
       alerta.classList.add('alert');
       alerta.textContent = '¡Debes calcular esfuerzo y duracion!';

       document.getElementById('alert-container').appendChild(alerta);

      setTimeout(function() {
        alerta.classList.add('show');
        setTimeout(function() {
        alerta.remove();
         }, 5000);
      }, 100);
    
    } else {
      
     const valorDiasTrabajo = parseInt(diasTrabajoInput.value);
     const valorHorasTrabajo = parseInt(horasTrabajoInput.value);

    totalPersonasCell.textContent = redondearNumero(esfuerzo/(duracion *valorDiasTrabajo*valorHorasTrabajo));
    }
   }

   function redondearNumero(numero) {
  var decimal = numero % 1; // Obtiene el valor decimal del número
  
  if (decimal > 0.2) {
    numero = numero + (1 - decimal); // Suma la diferencia para redondear hacia arriba
  }
  
  return Math.round(numero); // Aplica el redondeo
}

   function calcularCoste(){
    
    if(isNaN(esfuerzo)){
      let alerta = document.createElement('div');
       alerta.classList.add('alert');
       alerta.textContent = '¡Debes calcular esfuerzo!';

       document.getElementById('alert-container').appendChild(alerta);

      setTimeout(function() {
        alerta.classList.add('show');
        setTimeout(function() {
        alerta.remove();
         }, 5000);
      }, 100);
    
    } else {
      
    const valorSalarioHora = parseFloat(salarioHoraInput.value);
    coste=esfuerzo * valorSalarioHora;
    totalCosteCell.textContent= coste.toFixed(2);
    }
    
    
    

   }
   function calcularVelocidaPRoductividad(){
    if(isNaN(esfuerzo) && isNaN(duracion)){  

      let alerta = document.createElement('div');
       alerta.classList.add('alert');
       alerta.textContent = '¡Debes calcular esfuerzo y duracion primero!!';

       document.getElementById('alert-container').appendChild(alerta);

      setTimeout(function() {
        alerta.classList.add('show');
        setTimeout(function() {
        alerta.remove();
         }, 5000);
      }, 100);
    
    } else {
     totalProductividadCell.textContent = (esfuerzo / totalPuntosConAjuste).toFixed(2);
    totalVelocidadCell.textContent = (totalPuntosConAjuste/duracion).toFixed(2);
    }
   }
    
   function calcularEstimacionFase(){
    if(isNaN(esfuerzo) && isNaN(duracion) && isNaN(coste)){  
      
      let alerta = document.createElement('div');
       alerta.classList.add('alert');
       alerta.textContent = '¡Debes calcular esfuerzo, duracion y coste primero!!';

       document.getElementById('alert-container').appendChild(alerta);

      setTimeout(function() {
        alerta.classList.add('show');
        setTimeout(function() {
        alerta.remove();
         }, 5000);
      }, 100);
    }
    else {
     //esfuerzo
      planificacionEsfuerzoCell.textContent = (esfuerzo *0.09).toFixed(2);
      especificacionEsfuerzoCell.textContent = (esfuerzo *0.11).toFixed(2);
      disenoEsfuerzoCell.textContent = (esfuerzo *0.15).toFixed(2);
      construccionEsfuerzoCell.textContent = (esfuerzo *0.43).toFixed(2);
      pruebasEsfuerzoCell.textContent = (esfuerzo *0.16).toFixed(2);
      implantacionEsfuerzoCell.textContent = (esfuerzo *0.06).toFixed(2);

      // duracion
      planificacionDuracionCell.textContent = (duracion *0.09).toFixed(2);
      especificacionDuracionCell.textContent = (duracion *0.11).toFixed(2);
      disenoDuracionCell.textContent = (duracion *0.15).toFixed(2);
      construccionDuracionCell.textContent = (duracion *0.43).toFixed(2);
      pruebasDuracionCell.textContent = (duracion *0.16).toFixed(2);
      implantacionDuracionCell.textContent = (duracion *0.06).toFixed(2);

      //coste 
      planificacionCosteCell.textContent = "$"+ (coste *0.09).toFixed(2);
      especificacionCosteCell.textContent = "$"+ (coste*0.11).toFixed(2);
      disenoCosteCell.textContent = "$"+ (coste *0.15).toFixed(2);
      construccionCosteCell.textContent = "$"+ (coste *0.43).toFixed(2);
      pruebasCosteCell.textContent = "$"+ (coste *0.16).toFixed(2);
      implantacionCosteCell.textContent ="$"+ (coste *0.06).toFixed(2);

    }

   }
    // Escuchar eventos de cambio en los campos de entrada
    ilfComplejidadAltaInput.addEventListener('change', calcularPuntosFuncion);
    ilfComplejidadMediaInput.addEventListener('change', calcularPuntosFuncion);
    ilfComplejidadBajaInput.addEventListener('change', calcularPuntosFuncion);
    

    elfComplejidadAltaInput.addEventListener('change', calcularPuntosFuncion);
    elfComplejidadMediaInput.addEventListener('change', calcularPuntosFuncion);
    elfComplejidadBajaInput.addEventListener('change', calcularPuntosFuncion);
   

    eiComplejidadAltaInput.addEventListener('change', calcularPuntosFuncion);
    eiComplejidadMediaInput.addEventListener('change', calcularPuntosFuncion);
    eiComplejidadBajaInput.addEventListener('change', calcularPuntosFuncion);
    

    eoComplejidadAltaInput.addEventListener('change', calcularPuntosFuncion);
    eoComplejidadMediaInput.addEventListener('change', calcularPuntosFuncion);
    eoComplejidadBajaInput.addEventListener('change', calcularPuntosFuncion);
    

    eqComplejidadAltaInput.addEventListener('change', calcularPuntosFuncion);
    eqComplejidadMediaInput.addEventListener('change', calcularPuntosFuncion);
    eqComplejidadBajaInput.addEventListener('change', calcularPuntosFuncion);

    valorAjusteInput.addEventListener('input', calcularPuntosFuncionConAjuste);
    //Esfuerzo
    cImputEsfuerzo.addEventListener('change', calcularEsfuerzo);
    eImputEsfuerzo.addEventListener('change', calcularEsfuerzo);
    //duración
    cImputDuracion.addEventListener('change', calcularDuracion);
    eImputDuracion.addEventListener('change', calcularDuracion); 
    //personal
    diasTrabajoInput.addEventListener('change',calcularPersonal);
    horasTrabajoInput.addEventListener('change',calcularPersonal);
    //coste 
    salarioHoraInput.addEventListener('change',calcularCoste);
    //velocidad y productivodad
    botonCalcular.addEventListener('click',calcularVelocidaPRoductividad);
    botonCalcularCiclo.addEventListener('click',calcularEstimacionFase);
  </script>
</body>
<footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Software Solutions 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        Puntos de función Amazon
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
</html>
