# Sistema Información Acueducto Barrio Minuto de Dios
![developer](https://img.shields.io/badge/Desarrollado%20Por%20%3A-franjavfm@gmail.com%20-red)
---
## Screenshots

### Página de inicio
![homepage snap](https://github.com/franjav/acueducto-md/blob/main/images/screenshot/pagina-inicio.png?raw=true)
### Interfaz de Administrador
![dashboard snap](https://github.com/franjav/acueducto-md/images/screenshot/adminhomepage.png?raw=true)
### Módulo Clientes
![users snap](https://github.com/franjav/acueducto-md/blob/main/images/screenshot/modulo-clientes.png?raw=true)
### Módulo Facturación
![facturacion snap](https://github.com/franjav/acueducto-md/blob/main/images/screenshot/modulo-facturacion.png?raw=true)
### Módulo Suscriptores
![facturacion snap](https://github.com/franjav/acueducto-md/blob/main/images/screenshot/modulo-suscriptores.png?raw=true)
---



## Funciones:

### Cliente
Es registrado por parte del Admin. Una vez se crea el registro en el sistema, se debe habilitar, otorgandole un nombre de usuario y contraseña. Esto es competencia del administrador
del sistema. No es posible que el usuario se registre automáticamente en el sistema, ya que este es un entorno privado para la gestión del sistema de facturación del acueducto
del barrio Minuto de Dios de Belalcázar Cauca.

### Suscriptor
Cuando ya se le ha asignado un usuario y contraseña, se convierte en suscriptor y puede ingresar directamente al sistema con las credenciales que se le han otorgado.
Puede acceder a las funciones de ver sus facturas, recibos pagados y saldos pendientes. Modificar sus datos básicos, imprimir y descargar recibos de pagos.

### Facturación
Es el proceso que se desarrolla cada mes, para expedir las facturas y conocer el valor a pagar por cada usuario, dependiendo del consumo de agua que ha tenido durante el mes.
Calcula para cada suscriptor el valor a pagar. Los datos son cargados y almacenados en la base de datos. Se lleva un registro de los pagos mensuales. Permite generar las facturas en PDF
o enviarlas directamente a impresion.

## CÓMO CLONAR Y EJECUTAR ESTE PROYECTO 
- Descargue e instale el IDE de desarrollo Visual Studio Code
- Descargue e instale XAMPP paquete de software libre, que consiste principalmente en el sistema de gestión de bases de datos MySQL, 
  el servidor web Apache y los intérpretes para lenguajes de script PHP y Perl.

---

1. Clone el proyecto: git clone https://github.com/franjav/acueducto-md.git
2. Ingrese al directorio del proyecto: ``` cd acueducto-md ```
3. Copie el directorio completo en la carpeta htdocs: ``` c:/xampp/htdocs ```
4. Crear la base de datos: ``` En el directorio db, se halla el archivo waterbilling.sql ```
5. Inicie el servicio XAMPP: ``` Activar Apache y MySQL ```
6. Ahora ingrese la siguiente URL en su navegador instalado en su PC
									```
										http://127.0.0.1/acueducto-md  o  localhost/acueducto-md/
									```

---

## ADMI DASHBOARD

Para acceder al sistema como administrador utilice las siguientes credenciales:

> username: admin

> password: admin



Otra opción es:

- Descargue la carpeta zip del proyecto del directorio anterior y extráigala
- Descomprima el archivo. Luego ejecute los pasos anteriores: 


## CONFIGURACION DEL SISTEMA PARA INICIAR EL PROYECTO 

De momento no es necesario realizar cambios adicionales para ejecutar la aplicación. Si por algún motivo siguiendo los pasos antes descritos no es posible iniciar el proyecto, favor comunicarse al contacto que aparece más adelante.

## Advertencia
Este proyecto está en desarrollo como trabajo profesional para optar por el título de Tecnologo en Análisis y Desarrollo de Sistemas de Información. De momento, se prohibe su copia o reproducción sin la autorización del propietario.

Puede contactarme a: franjavfm@gmail.com
