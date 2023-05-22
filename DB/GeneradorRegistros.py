import random
numCuentas = ['318297268']
def generarNombre():
    nombres=['SOFIA','MARIA JOSE','VALENTINA', 'REGINA','CAMILA','VALERIA','XIMENA',
            'MARIA FERNANDA','VICTORIA','RENATA','SANTIAGO','MATEO','SEBASTIAN','LEONARDO',
            'MATIAS','EMILIANO','DANIEL','GAEL','MIGUEL ANGEL','DIEGO']
    complemento=['GAMES','zzZ','MARS','SAN','UWU','XD','GAMER','DESTROYER','PRINCESS']
    return nombres[random.randint(0,len(nombres)-1)]+complemento[random.randint(0,len(complemento)-1)]
def generarNumero(lista):
    numCuenta = ''
    numero = 0
    while True:
        numero = random.randint(100000000,1000000000)
        numCuenta = str(numero)
        if(not(numCuenta in lista)):
            break
    lista.append(numCuenta)
    return numCuenta
def generarContraseña():
    contra=''
    cadena = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"
    for i in range(15):
        contra += cadena[random.randint(0,len(cadena)-1)]
    return contra
def generarCarrera():
    carreras=['ICO','IEE','IME','IDE']
    return carreras[random.randint(0,len(carreras)-1)]
def generarDireccion():
    calles = str(random.randint(0,600))
    avenidas = ['PASEO DE LA REFORMA','BOSQUE','ANGEL','CHAPULTEPEC','VILLA','FRANCISCO I. MADERO',
                'PLAZA DE LA REPUBLICA', 'CHIMALISTAC', 'AVENIDA BUCARELI','ALVARO OBREGON']
    return avenidas[random.randint(0,len(avenidas)-1)] + calles[random.randint(0,len(calles)-1)]
def generarCorreos():
    dominios = ['GMAIL.COM','HOTMAIL.COM','OUTLOOK.COM','YAHOO.COM']
    return dominios[random.randint(0,len(dominios)-1)]


#Generamos todos los registros que deseamos
#Registros con los campos (numCuenta,nombreUser,carrera,direccion,telefono,email,contraseña,fechaAlta,permisos)
archivo = open('InsertarRegistros.sql','w')
for i in range(997):
    archivo.write("INSERT INTO usuario values('"+generarNumero(numCuentas)+"','"+generarNombre()+"','"+
      generarCarrera()+"','"+generarDireccion()+"','"+str(random.randint(1000000000,10000000000))+"','"+generarNombre()+"@"+
      generarCorreos()+"','"+generarContraseña()+"',CURRENT_TIMESTAMP(),"+str(0)+");\n")
archivo.close()
