
# Alura Backend Challenge \#2

Minha participação no 2° [Challenge](https://www.alura.com.br/challenges/back-end-2) de Backend da [Alura](https://www.alura.com.br).

O objetivo era criar a API de um gestor de despessas financeiras pessoais de acordo com as exigências do desafio.

Isso foi o que eu criei ...
## Stack


**Back-end:** 

- PHP <= 7.3
- Lumen <= 8.5 ([docs](https://lumen.laravel.com/docs/8.x))
- Sqlite
- [Postman](https://www.postman.com/) para os testes
## Documentação da API

### **Receitas**

#### Retorna todos as receitas financeiras

```http
  GET /api/receitas
```

#### Retorna uma receita específica financeira

```http
  GET /api/receita/${id}
```

| Parâmetro   | Tipo       | Descrição                                      |
| :---------- | :--------- | :----------------------------------            |
| `id`        | `int`      | **Obrigatório**. Id da receita a ser retornada |

#### Cria/Adiciona Nova Receita financeira

```http
  POST /api/receita
```

| Parâmetro   | Tipo       | Descrição                              |
| :---------- | :--------- | :----------------------------------    |
| `descricao` | `string`   | **Obrigatório**. Descrição da receita  |
| `valor`     | `float`    | **Obrigatório**. Valor da receita      |

#### Atualiza receita financeira

```http
  PUT /api/receita/${id}
```

| Parâmetro   | Tipo       | Descrição                                       |
| :---------- | :--------- | :------------------------------------------     |
| `id`        | `int`      | **Obrigatório**. Id da receita a ser atualizada |
| `descricao` | `string`   | Descrição da receita                            |
| `valor`     | `float`    | Valor da receita                                |

#### Exclui receita financeira

```http
  DELETE /api/receita/${id}
```

| Parâmetro   | Tipo       | Descrição                                       |
| :---------- | :--------- | :------------------------------------------     |
| `id`        | `int`      | **Obrigatório**. Id da receita a ser retornada  |


### **Despesas**

#### Retorna todos as despesas financeiras

```http
  GET /api/despesas
```

#### Retorna uma despesas específica financeira

```http
  GET /api/despesa/${id}
```

| Parâmetro   | Tipo       | Descrição                                       |
| :---------- | :--------- | :----------------------------------             |
| `id`        | `int`      | **Obrigatório**. Id da despesas a ser retornada |

#### Cria/Adiciona Nova despesas financeira

```http
  POST /api/despesa
```

| Parâmetro   | Tipo       | Descrição                               |
| :---------- | :--------- | :----------------------------------     |
| `descricao` | `string`   | **Obrigatório**. Descrição da despesas  |
| `valor`     | `float`    | **Obrigatório**. Valor da despesas      |

#### Atualiza receita financeira

```http
  PUT /api/despesa/${id}
```

| Parâmetro   | Tipo       | Descrição                                        |
| :---------- | :--------- | :------------------------------------------      |
| `id`        | `int`      | **Obrigatório**. Id da despesas a ser atualizada |
| `descricao` | `string`   | Descrição da despesas                            |
| `valor`     | `float`    | Valor da despesas                                |

#### Exclui despesas financeira

```http
  DELETE /api/despesa/${id}
```

| Parâmetro   | Tipo       | Descrição                                       |
| :---------- | :--------- | :------------------------------------------     |
| `id`        | `int`      | **Obrigatório**. Id da despesas a ser retornada | 
