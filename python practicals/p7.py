def prime(n):
    count=0
    i=1
    while(i<=n):
        if(n%i==0):
            count=count+1
        i=i+1
    if(count==2):
        print("It is a prime number")
    else:
        print("It is not a prime number")
n=int(input("Enter a number to check its a prime or not:"))
prime(n)

