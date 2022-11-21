class parent:
    def a(self):
        print("This is Parent class")
class child(parent):
    def b(self):
        print("This is child class")

obj=child()
obj.a()
obj.b()
