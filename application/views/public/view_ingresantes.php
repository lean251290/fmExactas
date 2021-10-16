<br>
<br>
<br>
<hr>
<div class="container-fluid">
	<div class="row col-md-12 mb-4">
		<h1 class="tituloingresantes text-center">Material Para los Módulos de los Ingresantes</h1>
	</div>
</div>
<hr>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mb-4">
			<div id="accordion2" class="accordion">
				<div class="card2 mb-0">
					<div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
						<a class="card-title2"> <strong> Pensamiento Matemático </strong></a>
					</div>
					<div id="collapseOne" class="card-body2 collapse" data-parent="#accordion2">
						<p>MATERIAL NECESARIO PARA CURSAR ESTE MÓDULO</p>
						<p>
							<?php foreach ($archivos as $archivo):?>
								<?php if (($archivo->eliminado_flag == 1) && ($archivo->codigo_materia == 12) && ($archivo->ingreso == 1)): ?>
								<a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: white" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar <?= $archivo->titulo;?></a> 
							</p>
							<hr>
						<?php endif;?>
					<?php endforeach;?>
				</div>
				<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					<a class="card-title2"> <strong> Competencias Digitales </strong></a>
				</div>
				<div id="collapseTwo" class="card-body2 collapse" data-parent="#accordion2">
					<p>MATERIAL NECESARIO PARA CURSAR ESTE MÓDULO</p>
					<p>
						<?php foreach ($archivos as $archivo):?>
							<?php if (($archivo->eliminado_flag == 1) && ($archivo->codigo_materia == 12) && ($archivo->ingreso == 2)): ?>
							<a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: white" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar <?= $archivo->titulo;?></a> 
						</p>
						<hr>
					<?php endif;?>
				<?php endforeach;?>
			</div>
			<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				<a class="card-title2"> <strong> Lectura y Comprensión de Textos </strong> </a>
			</div>
			<div id="collapseThree" class="collapse" data-parent="#accordion2">
				<div class="card-body2"> 
					<p>MATERIAL NECESARIO PARA CURSAR ESTE MÓDULO</p>  <p>
						<?php foreach ($archivos as $archivo):?>
							<?php if (($archivo->eliminado_flag == 1) && ($archivo->codigo_materia == 12)&& ($archivo->ingreso == 3)): ?>
							<a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: white" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar <?= $archivo->titulo;?></a> 
						</p>
						<hr>
					<?php endif;?>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-md-6 mb-4">
	<h6 class="tituloingresantes text-center">Escaneá el código QR e ingresá al grupo de WhatsApp de Sistemas!</h6>
	<br>
	<div class="contenedorQR text-center mb-4">
		<img id="imagenqr" src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fchat.whatsapp.com%2FEouYeomEYc9C3dUZ2UD44h&s=10&e=m" alt="Generador de Códigos QR Codes"/>
	</div>
</div>

</div>

<hr>
<div class="container-fluid">
	<div class="row col-md-12 mb-4">
		<h1 class="tituloingresantes text-center">Algunas cosas que pueden interesarte</h1>
	</div>
</div>
<hr><br>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 mb-4">
			<div id="accordion" class="accordion">
				<div class="card mb-0">
            <!--<div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                <a class="card-title"> <strong> Pensamiento Matemático </strong></a>
            </div>
            <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                <p>MATERIAL NECESARIO PARA CURSAR ESTE MÓDULO</p>
                <p>
                  <?php foreach ($archivos as $archivo):?>
        <?php if (($archivo->eliminado_flag == 1) && ($archivo->codigo_materia == 12) && ($archivo->ingreso == 1)): ?>
                <a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: white" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar <?= $archivo->titulo;?></a> 
              </p>
              <hr>
            <?php endif;?>
             <?php endforeach;?>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <a class="card-title"> <strong> Competencias Digitales </strong></a>
            </div>
            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
               <p>MATERIAL NECESARIO PARA CURSAR ESTE MÓDULO</p>
                <p>
