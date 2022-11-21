class parent1():
    def fun1(self):
        print("This parent class no 1")
class parent2():
    def fun2(self):
        print("The parent class no 2")
class child(parent1,parent2):
    def fun3(self):
        print("this is child class")
obj=child()
obj.fun1()
obj.fun2()
obj.fun3()

        
