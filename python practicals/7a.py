class student:
    def __init__(self,name,roll):
        self.name=name
        self.roll=roll

    def show(self):
        print("the name of the student is",self.name)
        print("the roll number is",self.roll)

stud=student("Srijai",23)
stud.show()
    
