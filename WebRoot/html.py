
NameNote = {"Ben Giese": "2+", 'Alfred': '4-'}

print('<!DOCTYPE html>')
print('<html lang="en">')
print(' <head>')
print('     <meta charset="UTF-8">')
print('     <meta name="viewport" content="width=device-width, initial-scale=1.0">')
print('     <title>Document</title>')
print(' </head>')
print(' <body>')
print('     <table>')
print('         <tr>')
print('             <th>Name Vorname</th>')
print('             <th>Note</th>')
print('         </tr>')
i = 1
for key in NameNote:
    print('         <tr>')
    print('             <td>' + key + '</td>')
    print('             <td>' + NameNote[key] + '</td>')
    print('         </tr>')
    i += 1
print('     </table>')
print(' </body>')
print('</html>')
