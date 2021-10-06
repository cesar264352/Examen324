# -*- coding: utf-8 -*-
"""
Created on Wed Oct  6 03:59:23 2021

@author: GuSs_90
"""

import mysql.connector as sql

try:
    connection=sql.connect(
        host='localhost',
        user='usuario324',
        password='123456',
        db='bd_cesar5'
        )
    if connection.is_connected():
        print("Conexion exitosa")
    cursor=connection.cursor()
    cursor.execute("SELECT ci,paterno,materno,nombre,usuario FROM persona INNER JOIN usuario ON persona.ci=usuario.id_persona INNER JOIN rol ON usuario.rol_fk=rol.id_rol WHERE rol.id_rol=2")
    filas=cursor.fetchall()
    contador=0
    print("------Lista de universitarios-----")
    for fila in filas:
        print(fila)
        contador+= 1
    
    print("------Insertar Estudiante -----")
    ci=input("Carnet de Identidad: ")
    nombre=input("Nombre: ")
    paterno=input("Ap. Paterno: ")
    materno=input("Ap. Materno: ")
    f_nac=input("Fecha nacimiento aaaa-mm-dd: ")
    print("01 - CHUQUISACA")
    print("02 - LA PAZ")
    print("03 - COCHABAMBA")
    print("04 - ORURO")
    print("05 - POTOSI")
    print("06 - TARIJA")
    print("07 - SANTA CRUZ")
    print("08 - BENI")
    print("09 - PANDO")
    dpto=str(input("Cod. departamento: "))
    contador+= 1
    usuario = 'univ'+str(contador)
    print("Usuario: "+usuario)
    
    password=input("Password: ");
    
    rol=int('1');
    
    sql="INSERT INTO persona (ci,nombre,paterno,materno,f_nacimiento,departamento_fk) VALUES ('{0}','{1}','{2}','{3}','{4}','{5}')"
    cursor.execute(sql.format(ci,nombre,paterno,materno,f_nac,dpto))
    connection.commit()
    sql1="INSERT INTO usuario (usuario,password,id_persona,rol_fk) VALUES ('{0}','{1}','{2}','{3}')"
    cursor.execute(sql1.format(usuario,password,ci,rol))
    connection.commit()
    print("-----> Estudiante Registrado <-------")

    
    
except Exception as ex:
    print(ex)