
<!-- Añade Materialize CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
<!-- Añade Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="container custom-container">
    <form class="col s12 m8 l6 offset-m2 offset-l3 z-depth-1 card-panel custom-form" id="form1">
        <!-- Título con ícono de pregunta y tooltip -->
        <h5 class="center-align">
            Cifrado César
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Pulsa el ícono para obtener ayuda." id="help-icon">
                help_outline
            </i>
        </h5>

        <!-- Selector de idioma -->
        <div class="input-field">
            <select id="language-select">
                <option value="spanish" selected>Español</option>
                <option value="english">Inglés</option>
            </select>
            <label>Selecciona el idioma</label>
        </div>

        <!-- Input de texto con ícono -->
        <div class="input-field">
            <i class="material-icons prefix">text_fields</i>
            <input type="text" id="input-text" class="validate" placeholder="Ingresa el texto" required>
            <label for="input-text">Texto a cifrar/descifrar</label>
        </div>

        <!-- Selector del valor de desplazamiento -->
        <div class="input-field center-align">
            <p>Valor de desplazamiento:</p>
            <input type="number" id="shift-value" name="shift-value" min="0" max="25" value="3" style="max-width: 80px; margin: 0 auto;" />
        </div>

        <!-- Botones de cifrar y descifrar -->
        <div class="center-align" id="btn1">
            <button type="button" id="encrypt-button" class="btn blue">Cifrar</button>
            <button type="button" id="decrypt-button" class="btn orange">Descifrar</button>
        </div>

        <!-- Input de resultado con ícono -->
        <div class="input-field">
            <i class="material-icons prefix">check_circle</i>
            <input type="text" id="output-text" class="validate" placeholder="Resultado" readonly>
            <label for="output-text">Resultado</label>
        </div>

        <!-- Iconos para copiar, pegar y vaciar -->
        <div class="center-align">
            <i class="material-icons" id="copy-button" style="cursor: pointer; display: none;" title="Copiar">content_copy</i>
            <i class="material-icons" id="paste-button" style="cursor: pointer; display: none;" title="Pegar">paste</i>
            <i class="material-icons" id="reset-button" style="cursor: pointer;" title="Vaciar">delete</i>
        </div>
    </form>

    <!-- Modal Estructura -->
    <div id="info-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn modal-close" title="Cerrar">&times;</span>
            <h4 class="modal-title">
                <i class="fas fa-book-open"></i> Guía Completa para el Cifrado César
            </h4>

            <p class="modal-text">
                El Cifrado César es un método de cifrado en el que las letras del mensaje se desplazan un número fijo de posiciones en el alfabeto. Este cifrado es uno de los métodos más antiguos, utilizado por Julio César para proteger mensajes confidenciales.
            </p>

            <h5>Historia del Cifrado César:</h5>
            <p class="modal-text">
                El Cifrado César se originó en la antigua Roma y fue utilizado por Julio César para enviar mensajes secretos a sus generales. Aunque hoy en día es un cifrado básico, sentó las bases para muchos otros métodos de criptografía.
            </p>

            <h5>Pasos para usar el Cifrado César:</h5>
            <ol class="steps-list">
                <li>Escribe el mensaje que deseas cifrar o descifrar en el campo de texto.</li>
                <li>Introduce la clave de desplazamiento (número de posiciones a mover en el alfabeto).</li>
                <li>Haz clic en el botón "Cifrar" para encriptar el mensaje o "Descifrar" para obtener el texto original.</li>
                <li>Puedes copiar el resultado con el botón "Copiar Texto" para pegarlo en otro lugar.</li>
            </ol>

            <h5>Ejemplo de Cifrado:</h5>
            <p class="modal-text">Con un desplazamiento de 5, la letra "E" se convierte en "J".</p>

            <h5>Diferencias en el Cifrado César en Español e Inglés:</h5>
            <div class="table-container">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Característica</th>
                            <th>Cifrado César en Español</th>
                            <th>Cifrado César en Inglés</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alfabeto</td>
                            <td>27 letras (A-Z, Ñ)</td>
                            <td>26 letras (A-Z)</td>
                        </tr>
                        <tr>
                            <td>Ejemplo de Desplazamiento</td>
                            <td>E → J (desplazamiento 5)</td>
                            <td>E → J (desplazamiento 5)</td>
                        </tr>
                        <tr>
                            <td>Consideración de Caracteres Especiales</td>
                            <td>Se puede incluir la "Ñ" y acentos</td>
                            <td>No se consideran caracteres especiales</td>
                        </tr>
                        <tr>
                            <td>Usos Modernos</td>
                            <td>Educativo y didáctico</td>
                            <td>Educativo y didáctico</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h5>Aplicaciones Modernas:</h5>
            <p class="modal-text">
                Aunque el Cifrado César no se usa en sistemas modernos de seguridad, su simplicidad lo hace ideal para aprender los fundamentos de la criptografía. Hoy en día, se emplea principalmente con fines educativos.
            </p>

            <h5>Tutorial: Cómo usar el Cifrado César</h5>
            <div class="video-container">
                <div class="video">
                    <a href="https://www.youtube.com/watch?v=qVLW46AXOYo" target="_blank">Tutorial: Cómo usar el Cifrado César</a>
                    <iframe src="https://www.youtube.com/embed/qVLW46AXOYo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <h5>Más Recursos:</h5>
            <div class="video-container">
                <div class="video">
                    <a href="https://www.youtube.com/watch?v=qzIPNbZptTc" target="_blank">Tutorial: Introducción al Cifrado César</a>
                    <iframe src="https://www.youtube.com/embed/qzIPNbZptTc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Importar Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Script personalizado -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Inicializar tooltips y modales
        var elemsTooltip = document.querySelectorAll('.tooltipped');
        M.Tooltip.init(elemsTooltip);

        var elemsModal = document.querySelectorAll('.modal');
        var modalInstances = M.Modal.init(elemsModal);

        // Abrir modal al hacer clic en el ícono de ayuda
        document.getElementById('help-icon').addEventListener('click', function () {
            modalInstances[0].open(); // Abrir el primer modal
        });

        // Cerrar el modal al hacer clic en la "x"
        document.querySelector('.close-btn').addEventListener('click', function () {
            modalInstances[0].close(); // Cerrar el primer modal
        });



        // Función para cifrar texto usando el Cifrado César
        function encrypt(text, shift, language) {
            const alphabetSpanish = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
            const alphabetEnglish = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            const alphabet = language === 'spanish' ? alphabetSpanish : alphabetEnglish;

            let encrypted = '';

            for (let char of text.toUpperCase()) {
                if (alphabet.includes(char)) {
                    let index = (alphabet.indexOf(char) + shift) % alphabet.length;
                    encrypted += alphabet[index];
                } else {
                    encrypted += char; // Añadir caracteres no alfabéticos sin cambios
                }
            }
            return encrypted;
        }

        // Función para validar caracteres alfanuméricos
        function validateInput(inputText, language) {
            const regexSpanish = /^[A-Za-z0-9Ññ\s]+$/; // Permite Ñ y caracteres alfanuméricos en español
            const regexEnglish = /^[A-Za-z0-9\s]+$/; // Solo caracteres alfanuméricos en inglés

            if (language === 'spanish') {
                return regexSpanish.test(inputText);
            } else {
                return regexEnglish.test(inputText);
            }
        }

        // Función para manejar el cifrado
        document.getElementById('encrypt-button').addEventListener('click', function () {
            const inputText = document.getElementById('input-text').value;
            const shiftValue = parseInt(document.getElementById('shift-value').value);
            const language = document.getElementById('language-select').value;

            // Validar entrada
            if (!validateInput(inputText, language)) {
                alert('Entrada no válida: Solo se permiten caracteres alfanuméricos y, en español, la letra "Ñ".');
                return;
            }

            if (inputText.trim() === '') {
                alert('El texto no puede estar vacío');
                return;
            }

            const encryptedText = encrypt(inputText, shiftValue, language);
            document.getElementById('output-text').value = encryptedText;

            document.getElementById('copy-button').style.display = 'inline';
            document.getElementById('paste-button').style.display = 'inline';

            // Copiar texto
            document.getElementById('copy-button').onclick = function () {
                navigator.clipboard.writeText(encryptedText).then(() => {
                    alert('Texto copiado correctamente');
                });
            };
        });

        // Función para manejar el descifrado
        document.getElementById('decrypt-button').addEventListener('click', function () {
            const inputText = document.getElementById('input-text').value;
            const shiftValue = parseInt(document.getElementById('shift-value').value);
            const language = document.getElementById('language-select').value;

            // Validar entrada
            if (!validateInput(inputText, language)) {
                alert('Entrada no válida: Solo se permiten caracteres alfanuméricos y, en español, la letra "Ñ".');
                return;
            }

            const decryptedText = encrypt(inputText, (language === 'spanish' ? 27 : 26) - shiftValue, language);
            document.getElementById('output-text').value = decryptedText;

            document.getElementById('copy-button').style.display = 'inline';

            // Copiar texto
            document.getElementById('copy-button').onclick = function () {
                navigator.clipboard.writeText(decryptedText).then(() => {
                    alert('Texto copiado correctamente');
                });
            };
        });

        // Vaciar campos
        document.getElementById('reset-button').addEventListener('click', function () {
            document.getElementById('input-text').value = '';
            document.getElementById('output-text').value = '';
            document.getElementById('shift-value').value = 3;
            document.getElementById('copy-button').style.display = 'none';
            document.getElementById('paste-button').style.display = 'none';
        });

        // Pegar texto
        document.getElementById('paste-button').addEventListener('click', function () {
            navigator.clipboard.readText().then((text) => {
                document.getElementById('input-text').value = text;
            });
        });

        // Inicializar select de idioma
        var elemsSelect = document.querySelectorAll('select');
        M.FormSelect.init(elemsSelect);
    });
</script>
