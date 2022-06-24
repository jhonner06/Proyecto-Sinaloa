create database bar;
use bar;


/* PERSONA  6 */

create table tipo_doc(

tdoc varchar (10) not null,
desc_tdoc varchar(30) not null,
estado tinyint (1) not null,
primary key (tdoc)
);

create table rol (
    id_rol int not null,
    nombre varchar (20) not null,
    estado tinyint (1) not null,
    primary key (id_rol)
);


create table persona(
 pk_fk_tdoc varchar (10) not null,
 id_persona int not null,
 contrasena varchar (20) not null,
 p_nombre varchar (20) not null,
 s_nombre varchar (20) null,
 p_apellido varchar (20) not null,
 s_apellido varchar (20) null,
 fk_rol int not null,
 direccion varchar (32) not null,
 telefono bigint (15) not null,
 sexo varchar (9) not null,
 primary key(pk_fk_tdoc, id_persona,fk_rol)
);


create table administrador(
tdoc_administrador varchar (10) not null ,
id_administrador int not null unique,
estado tinyint (1) not null,
primary key (tdoc_administrador, id_administrador )
);


create table encargado_barra(
 tdoc_encargado varchar (10) not null ,
 id_encargado int not null unique,
 estado tinyint (1) not null,
 primary key (tdoc_encargado, id_encargado)
);


create table cliente(

    tdoc_cliente varchar (10) not null,
    id_cliente int not null,
    estado tinyint (1) not null,
    primary key (tdoc_cliente, id_cliente)
);


create table proveedor(
    tdoc_proveedor varchar (10) not null,
    id_proveedor int not null,
    estado tinyint (1) not null,
    primary key (tdoc_proveedor, id_proveedor )
);







/* PRODUCTO  3*/

create table producto(
 id_producto int not null,
 cantidad int not null,
 stock_max int not null,
 stock_min int not null,
 nombre varchar (32) not null,
 fk_marca int not null,
 fk_tproduc int not null,
 precio_unitario float (5.2) not null, 
 estado tinyint (1) not null, 
 primary key (id_producto)
);


create table tipo_producto(

id_tproducto int not null,
nombre varchar (64) not null,
primary key (id_tproducto)
);

create table marca(
id_marca int not null,
nombre varchar (64) not null,
primary key(id_marca)
);

create table factura_productos(
fk_pk_n_factura int not null,
fk_pk_cod_producto int not null,
cantidad_prod int not null,
valor_prod_cant float (5.2),
primary key (fk_pk_n_factura, fk_pk_cod_producto)
);

/* FACTURACION 3*/


 create table factura(
    n_factura int not null,
    fecha_factura date not null,
    subtotal float (5.2) not null,
    iva float (5.2) not null,
    total_factura float (5.2) not null,
    primary key (n_factura)
);


create table factura_venta(
    n_factura_venta int not null,
    cliente_tdoc varchar (10) null,
    id_cliente int null, 
    tdoc_empleado_v varchar (10) not null, 
    id_empleado_v int not null,
    primary key (n_factura_venta)
);


create table factura_compra(
    n_factura_compra int not null,
    tdoc_empleado varchar (10) not null, 
    id_empleado int not null,
    proveedor_tdoc varchar (10) not null,
    id_proveedor int not null, 
    primary key (n_factura_compra)
); 




/* ASOCIACIONES */

alter table persona 
add constraint fk_pk_tdoc
foreign key(pk_fk_tdoc)
references tipo_doc (tdoc);

alter table administrador
add constraint pk_fk_id_administrador
foreign key ( tdoc_administrador,id_administrador)
references persona(pk_fk_tdoc,id_persona); 

alter table cliente 
add constraint pk_fk_cliente
foreign key (tdoc_cliente, id_cliente)
references persona(pk_fk_tdoc,id_persona ); 

alter table encargado_barra
add constraint pk_fk_encargado
foreign key (tdoc_encargado, id_encargado)
references persona(pk_fk_tdoc, id_persona ); 

alter table proveedor
add constraint pk_fk_proveedor
foreign key (tdoc_proveedor, id_proveedor)
references persona(pk_fk_tdoc, id_persona ); 

alter table factura_venta 
add constraint pk_fk_venta
foreign key (n_factura_venta)
references factura(n_factura);

alter table factura_compra
add constraint pk_fk_compra
foreign key (n_factura_compra)
references factura(n_factura);

/* ALTER PROBLEMAS*/ 

alter table producto 
add constraint fk_marca_prod     /* si canciona */
foreign key (fk_marca)
references marca(id_marca);

alter table producto 
add constraint fk_tProducto    /* si canciona */
foreign key (fk_tproduc)
references tipo_producto(id_tproducto); 


 alter table factura_productos
add constraint fk_pk_factura_produc
foreign key (fk_pk_n_factura)
references factura(n_factura);       /* si sirve */


alter table factura_productos
add constraint fk_pk_producto_fact    /* si canciona */
foreign key (fk_pk_cod_producto)
references producto(id_producto); 





/* s */

alter table factura_compra
add constraint pk_empelado
foreign key (tdoc_empleado,id_empleado)
references encargado_barra( tdoc_encargado,id_encargado );


/* 
alter table factura_compra
add constraint pk_empelado01
foreign key (tdoc_empleado)
references encargado_barra( tdoc_encargado);



alter table factura_compra
add constraint pk_empelado02
foreign key (id_empleado)
references encargado_barra( id_encargado ); */


/* ad */





alter table factura_compra
add constraint fk_proveedor
foreign key(proveedor_tdoc, id_proveedor)
references proveedor (tdoc_proveedor,id_proveedor); 

alter table factura_compra
add constraint fk_adminstrador
foreign key (tdoc_empleado, id_empleado)
references administrador(tdoc_administrador, id_administrador);

alter table factura_venta
add constraint fk_cliente
foreign key (cliente_tdoc, id_cliente)
references cliente(tdoc_cliente,id_cliente);

alter table factura_venta 
add constraint fk_administrador_v
foreign key (tdoc_empleado_v, id_empleado_v)
references administrador(tdoc_administrador, id_administrador);

alter table factura_venta
add constraint fk_empleado_v
foreign key (tdoc_empleado_v, id_empleado_v)
references encargado_barra(tdoc_encargado, id_encargado);

alter table persona 
add constraint fk_rol
foreign key(fk_rol)
references rol (id_rol);


/* alter table encargado_barra
add index tdoc_mp (tdoc_encargado); */


/* 
agragar un campo llamado rol a la tabla personas, crea una llamada rol 
codigo_rol
nombre
estado */