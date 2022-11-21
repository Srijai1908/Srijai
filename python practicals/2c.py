def histo(lst):
    for i in lst:
        print(i*'*')
lst=[]
histo(lst)
ln=int(input("enter the list length"))
print("enter integer",ln)
for i in ln:
    data=input()
    lst.append(data)
histogram(lst)
