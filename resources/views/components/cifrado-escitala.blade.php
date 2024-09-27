<!-- resources/views/components/cifrado-escitala.blade.php -->
<div class="container">
    <!-- Título del cifrado Escítala con ícono de pregunta para abrir el modal -->
    <h5 class="center-align">
        Cifrado Escítala
        <i class="material-icons" id="info-icon" style="cursor: pointer;" title="Más información">help_outline</i>
    </h5>

    <!-- Input del mensaje a cifrar -->
    <div class="input-field">
        <i class="material-icons prefix">text_fields</i>
        <input type="text" id="input-text-escitala" class="validate" placeholder="Ingresa el texto para cifrar" required>
        <label for="input-text-escitala">Texto a cifrar</label>
    </div>

    <!-- Input para el número de columnas -->
    <div class="input-field center-align">
        <p>Número de columnas:</p>
        <input type="number" id="column-number" name="column-number" min="2" value="4" style="max-width: 80px; margin: 0 auto;" />
    </div>

    <!-- Botones para cifrar y descifrar -->
    <div class="center-align">
        <button type="button" id="encrypt-button-escitala" class="btn blue">Cifrar</button>
        <button type="button" id="decrypt-button-escitala" class="btn orange">Descifrar</button>
    </div>

    <!-- Resultado del cifrado -->
    <div class="input-field">
        <i class="material-icons prefix">check_circle</i>
        <input type="text" id="output-text-escitala" class="validate" placeholder="Resultado" readonly>
        <label for="output-text">Resultado</label>
    </div>

    <!-- Botones de copiar y limpiar -->
    <div class="center-align">
        <i class="material-icons" id="copy-button-escitala" style="cursor: pointer; display: none;" title="Copiar">content_copy</i>
        <i class="material-icons" id="reset-button-escitala" style="cursor: pointer;" title="Vaciar">delete</i>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal-info" class="modal">
    <div class="modal-content">
        <!-- Botón de cierre "X" en la esquina superior derecha -->
        <button class="modal-close btn-flat" style="position: absolute; top: 10px; right: 10px; font-size: 20px; border: none; background: none;">&times;</button>

        <h4 style="text-align: center;">¿Qué es el Cifrado Escítala?</h4>
        <p style="text-align: left;">
            El cifrado Escítala es una técnica de cifrado por transposición usada por los antiguos griegos. Consiste en enrollar una tira de cuero o pergamino alrededor de un bastón llamado "escítala" para escribir el mensaje de forma lineal. Al desenrollar la tira, el mensaje aparece desordenado y solo puede ser descifrado usando un bastón del mismo grosor para volver a ordenar las letras.
        </p>

        <h5 style="text-align: center;">¿Cómo se usa el Cifrado Escítala?</h5>
        <p style="text-align: left;">
            El Cifrado Escítala organiza el mensaje en filas y columnas, tomando un número de columnas (clave) y distribuyendo el mensaje en una tabla. Sigue estos pasos para usar el Cifrado Escítala en la aplicación:
        </p>
        <ol style="text-align: left;">
            <li>Ingresa el mensaje que deseas cifrar o descifrar en el campo de texto.</li>
            <li>Introduce la clave, que es el número de columnas en las que el mensaje se dividirá.</li>
            <li>Haz clic en Cifrar para aplicar el cifrado o en Descifrar para revertirlo.</li>
            <li>Asegúrate de que el mensaje y la clave sean correctos para evitar errores.</li>
            <li>Puedes copiar el resultado usando el botón Copiar Texto.</li>
        </ol>
        <p style="text-align: left;">
            <strong>Ejemplo:</strong> Si el mensaje es "HOLA" y la clave es 2 (número de columnas), el mensaje cifrado será reorganizado como "HLOA".
        </p>
        <p style="text-align: left;">
            <strong>Mensaje:</strong> HOLA <br>
            <strong>Clave:</strong> 2 <br>
            <strong>Resultado:</strong> HLOA
        </p>

        <h5 style="text-align: center;">Historia y Uso del Cifrado Escítala</h5>
        <p style="text-align: left;">
            El Cifrado Escítala fue utilizado por los antiguos espartanos durante el siglo V a.C. para enviar mensajes secretos en tiempos de guerra. Este método sencillo pero efectivo permitió mantener la confidencialidad en sus comunicaciones militares.
        </p>

        <h5 style="text-align: center;">Ejemplos Similares: Cifrado César</h5>
<p style="text-align: left;">
    El Cifrado César es otro método de cifrado antiguo, utilizado por Julio César para enviar mensajes a sus generales. En lugar de organizar el mensaje en una tabla, este método desplaza cada letra un número fijo de posiciones en el alfabeto. Este desplazamiento hace que el mensaje resultante sea ilegible para aquellos que no conocen la clave.
</p>
<p style="text-align: left;">
    Por ejemplo, si usamos una clave de 3, la letra 'A' se convierte en 'D', 'B' en 'E', y así sucesivamente. Cuando se llega al final del alfabeto, se vuelve a empezar, por lo que 'X' se convierte en 'A', 'Y' en 'B' y 'Z' en 'C'.
</p>
<p style="text-align: left;">
    A continuación, se muestran los pasos para usar el Cifrado César en la aplicación:
