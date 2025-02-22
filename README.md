<h3 align="center">PerPage-Trait for Laravel</h3>

## 🧐 Sobre <a name = "about"></a>

Este pacote foi criado para simplificar a quantidade default de um paginate, onde possa ser facilmente manuseado.

Com isso, voce padroniza a quantidade de objetos por pagina e torna facil a manutenção quando necessario.
Sempre que possivel ele sera atualizado, e esta aberto para a comunidade sugerir melhorias.

## 🏁 Para utilizar o pack

Para utilizar a classe, basta instalar ela utilizando o comando do composer:

```
composer require quantumcode/perpage-trait
```

e chamar a função getPerPage() dentro de um lugar que va utilizar o paginate.

por default ele seta o max_per_page e o default_per_page em 100.

Mas voce consegue alterar, criando as seguintes envs.

```
DEFAULT_PER_PAGE=100
MAX_PER_PAGE=100
```

Pronto, ja é para estar funcionando.

## 🎈 Recursos

Nele existem algumas ferramentas uteis.

- Perpage Trait:
  - Ele vai capturar o parametro per_page recebido do usuario caso seja passado, e checar se ele não ultrapassa o valor maximo estabelecido pelo mantenedor.
  - Caso não seja passado, ele vai capturar o valor default setado pelo mantenedor,

## 🧐 Outras Bibliotecas

- [Enum-Basics-Extension](https://packagist.org/packages/quantumcode/enum-basics-extension) - Utilizado para auxiliar nas Classes de Enums;
- [SetSchema-Trait](https://packagist.org/packages/quantumcode/setschema-trait-postgresql) - Suprir a necessidade de setar os schemas automaticamente do PostgreSQL;
- [Validate-Trait](https://packagist.org/packages/quantumcode/validate-trait) - Bindar os Requests automaticamente de acordo com o caminho do Service Pattern;
- [Handler-Basics-Extension](https://packagist.org/packages/quantumcode/handler-basics-extension) - Contem tratamento das principais exceções do laravel, e contem varios responses para lhe auxiliar;

## ⛏️ Ferramentas

- [php](https://www.php.net/) - linguagem

## ✍️ Autor

- [@Luis Gustavo Santarosa Pinto](https://github.com/QuantumCode) - Idea & Initial work
