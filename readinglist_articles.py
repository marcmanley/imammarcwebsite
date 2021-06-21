import os

a = open("readinglist_articles.txt", "w")
for path, subdirs, files in os.walk(r'/Users/marcmanley/Documents/_Articles'):
    for filename in files:
        a.write(filename + os.linesep) 