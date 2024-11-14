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

### Inserindo noticias

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'Meu pai ganhou na mega-sena',
    'to rico, tchau pra vcs',
    'Jogou e ganhou',
    'premio.Jpg',
    1
);

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'Neymar foi preso',
    'Vini JR pegou a esposa do endrik',
    'P.diddy foi solto',
    'Messi.Jpg',
    1
);

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'morcego gigante encontrado na autralia',
    'nova nota de 1 real',
    'Palmeiras  ganha o mundial',
    'evolution.Jpg',
    1
);

## Leitura de dados da tabela "noticias"

SELECT data, titulo FROM noticias;

SELECT *FROM noticias


## Leitura de dados da tabela "usuarios"

SELECT nome, email, tipo FROM usuarios;


SELECT nome, email, tipo usuarios WHERE tipo = 'editor';

## Atualização de dados dos usuários

UPDATE usuarios SET  email = 'tonystark@gmail.com'
WHERE id = 2;

## Excluindo dados da tabela

DELETE FROM noticias WHERE id = 1;

## SELECT COM JOIN