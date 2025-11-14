# Registro de Incidentes

Um sistema para registrar incidentes em comunidades de jogos do discord.
Registrando dados como o ID do Perfil Steam (plataforma de jogos) e o ID do Perfil no Discord, comunidades podem mapear players indesejáveis com um histórico detalhado de ocorrências (como quebra de regras em jogo, assédio, violência e etc).

Em comunidades como o [Next Level](https://discord.com/invite/nextlevelbrasil) e o [Prelude Realismo](https://painel.preluderealismo.com.br/) esse registro de ocorrências já existe, mas não é completamente mapeado. Todos os banimentos e reports são registrados em chats por administradores, em um ambiente completamente inapropriado.

Diante deste problema, em conjunto com outros players, pensei em criar um protótipo de painel usando MySQL e PHP que fosse capaz de apenas mapear estes incidentes. Em primeiro momento, podemos inserir players em um painel usando um formulário simples. Depois podemos criar incidentes de forma detalhada inserindo grau de severidade, mapeando ocorrências de forma detalhada em um ambiente separado (fora do discord).

## Banco de Dados

O SGDB escolhido foi o MySQL, é possível testar o banco executando o comando:

```bash
docker-compose up -d
```

## Schema do banco:

Localização do schema [config/schema.sql](./config/schema.sql)

```sql
CREATE TABLE IF NOT EXISTS players (
    id INT PRIMARY KEY AUTO_INCREMENT, -- id do player
    id_steam VARCHAR(25) NOT NULL UNIQUE, -- id do perfil steam
    id_discord VARCHAR(50) NOT NULL UNIQUE, -- id do perfil discord
    panel_nickname VARCHAR(255), -- nickname customizável
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data do registro do player no sistema
    coins INT DEFAULT 0, -- moedas no painel
    demerit_points INT DEFAULT 0, -- carteira de pontos
    CONSTRAINT demerit_points_gt_0 CHECK (demerit_points >= 0)
);

CREATE TABLE IF NOT EXISTS incidents (
    id INT PRIMARY KEY AUTO_INCREMENT, -- id do incidente
    title TEXT NOT NULL, -- título do incidente
    description TEXT NOT NULL, -- descrição (qual regra foi quebrada etc)
    happenedIn TIMESTAMP NOT NULL, -- quando aconteceu
    severity INT NOT NULL, -- severidade (pontos na carteira)
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de registro do incidente
    playerId INT NOT NULL, -- id do player denunciado
    FOREIGN KEY (playerId) REFERENCES players(id) ON DELETE CASCADE
);
```

## Configurações

```env
HOST=127.0.01 // ou localhost
MYSQL_USER=andre
MYSQL_PASSWORD=root
DB_NAME=mvc
```

## Futuras melhorias

- correção de bugs de estilização
- criar páginas mais dinâmicas
- adicionar features para anexar arquivos

## Equipe

- André de Oliveira Dias 3ºA MTec-Pi
- Arthur Rolemberg 3ºA MTec-Pi
