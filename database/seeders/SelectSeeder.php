<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SelectsModel;

class SelectSeeder extends Seeder
{
    
    // ['id_question' => , 'opcion' => ''],
    
    public function run(): void
    {
        SelectsModel::truncate();

        // Preguntas generales
        SelectsModel::insert([
            // Información personal    
                // Tipo de documento
                ['id_question' => 2, 'opcion' => 'RC - REGISTRO CIVIL',],
                ['id_question' => 2, 'opcion' => 'TI - TARJETA DE IDENTIDAD',],
                ['id_question' => 2, 'opcion' => 'CC - CÉDULA DE CIUDADANÍA',],
                ['id_question' => 2, 'opcion' => 'CC - CÉDULA DE EXTRANJERÍA',],
                ['id_question' => 2, 'opcion' => 'PS - PASAPORTE',],
                ['id_question' => 2, 'opcion' => 'MS - MENOR SIN IDENTIFICACIÓN',],
                ['id_question' => 2, 'opcion' => 'AS - ADULTO SIN IDENTIFICACIÓN',],
                // Rango de edad
                ['id_question' => 9, 'opcion' => 'JÓVEN: 18 - 28 AÑOS'],
                ['id_question' => 9, 'opcion' => 'ADULTEZ: 29 - 59 AÑOS'],
                ['id_question' => 9, 'opcion' => 'PERSONA MAYOR: 60 - 79 AÑOS'],
                ['id_question' => 9, 'opcion' => 'OCTOGENARIO: 80 - 89 AÑOS'],
                ['id_question' => 9, 'opcion' => 'NONAGENARIO: 90 - 99 AÑOS'],
                ['id_question' => 9, 'opcion' => 'CENTENARIOS: MÁS DE 100 AÑOS'],
                ['id_question' => 9, 'opcion' => 'PREFIERO NO DECIRLO'],
                // Genero
                ['id_question' => 10, 'opcion' => 'MASCULINO'],
                ['id_question' => 10, 'opcion' => 'FEMENINO'],
                ['id_question' => 10, 'opcion' => 'INTERSEXUAL'],
                ['id_question' => 10, 'opcion' => 'PREFIERO NO DECIRLO'],
                // Identidad de genero
                ['id_question' => 11, 'opcion' => 'MASCULINO'],
                ['id_question' => 11, 'opcion' => 'FEMENINO'],
                ['id_question' => 11, 'opcion' => 'MUJER TRANSGÉNERO'],
                ['id_question' => 11, 'opcion' => 'HOMBRE TRANSGÉNERO'],
                ['id_question' => 11, 'opcion' => 'PREFIERO NO DECIRLO'],
                // Orientación sexual
                ['id_question' => 12, 'opcion' => 'HETEROSEXUAL'],
                ['id_question' => 12, 'opcion' => 'HOMOSEXUAL'],
                ['id_question' => 12, 'opcion' => 'BISEXUAL'],
                ['id_question' => 12, 'opcion' => 'PREFIERO NO DECIRLO'],
                // Etnia o comunidad
                ['id_question' => 13, 'opcion' => 'PUEBLO INDÍGENA'],
                ['id_question' => 13, 'opcion' => 'PUEBLO NEGRO'],
                ['id_question' => 13, 'opcion' => 'PUEBLO AFROCOLOMBIANO'],
                ['id_question' => 13, 'opcion' => 'PUEBLO RAIZAL'],
                ['id_question' => 13, 'opcion' => 'PUEBLO PALENQUERO'],
                ['id_question' => 13, 'opcion' => 'PUEBLO BROM O GITANO'],
                ['id_question' => 13, 'opcion' => 'COMUNIDAD CAMPESINA'],
                ['id_question' => 13, 'opcion' => 'PREFIERO NO DECIRLO'],
                // Estado civil
                ['id_question' => 15, 'opcion' => 'SOLTERO(A)'],
                ['id_question' => 15, 'opcion' => 'CASADO(A)'],
                ['id_question' => 15, 'opcion' => 'VIUDO(A)'],
                ['id_question' => 15, 'opcion' => 'SEPARADO(A)'],
                ['id_question' => 15, 'opcion' => 'UNIÓN LIBRE'],
                // Situación de vulnerabilidad
                ['id_question' => 16, 'opcion' => 'MADRE CABEZA DE FAMILIA'],
                ['id_question' => 16, 'opcion' => 'DISCAPACIDAD'],
                ['id_question' => 16, 'opcion' => 'TRABAJO SEXUAL'],
                ['id_question' => 16, 'opcion' => 'POBLACIÓN MIGRANTE'],
                ['id_question' => 16, 'opcion' => 'VICTIMA DEL CONFLICTO ARMADO'],
                ['id_question' => 16, 'opcion' => 'OTROS'],
                // Nivel educativo
                ['id_question' => 17, 'opcion' => 'SIN ESCOLARIDAD'],
                ['id_question' => 17, 'opcion' => 'PRIMARIA'],
                ['id_question' => 17, 'opcion' => 'SECUNDARIA (BACHILLERATO)'],
                ['id_question' => 17, 'opcion' => 'ESTUDIANTE UNIVERSITARIO'],
                ['id_question' => 17, 'opcion' => 'PROFESIONAL UNIVERSITARIO'],
                ['id_question' => 17, 'opcion' => 'POSTGRADO (ESPECIALIZACIÓN, MAESTRÍA Y DOCTORADO)'],
                ['id_question' => 17, 'opcion' => 'PREFIERO NO DECIRLO'],

            // Información familiar
                ['id_question' => 26, 'opcion' => 'MAMÁ'],
                ['id_question' => 26, 'opcion' => 'PAPÁ'],
                ['id_question' => 26, 'opcion' => 'HERMANOS(AS)'],
                ['id_question' => 26, 'opcion' => 'HIJOS(AS)'],
                ['id_question' => 26, 'opcion' => 'TÍOS(AS)'],
                ['id_question' => 26, 'opcion' => 'ABUELOS(AS)'],
                ['id_question' => 26, 'opcion' => 'PAREJA'],
                ['id_question' => 26, 'opcion' => 'NINGUNO'],
                ['id_question' => 26, 'opcion' => 'OTRO ¿CUÁL?'],

            // Información de salud
                // Se encuentra afiliado al sistema de salud
                ['id_question' => 33, 'opcion' => 'SI'],
                ['id_question' => 33, 'opcion' => 'NO'],
                // Dependiente de cuidado
                ['id_question' => 35, 'opcion' => 'SI'],
                ['id_question' => 35, 'opcion' => 'NO'],
                // Presenta alguna discapacidad
                ['id_question' => 36, 'opcion' => 'SI'],
                ['id_question' => 36, 'opcion' => 'NO'],
                // Cual discapacidad padece
                ['id_question' => 37, 'opcion' => 'DISCAPACIDAD SENSORIAL VISUAL, SENSORIAL AUDITIVA'],
                ['id_question' => 37, 'opcion' => 'DISCAPACIDAD INTELECTUAL/COGNITIVA'],
                ['id_question' => 37, 'opcion' => 'DISCAPACIDAD MENTAL PSICOSOCIAL'],
                ['id_question' => 37, 'opcion' => 'DISCAPACIDAD SISTÉMICA'],
                ['id_question' => 37, 'opcion' => 'DISCAPACIDAD MÚLTIPLE'],
                // Problemas de salud
                ['id_question' => 38, 'opcion' => 'SISTEMA DIGESTIVO (DIARREA, VÓMITO)'],
                ['id_question' => 38, 'opcion' => 'SISTEMA RESPIRATORIO (TOS, DIFICULTAD RESPIRATORIA)'],
                ['id_question' => 38, 'opcion' => 'AFECCIONES DE PIEL (CARANCHOS, LADILLAS, PIOJOS)'],
                ['id_question' => 38, 'opcion' => 'AFECCIONES DE LOS OJOS (ARDOR Y OJOS ROJOS)'],
                ['id_question' => 38, 'opcion' => 'AFECCIONES VÍAS URINARIAS (ARDOR PARA ORINAR)'],
                ['id_question' => 38, 'opcion' => 'INFECCIONES DE TRANSMISIÓN SEXUAL'],
                ['id_question' => 38, 'opcion' => 'DEPRESIÓN U OTRA ENFERMEDAD MENTAL'],
                ['id_question' => 38, 'opcion' => 'CONVULSIONES'],
                ['id_question' => 38, 'opcion' => 'LESION INTENCIONAL POR PARTE DE TERCEROS'],
                ['id_question' => 38, 'opcion' => 'HERIDAS CAUSADAS POR VEHÍCULO AUTOMOTOR'],
                ['id_question' => 38, 'opcion' => 'MOLESTIAS DENTALES'],
                ['id_question' => 38, 'opcion' => 'INTOXICACIÓN O SOBREDOSIS POR CONSUMO DE SPA'],
                ['id_question' => 38, 'opcion' => 'NINGUNA DE LAS ANTERIORES'],
                // La enfermedad se encuentra en tratamiento
                ['id_question' => 40, 'opcion' => 'SI'],
                ['id_question' => 40, 'opcion' => 'NO'],
                // Haz consumido alguna sustancia psicoactiva
                ['id_question' => 42, 'opcion' => 'SI'],
                ['id_question' => 42, 'opcion' => 'NO'],
                // Cual sustancia consume
                ['id_question' => 43, 'opcion' => 'BAZUCO'],
                ['id_question' => 43, 'opcion' => 'MARIHUANA'],
                ['id_question' => 43, 'opcion' => 'CIGARRILLO'],
                ['id_question' => 43, 'opcion' => 'COCAÍNA'],
                ['id_question' => 43, 'opcion' => 'PEPAS'],
                ['id_question' => 43, 'opcion' => 'ALCOHOL (CHAMBER O ETÍLICO)'],
                ['id_question' => 43, 'opcion' => 'HEROÍNA'],
                ['id_question' => 43, 'opcion' => 'INHALANTES (SACOL, PEGANTE, BÓXER, ETC)'],
                ['id_question' => 43, 'opcion' => 'BEBIDAS ALCOHÓLICAS LEGALES'],
                ['id_question' => 43, 'opcion' => 'MADUROS, PISTOLOS, OTROS'],
                ['id_question' => 43, 'opcion' => 'OTRO ¿CUÁL?'],
                // Frecuencia de consumo de sustancias
                ['id_question' => 44, 'opcion' => '1 A 3 VECES AL DÍA'],
                ['id_question' => 44, 'opcion' => 'MÁS DE 3 VECES AL DIA'],
                ['id_question' => 44, 'opcion' => 'SEMANAL'],
                ['id_question' => 44, 'opcion' => 'QUINCENAL'],
                ['id_question' => 44, 'opcion' => 'MENSUAL'],
                ['id_question' => 44, 'opcion' => 'ANUAL'],
                // Ha recibido tratamiento para el consumo de SPA
                ['id_question' => 45, 'opcion' => 'SI'],
                ['id_question' => 45, 'opcion' => 'NO'],
                // Preguntas de la condición física y mental
                ['id_question' => 48, 'opcion' => 'SIN DIFICULTAD'],
                ['id_question' => 48, 'opcion' => 'CON DIFICULTAD'],
                ['id_question' => 48, 'opcion' => 'NO PUEDE HACERLO'],
                ['id_question' => 49, 'opcion' => 'SIN DIFICULTAD'],
                ['id_question' => 49, 'opcion' => 'CON DIFICULTAD'],
                ['id_question' => 49, 'opcion' => 'NO PUEDE HACERLO'],
                ['id_question' => 50, 'opcion' => 'SIN DIFICULTAD'],
                ['id_question' => 50, 'opcion' => 'CON DIFICULTAD'],
                ['id_question' => 50, 'opcion' => 'NO PUEDE HACERLO'],
                ['id_question' => 51, 'opcion' => 'SIN DIFICULTAD'],
                ['id_question' => 51, 'opcion' => 'CON DIFICULTAD'],
                ['id_question' => 51, 'opcion' => 'NO PUEDE HACERLO'],
                ['id_question' => 52, 'opcion' => 'SIN DIFICULTAD'],
                ['id_question' => 52, 'opcion' => 'CON DIFICULTAD'],
                ['id_question' => 52, 'opcion' => 'NO PUEDE HACERLO'],
                ['id_question' => 53, 'opcion' => 'SIN DIFICULTAD'],
                ['id_question' => 53, 'opcion' => 'CON DIFICULTAD'],
                ['id_question' => 53, 'opcion' => 'NO PUEDE HACERLO'],
                ['id_question' => 54, 'opcion' => 'SIN DIFICULTAD'],
                ['id_question' => 54, 'opcion' => 'CON DIFICULTAD'],
                ['id_question' => 54, 'opcion' => 'NO PUEDE HACERLO'],
                ['id_question' => 55, 'opcion' => 'SIN DIFICULTAD'],
                ['id_question' => 55, 'opcion' => 'CON DIFICULTAD'],
                ['id_question' => 55, 'opcion' => 'NO PUEDE HACERLO'],
                ['id_question' => 56, 'opcion' => 'SIN DIFICULTAD'],
                ['id_question' => 56, 'opcion' => 'CON DIFICULTAD'],
                ['id_question' => 56, 'opcion' => 'NO PUEDE HACERLO'],
                // Utiliza metodo de planificación familiar
                ['id_question' => 57, 'opcion' => 'SI'],
                ['id_question' => 57, 'opcion' => 'NO'],
                // Ha ido al médico en los últimos 6 meses
                ['id_question' => 59, 'opcion' => 'SI'],
                ['id_question' => 59, 'opcion' => 'NO'],
                // Hay mujeres gestantes en el hogar
                ['id_question' => 61, 'opcion' => 'SI'],
                ['id_question' => 61, 'opcion' => 'NO'],
                // Ha asistido a controles prenatales
                ['id_question' => 65, 'opcion' => 'SI'],
                ['id_question' => 65, 'opcion' => 'NO'],
                // Ha presentado episodios de ansiedad
                ['id_question' => 66, 'opcion' => 'SI'],
                ['id_question' => 66, 'opcion' => 'NO'],
                // Ha presentado episodios de depresion
                ['id_question' => 67, 'opcion' => 'SI'],
                ['id_question' => 67, 'opcion' => 'NO'],


            // Información de vivienda
                ['id_question' => 71, 'opcion' => 'MENOS DE UN AÑO'],
                ['id_question' => 71, 'opcion' => 'ENTRE 1 Y 3 AÑOS'],
                ['id_question' => 71, 'opcion' => 'MÁS DE 3 AÑOS'],

            // Información economica
            ['id_question' => 75, 'opcion' => 'SI'],
            ['id_question' => 75, 'opcion' => 'NO'],

        ]);

        // Preguntas de secretaría de planeación
        SelectsModel::insert([
            // Como califica la atención recibida
            ['id_question' => 102, 'opcion' => 'EXCELENTE'],
            ['id_question' => 102, 'opcion' => 'BUENO'],
            ['id_question' => 102, 'opcion' => 'REGULAR'],
            ['id_question' => 102, 'opcion' => 'MALO'],
            // Como califica el tiempo de respuesta
            ['id_question' => 103, 'opcion' => 'EXCELENTE'],
            ['id_question' => 103, 'opcion' => 'BUENO'],
            ['id_question' => 103, 'opcion' => 'REGULAR'],
            ['id_question' => 103, 'opcion' => 'MALO'],
            // Como califica las instalaciones
            ['id_question' => 104, 'opcion' => 'EXCELENTE'],
            ['id_question' => 104, 'opcion' => 'BUENO'],
            ['id_question' => 104, 'opcion' => 'REGULAR'],
            ['id_question' => 104, 'opcion' => 'MALO'],
            // Como califica la solución dada
            ['id_question' => 105, 'opcion' => 'EXCELENTE'],
            ['id_question' => 105, 'opcion' => 'BUENO'],
            ['id_question' => 105, 'opcion' => 'REGULAR'],
            ['id_question' => 105, 'opcion' => 'MALO'],
            // Como califica el conocimiento del funcionario
            ['id_question' => 106, 'opcion' => 'EXCELENTE'],
            ['id_question' => 106, 'opcion' => 'BUENO'],
            ['id_question' => 106, 'opcion' => 'REGULAR'],
            ['id_question' => 106, 'opcion' => 'MALO'],
            // La información fue clara
            ['id_question' => 107, 'opcion' => 'SI'],
            ['id_question' => 107, 'opcion' => 'NO'],
        ]);

        // Preguntas de secretaría administrativa
        SelectsModel::insert([
            // Departamento de residencia
            ['id_question' => 109, 'opcion' => 'AMAZONAS'],
            ['id_question' => 109, 'opcion' => 'ANTIOQUIA'],
            ['id_question' => 109, 'opcion' => 'ARAUCA'],
            ['id_question' => 109, 'opcion' => 'ATLÁNTICO'],
            ['id_question' => 109, 'opcion' => 'BOLIVAR'],
            ['id_question' => 109, 'opcion' => 'BOYACÁ'],
            ['id_question' => 109, 'opcion' => 'CALDAS'],
            ['id_question' => 109, 'opcion' => 'CAQUETÁ'],
            ['id_question' => 109, 'opcion' => 'CASANARE'],
            ['id_question' => 109, 'opcion' => 'CAUCA'],
            ['id_question' => 109, 'opcion' => 'CESAR'],
            ['id_question' => 109, 'opcion' => 'CHOCÓ'],
            ['id_question' => 109, 'opcion' => 'CÓRDOBA'],
            ['id_question' => 109, 'opcion' => 'CUNDINAMARCA'],
            ['id_question' => 109, 'opcion' => 'GUAINÍA'],
            ['id_question' => 109, 'opcion' => 'GUAVIARE'],
            ['id_question' => 109, 'opcion' => 'HUILA'],
            ['id_question' => 109, 'opcion' => 'LA GUAJIRA'],
            ['id_question' => 109, 'opcion' => 'MAGDALENA'],
            ['id_question' => 109, 'opcion' => 'META'],
            ['id_question' => 109, 'opcion' => 'NARIÑO'],
            ['id_question' => 109, 'opcion' => 'NORTE DE SANTANDER'],
            ['id_question' => 109, 'opcion' => 'PUTUMAYO'],
            ['id_question' => 109, 'opcion' => 'QUINDÍO'],
            ['id_question' => 109, 'opcion' => 'RISARALDA'],
            ['id_question' => 109, 'opcion' => 'SAN ANDRÉS Y PROVIDENCIA'],
            ['id_question' => 109, 'opcion' => 'SANTANDER'],
            ['id_question' => 109, 'opcion' => 'SUCRE'],
            ['id_question' => 109, 'opcion' => 'TOLIMA'],
            ['id_question' => 109, 'opcion' => 'VALLE DEL CAUCA'],
            ['id_question' => 109, 'opcion' => 'VAUPÉS'],
            ['id_question' => 109, 'opcion' => 'VICHADA'],
            // Territorio de residencia
            ['id_question' => 110, 'opcion' => 'URBANO'],
            ['id_question' => 110, 'opcion' => 'RURAL'],
            ['id_question' => 110, 'opcion' => 'CONSEJO COMUNITARIO'],
            ['id_question' => 110, 'opcion' => 'TERRITORIO INDIGENA'],
            // Condición de discapacidad
            ['id_question' => 111, 'opcion' => 'SI'],
            ['id_question' => 111, 'opcion' => 'NO'],
            // Que discapacidad
            ['id_question' => 112, 'opcion' => 'FÍSICA'],
            ['id_question' => 112, 'opcion' => 'SENSORIAL VISUAL'],
            ['id_question' => 112, 'opcion' => 'SENSORIAL AUDITIVA'],
            ['id_question' => 112, 'opcion' => 'SORDOCEGUERA'],
            ['id_question' => 112, 'opcion' => 'INTELECTUAL COGNITIVA'],
            ['id_question' => 112, 'opcion' => 'MENTAL PSICOSOCIAL'],
            ['id_question' => 112, 'opcion' => 'MÚLTIPLE'],
            ['id_question' => 112, 'opcion' => 'PREFIERO NO DECIRLO'],
            // Tipo de organización
            ['id_question' => 113, 'opcion' => 'COMUNIDAD INTERNACIONAL'],
            ['id_question' => 113, 'opcion' => 'CONSULADO/EMBAJADA'],
            ['id_question' => 113, 'opcion' => 'ENTIDAD TERRITORIAL'],
            ['id_question' => 113, 'opcion' => 'ESTUDIANTES Y ACADEMIA'],
            ['id_question' => 113, 'opcion' => 'GREMIOS ECONÓMICOS'],
            ['id_question' => 113, 'opcion' => 'IGLESIA'],
            ['id_question' => 113, 'opcion' => 'MEDIOS Y PLATAFORMAS DE COMUNICACIÓN'],
            ['id_question' => 113, 'opcion' => 'ORGANISMOS DE CONTROL'],
            ['id_question' => 113, 'opcion' => 'ORGANISMOS NACIONALES Y DE COOPERACIÓN'],
            ['id_question' => 113, 'opcion' => 'ORGANISMOS DE VÍCTIMAS'],
            ['id_question' => 113, 'opcion' => 'ORGANIZACION SOCIAL Y DE DDHH'],
            ['id_question' => 113, 'opcion' => 'OTRAS INSTITUCIONES DEL ESTADO'],
            ['id_question' => 113, 'opcion' => 'PARTIDOS POLÍTICOS'],
            ['id_question' => 113, 'opcion' => 'SINDICATOS'],
            ['id_question' => 113, 'opcion' => 'NINGUNA'],
            // Puntos de atención
            ['id_question' => 114, 'opcion' => 'SI'],
            ['id_question' => 114, 'opcion' => 'NO'],
            // Conocimiento de canal de comunicación
            ['id_question' => 115, 'opcion' => 'PÁGINA WEB'],
            ['id_question' => 115, 'opcion' => 'CORREO ELECTRÓNICO'],
            ['id_question' => 115, 'opcion' => 'WHATSAPP'],
            ['id_question' => 115, 'opcion' => 'NINGUNO'],
            ['id_question' => 115, 'opcion' => 'TODAS LAS ANTERIORES'],
            // Canal de comunicación
            ['id_question' => 116, 'opcion' => 'ESCRITORIO (VENTALLA ÚNICA)'],
            ['id_question' => 116, 'opcion' => 'PRESENCIAL'],
            ['id_question' => 116, 'opcion' => 'TELEFÓNICO (MÓVIL-FIJO)'],
            ['id_question' => 116, 'opcion' => 'VIRTUAL (INTERNET, REDES SOCIALES, WHATSAPP)'],
            // Razón de consulta
            ['id_question' => 117, 'opcion' => 'PETICIÓN, QUEJA, RECLAMO, SUGERENCIA, DENUNCIA Y FELICITACIÓN'],
            ['id_question' => 117, 'opcion' => 'OFERTA INSTITUCIONAL'],
            ['id_question' => 117, 'opcion' => 'SOLICITUD DE TRAMITES'],
            ['id_question' => 117, 'opcion' => 'NOTIFICACIONES'],
            ['id_question' => 117, 'opcion' => 'EVENTOS DE CAPACITACION Y FORMACIÓN VIRTUAL'],
            ['id_question' => 117, 'opcion' => 'PARTICIPACIÓN CIUDADANA'],
            ['id_question' => 117, 'opcion' => 'ESTADO DEL PROCESO'],
            ['id_question' => 117, 'opcion' => 'CONOCIMIENTO'],
            ['id_question' => 117, 'opcion' => 'NO CONSULTO A LA ALCALDÍA'],
            // Uso de canales
            ['id_question' => 118, 'opcion' => 'DIARIAMENTE'],
            ['id_question' => 118, 'opcion' => 'QUINCENALMENTE'],
            ['id_question' => 118, 'opcion' => 'MENSUALMENTE'],
            ['id_question' => 118, 'opcion' => 'SEMANALMENTE'],
            ['id_question' => 118, 'opcion' => 'SEMESTRALMENTE'],
            ['id_question' => 118, 'opcion' => 'TRIMESTRALMENTE'],
            ['id_question' => 118, 'opcion' => 'NUNCA'],
            // Tema de gusto
            ['id_question' => 119, 'opcion' => 'CANALES DE INFORMACIÓN'],
            ['id_question' => 119, 'opcion' => 'OFERTA INSTITUCIONAL'],
            ['id_question' => 119, 'opcion' => 'CAPACITACIÓN Y FORMACIÓN'],
            ['id_question' => 119, 'opcion' => 'ATENCIÓN PSICOSOCIAL A VÍCTIMAS Y COMPARIENTES'],
        ]);

        // Preguntas de gestión social
        SelectsModel::insert([
            // Porta su documento en fisico
            ['id_question' => 124, 'opcion' => 'SI'],
            ['id_question' => 124, 'opcion' => 'NO'],
            // Ha recibido ayuda al encontrarse en la calle
            ['id_question' => 125, 'opcion' => 'SI'],
            ['id_question' => 125, 'opcion' => 'NO'],
            // Origen de ayudas
            ['id_question' => 126, 'opcion' => 'FAMILIA'],
            ['id_question' => 126, 'opcion' => 'INSTITUCIONES OFICIALES'],
            ['id_question' => 126, 'opcion' => 'AMIGOS(AS)'],
            ['id_question' => 126, 'opcion' => 'INSTITUCIONES PRIVADAS'],
            ['id_question' => 126, 'opcion' => 'INSTITUCIONES RELIGIOSAS'],
            ['id_question' => 126, 'opcion' => 'PERSONAS DEL COMÚN'],
            ['id_question' => 126, 'opcion' => 'OTRO'],
            // Cuales ayudas recibe
            ['id_question' => 127, 'opcion' => 'ECONÓMICA'],
            ['id_question' => 127, 'opcion' => 'ALIMENTACIÓN'],
            ['id_question' => 127, 'opcion' => 'ALOJAMIENTO'],
            ['id_question' => 127, 'opcion' => 'APOYO PSICOSOCIAL'],
            ['id_question' => 127, 'opcion' => 'FORMACIÓN Y CAPACITACIÓN'],
            ['id_question' => 127, 'opcion' => 'REHABILITACIÓN PARA CONSUMO DE SPA'],
            ['id_question' => 127, 'opcion' => 'SERVICIOS MÉDICOS'],
            ['id_question' => 127, 'opcion' => 'ASEO PERSONAL'],
            // Programas para la atención de habitantes de calle
            ['id_question' => 128, 'opcion' => 'SI'],
            ['id_question' => 128, 'opcion' => 'NO'],
            // Utiliza estos servicios
            ['id_question' => 129, 'opcion' => 'SI'],
            ['id_question' => 129, 'opcion' => 'NO'],
            // Por que no usa los servicios
            ['id_question' => 130, 'opcion' => 'NO SABE DÓNDE QUEDAN'],
            ['id_question' => 130, 'opcion' => 'QUEDAN LEJOS'],
            ['id_question' => 130, 'opcion' => 'LE SOLICITAN IDENTIFICACIÓN Y NO TIENE'],
            ['id_question' => 130, 'opcion' => 'NO LE PERMITEN INGRESAR LA PIPA'],
            ['id_question' => 130, 'opcion' => 'NO LE PERMITEN INGRESAR ELEMENTOS PERSONALES'],
            ['id_question' => 130, 'opcion' => 'NO LE PERMITEN INGRESAR MASCOTAS'],
            ['id_question' => 130, 'opcion' => 'NO LE GUSTA'],
            ['id_question' => 130, 'opcion' => 'OTRO'],
            // Tiempo de vivienda en las calles de fusagasugá
            ['id_question' => 134, 'opcion' => '6 MESES'],
            ['id_question' => 134, 'opcion' => 'ENTRE 1 Y 3 AÑOS'],
            ['id_question' => 134, 'opcion' => 'MÁS DE 3 AÑOS'],
            // Motivo de vivienda en la calle
            ['id_question' => 137, 'opcion' => 'CONSUMO DE SUSTANCIAS PSICOACTIVAS'],
            ['id_question' => 137, 'opcion' => 'POR GUSTO PERSONAL'],
            ['id_question' => 137, 'opcion' => 'AMENAZA O RIESGO PARA SU VIDA'],
            ['id_question' => 137, 'opcion' => 'INFLUENCIA DE OTRAS PERSONAS'],
            ['id_question' => 137, 'opcion' => 'DIFICULTADES ECONÓMICAS'],
            ['id_question' => 137, 'opcion' => 'FALTA DE TRABAJO'],
            ['id_question' => 137, 'opcion' => 'CONFLICTOS O DIFICULTADES FAMILIARES'],
            ['id_question' => 137, 'opcion' => 'VIOLENCIA DE GÉNERO O ABUSO SEXUAL'],
            ['id_question' => 137, 'opcion' => 'SIEMPRE HA VIVIDO EN LA CALLE'],
            ['id_question' => 137, 'opcion' => 'VÍCTIMA DEL CONFLICTO ARMADO O DESPLAZAMIENTO'],
            ['id_question' => 137, 'opcion' => 'OTRO'],
            // Motivo de continuación de vivienda en la calle
            ['id_question' => 138, 'opcion' => 'CONSUMO DE SUSTANCIAS PSICOACTIVAS'],
            ['id_question' => 138, 'opcion' => 'POR GUSTO PERSONAL'],
            ['id_question' => 138, 'opcion' => 'AMENAZA O RIESGO PARA SU VIDA'],
            ['id_question' => 138, 'opcion' => 'INFLUENCIA DE OTRAS PERSONAS'],
            ['id_question' => 138, 'opcion' => 'DIFICULTADES ECONÓMICAS'],
            ['id_question' => 138, 'opcion' => 'FALTA DE TRABAJO'],
            ['id_question' => 138, 'opcion' => 'CONFLICTOS O DIFICULTADES FAMILIARES'],
            ['id_question' => 138, 'opcion' => 'VIOLENCIA DE GÉNERO O ABUSO SEXUAL'],
            ['id_question' => 138, 'opcion' => 'SIEMPRE HA VIVIDO EN LA CALLE'],
            ['id_question' => 138, 'opcion' => 'VÍCTIMA DEL CONFLICTO ARMADO O DESPLAZAMIENTO'],
            ['id_question' => 138, 'opcion' => 'OTRO'],
            // Su seguridad en la calle se ha visto afectada
            ['id_question' => 139, 'opcion' => 'SI'],
            ['id_question' => 139, 'opcion' => 'NO'],
            // Por que
            ['id_question' => 140, 'opcion' => 'PERSECUCIÓN POR INTEGRANTES DE UNA OLLA'],
            ['id_question' => 140, 'opcion' => 'SER FORZADO A CUMPLIR CON TAREAS EN CONTRA DE SU VOLUNTAD'],
            ['id_question' => 140, 'opcion' => 'ABUSO POLICIAL'],
            ['id_question' => 140, 'opcion' => 'PROBLEMAS CON GRUPOS JUVENILES (BARRAS BRAVAS, ETC...)'],
            ['id_question' => 140, 'opcion' => 'PROBLEMAS CON LA COMUNIDAD'],
            ['id_question' => 140, 'opcion' => 'OTRO'],
            // Usted teme por su vida
            ['id_question' => 141, 'opcion' => 'SI'],
            ['id_question' => 141, 'opcion' => 'NO'],
            // En los ultimos 30 dias usted ha sido victima de
            ['id_question' => 142, 'opcion' => 'GOLPES'],
            ['id_question' => 142, 'opcion' => 'DISPAROS'],
            ['id_question' => 142, 'opcion' => 'HERIDA CON ARMA BLANCA'],
            ['id_question' => 142, 'opcion' => 'AMENAZAS'],
            ['id_question' => 142, 'opcion' => 'HURTO'],
            ['id_question' => 142, 'opcion' => 'INSULTOS'],
            ['id_question' => 142, 'opcion' => 'RECHAZO SOCIAL'],
            // Tenencia de la vivienda
            ['id_question' => 144, 'opcion' => 'PROPIA'],
            ['id_question' => 144, 'opcion' => 'EN ARRIENDO'],
            ['id_question' => 144, 'opcion' => 'FAMILIAR'],
            ['id_question' => 144, 'opcion' => 'A CARGO'],
            // Material predominante de los pisos
            ['id_question' => 146, 'opcion' => 'ALFOMBRA'],
            ['id_question' => 146, 'opcion' => 'CEMENTO'],
            ['id_question' => 146, 'opcion' => 'BALDOSA'],
            ['id_question' => 146, 'opcion' => 'MADERA'],
            ['id_question' => 146, 'opcion' => 'TIERRA/ARENA'],
            ['id_question' => 146, 'opcion' => 'OTRO'],
            // Equipamientos cercanos a residencia
            ['id_question' => 147, 'opcion' => 'MODALIDADES DE ATENCIÓN ICBF'],
            ['id_question' => 147, 'opcion' => 'CENTROS RECREATIVOS'],
            ['id_question' => 147, 'opcion' => 'CENTROS DE ATENCIÓN EN SALUD'],
            ['id_question' => 147, 'opcion' => 'CENTROS EDUCATIVOS'],
            ['id_question' => 147, 'opcion' => 'PARQUES INFANTILES'],
            ['id_question' => 147, 'opcion' => 'CENTROS CULTURALES'],
            ['id_question' => 147, 'opcion' => 'POLIDEPORTIVOS'],
            ['id_question' => 147, 'opcion' => 'PARQUES BIOSALUDABLES'],
            // Beneficiario de programas
            ['id_question' => 148, 'opcion' => 'RENTA JOVEN'],
            ['id_question' => 148, 'opcion' => 'CENTRO DÍA'],
            ['id_question' => 148, 'opcion' => 'COMEDORES COMUNITARIOS'],
            ['id_question' => 148, 'opcion' => 'BANCO DE ALIMENTOS'],
            ['id_question' => 148, 'opcion' => 'COLOMBIA MAYOR'],
            ['id_question' => 148, 'opcion' => 'RENTA CIUDADANA'],
            ['id_question' => 148, 'opcion' => 'OTRO'],
            // Participación en algún taller
            ['id_question' => 149, 'opcion' => 'SI'],
            ['id_question' => 149, 'opcion' => 'NO'],
            // Violencia intrafamiliar
            ['id_question' => 151, 'opcion' => 'SI'],
            ['id_question' => 151, 'opcion' => 'NO'],
            // Ha requerido alguna institución garante de derechos
            ['id_question' => 152, 'opcion' => 'COMISARÍA DE FAMILIA'],
            ['id_question' => 152, 'opcion' => 'DEFENSORÍA DEL PUEBLO'],
            ['id_question' => 152, 'opcion' => 'PERSONERÍA'],
            ['id_question' => 152, 'opcion' => 'PROCADURÍA'],
            ['id_question' => 152, 'opcion' => 'ICBF'],
            ['id_question' => 152, 'opcion' => 'POLICÍA'],
            ['id_question' => 152, 'opcion' => 'FISCALÍA'],
            ['id_question' => 152, 'opcion' => 'OTRO'],
            // Quien apoya en dificultades
            ['id_question' => 154, 'opcion' => 'FAMILIA'],
            ['id_question' => 154, 'opcion' => 'VECINOS'],
            ['id_question' => 154, 'opcion' => 'INSTITUCIÓN'],
            ['id_question' => 154, 'opcion' => 'OTRO'],
            // El apoyo esta representado en
            ['id_question' => 155, 'opcion' => 'RECURSOS ECONÓMICOS'],
            ['id_question' => 155, 'opcion' => 'VESTUARIO'],
            ['id_question' => 155, 'opcion' => 'ALIMENTACIÓN'],
            ['id_question' => 155, 'opcion' => 'OTRO'],
        ]);

        // Preguntas de secretaria de cultura
        SelectsModel::insert([
            ['id_question' => 162, 'opcion' => 'SI'],
            ['id_question' => 162, 'opcion' => 'NO'],
        ]);

        // Preguntas de secretaria de infraestructura
        SelectsModel::insert([
            // Familia con discapacidad
            ['id_question' => 177, 'opcion' => 'SI'],
            ['id_question' => 177, 'opcion' => 'NO'],
            // Familiar desplazado
            ['id_question' => 178, 'opcion' => 'SI'],
            ['id_question' => 178, 'opcion' => 'NO'],
            // Se encuentra registrado en el RUPS
            ['id_question' => 180, 'opcion' => 'SI'],
            ['id_question' => 180, 'opcion' => 'NO'],
            // Mujer con violencia intrafamiliar
            ['id_question' => 181, 'opcion' => 'SI'],
            ['id_question' => 181, 'opcion' => 'NO'],
            // Familiar deportista
            ['id_question' => 183, 'opcion' => 'SI'],
            ['id_question' => 183, 'opcion' => 'NO'],
            // Familiar participante en junta de acción comunal
            ['id_question' => 187, 'opcion' => 'SI'],
            ['id_question' => 187, 'opcion' => 'NO'],
            // Familiar participante caja de compesación
            ['id_question' => 188, 'opcion' => 'SI'],
            ['id_question' => 188, 'opcion' => 'NO'],
            // Familiar con subsidio de vivienda
            ['id_question' => 189, 'opcion' => 'SI'],
            ['id_question' => 189, 'opcion' => 'NO'],
            // Por quien recibió subsidio de vivienda
            ['id_question' => 190, 'opcion' => 'POR EL MUNICIPIO'],
            ['id_question' => 190, 'opcion' => 'POR EL DEPARTAMENTO'],
            ['id_question' => 190, 'opcion' => 'POR EL MINISTERIO'],
            // Mejoramiento de vivienda
            ['id_question' => 192, 'opcion' => 'SI'],
            ['id_question' => 192, 'opcion' => 'NO'],
            // Construcción de vivienda
            ['id_question' => 193, 'opcion' => 'SI'],
            ['id_question' => 193, 'opcion' => 'NO'],
            // Compra de vivienda
            ['id_question' => 194, 'opcion' => 'SI'],
            ['id_question' => 194, 'opcion' => 'NO'],
            // Familiar propietario del predio
            ['id_question' => 195, 'opcion' => 'SI'],
            ['id_question' => 195, 'opcion' => 'NO'],
            // En el predio hay vivienda construida
            ['id_question' => 200, 'opcion' => 'SI'],
            ['id_question' => 200, 'opcion' => 'NO'],
            // Material de construcción de muros
            ['id_question' => 201, 'opcion' => 'BLOQUE O LADRILLO'],
            ['id_question' => 201, 'opcion' => 'CONCRETO'],
            ['id_question' => 201, 'opcion' => 'MADERA'],
            ['id_question' => 201, 'opcion' => 'TEJAS'],
            ['id_question' => 201, 'opcion' => 'OTRO'],
            // Vivienda tiene fisuras
            ['id_question' => 202, 'opcion' => 'SI'],
            ['id_question' => 202, 'opcion' => 'NO'],
            // Necesidades de su vivienda
            ['id_question' => 203, 'opcion' => 'CAMBIO DE CUBIERTAS (TEJAS)'],
            ['id_question' => 203, 'opcion' => 'CAMBIO O INSTALACIÓN DE PEINAZOS (SOPORTE DE TEJAS)'],
            ['id_question' => 203, 'opcion' => 'CONTRUCCIÓN DE MESÓN'],
            ['id_question' => 203, 'opcion' => 'TIENE PISOS DE TIERRA'],
            ['id_question' => 203, 'opcion' => 'FALTA PAÑETAR'],
            ['id_question' => 203, 'opcion' => 'FALTA PINTAR'],
            ['id_question' => 203, 'opcion' => 'FALTA ENCHAPAR PISOS DE LA CASA'],
            ['id_question' => 203, 'opcion' => 'FALTA ENCHAPAR BAÑO'],
            ['id_question' => 203, 'opcion' => 'FALTA ENCHAPAR COCINA'],
            ['id_question' => 203, 'opcion' => 'FALTAN APARATOS SANITARIOS (SANITARIO, LAVAMANOS Y/O DUCHA)'],
            // Familiar con otra propiedad
            ['id_question' => 205, 'opcion' => 'SI'],
            ['id_question' => 205, 'opcion' => 'NO'],
            // Cuanta con ahorros o cesantias
            ['id_question' => 206, 'opcion' => 'SI'],
            ['id_question' => 206, 'opcion' => 'NO'],
        ]);

        // Preguntas de desarrollo economico
        SelectsModel::insert([
            // Tipo de constitución
            ['id_question' => 209, 'opcion' => 'PERSONA NATURAL'],
            ['id_question' => 209, 'opcion' => 'PERSONA JURÍDICA'],
            // Tipo de sociedad
            ['id_question' => 210, 'opcion' => 'ENTIDAD SIN ÁNIMO DE LUCRO - ESAL'],
            ['id_question' => 210, 'opcion' => 'LIMITADA - LTDA'],
            ['id_question' => 210, 'opcion' => 'SOCIEDAD ANÓMICA S.A.'],
            ['id_question' => 210, 'opcion' => 'SOCIEDAD COLECTIVA'],
            ['id_question' => 210, 'opcion' => 'SOCIEDAD EN COMANDITA'],
            ['id_question' => 210, 'opcion' => 'SOCIEDAD EN COMANDITA POR ACCIONES'],
            ['id_question' => 210, 'opcion' => 'SOCIEDAD EN COMANDITA SIMPLE'],
            ['id_question' => 210, 'opcion' => 'SOCIEDAD POR ACCIONES SIMPLIFICADAS (SAS)'],
            ['id_question' => 210, 'opcion' => 'UDEC'],
            // Cuenta con establecimiento abierto al público
            ['id_question' => 216, 'opcion' => 'SI'],
            ['id_question' => 216, 'opcion' => 'NO'],
            // Hace cuanto se dedica a esta actividad
            ['id_question' => 218, 'opcion' => 'MENOS DE 1 AÑO'],
            ['id_question' => 218, 'opcion' => 'DE 1 A 2 AÑOS'],
            ['id_question' => 218, 'opcion' => 'DE 2 A 3 AÑOS'],
            ['id_question' => 218, 'opcion' => 'DE 3 A 5 AÑOS'],
            ['id_question' => 218, 'opcion' => 'DE 5 A 10 AÑOS'],
            ['id_question' => 218, 'opcion' => 'MÁS DE 10 AÑOS'],
            // A que sector pertenece la empresa
            ['id_question' => 219, 'opcion' => 'PRIMARIO O AGROPECUARIO - OBTIENE PRODUCTOS DIRECTAMENTE DE LA NATURALEZA SIN TRANSFORMAR'],
            ['id_question' => 219, 'opcion' => 'SECUNDARIO O INDUSTRIAL - TRANSFORMA MATERIAS PRIMAS EN PRODUCTOS TERMINADOS O SEMIELABORADOS'],
            ['id_question' => 219, 'opcion' => 'TERCIARIO O DE SERVICIOS - NO PRODUCE BIENES; SE ENFOCA EN LOS SERVICIOS'],
            // Primario
            ['id_question' => 220, 'opcion' => 'CULTIVO DE FRUTAS'],
            ['id_question' => 220, 'opcion' => 'CULTIVO DE CAFÉ'],
            ['id_question' => 220, 'opcion' => 'CULTIVO DE HORTALIZAS'],
            ['id_question' => 220, 'opcion' => 'CULTIVO DE PANCOGER'],
            ['id_question' => 220, 'opcion' => 'CULTIVO DE PLÁTANO'],
            ['id_question' => 220, 'opcion' => 'AVICULTORES'],
            ['id_question' => 220, 'opcion' => 'CULTIVO DE AGUACATE'],
            ['id_question' => 220, 'opcion' => 'OTRAS PRODUCCIONES PECUARIAS'],
            ['id_question' => 220, 'opcion' => 'OTRAS ACTIVIDADES DEL SECTOR PRIMARIO'],
            // Secundario
            ['id_question' => 221, 'opcion' => 'PRODUCCIÓN DE LÁCTEOS'],
            ['id_question' => 221, 'opcion' => 'PRODUCCIÓN DE ACEITES'],
            ['id_question' => 221, 'opcion' => 'FABRICACIÓN DE ARTESANÍAS O MANUALIDADES'],
            ['id_question' => 221, 'opcion' => 'DISEÑO DE PRENDAS DE VESTIR'],
            ['id_question' => 221, 'opcion' => 'GASTRONOMÍA - ALIMENTOS NO EMPACADOS'],
            ['id_question' => 221, 'opcion' => 'OTROS ALIMENTOS EMPACADOS'],
            ['id_question' => 221, 'opcion' => 'FABRICACIÓN DE MUEBLES'],
            ['id_question' => 221, 'opcion' => 'FABRICACIÓN DEL PRODUCTO PARA EL CUIDADO'],
            ['id_question' => 221, 'opcion' => 'PAISAJISMO - ORNATO'],
            ['id_question' => 221, 'opcion' => 'PRODUCCIÓN DE LICORES'],
            ['id_question' => 221, 'opcion' => 'OTROS PRODUCTOS DE AGROINDUSTRIA'],
            ['id_question' => 221, 'opcion' => 'OTROS PRODUCTOS DEL SECTOR SECUNDARIO'],
            // Terciario
            ['id_question' => 222, 'opcion' => 'SERVICIOS INMOBILIARIOS'],
            ['id_question' => 222, 'opcion' => 'CONTRUCCIÓN, PINTURA Y TERMINADOS'],
            ['id_question' => 222, 'opcion' => 'SERVICIOS DE SALUD'],
            ['id_question' => 222, 'opcion' => 'SERVICIOS DE BELLEZA Y EL CUIDADO'],
            ['id_question' => 222, 'opcion' => 'COMUNICACIONES'],
            ['id_question' => 222, 'opcion' => 'SERVICIOS DE RECREACIÓN'],
            ['id_question' => 222, 'opcion' => 'ORGANIZACIÓN DE EVENTOS'],
            ['id_question' => 222, 'opcion' => 'SERVICIOS EDUCATIVOS'],
            ['id_question' => 222, 'opcion' => 'SEGURIDAD PRIVADA'],
            ['id_question' => 222, 'opcion' => 'SERVICIOS TURÍSTICOS'],
            ['id_question' => 222, 'opcion' => 'SERVICIOS DE MANTENIMIENTO'],
            ['id_question' => 222, 'opcion' => 'SERVICIOS DE ASEO'],
            ['id_question' => 222, 'opcion' => 'SERVICIOS DE TRANSPORTE'],
            ['id_question' => 222, 'opcion' => 'OTRAS ACTIVIDADES DEL SECTOR TERCIARIO'],
            // Su empresa cuenta con maquinaria
            ['id_question' => 224, 'opcion' => 'SI'],
            ['id_question' => 224, 'opcion' => 'NO'],
            // Cuantos empleos directos genera
            ['id_question' => 226, 'opcion' => 'NINGUNO'],
            ['id_question' => 226, 'opcion' => '1'],
            ['id_question' => 226, 'opcion' => 'DE 2 A 3'],
            ['id_question' => 226, 'opcion' => 'DE 4 A 6'],
            ['id_question' => 226, 'opcion' => 'DE 7 A 10'],
            ['id_question' => 226, 'opcion' => 'MÁS DE 10'],
            // Los empleos que genera son
            ['id_question' => 227, 'opcion' => 'INFORMALES'],
            ['id_question' => 227, 'opcion' => 'FORMALES'],
            // El canal de distribucion de su empresa es
            ['id_question' => 229, 'opcion' => 'DIRECTO'],
            ['id_question' => 229, 'opcion' => 'CON 1 INTERMEDIARIO'],
            ['id_question' => 229, 'opcion' => 'CON 2 INTERMEDIARIOS'],
            ['id_question' => 229, 'opcion' => 'CON 3 O MÁS INTERMEDIARIO'],
            // Que medios publicitarios usa
            ['id_question' => 230, 'opcion' => 'PUBLICIDAD IMPRESA'],
            ['id_question' => 230, 'opcion' => 'PUBLICIDAD EN LÍNEA (INTERNET)'],
            ['id_question' => 230, 'opcion' => 'PUBLICIDAD EXTERIOR (AVISOS)'],
            ['id_question' => 230, 'opcion' => 'RADIO'],
            ['id_question' => 230, 'opcion' => 'VOZ A VOZ'],
            ['id_question' => 230, 'opcion' => 'TELEVISIÓN'],
            ['id_question' => 230, 'opcion' => 'NINGUNO'],
            // Que herramientas publicitarias usa
            ['id_question' => 231, 'opcion' => 'TARJETAS DE PRESENTACIÓN'],
            ['id_question' => 231, 'opcion' => 'SEPARADOR DE LIBROS'],
            ['id_question' => 231, 'opcion' => 'VOLANTES'],
            ['id_question' => 231, 'opcion' => 'AFICHES'],
            ['id_question' => 231, 'opcion' => 'FICHAS GRÁFICAS DIGITALES'],
            ['id_question' => 231, 'opcion' => 'VIDEOS'],
            ['id_question' => 231, 'opcion' => 'NINGUNO'],
            // Su empresa cuenta con registro mercantil
            ['id_question' => 232, 'opcion' => 'SI'],
            ['id_question' => 232, 'opcion' => 'NO'],
            // Su empresa cuenta con RUT
            ['id_question' => 234, 'opcion' => 'SI'],
            ['id_question' => 234, 'opcion' => 'NO'],
            // Se encuentra al día con el pago de impuesto
            ['id_question' => 235, 'opcion' => 'SI'],
            ['id_question' => 235, 'opcion' => 'NO'],
            // Cual es su promedio de ventas mensuales
            ['id_question' => 236, 'opcion' => 'MENOS DE 1 SMLMV'],
            ['id_question' => 236, 'opcion' => 'ENTRE 1 Y 2 SMLMV'],
            ['id_question' => 236, 'opcion' => 'ENTRE 2 Y 3 SMLMV'],
            ['id_question' => 236, 'opcion' => 'ENTRE 3 Y 6 SMLMV'],
            ['id_question' => 236, 'opcion' => 'ENTRE 6 Y 10 SMLMV'],
            ['id_question' => 236, 'opcion' => 'MÁS DE 10 SMLMV'],
            // Ha recibido apoyo de entidades
            ['id_question' => 237, 'opcion' => 'SI'],
            ['id_question' => 237, 'opcion' => 'NO'],
            // Entidades de las cuales ha recibido apoyo
            ['id_question' => 238, 'opcion' => 'SECRETARÍA DE DESARROLLO ECONÓMICO Y COMPETITIVIDAD'],
            ['id_question' => 238, 'opcion' => 'OTRA DEPENDENCIA DE LA ALCALDÍA MUNICIPAL DE FUSAGASUGÁ'],
            ['id_question' => 238, 'opcion' => 'CÁMARA DE COMERCIO DE BOGOTÁ'],
            ['id_question' => 238, 'opcion' => 'GOBERNACIÓN DE CUNDINAMARCA'],
            ['id_question' => 238, 'opcion' => 'ENTIDAD FINANCIERA'],
            ['id_question' => 238, 'opcion' => 'SENA'],
            ['id_question' => 238, 'opcion' => 'OTRO'],
            // Pertenece a algun gremio
            ['id_question' => 240, 'opcion' => 'SI'],
            ['id_question' => 240, 'opcion' => 'NO'],
            // Su empresa ha realizado alguna exportacion
            ['id_question' => 242, 'opcion' => 'SI'],
            ['id_question' => 242, 'opcion' => 'NO'],
        ]);

        // Preguntas de gestión del riesgo
        SelectsModel::insert([
            // Parentesco con el jefe del hogar
            ['id_question' => 245, 'opcion' => 'JEFE DE HOGAR'],
            ['id_question' => 245, 'opcion' => 'ESPOSO(A)'],
            ['id_question' => 245, 'opcion' => 'HIJO(A)'],
            ['id_question' => 245, 'opcion' => 'PRIMO(A)'],
            ['id_question' => 245, 'opcion' => 'TIO(A)'],
            ['id_question' => 245, 'opcion' => 'NIETO(A)'],
            ['id_question' => 245, 'opcion' => 'SUEGRO(A)'],
            ['id_question' => 245, 'opcion' => 'YERNO/NUERA'],
            // Ubicación del inmueble
            ['id_question' => 246, 'opcion' => 'URBANO'],
            ['id_question' => 246, 'opcion' => 'RURAL'],
            // Propiedad del inmueble
            ['id_question' => 247, 'opcion' => 'PROPIA'],
            ['id_question' => 247, 'opcion' => 'ARRIENDO'],
            // Estado del inmueble
            ['id_question' => 248, 'opcion' => 'HABITABLE'],
            ['id_question' => 248, 'opcion' => 'NO HABITABLE'],
            ['id_question' => 248, 'opcion' => 'DESTRUIDA'],
            //AHE. ALIM
            ['id_question' => 249, 'opcion' => 'SI'],
            ['id_question' => 249, 'opcion' => 'NO'],
            //AHE. NO ALIM
            ['id_question' => 250, 'opcion' => 'SI'],
            ['id_question' => 250, 'opcion' => 'NO'],
            //MAT. REHAB. DE VIVIENDA
            ['id_question' => 251, 'opcion' => 'SI'],
            ['id_question' => 251, 'opcion' => 'NO'],
            //SUB. ARRIENDO
            ['id_question' => 252, 'opcion' => 'SI'],
            ['id_question' => 252, 'opcion' => 'NO'],
            //ANIMALES DOMESTICOS
            ['id_question' => 253, 'opcion' => 'SI'],
            ['id_question' => 253, 'opcion' => 'NO'],
        ]);

        // Preguntas de turismo
        SelectsModel::insert([
            // Tipo de ciudadano
            ['id_question' => 256, 'opcion' => 'PRESTADOR DE SERVICIOS TURISTICOS'],
            ['id_question' => 256, 'opcion' => 'TURISTA'],
            // Registro nacional de turismo activo
            ['id_question' => 257, 'opcion' => 'SI'],
            ['id_question' => 257, 'opcion' => 'NO'],
            // Tipo de servicio turistico
            ['id_question' => 258, 'opcion' => 'FINCA TURISTICA (ALOJAMIENTO RURAL)'],
            ['id_question' => 258, 'opcion' => 'ESTABLECIMIENTO DE ALOJAMIENTO Y HOSPEDAJE (HOTEL)'],
            ['id_question' => 258, 'opcion' => 'OTRO TIPO DE VIVIENDA TURÍSTICA'],
            ['id_question' => 258, 'opcion' => 'CENTRO VACACIONAL'],
            ['id_question' => 258, 'opcion' => 'GUÍA DE TURISMO'],
            ['id_question' => 258, 'opcion' => 'AGENCIA DE VIAJES Y TURISMO'],
            ['id_question' => 258, 'opcion' => 'OTRO'],
            // Motivo de viaje
            ['id_question' => 265, 'opcion' => 'NEGOCIOS'],
            ['id_question' => 265, 'opcion' => 'TRABAJO'],
            ['id_question' => 265, 'opcion' => 'RECREACIÓN'],
            ['id_question' => 265, 'opcion' => 'SALUD'],
            ['id_question' => 265, 'opcion' => 'OTRO'],
            // En donde se esta hospedando
            ['id_question' => 267, 'opcion' => 'FINCA TURISTICA (ALOJAMIENTO RURAL)'],
            ['id_question' => 267, 'opcion' => 'ESTABLECIMIENTO DE ALOJAMIENTO Y HOSPEDAJE (HOTEL)'],
            ['id_question' => 267, 'opcion' => 'OTRO TIPO DE VIVIENDA TURÍSTICA (AIR BNB, HOSTEL, ECT)'],
            ['id_question' => 267, 'opcion' => 'CENTRO VACACIONAL'],
            ['id_question' => 267, 'opcion' => 'CASA DE UN FAMILIAR O AMIGO'],
            ['id_question' => 267, 'opcion' => 'OTRO'],
        ]);
    }
}
