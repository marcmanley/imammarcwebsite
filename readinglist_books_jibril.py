import os

a = open("README_Jibril.txt", "w")
for path, subdirs, files in os.walk(r'/Users/marcmanley/Documents/_Books/_Jibril'):
    for filename in files:
        a.write(filename + os.linesep) 