<?php foreach ($archivos as $archivo):?>
        <?php if (($archivo->eliminado_flag == 1) && ($archivo->codigo_materia == 12) && ($archivo->ingreso == 2)): ?>
                <a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: white" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar <?= $archivo->titulo;?></a> 
                 </p>
                 <hr>
                 <?php endif;?>
             <?php endforeach;?>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title"> <strong> Lectura y Comprensión de Textos </strong> </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body"> 
                <p>MATERIAL NECESARIO PARA CURSAR ESTE MÓDULO</p>  <p>
                <?php foreach ($archivos as $archivo):?>
        <?php if (($archivo->eliminado_flag == 1) && ($archivo->codigo_materia == 12)&& ($archivo->ingreso == 3)): ?>
                <a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: white" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar <?= $archivo->titulo;?></a> 
                 </p>
                 <hr>
               <?php endif;?>
             <?php endforeach;?>
             
                  </div>
              </div>-->
              
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
              	<a class="card-title"> <strong>¿Como es el cursado de las asignaturas? </strong></a>
              </div>
              <div id="collapseFour" class="collapse" data-parent="#accordion">
              	<div class="card-body text-left">   <p>
              		Existen dos tipos de materias, Teórico-Prácticas, y Teórico-Prácticas-Experimentales. Las primeras tienen clases de teoría y de problemas (prácticas). Las materias teórico-prácticas-experimentales, además de la teoría y la práctica tienen laboratorios y en estos casos se exigen un porcentaje de laboratorios aprobados que suele ser del 100%.
              		También existe otro tipo, las “Materias Promocionales”, las cuales permiten que al término del cursado se acredite su aprobación, no necesitando rendir el examen final de la misma. Para adquirir ésta se deberán cumplimentar los requisitos que para ello se establezca. Los cuales figuran en los programas de cada materia.

              	</p>
              	<hr>


              </div>
          </div>
          <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
          	<a class="card-title"> <strong>Exámenes parciales</strong> </a>
          </div>
          <div id="collapsefive" class="collapse" data-parent="#accordion">
          	<div class="card-body text-left">   <p>
          		Durante el cursado existen exámenes parciales (estos deben ser mínimo de 2 y máximo de 6) para cada asignatura. Cada examen parcial tiene un recuperatorio. Al final del cursado existe un único recuperatorio extraordinario que se lo utiliza cuando se desaprueba uno y solo uno de los recuperatorios parciales. Vale aclarar que es necesario aprobar el 100 % de los exámenes parciales para obtener la regularidad de la materia.

          	</p>
          	<hr>


          </div>
      </div>
      <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
      	<a class="card-title"><strong> Regularidad de una materia</strong> </a>
      </div>
      <div id="collapsesix" class="collapse" data-parent="#accordion">
      	<div class="card-body text-left">   <p>
      		Regularizar una materia significa haber aprobado el 100% de los exámenes parciales, tener la asistencia mínima exigida de las clases prácticas y, si corresponde, haber aprobado la cantidad de laboratorios exigidos.
      		La regularidad en una materia dura 3 años desde el fin del cuatrimestre en que se la regularizo.
      		Si transcurrido el tiempo de regularidad no ha aprobado la materia deberás cursarla nuevamente; o bien rendirla en calidad de libre. A esto se le llama PERDER LA REGULARIDAD POR TIEMPO.


      	</p>
      	<hr>


      </div>
  </div>
  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseseven">
  	<a class="card-title"><strong> S.I.U. Guaraní </strong></a>
  </div>
  <div id="collapseseven" class="collapse" data-parent="#accordion">
  	<div class="card-body text-left">   <p>
  		Es un sistema informático de autogestión académica por Internet para trámites en general. Debes tener presente el nombre de usuario y la clave asignada inicialmente.
  		Nombre de Usuario: Número de Documento Nacional de Identidad (DNI), sin puntos
  		Clave: (CLAVE A CONFIRMAR POR EL ALUMNO)
  		Cualquier duda que tengas consulta a cualquiera de los integrantes del Centro de Estudiantes FRANJA MORADA.
  		Por medio del S.I.U. Guaraní se inscribe a las materias para cursar. Este ciclo lectivo 2021 la inscripción a la materia se inicia desde el 09 de marzo hasta el 31 de marzo. La inscripción es obligatoria para poder cursar y rendir los parciales.
  		Si la inscripción para cursar la materia tuvo éxito, el sistema te dará a conocer el número de transacción. Muy importante,
  		Recuerda que debes anotar el número de transacción.


  	</p>
  	<hr>


  </div>
