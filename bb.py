import requests

url = 'http://localhost/server.php' 
arq = open ('txt.txt','r').readlines()

for line in arq:
	password = line.strip()

#	http = requests.post(url, data={'input1':'admin', 'input2':'password'})
	http = requests.post(url, data={'input1':'admin','input2':'password', 'sub':'submit'})
	content = http.content

	if "logado on sistema!" in str(content):
		print("========== [+] PASSWORD CRACKED: "+password+" ==========")
		break
	else:
		print("[-] password invali: "+password)