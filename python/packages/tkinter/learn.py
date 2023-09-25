import tkinter as tk
import tkinter.ttk as ttk

window = tk.Tk()
window.title('Learn') 
window.geometry('800x600')

text = tk.Text(master=window)
text.pack()

window.mainloop()