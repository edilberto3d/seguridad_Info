<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad Informática</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cesar.css') }}">
</head>

<body>

    <!-- Contenedor principal para el logo y los textos -->
    <div class="logo-text-container">
        <div class="logo-row">
            <span class="text-left">Seguridad</span>
            <img src="{{ asset('images/image.png') }}" alt="Seguridad Informática" class="logo" id="img1">
            <span class="text-right">Informática</span>
        </div>
        <p class="text-below">Procesos del cifrado por desplazamiento</p>
    </div>

    <!-- Contenedor del modo oscuro -->
    <div class="dark-mode-container">
        <div id="toggle-dark-mode" class="dark-mode-switch">
            <span class="switch-toggle"></span>
            <span class="moon">🌙</span>
            <span class="sun">☀️</span>
        </div>
    </div>

    <div class="container">
        <!-- Switch para seleccionar el tipo de cifrado -->
        <div class="cipher-switch">
            <label>
                <input type="radio" name="cipher" value="cesar" checked>
                <span>Cifrado César</span>
            </label>
            <label>
                <input type="radio" name="cipher" value="escitala">
                <span>Cifrado Escítala</span>
            </label>
        </div>

        <!-- Componentes para cada tipo de cifrado -->
        <div id="cesar-content" class="cipher-content">
            <x-cifrado-cesar />
        </div>

        <div id="escitala-content" class="cipher-content" style="display: none;">
            <x-cifrado-escitala />
        </div>
    </div>

    <x-footer />


    <script>
        document.querySelectorAll('input[name="cipher"]').forEach((elem) => {
            elem.addEventListener('change', function() {
                const selectedCipher = this.value;

                // Mostrar el componente adecuado
                document.getElementById('cesar-content').style.display = selectedCipher === 'cesar' ? 'block' : 'none';
                document.getElementById('escitala-content').style.display = selectedCipher === 'escitala' ? 'block' : 'none';
            });
        });
    </script>



    <script>
        const toggleButton = document.getElementById('toggle-dark-mode');
        const body = document.body;

        toggleButton.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
        });

        // Lógica para cambiar entre tipos de cifrado
        const cipherSwitches = document.querySelectorAll('input[name="cipher"]');
        const cipherContent = document.getElementById('cipher-content');

        cipherSwitches.forEach((switchEl) => {
            switchEl.addEventListener('change', () => {
                const tipoCifrado = switchEl.value;

                fetch(`/${tipoCifrado}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.text();
                    })
                    .then(html => {
                        cipherContent.innerHTML = html; // Actualiza el contenido con la respuesta

                        // Inicializa nuevamente los componentes de Materialize
                        initMaterializeComponents();
                    })
                    .catch(error => {
                        console.error('Error fetching the component:', error);
                    });
            });
        });

        // Función para inicializar componentes de Materialize
        function initMaterializeComponents() {
            var elemsTooltip = document.querySelectorAll('.tooltipped');
            M.Tooltip.init(elemsTooltip);

            var elemsModal = document.querySelectorAll('.modal');
            M.Modal.init(elemsModal);
        }

        // Inicializa los componentes de Materialize al cargar la página
        document.addEventListener('DOMContentLoaded', initMaterializeComponents);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