</div>
<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
	<a class="card-title"> <strong>Inscripción a exámenes finales</strong> </a>
</div>
<div id="collapse8" class="collapse" data-parent="#accordion">
	<div class="card-body text-left">   <p>
		Cuando cumplís los requisitos de correlatividad de una materia para rendir examen final, quedas habilitado para poder hacerlo. El ¿Cuándo? Es tu decisión. Durante el año se constituye con 10 turnos de examen. Dentro de cada uno de ellos, cada materia tiene asignada UNA fecha determinada (figuran en los calendarios de examen), en el Centro de Estudiantes FRANJA MORADA te los otorgan de modo gratuito.
		Una vez decidida la materia que vas “preparar” (estudiar); tenés que realizar la inscripción a la misma. Éste trámite podes realizarlo entre 7 (siete) y 3 (tres) días “HÁBILES” ANTES INCLUSIVE a la fecha estipulada; y lo realizas a través del SIU GUARANI, es importante ANOTAR EL NÚMERO DE TRANSACCIÓN que la página muestra una vez concluido el trámite.
		El centro de estudiantes FRANJA MORADA posee computadoras para facilitar al estudiante las  Inscripciones a sus materias y exámenes finales.



	</p>
	<hr>


</div>
</div>
<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
              	<a class="card-title"> <strong>Cronograma de entrega Control de Salud para Ingresantes 2020 y 2021</strong></a>
              </div>
              <div id="collapse9" class="collapse" data-parent="#accordion">
              	<div class="card-body text-left">   <p>
              		El postulante a ingreso y/o alumno de 1° año deberá presentar (en el turno asignado que figura al pie) los siguientes estudios para realizar su correspondiente Control de Salud obligatorio: <br>
<ul>
	<li>✔️Control Odontológico</li>
	<li>✔️Constancia de Grupo y Factor Sanguíneo.</li>
	<li>✔️ Informe de Laboratorio: <br></li>
		<ul>
			<li>Hematocrito/hemoglobina,</li>
			<li>Glucemia,</li>
			<li>VDRL,</li>
			<li>Hepatitis B.</li>
			<li>Perfil Lipídico (HDL/LDL/Colesterol total/ Triglicéridos), en mayores de 30.</li>
		</ul>
</ul>

✔️ Certificado de Vacunación:
<ul>
	<li>Doble adulto o triple bacteriana acelular (todos)</li>
	<li>Hepatitis B y Triple Viral (estudiantes de Cs. de la Salud)</li>
	<li> Antigripal (estudiantes de cs. de la salud o pacientes de riesgo)</li>
</ul>

✔️ Otros:
<ul>
	<li>PAP mayor de 25 años</li>
	<li>Mamografía mayor de 40 años</li>
</ul>


 <br>
El Control de Salud Médico se realizará ÚNICAMENTE por los profesionales de la Dirección de Salud Universitaria de la Secretaria General de Asuntos Sociales de la UNNE, según los siguientes cronogramas: <br>

👉Ingresantes 2020 <br>

Facultades e Institutos con asiento en Corrientes: Departamento Universitario de Salud Estudiantil
(Belgrano 1045- Ctes.)
Dirección de Salud Universitaria
(Delegación de Asuntos Sociales en Campus Resistencia- Las Heras 727, Resistencia, Chaco) <br>

