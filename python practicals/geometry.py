class Student:
    def __init__(self,name,roll):
        self.name=name
        self.roll=roll
    def show(self):
        print("The name of student is",self.name)
        print("The roll is",self.roll)
stud=Student("Srijai",23)
stud.show()
