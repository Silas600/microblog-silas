# Operações CRUD usando SQL

## Resumo

- C: criar/Inserir dados   -> INSERT
- R: (R) Ler dados         -> SELECT
- U: (U) Atualizar dados   -> UPDATE
- D: (D) Excluir dados     -> DELETE

## Exemplos para tabela "usuarios"

### Inserindo usuarios

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Silas', 'silas@gmail.com', '123senac', 'admin');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Chapolin', 'chapolin@gmail.com', '456', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Stark', 'stark@gmail.com', '000', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Naruto', 'naruto@gmail.com', '000', 'editor');

