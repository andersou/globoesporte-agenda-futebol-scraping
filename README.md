# GEScrapper

Scrapper para minerar dados de jogos na agenda do Globo Esporte

Modelos
* Jogo
* Time

Ambos implementam a interface JSONSerializable para serem serializáveis.

## Uso

Instalar as dependencias com composer
```shell
composer install
```

Instalar as dependencias com composer
```shell
php get-jogos.php 
```

Saída: Um json dos próximos jogos nos 5 dias.

Para embarcar no seu prjeto, só usar GEScrapper\Query::get([$data = 'hoje']): array[GEScrapper\Models\Jogo]

## Dependencias
* Composer
* Pharse


### Exemplo de saída em JSON

```json
{
    "16-07-2019": [
        {
            "time_casa": {
                "nome": "Atl\u00e9tico-MG",
                "apelido": "CAM",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2017/11/23/Atletico-Mineiro-escudo65px.png"
            },
            "time_visitante": {
                "nome": "Foz Cataratas",
                "apelido": "FOZ",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2015/12/23/Foz_Cataratas_65.png"
            },
            "horario": " 13:30 ",
            "competicao": "Campeonato Brasileiro Feminino Sub-18",
            "estado": "passado",
            "gols_casa": 2,
            "gols_visitante": 2
        },
        {
            "time_casa": {
                "nome": "Corinthians",
                "apelido": "COR",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2014/04/14/corinthians_60x60.png"
            },
            "time_visitante": {
                "nome": "Ferrovi\u00e1ria",
                "apelido": "FER",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2016/03/31/Ferroviaria-65.png"
            },
            "horario": " 14:30 ",
            "competicao": "Campeonato Brasileiro Feminino Sub-18",
            "estado": "passado",
            "gols_casa": 1,
            "gols_visitante": 1
        },
        {
            "time_casa": {
                "nome": "Botafogo",
                "apelido": "BOT",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2019/02/04/botafogo-65.png"
            },
            "time_visitante": {
                "nome": "S\u00e3o Paulo",
                "apelido": "SAO",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2014/04/14/sao_paulo_60x60.png"
            },
            "horario": " 14:30 ",
            "competicao": "Campeonato Brasileiro Feminino Sub-18",
            "estado": "passado",
            "gols_casa": 0,
            "gols_visitante": 2
        },
        {
            "time_casa": {
                "nome": "Ponte Preta",
                "apelido": "PON",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2019/03/17/ponte-65.png"
            },
            "time_visitante": {
                "nome": "Vasco",
                "apelido": "VAS",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2016/07/29/Vasco-65.png"
            },
            "horario": " 15:00 ",
            "competicao": "Campeonato Brasileiro sub-20",
            "estado": "passado",
            "gols_casa": 0,
            "gols_visitante": 1
        },
        {
            "time_casa": {
                "nome": "Santos",
                "apelido": "SAN",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2014/04/14/santos_60x60.png"
            },
            "time_visitante": {
                "nome": "Kindermann",
                "apelido": "KIN",
                "escudo": "https://s.glbimg.com/es/sde/f/equipes/2017/05/28/Kinderman-SC65.png"
            },
            "horario": " 15:30 ",
            "competicao": "Campeonato Brasileiro Feminino Sub-18",
            "estado": "passado",
            "gols_casa": 3,
            "gols_visitante": 1
        },
        {
            "time_casa": {
                "nome": "Cruzeiro",
                "apelido": "CRU",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2015/04/29/cruzeiro_65.png"
            },
            "time_visitante": {
                "nome": "Ponte Preta",
                "apelido": "PON",
                "escudo": "https://s.glbimg.com/es/sde/f/equipes/2017/03/16/ponte_preta_60x60.png"
            },
            "horario": " 16:45 ",
            "competicao": "Campeonato Brasileiro Feminino Sub-18",
            "estado": "passado",
            "gols_casa": 1,
            "gols_visitante": 1
        },
        {
            "time_casa": {
                "nome": "Chapecoense",
                "apelido": "CHA",
                "escudo": "https://s.glbimg.com/es/sde/f/equipes/2016/09/06/chape_grande.png"
            },
            "time_visitante": {
                "nome": "Internacional",
                "apelido": "INT",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2016/05/03/inter65.png"
            },
            "horario": " 17:15 ",
            "competicao": "Campeonato Brasileiro Feminino Sub-18",
            "estado": "passado",
            "gols_casa": 1,
            "gols_visitante": 1
        },
        {
            "time_casa": {
                "nome": "Coritiba",
                "apelido": "CFC",
                "escudo": "https://s.glbimg.com/es/sde/f/equipes/2017/03/27/coritiba65.png"
            },
            "time_visitante": {
                "nome": "S\u00e3o Bento",
                "apelido": "SBE",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2014/12/05/saoBento_novo65.png"
            },
            "horario": " 19:15 ",
            "competicao": "Campeonato Brasileiro S\u00e9rie B",
            "estado": "passado",
            "gols_casa": 2,
            "gols_visitante": 1
        },
        {
            "time_casa": {
                "nome": "Ponte Preta",
                "apelido": "PON",
                "escudo": "https://s.glbimg.com/es/sde/f/equipes/2014/04/14/ponte_preta_60x60.png"
            },
            "time_visitante": {
                "nome": "Atl\u00e9tico-GO",
                "apelido": "ACG",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2017/04/10/Atletico-GO-65.png"
            },
            "horario": " 21:30 ",
            "competicao": "Campeonato Brasileiro S\u00e9rie B",
            "estado": "ao-vivo",
            "gols_casa": 0,
            "gols_visitante": 0
        },
        {
            "time_casa": {
                "nome": "La Equidad",
                "apelido": "EQU",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2012/01/09/La_Equidad_colombia_65.png"
            },
            "time_visitante": {
                "nome": "Royal Pari",
                "apelido": "ROY",
                "escudo": "https://s.glbimg.com/es/sde/f/organizacoes/2018/12/17/royal65.png"
            },
            "horario": " 21:30 ",
            "competicao": "Copa Sul-Americana",
            "estado": "futuro",
            "gols_casa": 0,
            "gols_visitante": 0
        }
    ]
}
```