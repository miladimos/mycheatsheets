def fun(x, y):
    if x<2 or y<4:
        return 2
    else:
        return 4 + fun(x-2,y-3)


# print(fun(4,7)) // 10


def fun2(c):
    if c<=2:
        return 1
    else:
        return fun2(c-2)+fun2(c-1)

# print(fun2(7)) // 13


def fun3(n):
    if n<=2:
        return n
    else:
        return fun3(n-1)+fun3(n-2)+fun3(n-3)

print(fun3(5)) // 11