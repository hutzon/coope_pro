import pandas as pd
import mysql.connector


df = pd.read_excel('DataPrueba.xlsx')

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="cooperativa2"
)


mycursor = mydb.cursor()

# Insertar los datos del DataFrame en la tabla de la base de datos
for row in df.itertuples():
    mycursor.execute("INSERT INTO tarjetas (cod_socio, nombre, apellido1, apellido2, numero_tc, fch_con, monto, saldo) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)", (row[1], row[2], row[3], row[4], row[5], row[6], row[7], row[8]))

# Guardar los cambios y cerrar la conexión a la base de datos
mydb.commit()
mydb.close()
