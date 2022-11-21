n=int(input("how many lines you want to read"))
f=open("mytext.txt","r")
for line in (f.readlines()[-n:]):
    print(line,end="")
f.close()
