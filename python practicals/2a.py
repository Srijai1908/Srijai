

def vchk():
    n=str(input("Enter a Alphabet to check wether it is a vowel or not:"))
    if (n=='A' or n=='a' or n=='E' or n=='e' or n=='I'or n=='i' or n=='O' or n=='o' or n=='U' or n=='u'):
        print(n,"is a Vowel")
    else:
        print(n,"is not a Vowel")
for i in range(2):
    vchk()
