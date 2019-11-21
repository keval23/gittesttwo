#!/usr/bin/python3

import psycopg2
import json 
try:
  connection = psycopg2.connect(user = "postgres",
                                password = "123456",
                                host = "127.0.0.1",
                                port = "5432",
                                database = "b2b_crm")

  cursor = connection.cursor()
  # Print PostgreSQL Connection properties
  print ( connection.get_dsn_parameters(),"\n")

  postgreSQL_select_Query = "select id,username,email from users"

  cursor.execute(postgreSQL_select_Query)
  print("Selecting rows from users table using cursor.fetchall")
  user_records = cursor.fetchall() 
 
  print("Print each row and it's columns values")
  for row in user_records:
    print("Id = ", row[0], )
    print("username = ", row[1])
    print("email  = ", row[2], "\n")

except (Exception, psycopg2.Error) as error :
    print ("Error while fetching data from PostgreSQL", error)

finally:
    #closing database connection.
    if(connection):
        cursor.close()
        connection.close()
        print("PostgreSQL connection is closed")