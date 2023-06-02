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
