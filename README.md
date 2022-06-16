# PHP

- PHP es un lenguaje de programacion de proposito general.
- Interpretado en el lado del servidor.
- Puede ser insertado en un documento HTML a traves de las etiquetas <?php ?>
- Usado generalmente con bases de datos relacionales como MySQL.

Para la ejecucion del codigo de PHP en el navegador, se debe usar algun tipo de servidor web como apache o nginx.
Cuando se realiza una peticion al servidor, este procesa el codigo que se encuentra entre las etiquetas <?php ?>, y posteriormente le envia una respuesta al cliente.

## Instalar XAMPP

XAMPP es una herramienta que incluye todo lo necesario para crear un entorno de desarrollo que incluye Apache, PHP, PERL y MariaDB/MySQL.

- Descargar XAMPP desde la web oficial.
- Hacer que el paquete descargado sea ejecutable.

        chmod 755 <package_name>

- Comprobar que se pueda ejecutar el paquete con los permisos del usuario actual.

        ls -l <package_name>

- Ejecutar el instalador desde la terminal.

        sudo ./<package_name>

Seguir los pasos de instalacion correspondientes indicados por la interfaz grafica.

### Iniciar XAMPP desde la terminal

Instalar Net Tools.

    sudo apt install net-tools

Iniciar XAMPP a traves del siguiente comando.

    sudo /opt/lampp/lampp start

Detener los componentes de XAMPP desde la terminal.

    sudo /opt/lampp/lampp stop

Todos los proyectos que se ejecuten en el navegador, se deben localizar en un directorio llamado htdocs\.

Para acceder a los recursos alojados en el directorio htdocs\, desde un navegador web se puede introducir la siguiente direccion.

    localhost/<resource_name>