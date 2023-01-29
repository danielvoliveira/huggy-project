
# Desafio Página de Quem Somos | Huggy

## Introdução

Primeiramente, obrigado pela oportunidade de participar deste desafio, foi muito divertido.

Sobre a stack do projeto, optei por construir a infraestrutura com o Docker e utilizar o Node com o Vite para carregar os assets do projeto (scss, js, imagens e vídeos). O back-end foi construíndo com Laravel 9 e o front-end com Html, Scss, Bootstrap e Vanilla Js para buscar o melhor desempenho. Também foi criada uma base de dados em MySql para cadastrar as conversões feitas no formulário de newsletter, configurado um container específico para o Redis cache e configuradas todas as integrações com ferramentas externas.


## Estratégia para Marketing Digital:

1 - Visando o maior alcance orgânico possível, a aplicação foi configurada com as principais meta-tags para indexação em redes sociais e buscadores. Incluindo a criação do robots.txt e sitemap.xml para entregar os direcionamentos para os robôs de busca.

2 - Além disso, foi acrescentado o "Schema.org" para exibir mais informações sobre a página quando encontrada em ferramentas de busca.

3 - As imagens e o vídeo foram convertidos para webp e webm para ficarem mais leves. Suas tags foram configuradas com "loading="lazy" para facilitar o carregamento. Além disso, temos o atributo alt com a descrição de cada imagem para acessibilidade.

4 - A responsividade do front-end está configurada para as diversas dimensões de tela.

5 - Com todos esses cuidados, as chances de alcançarmos pontuação boa no rankeamento dos buscadores e aparecer nas melhores posições aumenta, trazendo mais oportunidades orgânicas para a empresa.


## Integrações

### Facebook Pixel:

1 - Configuração do Facebook Pixel na aplicação (concluído)

2 - Conversão no Pixel do Facebook ao clicar em "Ver vagas disponíveis" (concluído)

### Google Analytics:

1 - Configuração do Google Analytics na aplicação (concluído)

2 - Conversão no Google Analytics ao clicar em "Ver vagas disponíveis" (não concluído por necessidade da publicação do projeto em homolog/prod para criar tag de conversão)

### Huggy Chat:

1 - Configuração do Huggy Chat na aplicação (concluído)

2 - Evento com widget, flow e gatilho configurado ao clicar em "Falar com um especialista" (concluído)

### Zapier:

1 - Conversões do formulário de newslleter validadas e enviadas para endpoint (concluído)


## Pendências:

Não foi possível desenvolver as animações do bloco de time-line. Por conta do curto prazo, foi priorizado as integrações com as ferramentas solicitadas, a responsividade geral e as métricas de SEO que entram como um diferencial competitivo para atingir os objetivos de alcance do negócio.

## Passo a passo para instalação

Faça o clone do repositório
```sh
git clone https://github.com/danielvoliveira/huggy-project.git huggy-project
```
```sh
cd huggy-project/
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acesse o container app com o bash
```sh
docker-compose exec app bash
```

Instale as dependências do projeto
```sh
composer install
```

Fora do bash, execute o comando
```sh
npm install
```

Em seguida, o comando
```sh
npm run dev
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)
