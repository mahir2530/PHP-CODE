tupple1=('h','i','j')
tupple2=(1,2,3,4)

dict1={}
dict2={}

dict1=dict1.fromkeys(tupple2)
print(dict1)
dict2=dict2.fromkeys(tupple1,tupple2)
print(dict2)