<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=486, initial-scale=1.0">
    <title>Hoja De Servicio</title>
    <style>
        body {
            width: 486px;
            height: 700px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #222;
            background: #f8f9fa;
            position: relative;
            overflow: hidden;
        }
        .service-sheet-header {
            width: 100%;
            height: 70px;
            background: #23487a;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 18px;
            box-sizing: border-box;
            position: relative;
        }
        .service-sheet-header img {
            height: 48px;
        }
        .service-sheet-header .title {
            color: #fff;
            text-align: center;
        }
        .service-sheet-header .title div:first-child {
            font-weight: bold;
            font-size: 13px;
            letter-spacing: 1px;
        }
        .service-sheet-header .title div:last-child {
            font-size: 15px;
            font-weight: bold;
            margin-top: 2px;
            letter-spacing: 1px;
        }
        .row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 4px;
        }
        .field {
            border-bottom: 1px solid #222;
            min-width: 80px;
            display: inline-block;
        }
        .section-title {
            text-align: center;
            font-weight: bold;
            margin: 10px 0 5px 0;
            color: #23487a;
        }
        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 2px 8px;
            margin-bottom: 4px;
        }
        .checkbox-item {
            min-width: 120px;
            font-size: 11px;
            line-height: 1.1;
            display: flex;
            align-items: center;
            padding: 0 2px 0 0;
            word-break: break-word;
            hyphens: auto;
        }
        .checkbox-item input[type="checkbox"] {
            width: 13px;
            height: 13px;
            margin-right: 4px;
        }
        .lines {
            border-bottom: 1px solid #222;
            margin-bottom: 4px;
            height: 18px;
        }
        .footer-row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 24px;
        }
        .firma {
            width: 45%;
            text-align: center;
            font-size: 11px;
            margin-bottom: 18px;
        }
        .firma-line {
            border-top: 1px solid #222;
            margin: 6px 0 0 0;
            width: 100%;
            height: 0;
        }
        /* Footer barra azul simple */
        .service-sheet-footer-bar {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 48px;
            background: #23487a;
            z-index: 0;
        }
        .content {
            position: relative;
            z-index: 1;
            padding: 12px 18px 0 18px;
            padding-bottom: 56px; /* espacio para el footer */
        }
    </style>
</head>
<body>
    <div style="position: relative; width: 486px; height: 700px;">
        <!-- Franja superior -->
        <div class="service-sheet-header">
            <img src="{{ asset('pdf/elder-program/assets/escudo.png') }}" alt="Logo 1">
            <div class="title">
                <div>DIRECCIÓN DE TECNOLOGÍA Y SISTEMAS</div>
                <div>HOJA DE SERVICIO</div>
            </div>
            <img src="{{ asset('pdf/elder-program/assets/logo-lecheria.png') }}" alt="Logo 2">
        </div>
        <div class="content">
            <div class="row">
                <div>FECHA: <span class="field" style="width:60px;"></span></div>
                <div>HORA INICIO: <span class="field" style="width:40px;"></span></div>
                <div>HORA FINALIZACIÓN: <span class="field" style="width:40px;"></span></div>
            </div>
            <div class="row">
                <div>NOMBRE: <span class="field" style="width:120px;"></span></div>
                <div>DIRECCIÓN: <span class="field" style="width:120px;"></span></div>
            </div>
            <div class="row">
                <div>DEPARTAMENTO: <span class="field" style="width:120px;"></span></div>
                <div>USUARIO: <span class="field" style="width:120px;"></span></div>
            </div>
            <div class="section-title">CARACTERÍSTICAS DEL EQUIPO</div>
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="section-title">TIPO DE SERVICIO</div>
            <div class="checkbox-group">
                <div class="checkbox-item"><input type="checkbox"> MANTENIMIENTO DE IMPRESORA</div>
                <div class="checkbox-item"><input type="checkbox"> INST. DE DISPOSITIVOS INTERNOS DEL C.P.U.</div>
                <div class="checkbox-item"><input type="checkbox"> MANTENIMIENTO DE SISTEMAS</div>
                <div class="checkbox-item"><input type="checkbox"> CREACIÓN DE REPORTES</div>
                <div class="checkbox-item"><input type="checkbox"> FORMATEO DE EQUIPOS</div>
                <div class="checkbox-item"><input type="checkbox"> CONE. DEL SISTEMA OPERATIVO</div>
                <div class="checkbox-item"><input type="checkbox"> MANTENIMIENTO PREVENTIVO Y/O CORRECTIVO</div>
                <div class="checkbox-item"><input type="checkbox"> RESPALDO DE INFORMACIÓN</div>
                <div class="checkbox-item"><input type="checkbox"> INSTALACIÓN Y ACTUALIZACIÓN DE SOFTWARE</div>
                <div class="checkbox-item"><input type="checkbox"> CONFIGURACIÓN DE RED</div>
                <div class="checkbox-item"><input type="checkbox"> DISEÑO DE SISTEMAS</div>
                <div class="checkbox-item"><input type="checkbox"> ADMINISTRACIÓN BASE DE DATOS</div>
                <div class="checkbox-item"><input type="checkbox"> INSTALACIÓN Y/O CONFIGURACIÓN DE IMPRESORAS</div>
                <div class="checkbox-item"><input type="checkbox"> OTROS <span class="field" style="width:60px;"></span></div>
            </div>
            <div class="section-title">DESCRIPCIÓN DEL SERVICIO EFECTUADO:</div>
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="section-title">SUGERENCIAS TÉCNICAS:</div>
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="footer-row">
                <div class="firma">
                    ELABORADO POR:
                    <div class="firma-line"></div>
                </div>
                <div class="firma">
                    ACEPTADO POR:
                    <div class="firma-line"></div>
                </div>
            </div>
            <div class="service-sheet-footer-bar"></div>
        </div>
        
        <!-- Footer barra azul simple -->
    </div>
</body>
</html>