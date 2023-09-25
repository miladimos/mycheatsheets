import csv

with open('/csv.csv', 'r') as cf:
    csv_reader = csv.reader(cf)
    for row in csv_reader:
        print(row)