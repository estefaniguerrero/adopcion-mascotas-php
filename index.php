<?php
$mascotas = [
    ["nombre" => "Luna", "tipo" => "Perrita", "edad" => "3 años", "tamano" => "Mediano", "posicion" => "left", "descripcion" => "Cariñosa, tranquila y compañera. Disfruta los paseos y convivir en familia."],
    ["nombre" => "Milo", "tipo" => "Gato", "edad" => "2 años", "tamano" => "Pequeño", "posicion" => "center", "descripcion" => "Curioso, sereno y muy limpio. Busca un hogar paciente donde pueda sentirse seguro."],
    ["nombre" => "Max", "tipo" => "Cachorro", "edad" => "8 meses", "tamano" => "Pequeño", "posicion" => "right", "descripcion" => "Juguetón y sociable. Aprende rápido y está listo para crecer junto a una familia."],
];

$requisitos = [
    "Ser mayor de edad y presentar un documento de identificación.",
    "Contar con la aprobación de todas las personas que viven en el hogar.",
    "Disponer de un espacio seguro y adecuado para la mascota.",
    "Comprometerse con su alimentación, salud, vacunas y cuidados diarios.",
    "Aceptar una entrevista y una visita de seguimiento responsable.",
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fundación Huellitas de Esperanza: mascotas que buscan un hogar responsable.">
    <title>Huellitas de Esperanza | Adopción responsable</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="barra">
        <a href="#inicio" class="marca" aria-label="Ir al inicio">
            <span class="logo">♥</span>
            <span>Huellitas de Esperanza</span>
        </a>
        <button class="menu-btn" id="menuBtn" aria-label="Abrir menú" aria-expanded="false">☰</button>
        <nav id="menu">
            <a href="#mascotas">Mascotas</a>
            <a href="#requisitos">Requisitos</a>
            <a href="#contacto" class="nav-destacado">Quiero adoptar</a>
        </nav>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div class="hero-contenido">
                <span class="mini-titulo">ADOPCIÓN RESPONSABLE</span>
                <h1>Una nueva historia comienza con una huellita.</h1>
                <p>Conectamos mascotas rescatadas con familias comprometidas a brindarles cuidado, respeto y un hogar para siempre.</p>
                <div class="hero-acciones">
                    <a href="#mascotas" class="boton primario">Conocer mascotas</a>
                    <a href="#requisitos" class="boton secundario">Ver requisitos</a>
                </div>
                <div class="datos">
                    <div><strong>35+</strong><span>Adopciones</span></div>
                    <div><strong>12</strong><span>Voluntarios</span></div>
                    <div><strong>100%</strong><span>Compromiso</span></div>
                </div>
            </div>
            <div class="hero-foto" role="img" aria-label="Tres mascotas disponibles para adopción">
                <span>Ellos también esperan una familia</span>
            </div>
        </section>

        <section class="seccion" id="mascotas">
            <div class="cabecera-seccion">
                <div><span class="mini-titulo">CONÓCELOS</span><h2>Mascotas que esperan por ti</h2></div>
                <p>Cada una tiene una personalidad única y mucho cariño para compartir.</p>
            </div>
            <div class="catalogo">
                <?php foreach ($mascotas as $mascota): ?>
                    <article class="tarjeta">
                        <div class="foto-mascota pos-<?= htmlspecialchars($mascota['posicion']) ?>" role="img" aria-label="Foto de <?= htmlspecialchars($mascota['nombre']) ?>"></div>
                        <div class="tarjeta-cuerpo">
                            <div class="nombre-fila"><h3><?= htmlspecialchars($mascota['nombre']) ?></h3><span><?= htmlspecialchars($mascota['tipo']) ?></span></div>
                            <div class="detalles"><span>⌛ <?= htmlspecialchars($mascota['edad']) ?></span><span>↗ <?= htmlspecialchars($mascota['tamano']) ?></span></div>
                            <p><?= htmlspecialchars($mascota['descripcion']) ?></p>
                            <a href="#contacto" class="enlace-adoptar" data-mascota="<?= htmlspecialchars($mascota['nombre']) ?>">Solicitar adopción →</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="requisitos" id="requisitos">
            <div class="requisitos-intro">
                <span class="mini-titulo claro">ANTES DE ADOPTAR</span>
                <h2>Adoptar es un compromiso para toda la vida</h2>
                <p>Buscamos hogares responsables, seguros y preparados para integrar un nuevo miembro a la familia.</p>
            </div>
            <ol class="lista-requisitos">
                <?php foreach ($requisitos as $numero => $requisito): ?>
                    <li><span><?= str_pad($numero + 1, 2, '0', STR_PAD_LEFT) ?></span><p><?= htmlspecialchars($requisito) ?></p></li>
                <?php endforeach; ?>
            </ol>
        </section>

        <section class="seccion contacto" id="contacto">
            <div class="contacto-info">
                <span class="mini-titulo">CONTÁCTANOS</span>
                <h2>¿Listo para dar el siguiente paso?</h2>
                <p>Completa el formulario y nos comunicaremos contigo para orientarte durante el proceso de adopción.</p>
                <div class="dato-contacto"><span>✉</span><div><b>Correo</b><a href="mailto:adopciones@huellitas.org">adopciones@huellitas.org</a></div></div>
                <div class="dato-contacto"><span>☎</span><div><b>Teléfono</b><a href="tel:+593987654321">098 765 4321</a></div></div>
                <div class="dato-contacto"><span>⌖</span><div><b>Ubicación</b><p>Ibarra, Imbabura - Ecuador</p></div></div>
            </div>
            <form class="formulario" id="formAdopcion">
                <label>Nombre completo<input type="text" name="nombre" placeholder="Escribe tu nombre" required></label>
                <div class="doble">
                    <label>Correo electrónico<input type="email" name="correo" placeholder="correo@ejemplo.com" required></label>
                    <label>Teléfono<input type="tel" name="telefono" placeholder="09 0000 0000" required></label>
                </div>
                <label>Mascota de interés
                    <select name="mascota" id="mascotaSelect" required>
                        <option value="">Selecciona una mascota</option>
                        <?php foreach ($mascotas as $mascota): ?><option><?= htmlspecialchars($mascota['nombre']) ?></option><?php endforeach; ?>
                    </select>
                </label>
                <label>Cuéntanos sobre tu hogar<textarea name="mensaje" rows="4" placeholder="¿Por qué deseas adoptar?" required></textarea></label>
                <button type="submit" class="boton primario">Enviar solicitud</button>
                <p class="aviso" id="aviso" role="status"></p>
            </form>
        </section>
    </main>

    <footer>
        <div class="marca"><span class="logo">♥</span><span>Huellitas de Esperanza</span></div>
        <p>Adopta con responsabilidad. Cambia una vida.</p>
        <p>© <?= date('Y') ?> Fundación Huellitas de Esperanza</p>
    </footer>
    <script src="js/app.js"></script>
</body>
</html>

