
    <nav class="nav" id="nvar">
        <div class="brand">
            <h3>Consultas clinicas</h3>
        </div>

        <div class="navigation">
            <ul class="menu">
                <li><a href="<?php echo(site_url('Home_controller/muestrausuarios')); ?>">Usuarios Registrados</a></li>
                <li><a href="<?php echo(site_url('Home_controller/formulario' )); ?>">Formulario de sintomas</a></li>
                <li><a href="<?php echo(site_url('Home_controller/muestradatos')); ?>">Lista de Formularios</a></li>
                <li><a href="<?php echo(site_url('Login_controller/cierra_sesion')); ?>">Cerrar Sesion</a></li>
            </ul>
            <div class="user">
                <button class="search-button"><i class="fa fa-user"></i></button>
            </div>
        </div>
    </nav>

      <main>
        <section class="schedule-section">
          <div class="left-section">
            <h1>Combate el virus con las vacunas</h1>
            <p>Detengamos esta pandemia matando el virus con una vacuna, no dejes que tú y tu familia se infecten</p>
            <div class="features-left">
              <div class="features yellow-feature">
                <figure>
                  <i class="fa-solid fa-square-check"></i>
                </figure>
                <p>La mejor proteccion</p>
              </div>
              <div class="features yellow-feature">
                <figure>
                  <i class="fa-solid fa-star"></i>
                </figure>
                <p>Selecccione la vacuna</p>
              </div>
            </div>
            <div class="schedule">
              <div class="features">
                <figure class="icon-shadow">
                  <i class="fa-solid fa-clock"></i>
                </figure>
                <p>Programe sus vacunas</p>
              </div>
              <div class="schedule-date">
                <div class="features schedule-features">
                  <figure>
                    <i class="fa-solid fa-location-dot"></i>
                  </figure>
                  <div>
                    <p>Localizació</p>
                    <p>    
                        <select id="tacos" name="tacos">
                            <option value="suadero">---ninguno---</option>
                            <option value="pastor">Colima</option>
                            <option value="campechanos">Villa de Alvares</option>
                            <option value="tripa">Manzanillo</option>
                        </select>
                    </p>
                  </div>
                </div>
                <div class="features schedule-features">
                  <figure>
                    <i class="fa-solid fa-calendar-days"></i>
                  </figure>
                  <div>
                    <p>Fecha</p>
                    <p><input type="date" id="fecha1" name="fecha1"><br></p>
                  </div>
                </div>
                <div class="features schedule-features">
                  <figure>
                    <i class="fa-solid fa-syringe"></i>
                  </figure>
                  <div>
                    <p>Tipo de vacuna</p>
                    <p>
                        <select id="tacos" name="tacos">
                            <option value="suadero">---ninguno---</option>
                            <option value="pastor">AstraZeneca</option>
                            <option value="campechanos">PFizer</option>
                            <option value="tripa">SINOVAC</option>
                            <option value="tripa">moderna</option>
                        </select>   
                    </p>
                  </div>
                </div>
                <input type="button" id="boton1" name="boton1" value="Enviar" onclick="alert('Tu registro se envio correctamente');"><br><br>
              </div>
            </div>
          </div>
          <figure class="right-section">
            <img src="<?php echo(base_url('imagenes/doc-1.png')); ?>" alt="doc-image">
          </figure>
        </section>
        <section class="logo-section">
          <figure>
            <img src="https://www.mbot.com/wp-content/uploads/2021/02/astrazeneca-PNG-logo.png" alt="astrazeneca">
          </figure>
          <figure>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Sinovac_logo.svg/2560px-Sinovac_logo.svg.png" alt="sinovac">
          </figure>
          <figure>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Pfizer_%282021%29.svg/2560px-Pfizer_%282021%29.svg.png" alt="pfizer">
          </figure>
          <figure>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Moderna_logo.svg/1200px-Moderna_logo.svg.png" alt="moderna">
          </figure>
        </section>
        <section class="info-section">
          <div class="info-text">
            <h1>¿ Por que es importante hacerme estudios clinicos ?</h1>
            <p>Para monitorear la salud de las personas y prevenir o detectar a tiempo alguna enfermedad. 
            a pesar de que son una gran herramienta para cuidar nuestra salud, son pocas las personas que se realizan
            exámenes de laboratorio a manera de prevencion, pues la gran mayoria rcurre a ellos debido a una urgencia.
            </p>
          </div>
          <div class="info-cards">
            <div class="info-card features">
              <figure>
                <i class="fa-solid fa-sliders"></i>
              </figure>
              <h2> ¿Como prevenir las enfermedades de transmicion sexual?</h2>
              <p>Eviatar toda clase de contacto sexual,ya sea sexo vaginal, anal  u oral, y contacto 
                genital de piel con piel con otra persona. </p>
            </div>
            <div class="info-card features icon-shadow">
              <figure class="icon-shadow">
                <i class="fa-solid fa-square-check"></i>
              </figure>
              <h2>Formacion de anticuerpos</h2>
              <p>Son proteinas que forman parte del sistema inmune y circulan por la sangre. Cuando reconocen 
                sustancias extrañas para el organismo, como virus en las vacterias o sustancias toxicas, las nuetraliza.
              </p>
            </div>
            <div class="info-card features">
              <figure>
                <i class="fa-solid fa-users"></i>
              </figure>
              <h2>Relacion entre / enfermera-persona /sana o enferma</h2>
              <p>Es la relacion, de ambos entre la enfermera, el enfermo o el sujeto sanos
                se encuentran para tratar de enfrentar la enfermedad. 
              </p>
            </div>
            <div class="info-card features">
              <figure>
                <i class="fa-solid fa-chart-line"></i>
              </figure>
              <h2>Inmunidad de grupo solectiva</h2>
              <p>Inmunidad de rebaño es un fenomeno bioestadistico que se obserba en una poblacion 
                cuando hay un hecho inmune en una enfermedad por contagio previo o por que ah sido 
                vacunado  y se interrumpe la cadena epidemeologica.
              </p>
            </div>
          </div>
        </section>
        <section class="contact-section">
          <div class="right-section">
            <div class="info-text">
              <h1>Contacto de emergencias</h1>
              <p>Póngase en contacto por medio de los sitios de comunicacion que le proporcionaremos a continuación si usted o su familia no se sienten bien, " no dude en comunicarse ".</p>
            </div>
            <div class="contact-card-container">
              <div class="contact-card">
                <div class="features contact-features">
                  <figure>
                    <i class="fa-solid fa-phone"></i>
                  </figure>
                  <div class="contact-text">
                    <p>llamar</p>
                    <p>33.554.4507</p>
                  </div>
                </div>
                <button class="secundary-button">llamar ahora</button>
              </div>
              <div class="contact-card">
                <div class="features contact-features">
                  <figure class="icon-shadow">
                    <i class="fa-solid fa-comment-dots"></i>
                  </figure>
                  <div class="contact-text">
                    <p>Chat</p>
                    <p>33.554.4507</p>
                  </div>
                </div>
                <button class="primary-button"><span>Chatea ahora</span></button>
              </div>
              <div class="contact-card">
                <div class="features contact-features">
                  <figure>
                    <i class="fa-solid fa-video"></i>
                  </figure>
                  <div class="contact-text">
                    <p>Video llamada</p>
                    <p>128-123-145</p>
                  </div>
                </div>
                <button class="secundary-button">Las llamadas son por zoom</button>
              </div>
              <div class="contact-card">
                <div class="features contact-features">
                  <figure>
                    <i class="fa-solid fa-envelope"></i>
                  </figure>
                  <div class="contact-text">
                    <p>Mensajes</p>
                    <p>consultas_clinicas@hotmail.com</p>
                  </div>
                </div>
                <button class="secundary-button">Enviar un mensaje nuevo por correo</button>
              </div>
            </div>
          </div>
          <figure class="background-fig">
            <img src="<?php echo(base_url('imagenes/doc-3.png')); ?>" alt="">
          </figure>
        </section>
      </main>
      <footer>
        <div class="left-footer">
          <h2>Consultas clinicas</h2>
          <p>Nuestro objetivo es salvar vidas y hacerlas consientes sobre sus necesidades de SALUD</p>
        </div>
        <div class="right-footer">
          <ul>
            <li>Acerca de</li>
            <li>Sobre nosotros</li>
            <li>Funciones</li>
            <li>Noticias & Blogs</li>
          </ul>
          <ul>
            <li>Compañia</li>
            <li>Como trabajamos</li>
            <li>Capital</li>
            <li>Seguridad</li>
          </ul>
          <ul>
            <li>Soporte</li>
            <li>FAQs</li>
            <li>Centro de Soporte</li>
            <li>Contactenos</li>
          </ul>
        </div>
        <p>@2022 Consultas Clinicas. Todos los derechos reservados</p>
        <div>
          <p>Términos y acuerdos</p>
          <p>Política de privacidad</p>
        </div>
      </footer>