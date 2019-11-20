from SOAPpy import SOAPProxy

cliente = SOAPProxy('http://localhost:5000/server.php')



a = int(input("Digite o valor de a: "))
b = int(input("Digite o valor de b: "))

# a = 3
# b=2

print(cliente.soma(a,b))

print(cliente.subtracao(a,b))

print(cliente.divisao(a,b))

print(cliente.multiplicacao(a,b))