Marzo: Desde el 01/03/2021 al 31/03/2021 <br>

- Ciencias Exactas y Naturales y Agrimensura <br>

👉 Ingresantes 2021 <br>

Facultades e Institutos con asiento en Corrientes: Departamento Universitario de Salud Estudiantil
(Belgrano 1045- Ctes.)
Dirección de Salud Universitaria
(Delegación de Asuntos Sociales en Campus Resistencia- Las Heras 727, Resistencia, Chaco) <br>

Agosto:  Desde el 01/08/21 al 31/08/2021 <br>

              	</p>
              	<hr>


              </div>
          </div>
<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
	<a class="card-title"> <strong> Presentación de Constancia de “no adeuda materia” </strong></a>
</div>
<div id="collapse10" class="collapse" data-parent="#accordion">
	<div class="card-body text-left">   <p>
		Si no presentaste tu certificado de no adeuda materia o título secundario durante diciembre, RECUERDA que tendrás que hacerlo antes del 31 de marzo o serás dado de baja automáticamente.
	</p>
	<hr>


</div>
</div>
<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11">
	<a class="card-title"> <strong>Presentación del título secundario debidamente legalizado por el Rectorado de la U.N.N.E. </strong></a>
</div>
<div id="collapse11" class="collapse" data-parent="#accordion">
	<div class="card-body text-left">   <p>
		Hasta el 31 de marzo tenés tiempo de llevar tu título secundario original al Rectorado de la U.N.N.E. (25 de Mayo 868, entre Salta y Buenos Aires – Corrientes) para realizar los respectivos trámites de legalización. De no presentar tu título o la constancia del título en trámite de legalización automáticamente serás dado de baja.
		<ul>
			<li>Carpeta colgante de cualquier color</li>
			<li>Titulo secundario original y una copia simple (sin estar previamente certificado)</li>
			<li>Fotocopia de D.N.I.</li>
			<li><strong>Si tu título no es argentino, antes de iniciar el trámite de certificación, deberá estar convalidado por el Ministerio de Educación Argentina.</strong></li>
		</ul>
	</p>
	<hr>


</div>
</div>
<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12">
	<a class="card-title"> <strong>Obtención de la Libreta Universitaria (L.U.) </strong></a>
</div>
<div id="collapse12" class="collapse" data-parent="#accordion">
	<div class="card-body text-left">   <p>
		Cuando apruebes tu primera materia tendrás acceso a la Libreta Universitaria.
		¿Cómo se obtiene la LU? Una vez aprobada tu primera materia podrás solicitar en el Centro de Estudiantes un pequeño formulario que lo rellenarás y adjuntaras con una foto carnet.
		¿Para qué sirve la LU? Principalmente para llevar un registro de las materias que apruebes a lo largo de tu carrera; también sirve como documentación única e intransferible dentro de la Universidad.

	</p>
	<hr>


</div>
</div>
<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse13">
	<a class="card-title"> <strong> Constancia de Alumno Regular </strong></a>
</div>
<div id="collapse13" class="collapse" data-parent="#accordion">
	<div class="card-body text-left">   <p>
		Podrás pedir una constancia de alumno regular totalmente gratuita para presentar ante las autoridades que lo requieran.
		Lo Podés gestionar a través de S.I.U. Guaraní.
	</p>
	<hr>


</div>
</div>
<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse14">
	<a class="card-title"> <strong>Certificado Analítico de materias aprobadas y regularizadas </strong></a>
</div>
<div id="collapse14" class="collapse" data-parent="#accordion">
	<div class="card-body text-left">   <p>
		Es un certificado expedido por la Facultad en donde figuran todas las materias que aprobaste y/o regularizaste en tu carrera con el promedio de la última materia aprobada y/o desaprobada.
		¿Para qué sirve? Podes presentarla en lugares en donde quieras trabajar, acceso a becas, registro más seguro de tus materias, para realizar pasantías, etc. 

	</p>
	<hr>


