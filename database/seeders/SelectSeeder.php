<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SelectsModel;

class SelectSeeder extends Seeder
{
    
    // ['id_question' => , 'texto_selects' => ''],
    
    public function run(): void
    {
        SelectsModel::truncate();

        // Preguntas generales
        SelectsModel::insert([
            // Información personal    
                // Tipo de documento
                ['id_question' => 2, 'texto_selects' => 'RC - REGISTRO CIVIL',],
                ['id_question' => 2, 'texto_selects' => 'TI - TARJETA DE IDENTIDAD',],
                ['id_question' => 2, 'texto_selects' => 'CC - CÉDULA DE CIUDADANÍA',],
                ['id_question' => 2, 'texto_selects' => 'CC - CÉDULA DE EXTRANJERÍA',],
                ['id_question' => 2, 'texto_selects' => 'PS - PASAPORTE',],
                ['id_question' => 2, 'texto_selects' => 'MS - MENOR SIN IDENTIFICACIÓN',],
                ['id_question' => 2, 'texto_selects' => 'AS - ADULTO SIN IDENTIFICACIÓN',],
                // Rango de edad
                ['id_question' => 9, 'texto_selects' => 'JÓVEN: 18 - 28 AÑOS'],
                ['id_question' => 9, 'texto_selects' => 'ADULTEZ: 29 - 59 AÑOS'],
                ['id_question' => 9, 'texto_selects' => 'PERSONA MAYOR: 60 - 79 AÑOS'],
                ['id_question' => 9, 'texto_selects' => 'OCTOGENARIO: 80 - 89 AÑOS'],
                ['id_question' => 9, 'texto_selects' => 'NONAGENARIO: 90 - 99 AÑOS'],
                ['id_question' => 9, 'texto_selects' => 'CENTENARIOS: MÁS DE 100 AÑOS'],
                ['id_question' => 9, 'texto_selects' => 'PREFIERO NO DECIRLO'],
                // Genero
                ['id_question' => 10, 'texto_selects' => 'MASCULINO'],
                ['id_question' => 10, 'texto_selects' => 'FEMENINO'],
                ['id_question' => 10, 'texto_selects' => 'INTERSEXUAL'],
                ['id_question' => 10, 'texto_selects' => 'PREFIERO NO DECIRLO'],
                // Identidad de genero
                ['id_question' => 11, 'texto_selects' => 'MASCULINO'],
                ['id_question' => 11, 'texto_selects' => 'FEMENINO'],
                ['id_question' => 11, 'texto_selects' => 'MUJER TRANSGÉNERO'],
                ['id_question' => 11, 'texto_selects' => 'HOMBRE TRANSGÉNERO'],
                ['id_question' => 11, 'texto_selects' => 'PREFIERO NO DECIRLO'],
                // Orientación sexual
                ['id_question' => 12, 'texto_selects' => 'HETEROSEXUAL'],
                ['id_question' => 12, 'texto_selects' => 'HOMOSEXUAL'],
                ['id_question' => 12, 'texto_selects' => 'BISEXUAL'],
                ['id_question' => 12, 'texto_selects' => 'PREFIERO NO DECIRLO'],
                // Etnia o comunidad
                ['id_question' => 13, 'texto_selects' => 'PUEBLO INDÍGENA'],
                ['id_question' => 13, 'texto_selects' => 'PUEBLO NEGRO'],
                ['id_question' => 13, 'texto_selects' => 'PUEBLO AFROCOLOMBIANO'],
                ['id_question' => 13, 'texto_selects' => 'PUEBLO RAIZAL'],
                ['id_question' => 13, 'texto_selects' => 'PUEBLO PALENQUERO'],
                ['id_question' => 13, 'texto_selects' => 'PUEBLO BROM O GITANO'],
                ['id_question' => 13, 'texto_selects' => 'COMUNIDAD CAMPESINA'],
                ['id_question' => 13, 'texto_selects' => 'PREFIERO NO DECIRLO'],
                // Estado civil
                ['id_question' => 15, 'texto_selects' => 'SOLTERO(A)'],
                ['id_question' => 15, 'texto_selects' => 'CASADO(A)'],
                ['id_question' => 15, 'texto_selects' => 'VIUDO(A)'],
                ['id_question' => 15, 'texto_selects' => 'SEPARADO(A)'],
                ['id_question' => 15, 'texto_selects' => 'UNIÓN LIBRE'],
                // Situación de vulnerabilidad
                ['id_question' => 16, 'texto_selects' => 'MADRE CABEZA DE FAMILIA'],
                ['id_question' => 16, 'texto_selects' => 'DISCAPACIDAD'],
                ['id_question' => 16, 'texto_selects' => 'TRABAJO SEXUAL'],
                ['id_question' => 16, 'texto_selects' => 'POBLACIÓN MIGRANTE'],
                ['id_question' => 16, 'texto_selects' => 'VICTIMA DEL CONFLICTO ARMADO'],
                ['id_question' => 16, 'texto_selects' => 'OTROS'],
                // Nivel educativo
                ['id_question' => 17, 'texto_selects' => 'SIN ESCOLARIDAD'],
                ['id_question' => 17, 'texto_selects' => 'PRIMARIA'],
                ['id_question' => 17, 'texto_selects' => 'SECUNDARIA (BACHILLERATO)'],
                ['id_question' => 17, 'texto_selects' => 'ESTUDIANTE UNIVERSITARIO'],
                ['id_question' => 17, 'texto_selects' => 'PROFESIONAL UNIVERSITARIO'],
                ['id_question' => 17, 'texto_selects' => 'POSTGRADO (ESPECIALIZACIÓN, MAESTRÍA Y DOCTORADO)'],
                ['id_question' => 17, 'texto_selects' => 'PREFIERO NO DECIRLO'],

            // Información familiar
                ['id_question' => 26, 'texto_selects' => 'MAMÁ'],
                ['id_question' => 26, 'texto_selects' => 'PAPÁ'],
                ['id_question' => 26, 'texto_selects' => 'HERMANOS(AS)'],
                ['id_question' => 26, 'texto_selects' => 'HIJOS(AS)'],
                ['id_question' => 26, 'texto_selects' => 'TÍOS(AS)'],
                ['id_question' => 26, 'texto_selects' => 'ABUELOS(AS)'],
                ['id_question' => 26, 'texto_selects' => 'PAREJA'],
                ['id_question' => 26, 'texto_selects' => 'NINGUNO'],
                ['id_question' => 26, 'texto_selects' => 'OTRO ¿CUÁL?'],

            // Información de salud
                // Se encuentra afiliado al sistema de salud
                ['id_question' => 33, 'texto_selects' => 'SI'],
                ['id_question' => 33, 'texto_selects' => 'NO'],
                // Dependiente de cuidado
                ['id_question' => 35, 'texto_selects' => 'SI'],
                ['id_question' => 35, 'texto_selects' => 'NO'],
                // Presenta alguna discapacidad
                ['id_question' => 36, 'texto_selects' => 'SI'],
                ['id_question' => 36, 'texto_selects' => 'NO'],
                // Cual discapacidad padece
                ['id_question' => 37, 'texto_selects' => 'DISCAPACIDAD SENSORIAL VISUAL, SENSORIAL AUDITIVA'],
                ['id_question' => 37, 'texto_selects' => 'DISCAPACIDAD INTELECTUAL/COGNITIVA'],
                ['id_question' => 37, 'texto_selects' => 'DISCAPACIDAD MENTAL PSICOSOCIAL'],
                ['id_question' => 37, 'texto_selects' => 'DISCAPACIDAD SISTÉMICA'],
                ['id_question' => 37, 'texto_selects' => 'DISCAPACIDAD MÚLTIPLE'],
                // Problemas de salud
                ['id_question' => 38, 'texto_selects' => 'SISTEMA DIGESTIVO (DIARREA, VÓMITO)'],
                ['id_question' => 38, 'texto_selects' => 'SISTEMA RESPIRATORIO (TOS, DIFICULTAD RESPIRATORIA)'],
                ['id_question' => 38, 'texto_selects' => 'AFECCIONES DE PIEL (CARANCHOS, LADILLAS, PIOJOS)'],
                ['id_question' => 38, 'texto_selects' => 'AFECCIONES DE LOS OJOS (ARDOR Y OJOS ROJOS)'],
                ['id_question' => 38, 'texto_selects' => 'AFECCIONES VÍAS URINARIAS (ARDOR PARA ORINAR)'],
                ['id_question' => 38, 'texto_selects' => 'INFECCIONES DE TRANSMISIÓN SEXUAL'],
                ['id_question' => 38, 'texto_selects' => 'DEPRESIÓN U OTRA ENFERMEDAD MENTAL'],
                ['id_question' => 38, 'texto_selects' => 'CONVULSIONES'],
                ['id_question' => 38, 'texto_selects' => 'LESION INTENCIONAL POR PARTE DE TERCEROS'],
                ['id_question' => 38, 'texto_selects' => 'HERIDAS CAUSADAS POR VEHÍCULO AUTOMOTOR'],
                ['id_question' => 38, 'texto_selects' => 'MOLESTIAS DENTALES'],
                ['id_question' => 38, 'texto_selects' => 'INTOXICACIÓN O SOBREDOSIS POR CONSUMO DE SPA'],
                ['id_question' => 38, 'texto_selects' => 'NINGUNA DE LAS ANTERIORES'],
                // La enfermedad se encuentra en tratamiento
                ['id_question' => 40, 'texto_selects' => 'SI'],
                ['id_question' => 40, 'texto_selects' => 'NO'],
                // Haz consumido alguna sustancia psicoactiva
                ['id_question' => 42, 'texto_selects' => 'SI'],
                ['id_question' => 42, 'texto_selects' => 'NO'],
                // Cual sustancia consume
                ['id_question' => 43, 'texto_selects' => 'BAZUCO'],
                ['id_question' => 43, 'texto_selects' => 'MARIHUANA'],
                ['id_question' => 43, 'texto_selects' => 'CIGARRILLO'],
                ['id_question' => 43, 'texto_selects' => 'COCAÍNA'],
                ['id_question' => 43, 'texto_selects' => 'PEPAS'],
                ['id_question' => 43, 'texto_selects' => 'ALCOHOL (CHAMBER O ETÍLICO)'],
                ['id_question' => 43, 'texto_selects' => 'HEROÍNA'],
                ['id_question' => 43, 'texto_selects' => 'INHALANTES (SACOL, PEGANTE, BÓXER, ETC)'],
                ['id_question' => 43, 'texto_selects' => 'BEBIDAS ALCOHÓLICAS LEGALES'],
                ['id_question' => 43, 'texto_selects' => 'MADUROS, PISTOLOS, OTROS'],
                ['id_question' => 43, 'texto_selects' => 'OTRO ¿CUÁL?'],
                // Frecuencia de consumo de sustancias
                ['id_question' => 44, 'texto_selects' => '1 A 3 VECES AL DÍA'],
                ['id_question' => 44, 'texto_selects' => 'MÁS DE 3 VECES AL DIA'],
                ['id_question' => 44, 'texto_selects' => 'SEMANAL'],
                ['id_question' => 44, 'texto_selects' => 'QUINCENAL'],
                ['id_question' => 44, 'texto_selects' => 'MENSUAL'],
                ['id_question' => 44, 'texto_selects' => 'ANUAL'],
                // Ha recibido tratamiento para el consumo de SPA
                ['id_question' => 45, 'texto_selects' => 'SI'],
                ['id_question' => 45, 'texto_selects' => 'NO'],
                // Preguntas de la condición física y mental
                ['id_question' => 48, 'texto_selects' => 'SIN DIFICULTAD'],
                ['id_question' => 48, 'texto_selects' => 'CON DIFICULTAD'],
                ['id_question' => 48, 'texto_selects' => 'NO PUEDE HACERLO'],
                ['id_question' => 49, 'texto_selects' => 'SIN DIFICULTAD'],
                ['id_question' => 49, 'texto_selects' => 'CON DIFICULTAD'],
                ['id_question' => 49, 'texto_selects' => 'NO PUEDE HACERLO'],
                ['id_question' => 50, 'texto_selects' => 'SIN DIFICULTAD'],
                ['id_question' => 50, 'texto_selects' => 'CON DIFICULTAD'],
                ['id_question' => 50, 'texto_selects' => 'NO PUEDE HACERLO'],
                ['id_question' => 51, 'texto_selects' => 'SIN DIFICULTAD'],
                ['id_question' => 51, 'texto_selects' => 'CON DIFICULTAD'],
                ['id_question' => 51, 'texto_selects' => 'NO PUEDE HACERLO'],
                ['id_question' => 52, 'texto_selects' => 'SIN DIFICULTAD'],
                ['id_question' => 52, 'texto_selects' => 'CON DIFICULTAD'],
                ['id_question' => 52, 'texto_selects' => 'NO PUEDE HACERLO'],
                ['id_question' => 53, 'texto_selects' => 'SIN DIFICULTAD'],
                ['id_question' => 53, 'texto_selects' => 'CON DIFICULTAD'],
                ['id_question' => 53, 'texto_selects' => 'NO PUEDE HACERLO'],
                ['id_question' => 54, 'texto_selects' => 'SIN DIFICULTAD'],
                ['id_question' => 54, 'texto_selects' => 'CON DIFICULTAD'],
                ['id_question' => 54, 'texto_selects' => 'NO PUEDE HACERLO'],
                ['id_question' => 55, 'texto_selects' => 'SIN DIFICULTAD'],
                ['id_question' => 55, 'texto_selects' => 'CON DIFICULTAD'],
                ['id_question' => 55, 'texto_selects' => 'NO PUEDE HACERLO'],
                ['id_question' => 56, 'texto_selects' => 'SIN DIFICULTAD'],
                ['id_question' => 56, 'texto_selects' => 'CON DIFICULTAD'],
                ['id_question' => 56, 'texto_selects' => 'NO PUEDE HACERLO'],
                // Utiliza metodo de planificación familiar
                ['id_question' => 57, 'texto_selects' => 'SI'],
                ['id_question' => 57, 'texto_selects' => 'NO'],
                // Ha ido al médico en los últimos 6 meses
                ['id_question' => 59, 'texto_selects' => 'SI'],
                ['id_question' => 59, 'texto_selects' => 'NO'],
                // Hay mujeres gestantes en el hogar
                ['id_question' => 61, 'texto_selects' => 'SI'],
                ['id_question' => 61, 'texto_selects' => 'NO'],
                // Ha asistido a controles prenatales
                ['id_question' => 65, 'texto_selects' => 'SI'],
                ['id_question' => 65, 'texto_selects' => 'NO'],
                // Ha presentado episodios de ansiedad
                ['id_question' => 66, 'texto_selects' => 'SI'],
                ['id_question' => 66, 'texto_selects' => 'NO'],
                // Ha presentado episodios de depresion
                ['id_question' => 67, 'texto_selects' => 'SI'],
                ['id_question' => 67, 'texto_selects' => 'NO'],


            // Información de vivienda
                ['id_question' => 71, 'texto_selects' => 'MENOS DE UN AÑO'],
                ['id_question' => 71, 'texto_selects' => 'ENTRE 1 Y 3 AÑOS'],
                ['id_question' => 71, 'texto_selects' => 'MÁS DE 3 AÑOS'],

            // Información economica
            ['id_question' => 75, 'texto_selects' => 'SI'],
            ['id_question' => 75, 'texto_selects' => 'NO'],

        ]);

        // Preguntas de secretaría de planeación
        SelectsModel::insert([
            // Como califica la atención recibida
            ['id_question' => 102, 'texto_selects' => 'EXCELENTE'],
            ['id_question' => 102, 'texto_selects' => 'BUENO'],
            ['id_question' => 102, 'texto_selects' => 'REGULAR'],
            ['id_question' => 102, 'texto_selects' => 'MALO'],
            // Como califica el tiempo de respuesta
            ['id_question' => 103, 'texto_selects' => 'EXCELENTE'],
            ['id_question' => 103, 'texto_selects' => 'BUENO'],
            ['id_question' => 103, 'texto_selects' => 'REGULAR'],
            ['id_question' => 103, 'texto_selects' => 'MALO'],
            // Como califica las instalaciones
            ['id_question' => 104, 'texto_selects' => 'EXCELENTE'],
            ['id_question' => 104, 'texto_selects' => 'BUENO'],
            ['id_question' => 104, 'texto_selects' => 'REGULAR'],
            ['id_question' => 104, 'texto_selects' => 'MALO'],
            // Como califica la solución dada
            ['id_question' => 105, 'texto_selects' => 'EXCELENTE'],
            ['id_question' => 105, 'texto_selects' => 'BUENO'],
            ['id_question' => 105, 'texto_selects' => 'REGULAR'],
            ['id_question' => 105, 'texto_selects' => 'MALO'],
            // Como califica el conocimiento del funcionario
            ['id_question' => 106, 'texto_selects' => 'EXCELENTE'],
            ['id_question' => 106, 'texto_selects' => 'BUENO'],
            ['id_question' => 106, 'texto_selects' => 'REGULAR'],
            ['id_question' => 106, 'texto_selects' => 'MALO'],
            // La información fue clara
            ['id_question' => 107, 'texto_selects' => 'SI'],
            ['id_question' => 107, 'texto_selects' => 'NO'],
        ]);

        // Preguntas de secretaría administrativa
        SelectsModel::insert([
            // Departamento de residencia
            ['id_question' => 109, 'texto_selects' => 'AMAZONAS'],
            ['id_question' => 109, 'texto_selects' => 'ANTIOQUIA'],
            ['id_question' => 109, 'texto_selects' => 'ARAUCA'],
            ['id_question' => 109, 'texto_selects' => 'ATLÁNTICO'],
            ['id_question' => 109, 'texto_selects' => 'BOLIVAR'],
            ['id_question' => 109, 'texto_selects' => 'BOYACÁ'],
            ['id_question' => 109, 'texto_selects' => 'CALDAS'],
            ['id_question' => 109, 'texto_selects' => 'CAQUETÁ'],
            ['id_question' => 109, 'texto_selects' => 'CASANARE'],
            ['id_question' => 109, 'texto_selects' => 'CAUCA'],
            ['id_question' => 109, 'texto_selects' => 'CESAR'],
            ['id_question' => 109, 'texto_selects' => 'CHOCÓ'],
            ['id_question' => 109, 'texto_selects' => 'CÓRDOBA'],
            ['id_question' => 109, 'texto_selects' => 'CUNDINAMARCA'],
            ['id_question' => 109, 'texto_selects' => 'GUAINÍA'],
            ['id_question' => 109, 'texto_selects' => 'GUAVIARE'],
            ['id_question' => 109, 'texto_selects' => 'HUILA'],
            ['id_question' => 109, 'texto_selects' => 'LA GUAJIRA'],
            ['id_question' => 109, 'texto_selects' => 'MAGDALENA'],
            ['id_question' => 109, 'texto_selects' => 'META'],
            ['id_question' => 109, 'texto_selects' => 'NARIÑO'],
            ['id_question' => 109, 'texto_selects' => 'NORTE DE SANTANDER'],
            ['id_question' => 109, 'texto_selects' => 'PUTUMAYO'],
            ['id_question' => 109, 'texto_selects' => 'QUINDÍO'],
            ['id_question' => 109, 'texto_selects' => 'RISARALDA'],
            ['id_question' => 109, 'texto_selects' => 'SAN ANDRÉS Y PROVIDENCIA'],
            ['id_question' => 109, 'texto_selects' => 'SANTANDER'],
            ['id_question' => 109, 'texto_selects' => 'SUCRE'],
            ['id_question' => 109, 'texto_selects' => 'TOLIMA'],
            ['id_question' => 109, 'texto_selects' => 'VALLE DEL CAUCA'],
            ['id_question' => 109, 'texto_selects' => 'VAUPÉS'],
            ['id_question' => 109, 'texto_selects' => 'VICHADA'],
            // Territorio de residencia
            ['id_question' => 110, 'texto_selects' => 'URBANO'],
            ['id_question' => 110, 'texto_selects' => 'RURAL'],
            ['id_question' => 110, 'texto_selects' => 'CONSEJO COMUNITARIO'],
            ['id_question' => 110, 'texto_selects' => 'TERRITORIO INDIGENA'],
            // Condición de discapacidad
            ['id_question' => 111, 'texto_selects' => 'SI'],
            ['id_question' => 111, 'texto_selects' => 'NO'],
            // Que discapacidad
            ['id_question' => 112, 'texto_selects' => 'FÍSICA'],
            ['id_question' => 112, 'texto_selects' => 'SENSORIAL VISUAL'],
            ['id_question' => 112, 'texto_selects' => 'SENSORIAL AUDITIVA'],
            ['id_question' => 112, 'texto_selects' => 'SORDOCEGUERA'],
            ['id_question' => 112, 'texto_selects' => 'INTELECTUAL COGNITIVA'],
            ['id_question' => 112, 'texto_selects' => 'MENTAL PSICOSOCIAL'],
            ['id_question' => 112, 'texto_selects' => 'MÚLTIPLE'],
            ['id_question' => 112, 'texto_selects' => 'PREFIERO NO DECIRLO'],
            // Tipo de organización
            ['id_question' => 113, 'texto_selects' => 'COMUNIDAD INTERNACIONAL'],
            ['id_question' => 113, 'texto_selects' => 'CONSULADO/EMBAJADA'],
            ['id_question' => 113, 'texto_selects' => 'ENTIDAD TERRITORIAL'],
            ['id_question' => 113, 'texto_selects' => 'ESTUDIANTES Y ACADEMIA'],
            ['id_question' => 113, 'texto_selects' => 'GREMIOS ECONÓMICOS'],
            ['id_question' => 113, 'texto_selects' => 'IGLESIA'],
            ['id_question' => 113, 'texto_selects' => 'MEDIOS Y PLATAFORMAS DE COMUNICACIÓN'],
            ['id_question' => 113, 'texto_selects' => 'ORGANISMOS DE CONTROL'],
            ['id_question' => 113, 'texto_selects' => 'ORGANISMOS NACIONALES Y DE COOPERACIÓN'],
            ['id_question' => 113, 'texto_selects' => 'ORGANISMOS DE VÍCTIMAS'],
            ['id_question' => 113, 'texto_selects' => 'ORGANIZACION SOCIAL Y DE DDHH'],
            ['id_question' => 113, 'texto_selects' => 'OTRAS INSTITUCIONES DEL ESTADO'],
            ['id_question' => 113, 'texto_selects' => 'PARTIDOS POLÍTICOS'],
            ['id_question' => 113, 'texto_selects' => 'SINDICATOS'],
            ['id_question' => 113, 'texto_selects' => 'NINGUNA'],
            // Puntos de atención
            ['id_question' => 114, 'texto_selects' => 'SI'],
            ['id_question' => 114, 'texto_selects' => 'NO'],
            // Conocimiento de canal de comunicación
            ['id_question' => 115, 'texto_selects' => 'PÁGINA WEB'],
            ['id_question' => 115, 'texto_selects' => 'CORREO ELECTRÓNICO'],
            ['id_question' => 115, 'texto_selects' => 'WHATSAPP'],
            ['id_question' => 115, 'texto_selects' => 'NINGUNO'],
            ['id_question' => 115, 'texto_selects' => 'TODAS LAS ANTERIORES'],
            // Canal de comunicación
            ['id_question' => 116, 'texto_selects' => 'ESCRITORIO (VENTALLA ÚNICA)'],
            ['id_question' => 116, 'texto_selects' => 'PRESENCIAL'],
            ['id_question' => 116, 'texto_selects' => 'TELEFÓNICO (MÓVIL-FIJO)'],
            ['id_question' => 116, 'texto_selects' => 'VIRTUAL (INTERNET, REDES SOCIALES, WHATSAPP)'],
            // Razón de consulta
            ['id_question' => 117, 'texto_selects' => 'PETICIÓN, QUEJA, RECLAMO, SUGERENCIA, DENUNCIA Y FELICITACIÓN'],
            ['id_question' => 117, 'texto_selects' => 'OFERTA INSTITUCIONAL'],
            ['id_question' => 117, 'texto_selects' => 'SOLICITUD DE TRAMITES'],
            ['id_question' => 117, 'texto_selects' => 'NOTIFICACIONES'],
            ['id_question' => 117, 'texto_selects' => 'EVENTOS DE CAPACITACION Y FORMACIÓN VIRTUAL'],
            ['id_question' => 117, 'texto_selects' => 'PARTICIPACIÓN CIUDADANA'],
            ['id_question' => 117, 'texto_selects' => 'ESTADO DEL PROCESO'],
            ['id_question' => 117, 'texto_selects' => 'CONOCIMIENTO'],
            ['id_question' => 117, 'texto_selects' => 'NO CONSULTO A LA ALCALDÍA'],
            // Uso de canales
            ['id_question' => 118, 'texto_selects' => 'DIARIAMENTE'],
            ['id_question' => 118, 'texto_selects' => 'QUINCENALMENTE'],
            ['id_question' => 118, 'texto_selects' => 'MENSUALMENTE'],
            ['id_question' => 118, 'texto_selects' => 'SEMANALMENTE'],
            ['id_question' => 118, 'texto_selects' => 'SEMESTRALMENTE'],
            ['id_question' => 118, 'texto_selects' => 'TRIMESTRALMENTE'],
            ['id_question' => 118, 'texto_selects' => 'NUNCA'],
            // Tema de gusto
            ['id_question' => 119, 'texto_selects' => 'CANALES DE INFORMACIÓN'],
            ['id_question' => 119, 'texto_selects' => 'OFERTA INSTITUCIONAL'],
            ['id_question' => 119, 'texto_selects' => 'CAPACITACIÓN Y FORMACIÓN'],
            ['id_question' => 119, 'texto_selects' => 'ATENCIÓN PSICOSOCIAL A VÍCTIMAS Y COMPARIENTES'],
        ]);

        // Preguntas de gestión social
        SelectsModel::insert([
            // Porta su documento en fisico
            ['id_question' => 124, 'texto_selects' => 'SI'],
            ['id_question' => 124, 'texto_selects' => 'NO'],
            // Ha recibido ayuda al encontrarse en la calle
            ['id_question' => 125, 'texto_selects' => 'SI'],
            ['id_question' => 125, 'texto_selects' => 'NO'],
            // Origen de ayudas
            ['id_question' => 126, 'texto_selects' => 'FAMILIA'],
            ['id_question' => 126, 'texto_selects' => 'INSTITUCIONES OFICIALES'],
            ['id_question' => 126, 'texto_selects' => 'AMIGOS(AS)'],
            ['id_question' => 126, 'texto_selects' => 'INSTITUCIONES PRIVADAS'],
            ['id_question' => 126, 'texto_selects' => 'INSTITUCIONES RELIGIOSAS'],
            ['id_question' => 126, 'texto_selects' => 'PERSONAS DEL COMÚN'],
            ['id_question' => 126, 'texto_selects' => 'OTRO'],
            // Cuales ayudas recibe
            ['id_question' => 127, 'texto_selects' => 'ECONÓMICA'],
            ['id_question' => 127, 'texto_selects' => 'ALIMENTACIÓN'],
            ['id_question' => 127, 'texto_selects' => 'ALOJAMIENTO'],
            ['id_question' => 127, 'texto_selects' => 'APOYO PSICOSOCIAL'],
            ['id_question' => 127, 'texto_selects' => 'FORMACIÓN Y CAPACITACIÓN'],
            ['id_question' => 127, 'texto_selects' => 'REHABILITACIÓN PARA CONSUMO DE SPA'],
            ['id_question' => 127, 'texto_selects' => 'SERVICIOS MÉDICOS'],
            ['id_question' => 127, 'texto_selects' => 'ASEO PERSONAL'],
            // Programas para la atención de habitantes de calle
            ['id_question' => 128, 'texto_selects' => 'SI'],
            ['id_question' => 128, 'texto_selects' => 'NO'],
            // Utiliza estos servicios
            ['id_question' => 129, 'texto_selects' => 'SI'],
            ['id_question' => 129, 'texto_selects' => 'NO'],
            // Por que no usa los servicios
            ['id_question' => 130, 'texto_selects' => 'NO SABE DÓNDE QUEDAN'],
            ['id_question' => 130, 'texto_selects' => 'QUEDAN LEJOS'],
            ['id_question' => 130, 'texto_selects' => 'LE SOLICITAN IDENTIFICACIÓN Y NO TIENE'],
            ['id_question' => 130, 'texto_selects' => 'NO LE PERMITEN INGRESAR LA PIPA'],
            ['id_question' => 130, 'texto_selects' => 'NO LE PERMITEN INGRESAR ELEMENTOS PERSONALES'],
            ['id_question' => 130, 'texto_selects' => 'NO LE PERMITEN INGRESAR MASCOTAS'],
            ['id_question' => 130, 'texto_selects' => 'NO LE GUSTA'],
            ['id_question' => 130, 'texto_selects' => 'OTRO'],
            // Tiempo de vivienda en las calles de fusagasugá
            ['id_question' => 134, 'texto_selects' => '6 MESES'],
            ['id_question' => 134, 'texto_selects' => 'ENTRE 1 Y 3 AÑOS'],
            ['id_question' => 134, 'texto_selects' => 'MÁS DE 3 AÑOS'],
            // Motivo de vivienda en la calle
            ['id_question' => 137, 'texto_selects' => 'CONSUMO DE SUSTANCIAS PSICOACTIVAS'],
            ['id_question' => 137, 'texto_selects' => 'POR GUSTO PERSONAL'],
            ['id_question' => 137, 'texto_selects' => 'AMENAZA O RIESGO PARA SU VIDA'],
            ['id_question' => 137, 'texto_selects' => 'INFLUENCIA DE OTRAS PERSONAS'],
            ['id_question' => 137, 'texto_selects' => 'DIFICULTADES ECONÓMICAS'],
            ['id_question' => 137, 'texto_selects' => 'FALTA DE TRABAJO'],
            ['id_question' => 137, 'texto_selects' => 'CONFLICTOS O DIFICULTADES FAMILIARES'],
            ['id_question' => 137, 'texto_selects' => 'VIOLENCIA DE GÉNERO O ABUSO SEXUAL'],
            ['id_question' => 137, 'texto_selects' => 'SIEMPRE HA VIVIDO EN LA CALLE'],
            ['id_question' => 137, 'texto_selects' => 'VÍCTIMA DEL CONFLICTO ARMADO O DESPLAZAMIENTO'],
            ['id_question' => 137, 'texto_selects' => 'OTRO'],
            // Motivo de continuación de vivienda en la calle
            ['id_question' => 138, 'texto_selects' => 'CONSUMO DE SUSTANCIAS PSICOACTIVAS'],
            ['id_question' => 138, 'texto_selects' => 'POR GUSTO PERSONAL'],
            ['id_question' => 138, 'texto_selects' => 'AMENAZA O RIESGO PARA SU VIDA'],
            ['id_question' => 138, 'texto_selects' => 'INFLUENCIA DE OTRAS PERSONAS'],
            ['id_question' => 138, 'texto_selects' => 'DIFICULTADES ECONÓMICAS'],
            ['id_question' => 138, 'texto_selects' => 'FALTA DE TRABAJO'],
            ['id_question' => 138, 'texto_selects' => 'CONFLICTOS O DIFICULTADES FAMILIARES'],
            ['id_question' => 138, 'texto_selects' => 'VIOLENCIA DE GÉNERO O ABUSO SEXUAL'],
            ['id_question' => 138, 'texto_selects' => 'SIEMPRE HA VIVIDO EN LA CALLE'],
            ['id_question' => 138, 'texto_selects' => 'VÍCTIMA DEL CONFLICTO ARMADO O DESPLAZAMIENTO'],
            ['id_question' => 138, 'texto_selects' => 'OTRO'],
            // Su seguridad en la calle se ha visto afectada
            ['id_question' => 139, 'texto_selects' => 'SI'],
            ['id_question' => 139, 'texto_selects' => 'NO'],
            // Por que
            ['id_question' => 140, 'texto_selects' => 'PERSECUCIÓN POR INTEGRANTES DE UNA OLLA'],
            ['id_question' => 140, 'texto_selects' => 'SER FORZADO A CUMPLIR CON TAREAS EN CONTRA DE SU VOLUNTAD'],
            ['id_question' => 140, 'texto_selects' => 'ABUSO POLICIAL'],
            ['id_question' => 140, 'texto_selects' => 'PROBLEMAS CON GRUPOS JUVENILES (BARRAS BRAVAS, ETC...)'],
            ['id_question' => 140, 'texto_selects' => 'PROBLEMAS CON LA COMUNIDAD'],
            ['id_question' => 140, 'texto_selects' => 'OTRO'],
            // Usted teme por su vida
            ['id_question' => 141, 'texto_selects' => 'SI'],
            ['id_question' => 141, 'texto_selects' => 'NO'],
            // En los ultimos 30 dias usted ha sido victima de
            ['id_question' => 142, 'texto_selects' => 'GOLPES'],
            ['id_question' => 142, 'texto_selects' => 'DISPAROS'],
            ['id_question' => 142, 'texto_selects' => 'HERIDA CON ARMA BLANCA'],
            ['id_question' => 142, 'texto_selects' => 'AMENAZAS'],
            ['id_question' => 142, 'texto_selects' => 'HURTO'],
            ['id_question' => 142, 'texto_selects' => 'INSULTOS'],
            ['id_question' => 142, 'texto_selects' => 'RECHAZO SOCIAL'],
            // Tenencia de la vivienda
            ['id_question' => 144, 'texto_selects' => 'PROPIA'],
            ['id_question' => 144, 'texto_selects' => 'EN ARRIENDO'],
            ['id_question' => 144, 'texto_selects' => 'FAMILIAR'],
            ['id_question' => 144, 'texto_selects' => 'A CARGO'],
            // Material predominante de los pisos
            ['id_question' => 146, 'texto_selects' => 'ALFOMBRA'],
            ['id_question' => 146, 'texto_selects' => 'CEMENTO'],
            ['id_question' => 146, 'texto_selects' => 'BALDOSA'],
            ['id_question' => 146, 'texto_selects' => 'MADERA'],
            ['id_question' => 146, 'texto_selects' => 'TIERRA/ARENA'],
            ['id_question' => 146, 'texto_selects' => 'OTRO'],
            // Equipamientos cercanos a residencia
            ['id_question' => 147, 'texto_selects' => 'MODALIDADES DE ATENCIÓN ICBF'],
            ['id_question' => 147, 'texto_selects' => 'CENTROS RECREATIVOS'],
            ['id_question' => 147, 'texto_selects' => 'CENTROS DE ATENCIÓN EN SALUD'],
            ['id_question' => 147, 'texto_selects' => 'CENTROS EDUCATIVOS'],
            ['id_question' => 147, 'texto_selects' => 'PARQUES INFANTILES'],
            ['id_question' => 147, 'texto_selects' => 'CENTROS CULTURALES'],
            ['id_question' => 147, 'texto_selects' => 'POLIDEPORTIVOS'],
            ['id_question' => 147, 'texto_selects' => 'PARQUES BIOSALUDABLES'],
            // Beneficiario de programas
            ['id_question' => 148, 'texto_selects' => 'RENTA JOVEN'],
            ['id_question' => 148, 'texto_selects' => 'CENTRO DÍA'],
            ['id_question' => 148, 'texto_selects' => 'COMEDORES COMUNITARIOS'],
            ['id_question' => 148, 'texto_selects' => 'BANCO DE ALIMENTOS'],
            ['id_question' => 148, 'texto_selects' => 'COLOMBIA MAYOR'],
            ['id_question' => 148, 'texto_selects' => 'RENTA CIUDADANA'],
            ['id_question' => 148, 'texto_selects' => 'OTRO'],
            // Participación en algún taller
            ['id_question' => 149, 'texto_selects' => 'SI'],
            ['id_question' => 149, 'texto_selects' => 'NO'],
            // Violencia intrafamiliar
            ['id_question' => 151, 'texto_selects' => 'SI'],
            ['id_question' => 151, 'texto_selects' => 'NO'],
            // Ha requerido alguna institución garante de derechos
            ['id_question' => 152, 'texto_selects' => 'COMISARÍA DE FAMILIA'],
            ['id_question' => 152, 'texto_selects' => 'DEFENSORÍA DEL PUEBLO'],
            ['id_question' => 152, 'texto_selects' => 'PERSONERÍA'],
            ['id_question' => 152, 'texto_selects' => 'PROCADURÍA'],
            ['id_question' => 152, 'texto_selects' => 'ICBF'],
            ['id_question' => 152, 'texto_selects' => 'POLICÍA'],
            ['id_question' => 152, 'texto_selects' => 'FISCALÍA'],
            ['id_question' => 152, 'texto_selects' => 'OTRO'],
            // Quien apoya en dificultades
            ['id_question' => 154, 'texto_selects' => 'FAMILIA'],
            ['id_question' => 154, 'texto_selects' => 'VECINOS'],
            ['id_question' => 154, 'texto_selects' => 'INSTITUCIÓN'],
            ['id_question' => 154, 'texto_selects' => 'OTRO'],
            // El apoyo esta representado en
            ['id_question' => 155, 'texto_selects' => 'RECURSOS ECONÓMICOS'],
            ['id_question' => 155, 'texto_selects' => 'VESTUARIO'],
            ['id_question' => 155, 'texto_selects' => 'ALIMENTACIÓN'],
            ['id_question' => 155, 'texto_selects' => 'OTRO'],
        ]);

        // Preguntas de secretaria de cultura
        SelectsModel::insert([
            ['id_question' => 162, 'texto_selects' => 'SI'],
            ['id_question' => 162, 'texto_selects' => 'NO'],
        ]);

        // Preguntas de desarrollo economico
        SelectsModel::insert([
            // Tipo de constitución
            ['id_question' => 175, 'texto_selects' => 'PERSONA NATURAL'],
            ['id_question' => 175, 'texto_selects' => 'PERSONA JURÍDICA'],
            // Tipo de sociedad
            ['id_question' => 176, 'texto_selects' => 'ENTIDAD SIN ÁNIMO DE LUCRO - ESAL'],
            ['id_question' => 176, 'texto_selects' => 'LIMITADA - LTDA'],
            ['id_question' => 176, 'texto_selects' => 'SOCIEDAD ANÓMICA S.A.'],
            ['id_question' => 176, 'texto_selects' => 'SOCIEDAD COLECTIVA'],
            ['id_question' => 176, 'texto_selects' => 'SOCIEDAD EN COMANDITA'],
            ['id_question' => 176, 'texto_selects' => 'SOCIEDAD EN COMANDITA POR ACCIONES'],
            ['id_question' => 176, 'texto_selects' => 'SOCIEDAD EN COMANDITA SIMPLE'],
            ['id_question' => 176, 'texto_selects' => 'SOCIEDAD POR ACCIONES SIMPLIFICADAS (SAS)'],
            ['id_question' => 176, 'texto_selects' => 'UDEC'],
            // Cuenta con establecimiento abierto al público
            ['id_question' => 182, 'texto_selects' => 'SI'],
            ['id_question' => 182, 'texto_selects' => 'NO'],
            // Hace cuanto se dedica a esta actividad
            ['id_question' => 184, 'texto_selects' => 'MENOS DE 1 AÑO'],
            ['id_question' => 184, 'texto_selects' => 'DE 1 A 2 AÑOS'],
            ['id_question' => 184, 'texto_selects' => 'DE 2 A 3 AÑOS'],
            ['id_question' => 184, 'texto_selects' => 'DE 3 A 5 AÑOS'],
            ['id_question' => 184, 'texto_selects' => 'DE 5 A 10 AÑOS'],
            ['id_question' => 184, 'texto_selects' => 'MÁS DE 10 AÑOS'],
            // A que sector pertenece la empresa
            ['id_question' => 185, 'texto_selects' => 'PRIMARIO O AGROPECUARIO - OBTIENE PRODUCTOS DIRECTAMENTE DE LA NATURALEZA SIN TRANSFORMAR'],
            ['id_question' => 185, 'texto_selects' => 'SECUNDARIO O INDUSTRIAL - TRANSFORMA MATERIAS PRIMAS EN PRODUCTOS TERMINADOS O SEMIELABORADOS'],
            ['id_question' => 185, 'texto_selects' => 'TERCIARIO O DE SERVICIOS - NO PRODUCE BIENES; SE ENFOCA EN LOS SERVICIOS'],
            // Primario
            ['id_question' => 186, 'texto_selects' => 'CULTIVO DE FRUTAS'],
            ['id_question' => 186, 'texto_selects' => 'CULTIVO DE CAFÉ'],
            ['id_question' => 186, 'texto_selects' => 'CULTIVO DE HORTALIZAS'],
            ['id_question' => 186, 'texto_selects' => 'CULTIVO DE PANCOGER'],
            ['id_question' => 186, 'texto_selects' => 'CULTIVO DE PLÁTANO'],
            ['id_question' => 186, 'texto_selects' => 'AVICULTORES'],
            ['id_question' => 186, 'texto_selects' => 'CULTIVO DE AGUACATE'],
            ['id_question' => 186, 'texto_selects' => 'OTRAS PRODUCCIONES PECUARIAS'],
            ['id_question' => 186, 'texto_selects' => 'OTRAS ACTIVIDADES DEL SECTOR PRIMARIO'],
            // Secundario
            ['id_question' => 187, 'texto_selects' => 'PRODUCCIÓN DE LÁCTEOS'],
            ['id_question' => 187, 'texto_selects' => 'PRODUCCIÓN DE ACEITES'],
            ['id_question' => 187, 'texto_selects' => 'FABRICACIÓN DE ARTESANÍAS O MANUALIDADES'],
            ['id_question' => 187, 'texto_selects' => 'DISEÑO DE PRENDAS DE VESTIR'],
            ['id_question' => 187, 'texto_selects' => 'GASTRONOMÍA - ALIMENTOS NO EMPACADOS'],
            ['id_question' => 187, 'texto_selects' => 'OTROS ALIMENTOS EMPACADOS'],
            ['id_question' => 187, 'texto_selects' => 'FABRICACIÓN DE MUEBLES'],
            ['id_question' => 187, 'texto_selects' => 'FABRICACIÓN DEL PRODUCTO PARA EL CUIDADO'],
            ['id_question' => 187, 'texto_selects' => 'PAISAJISMO - ORNATO'],
            ['id_question' => 187, 'texto_selects' => 'PRODUCCIÓN DE LICORES'],
            ['id_question' => 187, 'texto_selects' => 'OTROS PRODUCTOS DE AGROINDUSTRIA'],
            ['id_question' => 187, 'texto_selects' => 'OTROS PRODUCTOS DEL SECTOR SECUNDARIO'],
            // Terciario
            ['id_question' => 188, 'texto_selects' => 'SERVICIOS INMOBILIARIOS'],
            ['id_question' => 188, 'texto_selects' => 'CONTRUCCIÓN, PINTURA Y TERMINADOS'],
            ['id_question' => 188, 'texto_selects' => 'SERVICIOS DE SALUD'],
            ['id_question' => 188, 'texto_selects' => 'SERVICIOS DE BELLEZA Y EL CUIDADO'],
            ['id_question' => 188, 'texto_selects' => 'COMUNICACIONES'],
            ['id_question' => 188, 'texto_selects' => 'SERVICIOS DE RECREACIÓN'],
            ['id_question' => 188, 'texto_selects' => 'ORGANIZACIÓN DE EVENTOS'],
            ['id_question' => 188, 'texto_selects' => 'SERVICIOS EDUCATIVOS'],
            ['id_question' => 188, 'texto_selects' => 'SEGURIDAD PRIVADA'],
            ['id_question' => 188, 'texto_selects' => 'SERVICIOS TURÍSTICOS'],
            ['id_question' => 188, 'texto_selects' => 'SERVICIOS DE MANTENIMIENTO'],
            ['id_question' => 188, 'texto_selects' => 'SERVICIOS DE ASEO'],
            ['id_question' => 188, 'texto_selects' => 'SERVICIOS DE TRANSPORTE'],
            ['id_question' => 188, 'texto_selects' => 'OTRAS ACTIVIDADES DEL SECTOR TERCIARIO'],
            // Su empresa cuenta con maquinaria
            ['id_question' => 190, 'texto_selects' => 'SI'],
            ['id_question' => 190, 'texto_selects' => 'NO'],
            // Cuantos empleos directos genera
            ['id_question' => 192, 'texto_selects' => 'NINGUNO'],
            ['id_question' => 192, 'texto_selects' => '1'],
            ['id_question' => 192, 'texto_selects' => 'DE 2 A 3'],
            ['id_question' => 192, 'texto_selects' => 'DE 4 A 6'],
            ['id_question' => 192, 'texto_selects' => 'DE 7 A 10'],
            ['id_question' => 192, 'texto_selects' => 'MÁS DE 10'],
            // Los empleos que genera son
            ['id_question' => 193, 'texto_selects' => 'INFORMALES'],
            ['id_question' => 193, 'texto_selects' => 'FORMALES'],
            // El canal de distribucion de su empresa es
            ['id_question' => 195, 'texto_selects' => 'DIRECTO'],
            ['id_question' => 195, 'texto_selects' => 'CON 1 INTERMEDIARIO'],
            ['id_question' => 195, 'texto_selects' => 'CON 2 INTERMEDIARIOS'],
            ['id_question' => 195, 'texto_selects' => 'CON 3 O MÁS INTERMEDIARIO'],
            // Que medios publicitarios usa
            ['id_question' => 196, 'texto_selects' => 'PUBLICIDAD IMPRESA'],
            ['id_question' => 196, 'texto_selects' => 'PUBLICIDAD EN LÍNEA (INTERNET)'],
            ['id_question' => 196, 'texto_selects' => 'PUBLICIDAD EXTERIOR (AVISOS)'],
            ['id_question' => 196, 'texto_selects' => 'RADIO'],
            ['id_question' => 196, 'texto_selects' => 'VOZ A VOZ'],
            ['id_question' => 196, 'texto_selects' => 'TELEVISIÓN'],
            ['id_question' => 196, 'texto_selects' => 'NINGUNO'],
            // Que herramientas publicitarias usa
            ['id_question' => 197, 'texto_selects' => 'TARJETAS DE PRESENTACIÓN'],
            ['id_question' => 197, 'texto_selects' => 'SEPARADOR DE LIBROS'],
            ['id_question' => 197, 'texto_selects' => 'VOLANTES'],
            ['id_question' => 197, 'texto_selects' => 'AFICHES'],
            ['id_question' => 197, 'texto_selects' => 'FICHAS GRÁFICAS DIGITALES'],
            ['id_question' => 197, 'texto_selects' => 'VIDEOS'],
            ['id_question' => 197, 'texto_selects' => 'NINGUNO'],
            // Su empresa cuenta con registro mercantil
            ['id_question' => 198, 'texto_selects' => 'SI'],
            ['id_question' => 198, 'texto_selects' => 'NO'],
            // Su empresa cuenta con RUT
            ['id_question' => 200, 'texto_selects' => 'SI'],
            ['id_question' => 200, 'texto_selects' => 'NO'],
            // Se encuentra al día con el pago de impuesto
            ['id_question' => 201, 'texto_selects' => 'SI'],
            ['id_question' => 201, 'texto_selects' => 'NO'],
            // Cual es su promedio de ventas mensuales
            ['id_question' => 202, 'texto_selects' => 'MENOS DE 1 SMLMV'],
            ['id_question' => 202, 'texto_selects' => 'ENTRE 1 Y 2 SMLMV'],
            ['id_question' => 202, 'texto_selects' => 'ENTRE 2 Y 3 SMLMV'],
            ['id_question' => 202, 'texto_selects' => 'ENTRE 3 Y 6 SMLMV'],
            ['id_question' => 202, 'texto_selects' => 'ENTRE 6 Y 10 SMLMV'],
            ['id_question' => 202, 'texto_selects' => 'MÁS DE 10 SMLMV'],
            // Ha recibido apoyo de entidades
            ['id_question' => 203, 'texto_selects' => 'SI'],
            ['id_question' => 203, 'texto_selects' => 'NO'],
            // Entidades de las cuales ha recibido apoyo
            ['id_question' => 204, 'texto_selects' => 'SECRETARÍA DE DESARROLLO ECONÓMICO Y COMPETITIVIDAD'],
            ['id_question' => 204, 'texto_selects' => 'OTRA DEPENDENCIA DE LA ALCALDÍA MUNICIPAL DE FUSAGASUGÁ'],
            ['id_question' => 204, 'texto_selects' => 'CÁMARA DE COMERCIO DE BOGOTÁ'],
            ['id_question' => 204, 'texto_selects' => 'GOBERNACIÓN DE CUNDINAMARCA'],
            ['id_question' => 204, 'texto_selects' => 'ENTIDAD FINANCIERA'],
            ['id_question' => 204, 'texto_selects' => 'SENA'],
            ['id_question' => 204, 'texto_selects' => 'OTRO'],
            // Pertenece a algun gremio
            ['id_question' => 206, 'texto_selects' => 'SI'],
            ['id_question' => 206, 'texto_selects' => 'NO'],
            // Su empresa ha realizado alguna exportacion
            ['id_question' => 208, 'texto_selects' => 'SI'],
            ['id_question' => 208, 'texto_selects' => 'NO'],
        ]);

        // Preguntas de gestión del riesgo
        SelectsModel::insert([
            // Parentesco con el jefe del hogar
            ['id_question' => 211, 'texto_selects' => 'JEFE DE HOGAR'],
            ['id_question' => 211, 'texto_selects' => 'ESPOSO(A)'],
            ['id_question' => 211, 'texto_selects' => 'HIJO(A)'],
            ['id_question' => 211, 'texto_selects' => 'PRIMO(A)'],
            ['id_question' => 211, 'texto_selects' => 'TIO(A)'],
            ['id_question' => 211, 'texto_selects' => 'NIETO(A)'],
            ['id_question' => 211, 'texto_selects' => 'SUEGRO(A)'],
            ['id_question' => 211, 'texto_selects' => 'YERNO/NUERA'],
            // Ubicación del inmueble
            ['id_question' => 212, 'texto_selects' => 'URBANO'],
            ['id_question' => 212, 'texto_selects' => 'RURAL'],
            // Propiedad del inmueble
            ['id_question' => 213, 'texto_selects' => 'PROPIA'],
            ['id_question' => 213, 'texto_selects' => 'ARRIENDO'],
            // Estado del inmueble
            ['id_question' => 214, 'texto_selects' => 'HABITABLE'],
            ['id_question' => 214, 'texto_selects' => 'NO HABITABLE'],
            ['id_question' => 214, 'texto_selects' => 'DESTRUIDA'],
            //AHE. ALIM
            ['id_question' => 215, 'texto_selects' => 'SI'],
            ['id_question' => 215, 'texto_selects' => 'NO'],
            //AHE. NO ALIM
            ['id_question' => 216, 'texto_selects' => 'SI'],
            ['id_question' => 216, 'texto_selects' => 'NO'],
            //MAT. REHAB. DE VIVIENDA
            ['id_question' => 217, 'texto_selects' => 'SI'],
            ['id_question' => 217, 'texto_selects' => 'NO'],
            //SUB. ARRIENDO
            ['id_question' => 218, 'texto_selects' => 'SI'],
            ['id_question' => 218, 'texto_selects' => 'NO'],
            //ANIMALES DOMESTICOS
            ['id_question' => 219, 'texto_selects' => 'SI'],
            ['id_question' => 219, 'texto_selects' => 'NO'],
        ]);

        // Preguntas de turismo
        SelectsModel::insert([
            // Tipo de ciudadano
            ['id_question' => 222, 'texto_selects' => 'PRESTADOR DE SERVICIOS TURISTICOS'],
            ['id_question' => 222, 'texto_selects' => 'TURISTA'],
            // Registro nacional de turismo activo
            ['id_question' => 223, 'texto_selects' => 'SI'],
            ['id_question' => 223, 'texto_selects' => 'NO'],
            // Tipo de servicio turistico
            ['id_question' => 224, 'texto_selects' => 'FINCA TURISTICA (ALOJAMIENTO RURAL)'],
            ['id_question' => 224, 'texto_selects' => 'ESTABLECIMIENTO DE ALOJAMIENTO Y HOSPEDAJE (HOTEL)'],
            ['id_question' => 224, 'texto_selects' => 'OTRO TIPO DE VIVIENDA TURÍSTICA'],
            ['id_question' => 224, 'texto_selects' => 'CENTRO VACACIONAL'],
            ['id_question' => 224, 'texto_selects' => 'GUÍA DE TURISMO'],
            ['id_question' => 224, 'texto_selects' => 'AGENCIA DE VIAJES Y TURISMO'],
            ['id_question' => 224, 'texto_selects' => 'OTRO'],
            // Motivo de viaje
            ['id_question' => 231, 'texto_selects' => 'NEGOCIOS'],
            ['id_question' => 231, 'texto_selects' => 'TRABAJO'],
            ['id_question' => 231, 'texto_selects' => 'RECREACIÓN'],
            ['id_question' => 231, 'texto_selects' => 'SALUD'],
            ['id_question' => 231, 'texto_selects' => 'OTRO'],
            // En donde se esta hospedando
            ['id_question' => 233, 'texto_selects' => 'FINCA TURISTICA (ALOJAMIENTO RURAL)'],
            ['id_question' => 233, 'texto_selects' => 'ESTABLECIMIENTO DE ALOJAMIENTO Y HOSPEDAJE (HOTEL)'],
            ['id_question' => 233, 'texto_selects' => 'OTRO TIPO DE VIVIENDA TURÍSTICA (AIR BNB, HOSTEL, ECT)'],
            ['id_question' => 233, 'texto_selects' => 'CENTRO VACACIONAL'],
            ['id_question' => 233, 'texto_selects' => 'CASA DE UN FAMILIAR O AMIGO'],
            ['id_question' => 233, 'texto_selects' => 'OTRO'],
        ]); 
        
        // Preguntas de secretaria de infraestructura
        SelectsModel::insert([
            // Familia con discapacidad
            ['id_question' => 239, 'texto_selects' => 'SI'],
            ['id_question' => 239, 'texto_selects' => 'NO'],
            // Familiar desplazado
            ['id_question' => 240, 'texto_selects' => 'SI'],
            ['id_question' => 240, 'texto_selects' => 'NO'],
            // Se encuentra registrado en el RUPS
            ['id_question' => 242, 'texto_selects' => 'SI'],
            ['id_question' => 242, 'texto_selects' => 'NO'],
            // Mujer con violencia intrafamiliar
            ['id_question' => 243, 'texto_selects' => 'SI'],
            ['id_question' => 243, 'texto_selects' => 'NO'],
            // Familiar deportista
            ['id_question' => 245, 'texto_selects' => 'SI'],
            ['id_question' => 245, 'texto_selects' => 'NO'],
            // Familiar participante en junta de acción comunal
            ['id_question' => 249, 'texto_selects' => 'SI'],
            ['id_question' => 249, 'texto_selects' => 'NO'],
            // Familiar participante caja de compesación
            ['id_question' => 250, 'texto_selects' => 'SI'],
            ['id_question' => 250, 'texto_selects' => 'NO'],
            // Familiar con subsidio de vivienda
            ['id_question' => 251, 'texto_selects' => 'SI'],
            ['id_question' => 251, 'texto_selects' => 'NO'],
            // Por quien recibió subsidio de vivienda
            ['id_question' => 252, 'texto_selects' => 'POR EL MUNICIPIO'],
            ['id_question' => 252, 'texto_selects' => 'POR EL DEPARTAMENTO'],
            ['id_question' => 252, 'texto_selects' => 'POR EL MINISTERIO'],
            // Mejoramiento de vivienda
            ['id_question' => 254, 'texto_selects' => 'SI'],
            ['id_question' => 254, 'texto_selects' => 'NO'],
            // Familiar propietario del predio
            ['id_question' => 255, 'texto_selects' => 'SI'],
            ['id_question' => 255, 'texto_selects' => 'NO'],
            // En el predio hay vivienda construida
            ['id_question' => 260, 'texto_selects' => 'SI'],
            ['id_question' => 260, 'texto_selects' => 'NO'],
            // Material de construcción de muros
            ['id_question' => 261, 'texto_selects' => 'BLOQUE O LADRILLO'],
            ['id_question' => 261, 'texto_selects' => 'CONCRETO'],
            ['id_question' => 261, 'texto_selects' => 'MADERA'],
            ['id_question' => 261, 'texto_selects' => 'TEJAS'],
            ['id_question' => 261, 'texto_selects' => 'OTRO'],
            // Vivienda tiene fisuras
            ['id_question' => 262, 'texto_selects' => 'SI'],
            ['id_question' => 262, 'texto_selects' => 'NO'],
            // Necesidades de su vivienda
            ['id_question' => 263, 'texto_selects' => 'CAMBIO DE CUBIERTAS (TEJAS)'],
            ['id_question' => 263, 'texto_selects' => 'CAMBIO O INSTALACIÓN DE PEINAZOS (SOPORTE DE TEJAS)'],
            ['id_question' => 263, 'texto_selects' => 'CONTRUCCIÓN DE MESÓN'],
            ['id_question' => 263, 'texto_selects' => 'TIENE PISOS DE TIERRA'],
            ['id_question' => 263, 'texto_selects' => 'FALTA PAÑETAR'],
            ['id_question' => 263, 'texto_selects' => 'FALTA PINTAR'],
            ['id_question' => 263, 'texto_selects' => 'FALTA ENCHAPAR PISOS DE LA CASA'],
            ['id_question' => 263, 'texto_selects' => 'FALTA ENCHAPAR BAÑO'],
            ['id_question' => 263, 'texto_selects' => 'FALTA ENCHAPAR COCINA'],
            ['id_question' => 263, 'texto_selects' => 'FALTAN APARATOS SANITARIOS (SANITARIO, LAVAMANOS Y/O DUCHA)'],
            // Construcción de vivienda
            ['id_question' => 264, 'texto_selects' => 'SI'],
            ['id_question' => 264, 'texto_selects' => 'NO'],
            // Familiar propietario del predio
            ['id_question' => 265, 'texto_selects' => 'SI'],
            ['id_question' => 265, 'texto_selects' => 'NO'],
            // En el predio hay vivienda construida
            ['id_question' => 270, 'texto_selects' => 'SI'],
            ['id_question' => 270, 'texto_selects' => 'NO'],
            // Material de construcción de muros
            ['id_question' => 271, 'texto_selects' => 'BLOQUE O LADRILLO'],
            ['id_question' => 271, 'texto_selects' => 'CONCRETO'],
            ['id_question' => 271, 'texto_selects' => 'MADERA'],
            ['id_question' => 271, 'texto_selects' => 'TEJAS'],
            ['id_question' => 271, 'texto_selects' => 'OTRO'],
            // Compra de vivienda
            ['id_question' => 273, 'texto_selects' => 'SI'],
            ['id_question' => 273, 'texto_selects' => 'NO'],
            // Familiar con otra propiedad
            ['id_question' => 274, 'texto_selects' => 'SI'],
            ['id_question' => 274, 'texto_selects' => 'NO'],
            // Cuanta con ahorros o cesantias
            ['id_question' => 275, 'texto_selects' => 'SI'],
            ['id_question' => 275, 'texto_selects' => 'NO'],
        ]);
    }
}
