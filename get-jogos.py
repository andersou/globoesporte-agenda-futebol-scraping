from requests_html import HTMLSession
import time
init = time.time()
print("{} inicializou!".format(init))
url = "https://globoesporte.globo.com/placar-ge/hoje/jogos.ghtml"
elementos = ".resultado-time-container"
session = HTMLSession()
r = session.get(url)
elementos_html = r.html.find(elementos)
for el in elementos_html:
    times = el.find('.nome-completo')
    placar = el.find('.placar')
    if len(placar) > 0:
        print("{} {} x {} {}".format(
            times[0].text, placar[0].text, placar[1].text, times[1].text))
    else:
        print("{} x {}".format(times[0].text, times[1].text))
fim = time.time()
print("{} finalizou {}!".format(fim, fim-init))
