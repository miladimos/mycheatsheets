list = [1, 2, 3, 4, 5]
list ++ [ 6 ] # append to list
newList = [ 0 | list] # prepend to list

[1, 2, 3, 1] -- [ 2, 1, 3] # remove duplicate values

td list # head of list -> 1
tl list # tail of list -> 2, 3, 4, 5


Enum.map(list, fn item ->
  item + 1
end)
