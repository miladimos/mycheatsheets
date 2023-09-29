import tkinter as tk
from tkinter import messagebox
from tkinter import ttk


def button_command():
    entry_text = entry.get()
    label.config(text=entry_text)
    # label.configure() # list of editable configurations

def show_infobox():
    messagebox.showinfo('info', 'info box')



window = tk.Tk()
window.title('Learn')
window.geometry('800x600')

# window.resizable(True,False)
# window.attributes('-alpha', .8)

menu = tk.Menu(window)

file_menu = tk.Menu(menu, tearoff=False)
file_menu.add_command(label='New', command=lambda: print('new'))
file_menu.add_command(label='Open', command=lambda: print('open'))
menu.add_cascade(label='File', menu=file_menu)

window.configure(menu=menu)
# string_var = tk.StringVar()
# check_var = tk.IntVar()

# label = ttk.Label(master=window, text='text label', textvariable=string_var)
# label.pack()

# entry = ttk.Entry(master=window, textvariable=string_var)
# entry.pack()

# button = ttk.Button(master=window, text='click', command=button_command)
# button.pack()

# check1 = ttk.Checkbutton(window, text='checkbox1', variable=check_var)
# check1.pack()

# events
# window.bind('<KeyPress>', lambda event: print(f'button pressed: ({event.char})'))





window.mainloop()
