from tkinter import*

window=Tk()
window.title("my app")
window.geometry("500x500")
m1=Message(window,text="Enter your details")
m1.pack()
l1=Label(window,text="First Name")
l1.pack()
e1=Entry(window,bd=5)
e1.pack()
l2=Label(window,text="Last Name")
l2.pack()
e2=Entry(window,bd=5)
e2.pack()
l3=Label(window,text="Your Hobbies")
l3.pack()
c1=Checkbutton(window,text="Coding",onvalue=1,offvalue=0)
c1.pack()
c2=Checkbutton(window,text="Reading",onvalue=1,offvalue=0)
c2.pack()
l4=Label(window,text="Select your Gender")
l4.pack()
r1=Radiobutton(window,text="Male",value=1)
r1.pack()
r2=Radiobutton(window,text="Female",value=2)
r2.pack()
button=Button(window,text="Submit")
button.pack()
l5=Label(window,text="Select Percentage")
per=DoubleVar()
s1=Scale(window,variable="per",orient="Horizontal",length=300)
















window.mainloop()