</div>
</div>
<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse15">
	<a class="card-title"><strong> Becas PROGRESAR </strong></a>
</div>
<div id="collapse15" class="collapse" data-parent="#accordion">
	<div class="card-body text-left">   <p>
		Los requisitos comunes para todos los interesados en cobrar las BECAS PROGRESAR son los siguientes:
		<lu>
			<li> Tener entre 18 y 24 años. Para estudiantes avanzados de Nivel Superior, el límite es de 30 años.</li>
			<li> Ser Argentino o acreditar 5 años de residencia en el país con tu DNI.</li>
			<li> No ser beneficiarios de otros planes sociales, ya sean nacionales, provinciales o municipales. </li>
			<li> Que la suma de ingresos personales o familiares no superen la suma de 3 salarios minimos.</li>
		</lu>
		<br>
		<strong>IMPORTANTE: </strong>
		Exigen estos requisitos a TODOS los estudiantes que quieran recibir el beneficio. Tanto para los que se inscriben por primera vez como para los que renueven inscripción.

		Se reconoce como grupo familiar autónomo a los jóvenes con hijos.

		Consulta el monto del salario mínimo, vital y móvil en el sitió del Ministerio de Trabajo.

		¿Como inscribirse? 
		Deben inscribirse a través de la pagina web. 
		<a href="https://becasprogresar.educacion.gob.ar/" target="__blank">BECAS PROGRESAR</a>
		<br>

		<strong>Periodo de inscripción de 1 de marzo al 31 de marzo.</strong>


	</p>
	<hr>


</div>
</div>
<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse16">
	<a class="card-title"><strong> Becas U.N.N.E. </strong></a>
</div>
<div id="collapse16" class="collapse" data-parent="#accordion">
	<div class="card-body text-left">   <p>
		La UNNE implementa un sistema de becas que permite solucionar las situaciones de emergencia que atraviesan los estudiantes que cursen regularmente cualquier carrera de grado que se dicte en las Facultades o Institutos de esta Universidad.
		<br>
		Se ofrecen Becas de:
		<ul>
			<li>Transporte (interurbano y urbano).</li>
			<li>Comedor.</li>
			<li>Prestación efectiva de servicios.</li>
			<li>Finalización de estudios.</li>
		</ul>

		Debes crear tu cuenta seleccionando la opción Registrarme como nuevo usuario en el SIU-Tehuelche de la UNNE, se genera una cuenta y se completa el formulario de la solicitud correspondiente. Una vez finalizado la solicitud se imprime, se adjunta a los demás requisitos correspondientes de la beca solicitada y se entrega en la Secretaria de Asuntos Estudiantiles de nuestra facultad.
	</p>
	<hr>


</div>
</div>
</div>
</div>
</div>
<div class="col-md-4 mb-4">
	<div class="list-group enlaces" style="width: 18rem;">
		<ul class="list-group list-group-flush">
			<li class="list-group-item"><h3><strong>Enlaces de interés</strong></h3></li>
			<li class="list-group-item"><a href="http://guarani.exa.unne.edu.ar/" target="_blank">S.I.U. Guaraní</a></li>
			<li class="list-group-item"><a href="https://virtual-moodle.unne.edu.ar/login/index.php" target="_blank">Moodle</a></li>
			<li class="list-group-item"><a href="https://becasprogresar.educacion.gob.ar/" target="_blank">Becas Progresar </a></li>
			<li class="list-group-item"><a href="https://issunne.unne.edu.ar/" target="_blank">ISSUNNE </a></li>
			<li class="list-group-item"><a href="http://tehuelche.unne.edu.ar/tehuelche/3.0/" target="_blank">S.I.U. Tehuelche </a></li>
		</ul>
	</div>
</div>
</div>
</div>
</div></div>
</div>