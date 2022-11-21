def arm(n):
    org=n
    rev=0
    while(n>0):
        rem=n%10
        rev=(rev*10)+rem
        n=n//10
    if(rev==org):
        print("y")
    else:
        print("n")
n=int(input("enter the number"))
for i in range(2):
    arm(n)
