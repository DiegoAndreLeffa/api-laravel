## Rota de Criação de Usuário

Esta rota permite criar um novo usuário com os seguintes campos:

- `name` (string, obrigatório): Nome do usuário.
- `email` (string, obrigatório): Endereço de e-mail do usuário.
- `password` (string, obrigatório): Senha do usuário (mínimo de 7 caracteres).
- `type` (enum, obrigatório): Tipo do usuário (SELLER ou COMMON).
- `balance` (float, padrão 0): Saldo inicial do usuário.
- `cpf` (string, obrigatório): CPF do usuário.

**Exemplo de Requisição:**
```json
POST /api/users
{
    "name": "Exemplo",
    "email": "exemplo@mail.com",
    "password": "1234567",
    "type": "SELLER",
    "balance": 0,
    "cpf": "123456589"
}
```

**Possíveis Erros:**
- `name`: Nome é obrigatório.
- `cpf`: CPF é obrigatório.
- `password`: Senha é obrigatória.
- `password`: A senha deve conter no mínimo 7 caracteres.
- `email`: Email é obrigatório.
- `email`: Email deve ser um endereço válido.
- `type`: Tipo é obrigatório.

## Rota de Login

Esta rota permite que um usuário faça login fornecendo seu email e senha.

- `email` (string, obrigatório): Endereço de e-mail do usuário.
- `password` (string, obrigatório): Senha do usuário.

**Exemplo de Requisição:**
```json
POST /api/auth/login
{
    "email": "exemplo@mail.com",
    "password": "1234567"
}
```

**Possíveis Erros:**
- `email`: Email é obrigatório.
- `password`: Senha é obrigatória.

## Rota de Depósito

Esta rota permite que um usuário faça um depósito em sua conta, especificando o valor a ser depositado.

- `value` (float, obrigatório): Valor a ser depositado.

**Exemplo de Requisição:**
```json
POST /api/users/id/deposits
{
    "value": 15000
}
```
**Possíveis Erros:**
- `value`: O valor é obrigatório.
- `value`: O valor deve ser um número.
- `value`: O valor deve ser maior ou igual a 0.01.

## Rota de Transação para Outro Usuário

Esta rota permite que um usuário realize uma transação para outro usuário, especificando o valor e os IDs do Payer (quem envia) e do Payee (quem recebe).

- `value` (float, obrigatório): Valor da transação.
- `payer` (int, obrigatório): ID do usuário que está realizando o pagamento.
- `payee` (int, obrigatório): ID do usuário que receberá o pagamento.

**Exemplo de Requisição:**
```json
POST /api/transactions
{
    "value": 2000,
    "payer": 1,
    "payee": 2
}
```
**Possíveis Erros:**
- `value`: O valor é obrigatório.
- `value`: O valor deve ser um número.
- `value`: O valor deve ser maior ou igual a 0.01.