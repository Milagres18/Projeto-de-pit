-- Banco dos usuarios que se cadastraram como freelancer
use pagina_de_cadastro;

SELECT * FROM pagina_de_cadastro.suporte;
SELECT * FROM pagina_de_cadastro.usuarios;

UPDATE usuarios
SET NOME = "Maria"
WHERE id = 1;

DELETE FROM suporte
WHERE id = 1;

CREATE TABLE imagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    tipo VARCHAR(255) NOT NULL,
    tamanho INT NOT NULL,
    dados LONGBLOB NOT NULL,
    data_upload TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
