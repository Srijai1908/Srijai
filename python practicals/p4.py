def histo(lst):
    for i in lst:
        print(i*'*')
lst=[]
ln=int(input("Enter the length of the list"))
print("enter the integer elements for the list",ln)
for i in range(ln):
    data=int(input())
    lst.append(data)
histo(lst)
