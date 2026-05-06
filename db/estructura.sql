CREATE TABLE IF NOT EXISTS encuesta_redes (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    usuario_nombre VARCHAR(50) NOT NULL,
    red_principal VARCHAR(30) NOT NULL,
    tiempo_diario VARCHAR(30) NOT NULL,
    objetivo_uso VARCHAR(50) NOT NULL,
    frecuencia_publicacion VARCHAR(30) NOT NULL,
    red_mas_toxica VARCHAR(30) NOT NULL,
    compra_influencers VARCHAR(5) NOT NULL,
    privacidad_preocupacion INT(1) NOT NULL,
    sentimiento_post_uso VARCHAR(30) NOT NULL,
    verificacion_noticias VARCHAR(5) NOT NULL,
    mejor_mejora TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;