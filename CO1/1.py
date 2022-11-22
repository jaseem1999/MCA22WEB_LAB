name = 'malayalam'

length = len(name)
name1 = name[1:length]
name1=name.replace('m','$')
name = name[0]+name1[1:length]
name = name[0:length]
print(name)
