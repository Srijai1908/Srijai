dic1={1:10,2:20,3:30}
dic2={4:40,5:50}
dic3={6:60}
dic4={}
for i in dic1,dic2,dic3:
    dic4.update(i)
print(dic4)
