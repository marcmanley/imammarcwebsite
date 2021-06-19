import os

a = open("readinglist.txt", "w")
for path, subdirs, files in os.walk(r'/Users/marcmanley/Documents/_Books/_0 - Need To Read'):
    for filename in files:
        a.write(filename + os.linesep) 