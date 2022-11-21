import operator

d={1:10,3:40,5:60,2:50}
print("The original order is",d)

a=sorted(d.items(),key=operator.itemgetter(0))
print("The ascending order",a)
a=sorted(d.items(),key=operator.itemgetter(0),reverse=True)
print("The Descending order",a)
