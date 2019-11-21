#!/usr/bin/python3

import json
import psycopg2

def db(database_name='b2b_crm'):
    return psycopg2.connect(user = "postgres",
                                password = "123456",
                                host = "127.0.0.1",
                                port = "5432",
                                database = "b2b_crm")

def query_db(query, args=(), one=False):
  try:
    cur = db().cursor()
    cur.execute(query, args)
    r = [dict((cur.description[i][0], value) \
               for i, value in enumerate(row)) for row in cur.fetchall()]
    cur.connection.close()
    return (r[0] if r else None) if one else r

  except (Exception, psycopg2.Error) as error :
    print ("Error while fetching data from PostgreSQL", error)


my_query = query_db("select id,username,email from users limit %s", (3,))

json_output = json.dumps(my_query)

print(json_output);
#return json_output;