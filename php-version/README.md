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


