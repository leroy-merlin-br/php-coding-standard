# php-coding-standard

Esta biblioteca contém os padrões de codificação para projetos em PHP a serem desenvolvidos na Leroy Merlin Brasil.

Os padrões são configurados através do [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
Essa ferramenta utiliza classes especiais chamadas `Sniffs`, que definem os padrões que não são aceitos e realiza a verificação nos arquivos php.

## Como utilizar

### Instalação

Instale no seu projeto através do composer:

```bash
composer require --dev leroy-merlin-br/coding-standard
```

### Configuração
1. Crie o arquivo de configuração no seu repositório: `phpcs.xml`.
2. Defina a rule `LeroyMerlin`:

```xml
<?xml version="1.0"?>
<ruleset name="Project">
    <rule ref="LeroyMerlin"/>    
</ruleset>
```

Você também pode customizar as regras do _php-coding-standard_ para se adequar melhor ao seu projeto.
Novos sniffs podem ser adicionados e também é possível sobrescrever as regras existentes.

No exemplo abaixo a configuração da biblioteca é sobrescrita para que a rule `CamelCapsMethodName` não seja aplicada em arquivos específicos:

```xml
<rule ref="PSR1.Methods.CamelCapsMethodName">
    <exclude-pattern>tests/Data/*Data.php</exclude-pattern>
    <exclude-pattern>Kameleon/Offer/ConvertPeriodDatesTrait.php</exclude-pattern>
    <exclude-pattern>Kameleon/Offer/Banner/Banner.php</exclude-pattern>
    <exclude-pattern>Kameleon/Product/Product.php</exclude-pattern>
    <exclude-pattern>Kameleon/Product/ConjugatedProduct.php</exclude-pattern>
    <exclude-pattern>Kameleon/Offers/Banner.php</exclude-pattern>
    <exclude-pattern>Kameleon/User/AbstractUser.php</exclude-pattern>
    <exclude-pattern>Kameleon/User/Idb/Idb.php</exclude-pattern>
</rule>
```

Para maiores detalhes, consulte a [documentação do PhpCS](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Annotated-Ruleset).

### Usando o coding-standard

O melhor jeito de utilizar o _php-coding-standard_ é integrá-lo automaticamente na pipeline de CI e no hook de pré-commit do git.

A pipeline de CI garantirá que códigos fora do padrão não sejam mergeados em produção.
Já ao utilizá-la no pré-commit, a ferramenta é capaz de avisar o desenvolvedor dos problemas antes de eles serem commitados.

#### Usando  no pré-commit

Caso você não saiba customizar os [hooks do git](https://git-scm.com/book/en/v2/Customizing-Git-Git-Hooks), uma maneira simples de usar o _php-coding-standard_ pode ser feita instalando a ferramenta [GrumPHP](https://github.com/phpro/grumphp).
O GrumPHP permite que o desenvolvedor escreva um simples arquivo YML na raiz do projeto para configurar os hooks.

1. Instale o GrumPHP: 
```bash
composer require --dev phpro/grumphp
```
3. Defina um arquivo `grump.yml` na raiz do projeto com a seguinte configuração:
```yml
grumphp:
  git_hook_variables:
    EXEC_GRUMPHP_COMMAND: 'docker-compose run --rm -e COLUMNS=$COLUMNS -e LINES=$LINES -e TERM=$TERM -T <main-docker-image>'
  stop_on_failure: true
  process_timeout: 120
  tasks:
    phpcs:
      standard: [ path/to/phpcs.xml ] # aqui você referencia o arquivo gerado durante a configuração
  fixer:
    enabled: true
    fix_by_default: true
```

**Observação:** O GrumPHP ainda permite a configuração de outras ferramentas úteis para garantir a qualidade de código e do projeto como: analisadores estáticos, testes automatizados, padronização de mensagens de commits, scripts utilitários em shell, etc.
Vale a pena conferir as [possibilidades](https://github.com/phpro/grumphp/blob/master/doc/tasks.md) na documentação do projeto.

#### Integração contínua e uso manual

Caso seja necessário, você pode rodar o `phpcs` manualmente através do comando:
```bash
vendor/bin/phpcs path/to/dir/or/file.php
```

Mas reforço que também é interessante ter este comando configurando na pipeline de CI do seu projeto.

## Diretrizes de contribuição

Novos sniffs podem ser adicionados nos arquivos de configuração.

O XML `LeroyMerlin/ruleset.xml` é o arquivo principal e sniffs podem ser adicionados nele.
Mas também podem ser adicionados em outros arquivos.

Para importar as rules de um arquivo:
```xml
<rule ref="./custom-rules-coding-standard.xml"/>
```

Priorize separar os sniffs por contexto, assim como foi feita a separação dos sniffs da Slevomat.
Assim fica mais fácil de manter a biblioteca e consultar as regras existentes.

#### Configuração do Ruleset

Ao adicionar uma nova regra, **sempre** escreva um comentário acima dela descrevendo de maneira simples o que o sniff verifica:
```xml
<!-- Checks lines count between class members -->
<rule ref="SlevomatCodingStandard.Classes.ClassMemberSpacing"/>

<!-- Checks the declaration of arrow functions: it verifies spaces between `fn`, `=>` and the returned expression.
    Also it allows arrow functions with multiple lines
-->
<rule ref="SlevomatCodingStandard.Functions.ArrowFunctionDeclaration">
    <properties>
        <properties name="allowMultiLine" value="true"></properties>
    </properties>
</rule>

<!-- Forbid fancy group uses like `use FooLibrary\Bar\Baz\{ ClassA, ClassB, ClassC as Fizbo };` -->
<rule ref="SlevomatCodingStandard.Namespaces.DisallowGroupUse"/>
```

#### Manutenção dos Testes

Para executar os testes:
```bash
composer test
```

Atualmente esses testes funcionam de maneira muito simples: a biblioteca consulta o diretório `tests/input` e gera um relatório de erros.
Posteriormente esse relatório é comparado com o relatório esperado em `tests/expected_report.txt` e caso os dois não estejam iguais, é retornado o erro.

Futuramente podemos evoluir os testes para serem mais assertivos: uma ideia interessante é a de gerar os relatórios de erros e warnings para cada teste e verificar se os sniffs esperados foram lançados para cada caso.

No momento em que escrevo essa documentação(29/04/2022) não possuímos a cobertura completa dos padrões.

Possuímos alguns testes legados agrupando várias ideias diferentes na raiz da pasta `tests/input`.
Mas seria melhor se esses testes agissem da maneira mais específica possível, cobrindo cada sniff instalado na biblioteca.

Tal iniciativa foi feita para os Sniffs da Slevomat, mas ainda falta organizar os testes presentes no arquivo `LeroyMerlin/ruleset.xml`.
