<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Questions;

class QuestionSeeder extends Seeder
{

    // ['id_section' => , 'texto_de_pregunta' => '', 'tipo_de_pregunta' => '', 'visible' => ],

    public function run(): void
    {
        Questions::truncate();

        // Preguntas generales
        Questions::insert([
            // Preguntas de información personal
            [ 'texto_de_pregunta' => 'NOMBRES Y APELLIDOS COMPLETOS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'TIPO DE DOCUMENTO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'NÚMERO DE DOCUMENTO', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => 'FECHA DE NACIMIENTO', 'tipo_de_pregunta' => 'date', 'visible' => false],
            [ 'texto_de_pregunta' => 'LUGAR DE NACIMIENTO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'TELÉFONO', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => 'CORREO ELECTRÓNICO', 'tipo_de_pregunta' => 'email', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL ES SU DIRECCIÓN DE RESIDENCIA?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'SELECCIONE EL RANGO DE EDAD EN EL QUE SE ENCUENTRA', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL ES SU GÉNERO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL ES SU IDENTIDAD DE GÉNERO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL ES SU ORIENTACIÓN SEXUAL?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'SELECCIONE ALGÚN PUEBLO ÉTNICO O COMUNIDAD CAMPESINA AL QUE PERTENECE', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'NACIONALIDAD', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL ES SU ESTADO CIVIL?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'SITUACIÓN DE VULNERABILIDAD', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'INDIQUE SU NIVEL EDUCATIVO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'PROFESA ALGUNA RELIGIÓN', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿QUÉ ACTIVIDADES REALIZA EN SU TIEMPO LIBRE?', 'tipo_de_pregunta' => 'text', 'visible' => false],

            // Preguntas de información familiar
            [ 'texto_de_pregunta' => 'NOMBRE DE ALGÚN FAMILIAR', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'NÚMERO DE DOCUMENTO DE FAMILIAR', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => 'PARENTESCO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'TELÉFONO DE FAMILIAR', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => 'DIRECCIÓN DE FAMILIAR', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'FECHA DE NACIMIENTO DE FAMILIAR', 'tipo_de_pregunta' => 'date', 'visible' => false],
            [ 'texto_de_pregunta' => '¿PERSONAS DE LA FAMILIA CON QUIEN TIENE MAYOR CONTACTO?', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            [ 'texto_de_pregunta' => 'SI NO TIENE CONTACTO CON NADIE, ESTABLEZCA EL MOTIVO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'EN CASO DE ENFRENTAR UNA SITUACIÓN DE RIESGO O EMERGENCIA, NOMBRE DE UN FAMILIAR DE SU CONFIANZA A QUIEN PODAMOS ACUDIR', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ACONTECIMIENTOS FAMILIARES SIGNIFICATIVOS EN EL ÚLTIMO AÑO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'DESCRIPCIÓN DINÁMICA FAMILIAR Y PSICOSOCIAL: RECURSOS Y REDES FAMILIARES', 'tipo_de_pregunta' => 'text', 'visible' => false],

            // Preguntas de información de salud
            [ 'texto_de_pregunta' => 'RÉGIMEN DE SALUD', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CÚAL ES SU PUNTAJE DE SISBÉN?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿SE ENCUENTRA AFILIADO AL SISTEMA DE SALUD?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'EPS AFILIADA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ES DEPENDIENTE DE CUIDADO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿PRESENTA ALGÚN TIPO DE DISCAPACIDAD?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL DISCAPACIDAD PADECE USTED?', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            [ 'texto_de_pregunta' => 'EN EL ÚLTIMO MES, TUVO UN PROBLEMA GRAVE DE SALUD RELACIONADO CON:', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            [ 'texto_de_pregunta' => '¿QUÉ ENFERMEDAD PADECE?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ESTA ENFERMEDAD SE ENCUENTRA EN TRATAMIENTO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HACE CUANTO FUE DIAGNOSTICADA?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HA CONSUMIDO ALGUNA VEZ SUSTANCIAS PSICOACTIVAS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL DE LAS SIGUIENTES SUSTANCIAS CONSUME?', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            [ 'texto_de_pregunta' => 'FRECUENCIA DE CONSUMO DE SUSTANCIAS PSICOACTIVAS', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HA RECIBIDO ALGÚN TRATAMIENTO PARA EL CONSUMO DE SUSTANCIAS PSICOACTIVAS (SPA)?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DONDE', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿A QUÉ EDAD COMENZÓ EL CONSUMO DE SPA?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'DADA SU CONDICIÓN FÍSICA Y MENTAL, USTED PUEDE AGARRAR O MOVER OBJETOS CON LAS MANOS', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DADA SU CONDICIÓN FÍSICA Y MENTAL, USTED PUEDE ENTENDER, APRENDER, RECORDAR O TOMAR DECISIONES POR SÍ MISMO(A)', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DADA SU CONDICIÓN FÍSICA Y MENTAL, USTED PUEDE COMER, VESTIRSE O BAÑARSE POR SÍ MISMO(A)', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DADA SU CONDICIÓN FÍSICA Y MENTAL, USTED PUEDE HACER LAS ACTIVIDADES DIARIAS SIN PRESENTAR PROBLEMAS CARDIACOS O RESPIRATORIOS', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DADA SU CONDICIÓN FÍSICA Y MENTAL, USTED PUEDE OÍR LA VOZ O LOS SONIDOS', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DADA SU CONDICIÓN FÍSICA Y MENTAL, USTED PUEDE HABLAR O CONVERSAR', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DADA SU CONDICIÓN FÍSICA Y MENTAL, USTED PUEDE VER DE CERCA, LEJOS O ALREDEDOR', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DADA SU CONDICIÓN FÍSICA Y MENTAL, USTED PUEDE MOVER EL CUERPO, CAMINAR', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DADA SU CONDICIÓN FÍSICA Y MENTAL, USTED PUEDE RELACIONARSE O INTERACTUAR CON LAS DEMÁS PERSONAS', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿UTILIZA ALGÚN MÉTODO DE PLANIFICACIÓN FAMILIAR?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL MÉTODO DE PLANIFICACIÓN UTILIZA?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HA IDO AL MÉDICO EN LOS ÚLTIMOS 6 MESES?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL ES EL MOTIVO DE CONSULTA AL MÉDICO?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HAY MUJERES GESTANTES EN EL HOGAR?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUANTAS SEMANAS TIENE DE EMBARAZO?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUANTOS ABORTOS SE HA PRACTICADO?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUANTOS EMBARAZOS HA TENIDO?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HA ASISTIDO A CONTROLES PRENATALES?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HA PRESENTADO EPISODIOS DE ANSIEDAD?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HA PRESENTADO EPISODIOS DE DEPRESION?', 'tipo_de_pregunta' => 'select', 'visible' => false],

            // Preguntas de información de vivienda
            [ 'texto_de_pregunta' => 'MUNICIPIO DE RESIDENCIA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'COMUNA O CORREGIMIENTO DE RESIDENCIA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'BARRIO DE RESIDENCIA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'TIEMPO DE RESIDENCIA EN FUSAGASUGÁ', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'TIPO DE VIVIENDA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'SERVICIOS PÚBLICOS DE VIVIENDA', 'tipo_de_pregunta' => 'text', 'visible' => false],

            // Preguntas de información economica
            [ 'texto_de_pregunta' => 'ACTIVIDAD ECONÓMICA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿USTED TRABAJA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CÓMO GENERA USTED INGRESOS?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'INGRESOS PARA EL SOSTENIMIENTO DEL HOGAR', 'tipo_de_pregunta' => 'text', 'visible' => false],

            // Preguntas sobre otra información
            [ 'texto_de_pregunta' => 'OBSERVACIONES', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'FECHA DE ATENCIÓN', 'tipo_de_pregunta' => 'date', 'visible' => false],
            [ 'texto_de_pregunta' => 'LUGAR DE DILIGENCIAMIENTO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'PROFESIONAL QUE DILIGENCIA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'LA ENTREVISTA NO SE REALIZÓ PORQUE LA PERSONA ESTABA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'PERSONA QUE SUMINISTRA LA INFORMACIÓN', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'OBSERVACIONES GENERALES DE LA VISITA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'RESPUESTA A SOLICITUD O CONDUCTA A SEGUIR', 'tipo_de_pregunta' => 'text', 'visible' => false],
        ]);

        // Preguntas de secretaría de salud
        Questions::insert([
            [ 'texto_de_pregunta' => 'NOMBRE DE INSTITUCIÓN DONDE SE ORIGINÓ LA PQRS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'TIPO DE PQRS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'NÚMERO DE RADICADO DE ENTRADA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ID CONTROL DOC', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'GENERO ENTIDAD OBJETO DE LA PQRS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'EJES TEMÁTICOS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'CLASIFICACIÓN DE LA PQRS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'MUNICIPIO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'MEDIO DE PRESENTACIÓN DE LA PQRS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'FECHA DE SOLICITUD DE LA PQRS', 'tipo_de_pregunta' => 'date', 'visible' => false],
            [ 'texto_de_pregunta' => 'LUGAR DE DILIGENCIAMIENTO DE LA PQRS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'DESCRIPCIÓN BREVE DE LA PQRS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'NOMBRE DE LA EAPB', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'EN CASO DE SER UNA IPS (MUNICIPIO)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'MEDIO DE NOTIFICACIÓN DE LA RESPUESTA', 'tipo_de_pregunta' => 'text', 'visible' => false],
        ]);

        // Preguntas de secretaría de planeación
        Questions::insert([
            [ 'texto_de_pregunta' => '¿QUÉ TRAMITE O SERVICIO SOLICITÓ EN LA ALCALDÍA DE FUSAGASUGÁ?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CÓMO CALIFICA LA ATENCIÓN RECIBIDA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CÓMO CALIFICA EL TIEMPO DE RESPUESTA O DE ATENCIÓN?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CÓMO CALIFICA LAS INSTALACIONES DONDE FUE ATENDIDO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CÓMO CALIFICA LA PRESICIÓN EN LA SOLUCIÓN/GESTIÓN DADA A SU SOLICITUD/TRAMITÉ?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CÓMO CALIFICA EL CONOCIMIENTO DEL FUNCIONARIO QUE ATENDIÓ SU SOLICITUD/TRAMITÉ?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿LA INFORMACIÓN RECIBIDA FUE CLARA Y FÁCIL DE COMPRENDER?', 'tipo_de_pregunta' => 'select', 'visible' => false],
        ]);

        // Preguntas de secretaria administrativa
        Questions::insert([
            [ 'texto_de_pregunta' => 'LUGAR DE RESIDENCIA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'SELECCIONE EL DEPARTAMENTO DONDE RESIDE', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'SELECCIONE EL TERRITORIO DONDE RESIDE', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿TIENE USTED ALGUNA CONDICIÓN DE DISCAPACIDAD?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'SELECCIONE SU DISCAPACIDAD', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'SELECCIONE A CUÁL TIPO DE ORGANIZACIÓN PERTENECE', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CONOCE LOS PUNTOS DE ATENCIÓN PRESENCIAL DE LA ALCALDÍA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL CANAL DE COMUNICACIÓN VIRTUAL CONOCE DE LA ALCALDÍA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿QUÉ CANAL DE COMUNICACIÓN SE LE FACILITA UTILIZAR?', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            [ 'texto_de_pregunta' => '¿POR QUÉ RAZONES CONSULTA A LA ALCALDÍA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CON QUÉ FRECUENCIA USA LOS CANALES PARA CONSULTAR LA INFORMACIÓN QUE GENERA LA ALCALDÍA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿SOBRE CUÁL TEMA LE GUSTARÍA CONOCER O AMPLIAR INFORMACIÓN?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿SOBRE QUE OTRO TEMA LE GUSTARÍA CONOCER O AMPLIAR INFORMACIÓN?', 'tipo_de_pregunta' => 'textarea', 'visible' => false],
        ]);

        // Preguntas de la mujer
        Questions::insert([
            [ 'texto_de_pregunta' => 'DESCRIPCIÓN Y ANÁLISIS GENERAL DE LA SITUACION', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ANTECEDENTES DE ATENCIÓN PSICOSOCIAL Y/O RELACIONADOS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ACUERDOS Y COMPROMISOS', 'tipo_de_pregunta' => 'text', 'visible' => false],
        ]);

        // Preguntas de gestión social
        Questions::insert([
            [ 'texto_de_pregunta' => 'PORTA SU DOCUMENTO EN FÍSICO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HA RECIBIDO USTED AYUDA AL ENCONTRARSE EN CALLE?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿DE DÓNDE PROVIENEN ESTAS AYUDAS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CÚAL DE LAS SIGUIENTES AYUDAS RECIBE?', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            [ 'texto_de_pregunta' => '¿USTED SABE SI LA ALCALDÍA MUNICIPAL TIENE PROGRAMAS PARA LA ATENCIÓN DE HABITANTES DE CALLE?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿UTILIZA ESTOS SERVICIOS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿POR QÚE NO UTILIZA ESTOS SERVICIOS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL SERVICIO DE LA ALCALDÍA MUNICIPAL HA UTILIZADO?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿EN QUÉ MUNICIPIO O CIUDAD COMENZÓ USTED A VIVIR EN LA CALLE?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁNTO TIEMPO EN TOTAL LLEVA VIVIENDO EN LA CALLE?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁNTO TIEMPO LLEVA HABITANDO EN LA CALLE DE FUSAGASUGÁ?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'EN EL ÚLTIMO MES, ¿CUÁL FUE EL LUGAR (BARRIO) DEL MUNICIPIO EN QUE DURMIÓ CON MAYOR FRECUENCIA?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL ES EL LUGAR QUE CON MAYOR FRECUENCIA HABITA DENTRO DEL MUNICIPIO?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL FUE EL MOTIVO QUE CONLLEVÓ A HABITAR EN LA CALLE?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL FUE EL MOTIVO POR EL QUE CONTINÚA HABITANDO EN LA CALLE?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿SU SEGURIDAD EN LA CALLE SE HA VISTO AFECTADA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿POR QUÉ SU SEGURIDAD SE HA VISTO AFECTADA?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿USTED TEME POR SU VIDA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'EN LOS ÚLTIMOS 30 DÍAS USTED HA SIDO VICTIMA DE', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            [ 'texto_de_pregunta' => 'MOTIVO O RAZÓN DEL CAMBIO DE RESIDENCIA O DE LA LLEGADA AL MUNICIPIO DE FUSAGASUGÁ', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'TENENCIA DE LA VIVIENDA', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'VALOR ARRIENDO Y/O SERVICIOS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'MATERIAL PREDOMINANTE EN LOS PISOS', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'EQUIPAMIENTOS CERCANOS AL LUGAR DE RESIDENCIA', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ES BENEFICIARIO(A) DE ALGUNO DE LOS SIGUIENTES PROGRAMAS O BENEFICIOS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿DURANTE LOS ÚLTIMOS MESES HA PARTICIPADO EN ALGÚN TALLER, DIPLOMADO O CURSO QUE LE APORTE A SU CRECIMIENTO ACADÉMICO O PERSONAL?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'ESPECIFIQUE', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿EN EL ÚLTIMO AÑO HA SIDO VICTIMA DE VIOLENCIA INTRAFAMILIAR?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿EN EL ÚLTIMO AÑO, HA REQUERIDO ACUDIR A ALGUNA DE LAS SIGUIENTES INSTITUCIONES GARANTES DE DERECHOS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'MOTIVO DE VISITA GARANTES DE DERECHO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'EN CASO DE ALGUNA DIFICULTAD QUE SE LE PRESENTE, USTED RECIBE APOYO DE', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'EL APOYO ESTA REPRESENTADO EN', 'tipo_de_pregunta' => 'select', 'visible' => false],
        ]);

        // Preguntas de secretaría de cultura
        Questions::insert([
            [ 'texto_de_pregunta' => 'NOMBRE DE LA INSTITUCIÓN, ENTIDAD O PARTICULAR', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'NOMBRE DEL BENEFICIARIO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ACTIVIDAD', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'HORA DE INICIO ACTIVIDAD', 'tipo_de_pregunta' => 'time', 'visible' => false],
            [ 'texto_de_pregunta' => 'HORA DE FINALIZACIÓN ACTIVIDAD', 'tipo_de_pregunta' => 'time', 'visible' => false],
            [ 'texto_de_pregunta' => 'FECHA DE INGRESO A LAS EFAC', 'tipo_de_pregunta' => 'date', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ES MENOR DE EDAD?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'ESCUELA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'PROGRAMA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'FORMADOR', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'FORTALEZAS', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ASPECTOS POR MEJORAR', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'LOGRO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'CUMPLIMIENTO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'AUTOEVALUACIÓN', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'COEVALUACION', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ETAPA ACTUAL', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ETAPA SIGUIENTE SEMESTRE', 'tipo_de_pregunta' => 'text', 'visible' => false],
        ]);

        // Preguntas de desarrollo economico
        Questions::insert([
            [ 'texto_de_pregunta' => 'RAZÓN SOCIAL', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'TIPO DE CONSTITUCION', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'TIPO DE SOCIEDAD', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'NÚMERO DE IDENTIFICACIÓN TRIBUTARIA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'DIRECCIÓN DE EMPRESA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'BARRIO DE EMPRESA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'CIUDAD DE EMPRESA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'TELEFONO ALTERNATIVO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUENTA CON ESTABLECIMIENTO DE COMERCIO ABIERTO AL PÚBLICO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DESCRIBA BREVEMENTE LA ACTIVIDAD PRINCIPAL DE SU EMPRESA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HACE CUÁNTO SE DEDICA A ESTA ACTIVIDAD?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿A QUÉ SECTOR PERTENE SU EMPRESA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'PRIMARIO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'SECUNDARIO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'TERCIARIO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'INDIQUE PUNTUALMENTE LOS PRINCIPALES BIENES O SERVICIOS QUE OFRECE, SEPARADOS POR UNA COMA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUENTA CON MAQUINARIA Y/O EQUIPO PARA EL DESARROLLO DE SUS ACTIVIDADES?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CON QUÉ MAQUINARIA Y/O EQUIPO CUENTA SU EMPRESA?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁNTOS EMPLEOS DIRECTOS GENERA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'LOS EMPLEOS QUE SU EMPRESA GENERA SON:', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL ES SU SEGMENTO DE MERCADO?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'EL CANAL DE DISTRIBUCIÓN DE SU EMPRESA ES:', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿QUÉ MEDIOS PUBLICITARIOS USA PARA PROMOCIONAR SUS BIENES O SERVICIOS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿QUÉ HERRAMIENTAS PUBLICITARIAS USA PARA PROMOCIONAR SUS BIENES O SERVICIOS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿SU EMPRESA CUENTA CON REGISTRO MERCANTIL?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL FUE EL ÚLTIMO AÑO EN RENOVO SU REGISTRO MERCANTIL?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿SU EMPRESA CUENTA CON REGISTRO ÚNICO TRIBUTARIO - RUT?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿SE ENCUENTRA AL DÍA CON EL PAGO DEL IMPUESTO DE INDUSTRIA Y COMERCIO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUÁL ES SU PROMEDIO DE VENTAS MENSUALES?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿HA RECIBIDO APOYO DE ENTIDADES?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'SELECCIONE LAS ENTIDADES DE LAS CUALES HA RECIBIDO ALGÚN TIPO DE APOYO', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            [ 'texto_de_pregunta' => 'DESCRIBA BREVEMENTE EL TIPO DE APOYO QUE RECIBIÓ DE LAS ENTIDADES SELECCIONADAS EN LA RESPUESTA ANTERIOR', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'PERTENECE A ALGÚN GREMIO O ASOCIACIÓN', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'COMO SE LLAMA EL GREMIO O ASOCIACIÓN A LA QUE PERTENECE', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'SU EMPRESA HA REALIZADO ALGUNA EXPORTACIÓN', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿A QUE PAÍS REALIZÓ LA EXPORTACIÓN?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ESPECIFIQUE LA FECHA EN LA QUE REALIZÓ LA ÚLTIMA EXPORTACIÓN', 'tipo_de_pregunta' => 'text', 'visible' => false],
        ]);

        // Preguntas de gestión del riesgo
        Questions::insert([
            [ 'texto_de_pregunta' => 'PARENTESCO CON EL JEFE DEL HOGAR', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'UBICACIÓN DEL INMUEBLE', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'PROPIEDAD DEL INMUEBLE', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'ESTADO DEL INMUEBLE', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'AHE. ALIM.', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'AHE. NO ALIM.', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'AMAT. REHAB. DE VIVIENDA', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'SUB. ARRIENDO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿EN LA VIVIENDA O BARRIO HAY ANIMALES DOMESTICOS EN CONDICIÓN DE VULNERABILIDAD?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUALES?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUANTOS?', 'tipo_de_pregunta' => 'text', 'visible' => false],
        ]);

        // Preguntas de turismo
        Questions::insert([
            [ 'texto_de_pregunta' => 'TIPO DE CIUDADANO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿TIENE REGISTRO NACIONAL DE TURISMO ACTIVO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿QUÉ TIPO DE SERVICIO TURISTICO OFRECE?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'INDIQUE EL NIT DEL ESTABLECIMIENTO DE COMERCIO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'NOMBRE DEL PRESTADOR', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'DIRECCIÓN DEL PRESTADOR', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'TELEFONO DEL PRESTADOR', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => 'CORREO ELECTRÓNICO DEL PRESTADOR', 'tipo_de_pregunta' => 'email', 'visible' => false],
            [ 'texto_de_pregunta' => 'CUAL ES SU CIUDAD DE PROCEDENCIA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'CUAL ES EL MOTIVO DE SU VIAJE', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿QUÉ ES LO QUE MÁS LE LLAMO LA ATENCIÓN DE FUSAGASUGÁ?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'EN DONDE SE ESTÁ HOSPEDANDO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUANTOS DÍAS PLANEA QUEDARSE EN EL MUNICIPIO?', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CON CUANTAS PERSONAS ESTA VISITANDO EL MUNICIPIO?', 'tipo_de_pregunta' => 'text', 'visible' => false],
        ]);   
        
        // Preguntas de secretaría de infraestructura
        Questions::insert([
            [ 'texto_de_pregunta' => '¿CUANTOS INTEGRANTES SON EN EL GRUPO FAMILIAR (QUE VIVAN EN LA VIVIENDA)?', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUANTOS MENORES DE 7 AÑOS?', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUANTOS MAYORES DE 65 AÑOS?', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ALGÚN INTEGRANTE DEL GRUPO FAMILIAR TIENE DISCAPACIDAD (CERTIFICADA)?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ALGÚN INTEGRANTE DEL GRUPO FAMILIAR ES POBLACIÓN VCA O DESPLAZADO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUANTOS FAMILIARES DESPLAZADOS?', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => '¿SE ENCUENTRA REGISTRADO EN EL RUPS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿EN SU GRUPO FAMILIAR ALGUNA MUJER HA SIDO VICTIMA DE VIOLENCIA INTRAFAMILIAR (CON DENUNCIA)?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿EN QUÉ AÑO SE PRESENTÓ EL HECHO?', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ALGÚN INTEGRANTE DEL GRUPO FAMILIAR HA REPRESENTADO AL MUNICIPIO EN ALGÚN DEPORTE O ARTE?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DISCIPLINA', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'ÚLTIMO EVENTO EN EL QUE PARTICIPÓ EN REPRESENTACIÓN DEL MUNICIPIO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'AÑO DE ÚLTIMO EVENTO DE PARTICIPACIÓN', 'tipo_de_pregunta' => 'number', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ALGÚN INTEGRANTE DEL GRUPO FAMILIAR HACE PARTE DE JUNTA DE ACCIÓN COMUNAL EN CARGO COMO PRESIDENTE, VICEPRESIDENTE, FISCAL, TESORERO O SECRETARIO?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ALGÚN INTEGRANTE DEL GRUPO FAMILIAR SE ENCUENTRA AFILIADO A CAJA DE COMPENSACIÓN?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ALGÚN INTEGRANTE DEL GRUPO FAMILIAR REGISTRADO HA RECIBIDO CON ANTERIORIDAD SUBSIDIO DE VIVIENDA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'INDIQUE POR QUIEN RECIBIÓ EL SUBSIDIO', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DESCRIBA POR QUÉ RECIBIÓ EL SUBSIDIO', 'tipo_de_pregunta' => 'text', 'visible' => false],
            
            [ 'texto_de_pregunta' => '¿USTED REQUIERE MEJORAMIENTO DE VIVIENDA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿USTED O ALGÚN INTEGRANTE DEL GRUPO FAMILIAR REGISTRADO ES PROPIETARIO DEL PREDIO (VERIFICABLE EN EL CERTIFICADO DE LIBERTAD)? (Mejoramiento de vivienda)', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿USTED O ALGÚN INTEGRANTE DEL GRUPO FAMILIAR REGISTRADO ES POSEEDOR DEL PREDIO POR MÁS DE CINCO AÑOS, DE MANERA QUIETA, LIBRE Y PACIFICA? EXPLIQUE (Mejoramiento de vivienda)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'UBICACIÓN DEL PREDIO (VEREDA O BARRIO) (Mejoramiento de vivienda)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'DIRECCIÓN E INDICADORES DE LOCALIZACIÓN (Mejoramiento de vivienda)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'NÚMERO DE MATRÍCULA INMOBILIARIA (Mejoramiento de vivienda)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿EN EL PREDIO TIENE VIVIENDA CONSTRUIDA? (Mejoramiento de vivienda)', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'MATERIAL DE CONSTRUCCIÓN DE MUROS (Mejoramiento de vivienda)', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿SU VIVIENDA TIENE FISURAS O GRIETAS? (Mejoramiento de vivienda)', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'NECESIDADES DE SU VIVIENDA: (Mejoramiento de vivienda)', 'tipo_de_pregunta' => 'checkbox', 'visible' => false],
            
            [ 'texto_de_pregunta' => '¿USTED REQUIERE CONSTRUCCIÓN DE VIVIENDA EN LOTE DE SU PROPIEDAD?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿USTED O ALGÚN INTEGRANTE DEL GRUPO FAMILIAR REGISTRADO ES PROPIETARIO DEL PREDIO (VERIFICABLE EN EL CERTIFICADO DE LIBERTAD)? (Construcción de vivienda)', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿USTED O ALGÚN INTEGRANTE DEL GRUPO FAMILIAR REGISTRADO ES POSEEDOR DEL PREDIO POR MÁS DE CINCO AÑOS, DE MANERA QUIETA, LIBRE Y PACIFICA? EXPLIQUE (Construcción de vivienda)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'UBICACIÓN DEL PREDIO (VEREDA O BARRIO) (Construcción de vivienda)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'DIRECCIÓN E INDICADORES DE LOCALIZACIÓN (Construcción de vivienda)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => 'NÚMERO DE MATRÍCULA INMOBILIARIA (Construcción de vivienda)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            [ 'texto_de_pregunta' => '¿EN EL PREDIO TIENE VIVIENDA CONSTRUIDA? (Construcción de vivienda)', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'MATERIAL DE CONSTRUCCIÓN DE MUROS (Construcción de vivienda)', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'DESCRIBA BREVEMENTE EN QUÉ ESTADO SE ENCUENTRA (Construcción de vivienda)', 'tipo_de_pregunta' => 'text', 'visible' => false],
            
            [ 'texto_de_pregunta' => '¿USTED REQUIERE COMPRA DE VIVIENDA DE INTERÉS SOCIAL O PRIORITARIA?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿ALGÚN INTEGRANTE DEL GRUPO FAMILIAR REGISTRADO TIENE OTRA PROPIEDAD (ASÍ SEA DE UNA PARTE POR SUCESIÓN, DERECHO DE CUOTA, O COMÚN Y PROINDIVISO)?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => '¿CUENTA CON AHORROS Y/O CESANTÍAS?', 'tipo_de_pregunta' => 'select', 'visible' => false],
            [ 'texto_de_pregunta' => 'VALOR DE INGRESOS MENSUALES', 'tipo_de_pregunta' => 'number', 'visible' => false],
        ]);
    }
}
