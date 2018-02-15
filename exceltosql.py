import psycopg2
import pandas as pd
import math

excel = pd.ExcelFile("mktg.xlsx")
df = excel.parse("MKTG")
conn = psycopg2.connect(host="localhost",database="postgres",password="Codeusctc",
						user="postgres")
cursor = conn.cursor()

for count in range(0,len(df.index)):
	if count%2 == 1:	
		sql = "INSERT INTO students VALUES('"+str(int(df['Student ID'][count]))+"','BSBA MKTG','"+str(int(df['Year Level'][count]))+"')"
		cursor.execute(sql)
		conn.commit()
		