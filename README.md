# Formuario_checkbox_radio
Formulario que envia respostas para whatsapp com opções
Aqui está a documentação completa para utilização do formulário de contato com envio para WhatsApp.

---

# **Documentação de Utilização do Formulário de Contato com Envio para WhatsApp**

## **1. Introdução**
Este formulário HTML permite que os usuários preencham seus dados e enviem as informações diretamente para um número de WhatsApp. Ele inclui campos para Nome, Telefone, Email, Endereço, seleção de Cor, Tamanho e Opções adicionais via checkboxes.

---

## **2. Estrutura do Formulário**
O formulário contém os seguintes campos:
- **Nome**: Campo de texto obrigatório.
- **Telefone**: Campo de texto obrigatório para inserir um número de telefone.
- **Email**: Campo de email obrigatório.
- **Endereço**: Campo de texto para endereço do usuário.
- **Cor**: Seleção obrigatória de uma cor (Vermelho, Azul ou Verde).
- **Tamanho**: Seleção obrigatória de um tamanho (P, M ou G).
- **Opções adicionais**: Seleção opcional via checkboxes (Embalagem especial e Entrega expressa).
- **Botão de envio**: Envia as informações para o WhatsApp.

---

## **3. Como Utilizar**
### **3.1. Configuração**
1. Copie o código HTML fornecido e cole em um arquivo `.html`.
2. Edite o código para substituir o número do administrador no JavaScript:
   ```javascript
   let telefoneAdmin = "5511999999999"; // Substitua pelo número correto
   ```
   - O número deve estar no formato internacional sem espaços ou caracteres especiais. Exemplo:
     - ✅ Correto: `551999013892`
     - ❌ Errado: `(19) 99901-3892`

---

### **3.2. Funcionamento**
1. O usuário preenche os campos do formulário.
2. Ao clicar em **"Enviar para WhatsApp"**, um script JavaScript coleta os dados inseridos.
3. Os dados são formatados em uma mensagem de texto estruturada.
4. O WhatsApp Web ou aplicativo é aberto automaticamente com a mensagem pronta para envio ao administrador.

---

## **4. Personalização**
### **4.1. Alteração das Cores**
Se desejar alterar as cores do formulário:
- **Cor de fundo dos inputs (atualmente cinza claro)**:
  ```css
  input, select {
      background-color: #e0e0e0; /* Alterar para outra cor desejada */
  }
  ```
- **Cor de fundo dos botões de rádio e checkboxes (atualmente azul)**:
  ```css
  .radio-group label, .checkbox-group label {
      background: #007bff; /* Alterar para outra cor desejada */
  }
  ```

---

### **4.2. Ajuste do Layout**
- Para aumentar ou diminuir a largura dos inputs, altere:
  ```css
  input, select {
      width: 90%; /* Pode ajustar para 80%, 100%, etc. */
  }
  ```
- Para ajustar a largura do formulário:
  ```css
  form {
      max-width: 400px; /* Ajustar para 500px, 600px, etc., conforme necessário */
  }
  ```

---

## **5. Funcionalidade do JavaScript**
O script responsável por enviar os dados ao WhatsApp está dentro da função `enviarWhatsApp()`, que:
1. **Coleta os valores dos inputs** usando `document.getElementById()` e `document.querySelector()`.
2. **Monta a mensagem formatada** com os dados inseridos.
3. **Cria um link** para o WhatsApp usando `https://api.whatsapp.com/send?phone=` e insere a mensagem.
4. **Abre o WhatsApp** no navegador ou aplicativo para envio.

---

## **6. Exemplo de Mensagem Enviada**
Se o usuário preenche os campos com os seguintes dados:

- **Nome**: João Silva
- **Telefone**: (11) 9999-9999
- **Email**: joao@email.com
- **Endereço**: Rua das Flores, 123
- **Cor**: Azul
- **Tamanho**: M
- **Opções Adicionais**: Embalagem especial

O WhatsApp abrirá com a seguinte mensagem:

```
*Novo contato via formulário*

Nome: João Silva
Telefone: (11) 9999-9999
Email: joao@email.com
Endereço: Rua das Flores, 123

*Detalhes do Pedido*
Cor: Azul
Tamanho: M
Opções: Embalagem especial
```

---

## **7. Solução de Problemas**
### **7.1. O botão não abre o WhatsApp**
- Verifique se o telefone no código JavaScript está correto e no formato internacional (`55` para Brasil).
- Certifique-se de que o navegador permite pop-ups para abrir links do WhatsApp.
- Teste em outro navegador ou dispositivo.

### **7.2. Campos não estão sendo capturados corretamente**
- Utilize o `console.log()` no JavaScript para verificar se os valores estão sendo capturados corretamente:
  ```javascript
  console.log(nome, telefone, email, endereco, corSelecionada, tamanhoSelecionado, opcoesTexto);
  ```
- Confirme se os **names** dos inputs são os mesmos usados no `querySelector()`.

---

## **8. Conclusão**
Este formulário é uma solução simples e eficiente para coletar informações e enviá-las diretamente via WhatsApp, eliminando a necessidade de envios por email ou formulários mais complexos. Com ele, a comunicação entre clientes e administradores se torna mais rápida e prática.

---

Agora você pode integrar esse formulário ao seu site e começar a receber contatos diretamente no WhatsApp! 🚀

Duvidas entre em contato: retononcode@gmail.com
