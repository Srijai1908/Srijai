n= int(input("Enter the number to find its reverse"))
def revnum(n):
    rev=0
    while(n>0):
        rem=n%10
        rev=(rev*10)+rem
        n=n//10
    return rev
revnum(n)
