<h1>Contato</h1>
<hr class="featurette-divider">
<form style="margin: 20px 80px;">
    <div class="row featurette">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" class="input-form-padrao" required placeholder="Ex: José">

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" class="input-form-padrao" required placeholder="Ex: da Silva">

        <label for="empresa">Empresa:</label>
        <input type="text" id="empresa" class="input-form-padrao" placeholder="Ex: Nome da sua Empresa">

        <label for="email">E-mail:</label>
        <input type="email" id="email" class="input-form-padrao" required placeholder="Ex: seuemail@dominio.com">

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" class="input-form-padrao" required placeholder="Ex: (xx) xxxxx-xxxx">

        <label for="mensagem">Mensagem:</label>
        <textarea cols="70" rows="10" id="mensagem" class="input-form-padrao" required></textarea>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <legend>Como prefere o nosso contato?</legend>
        <label for="radio-email">
            <input type="radio" name="contato" value="email" id="radio-email">
            E-mail
        </label>

        <label for="radio-telefone">
            <input type="radio" name="contato" value="email" id="radio-telefone">
            Telefone
        </label>

        <label for="radio-whatsapp">
            <input type="radio" name="contato" value="email" id="radio-whatsapp" checked>
            Whatsapp
        </label>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <fieldset>
            <legend>Qual o melhor horário para o atendimento?</legend>
            <select>
                <option>Manhã</option>
                <option>Tarde</option>
                <option>Noite</option>
            </select>
        </fieldset>
    </div>

    <label class="checkbox">
        <input type="checkbox" checked style="margin-top: 15px;">
        <small>Gostaria de estar atualizado com as novos produtos e ofertas?</small>
    </label>

    <div class="row featurette" style="margin-top: 20px;">
        <input type="submit" value="&#10137; Enviar" class="enviar">
    </div>

    <!--    Adicionar confirmação de envio de menssagem-->
</form>
