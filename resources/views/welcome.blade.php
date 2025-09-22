<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</head>





<body class=" p-3  bg-primary-subtle">


    <h1>
        ESTA PAGINA ESTA HECHA CON BOOTSTRAP
    </h1>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    🌐 Web 1 - E-commerce Moderno
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h5 class="text-primary mb-3">Resumen de Web 1</h5>
                    <p><strong>Plataforma de E-commerce completa</strong> desarrollada con React y Node.js. Incluye catálogo de productos, carrito de compras, sistema de pagos integrado y panel de administración. Diseño responsive con enfoque en la experiencia del usuario y optimización para conversiones.</p>
                    <ul class="list-unstyled">
                        <li>✅ Catálogo dinámico de productos</li>
                        <li>✅ Sistema de autenticación seguro</li>
                        <li>✅ Integración con pasarelas de pago</li>
                        <li>✅ Panel administrativo completo</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header"></h2>
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                📱 Web 2 - Aplicación Móvil
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h5 class="text-success mb-3">Resumen de Web 2</h5>
                    <p><strong>Aplicación móvil híbrida</strong> construida con Flutter y Firebase. Ofrece funcionalidades de geolocalización, notificaciones push, sincronización en tiempo real y diseño adaptativo para diferentes dispositivos. Ideal para servicios de delivery y aplicaciones de productividad.</p>
                    <ul class="list-unstyled">
                        <li>✅ Geolocalización y mapas interactivos</li>
                        <li>✅ Notificaciones push personalizadas</li>
                        <li>✅ Sincronización en tiempo real</li>
                        <li>✅ Diseño adaptativo multi-plataforma</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    🎨 Web 3 - Portfolio Creativo
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h5 class="text-warning mb-3">Resumen de Web 3</h5>
                    <p><strong>Sitio web portfolio interactivo</strong> desarrollado con Vue.js y Three.js. Presenta proyectos creativos con animaciones 3D, galería de trabajos, blog integrado y sistema de contacto. Diseño minimalista con efectos visuales impactantes que destacan la creatividad y profesionalismo.</p>
                    <ul class="list-unstyled">
                        <li>✅ Animaciones 3D interactivas</li>
                        <li>✅ Galería de proyectos dinámica</li>
                        <li>✅ Blog integrado con CMS</li>
                        <li>✅ Sistema de contacto avanzado</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>

</html>