</p>
<ol style="text-align: left;">
    <li>Ingresa el mensaje que deseas cifrar o descifrar en el campo de texto.</li>
    <li>Introduce la clave, que representa el número de posiciones que se desplazará cada letra. Ejemplo: Clave 3 significa que 'A' se convierte en 'D'.</li>
    <li>Haz clic en Cifrar para aplicar el cifrado o en Descifrar para revertirlo.</li>
    <li>Si el texto cifrado no es lo que esperabas, verifica que hayas ingresado la clave correcta.</li>
    <li>Puedes copiar el resultado usando el botón Copiar Texto.</li>
</ol>
<p style="text-align: left;">
    <strong>Ejemplo:</strong> Si ingresas el nombre "EDILBERTO" y utilizas la clave 5, el mensaje cifrado será:
</p>
<p style="text-align: left;">
    Para cifrar "EDILBERTO" con la clave 5, desplazamos cada letra 5 posiciones en el alfabeto:
</p>
<ul style="text-align: left;">
    <li>E -> J</li>
    <li>D -> I</li>
    <li>I -> N</li>
    <li>L -> Q</li>
    <li>B -> G</li>
    <li>E -> J</li>
    <li>R -> W</li>
    <li>T -> Y</li>
    <li>O -> T</li>
</ul>
<p style="text-align: left;">
    Por lo tanto, el mensaje cifrado será <strong>JINQGJWTY</strong>.
</p>
<p style="text-align: left;">
    <strong>Mensaje:</strong> EDILBERTO <br>
    <strong>Clave:</strong> 5 <br>
    <strong>Resultado:</strong> JINQGJWTY
</p>


<h5 style="text-align: center;">Tutoriales en Video</h5>
<p style="text-align: left;">Para una mejor comprensión de cómo funcionan estos cifrados, puedes ver los siguientes tutoriales:</p>
<ul style="text-align: left;">
    <li><a href="https://www.youtube.com/watch?v=Xc6xLZqoKRc" target="_blank">Método Cifrado Escítala</a></li>
    <li><a href="https://www.youtube.com/watch?v=rF9deq-riKM" target="_blank">Tutorial Cifrado César</a></li>
</ul>

<p style="text-align: left;">
    <strong>Video de Ejemplo:</strong>
</p>
<div style="text-align: left;">
    <iframe width="100%" height="240" src="https://www.youtube.com/embed/Xc6xLZqoKRc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div style="text-align: left;">
    <strong>Otro Video de Ejemplo:</strong>
</div>
<div style="text-align: left;">
    <iframe width="100%" height="240" src="https://www.youtube.com/embed/rF9deq-riKM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Inicializa el modal con Materialize
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});

document.getElementById('info-icon').addEventListener('click', function () {
    var modal = M.Modal.getInstance(document.getElementById('modal-info'));
    modal.open();
});

document.getElementById('encrypt-button-escitala').addEventListener('click', function () {
    const inputText = document.getElementById('input-text-escitala').value;
    const numColumns = parseInt(document.getElementById('column-number').value);

    if (inputText.trim() === '') {
        alert('El texto no puede estar vacío');
        return;
    }

    const encryptedText = encryptEscitala(inputText, numColumns);
    document.getElementById('output-text-escitala').value = encryptedText;

    document.getElementById('copy-button-escitala').style.display = 'inline';

    // Copiar el resultado al portapapeles
    document.getElementById('copy-button-escitala').onclick = function () {
        navigator.clipboard.writeText(encryptedText).then(() => {
            alert('Texto copiado correctamente');
        });
    };
});

function encryptEscitala(text, numColumns) {
    text = text.replace(/\s+/g, ''); // Elimina los espacios
    let result = '';

    for (let i = 0; i < numColumns; i++) {
        for (let j = i; j < text.length; j += numColumns) {
            result += text[j];
        }
    }

    return result;
}

document.getElementById('decrypt-button-escitala').addEventListener('click', function () {
    const inputText = document.getElementById('input-text-escitala').value;
    const numColumns = parseInt(document.getElementById('column-number').value);

    if (inputText.trim() === '') {
        alert('El texto no puede estar vacío');
        return;
    }

    const decryptedText = decryptEscitala(inputText, numColumns);
    document.getElementById('output-text-escitala').value = decryptedText;
});

function decryptEscitala(text, numColumns) {
    let numRows = Math.ceil(text.length / numColumns);
    let result = '';
    let grid = Array(numRows).fill().map(() => Array(numColumns).fill(''));

    let index = 0;
    for (let col = 0; col < numColumns; col++) {
        for (let row = 0; row < numRows; row++) {
            if (index < text.length) {
                grid[row][col] = text[index++];
            }
        }
    }

    for (let row = 0; row < numRows; row++) {
        for (let col = 0; col < numColumns; col++) {
            if (grid[row][col]) {
                result += grid[row][col];
            }
        }
    }

    return result;
}

document.getElementById('reset-button-escitala').addEventListener('click', function () {
    document.getElementById('input-text-escitala').value = '';
    document.getElementById('output-text-escitala').value = '';
    document.getElementById('column-number').value = 4;
    document.getElementById('copy-button-escitala').style.display = 'none';
});
</script>

<style>
    /* Estilos para hacer el diseño más responsivo */
    .container {
        max-width: 600px;
        margin: 0 auto;
    }

    .input-field i.prefix {
        left: 0;
    }

    @media only screen and (max-width: 600px) {
        .container {
            padding: 0 10px;
        }

        .input-field input {
            font-size: 16px;
        }

        .input-field label {
            font-size: 14px;
        }

        .modal-content p {
            font-size: 14px;
        }

    }

</style>
