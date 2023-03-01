import pandas as pd
import numpy as np

dt = pd.read_csv("students.csv", skipinitialspace=True)

# For students.csv

dt = dt.drop(columns=["password",])
dt = dt.fillna({"Number": 0})
dt = dt.astype({'Number': int})
dt = dt.replace(to_replace=[np.nan,], value="", regex=False)

# General purpose

cols = dt.columns.values.tolist()

st = "INSERT INTO students("

colset = ['`' + col + '`' for col in cols]
colstr = ", ".join(colset)

st = st + colstr + ')\nVALUES '

dt = dt.T
rows = dt.columns.values.tolist()

dataset = list()
newdataset = list()

for row in rows:
    dataset.append(list(map(str, dt[row].tolist())))
for row in dataset:
    newdataset.append(["'" + datavalue + "'" for datavalue in row])
valuestr = ",\n".join(['(' + ", ".join(newdata) + ')' for newdata in newdataset])

query = st + valuestr
print(query)