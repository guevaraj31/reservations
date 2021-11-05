## Requisitos de producto

1. Se debe poder hacer un registro de compradores y almacenar estos registrados en Base de Datos.
2. Se debe poder consultar la disponibilidad de boletas con un servicio REST.
3. Se debe poder hacer la asignación de boletas a los compradores registrados.

## Inicio rápido
- Ejecutar composer install
- Configurar archivo ".env" con los datos de acceso a MySQL
- Crear la base datos con el nombre que agregó en el ".env" 
- Ejecutar 'php artisan migrate --seed'


## Endpoints

#### Crear Comprador 
- POST - /api/v1/buyers
    Body -> {
            "name":"Jesus Guevara",
            "email":"jesus@gmail.com"
        }

#### Listar Compradores
- GET - /api/v1/buyers

#### Consultar disponibilidad de boletas
- GET - /api/v1/available

#### Consultar Boletos reservados
- GET - /api/v1/tickets

#### Asignación de boletos a compradores registrados
- POST - /api/v1/tickets