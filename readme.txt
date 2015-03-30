Database Name: SupermercadoOS

Password: Sup3rm3rc4d0!

Hostname: SupermercadoOS.db.4684682.hostedresource.com
		  SupermercadoOS.db.4684682.hostedresource.com





WORDPRESS:

User: administrator

Pass: Sup3rm3rc4d0!



Pasos para crear el ambiente:

1) Crear una cuenta en Github.com y mandar el usuario a rodrigo.ovares@gmail.com para poder darles el acceso.

2) Instalar algún servidor local en la compu (XAMPP , MAMP o cual sea)

3) Clonar el repositorio en la carpeta htdocs del server.

4) define('WP_HOME','http://example.com');
define('WP_SITEURL','http://example.com');

git rm --cached wp-config.php



SELECT p.nombre_prod, d.nombre_depar
FROM productos p
INNER JOIN departamentos d ON p.depar_prod = d.id_depar;


CREATE TABLE departamentos
(
id_depar int(20),
nombre_depar varchar(100),
PRIMARY KEY (id_depar)
)


CREATE TABLE productos
(
id_prod int(20),
nombre_prod varchar(100),
cantidad_prod int(100),
descr_prod int(100),
depar_prod int(20)
PRIMARY KEY (id_prod),
FOREIGN KEY (depar_prod) REFERENCES departamentos(id_depar)
)