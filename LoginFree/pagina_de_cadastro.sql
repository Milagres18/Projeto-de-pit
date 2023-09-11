
-- Banco dos usuarios que se cadastraram como freelancer
use pagina_de_cadastro;

SELECT * FROM pagina_de_cadastro.suporte;
SELECT * FROM pagina_de_cadastro.usuarios;

UPDATE usuarios
SET NOME = "Maria"
WHERE id = 1;

DELETE FROM suporte
WHERE id = 1;

